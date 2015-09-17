<?php

/**
 * Created by PhpStorm.
 * User: Nikolas
 * Date: 2015/8/28
 * Time: 21:16
 */
class AppOpeModel extends CI_Model
{

    public function getAllTest($stu_id)
    {
        $sql = 'SELECT q.test_topic, q.test_id, s.is_complete FROM test q JOIN stu_test s ON s.test_id = q.test_id WHERE s.stu_id = ?';
        $query = $this->db->query($sql, [$stu_id]);

        $queryAll = $this->db->query("SELECT q.test_topic, q.test_id FROM test q");

        $result = $query->result();
        $resultAll = $queryAll->result();
        for ($i = 0; $i < count($result); ++$i) {
            for ($j = 0; $j < count($resultAll); ++$j) {
                if ($result[$i]->test_id == $resultAll[$j]->test_id) {
                    $resultAll[$j] = $result[$i];
                    break;
                }
            }
        }
        return $resultAll;
    }

    public
    function getQueByTestId($testId)
    {
        $where = ['test_id' => $testId];
        $query = $this->db->get_where('question', $where);
        return $query->result();
    }

    public
    function checkQueAns($stuId, $queId, $ans)
    {

        //检查用户是否已经做过该题目
        $query = $this->db->get_where("stu_que", ["stu_id" => $stuId, "que_id" => $queId]);
        echo $query->num_rows();
        if ($query->num_rows() != 0) {
            return false;
        }

        $this->db->select('ans_right,right_count,wrong_count,stu_a,stu_b,stu_c,stu_d')->from("question")->where('que_id', $queId);
        $res = $this->db->get()->row();
        $info = ['stu_id' => $stuId, 'que_id' => $queId, 'right' => $res->ans_right, 'answer' => $ans];
        if ($res->ans_right == $ans) {
            $info['is_right'] = 1;
            $this->db->insert("stu_que", $info);
            $value = array('right_count' => $res->right_count + 1);
            $this->updateStuAns($ans, $value, $res);
            $this->db->update('question', $value, ['que_id' => $queId]);
            return true;
        }
        $info['is_right'] = 0;
        $this->db->insert("stu_que", $info);
        $value = array('wrong_count' => $res->wrong_count + 1);
        $this->updateStuAns($ans, $value, $res);
        $this->db->update('question', $value, ['que_id' => $queId]);
        return $res->ans_right;
    }

    public
    function updateStuAns($ans, &$values, $res)
    {
        switch ($ans) {
            case 'A':
                $values['stu_a'] = $res->stu_a + 1;
                break;
            case 'B':
                $values['stu_b'] = $res->stu_b + 1;
                break;
            case 'C':
                $values['stu_c'] = $res->stu_c + 1;
                break;
            default:
                $values['stu_d'] = $res->stu_d + 1;
                break;
        }
    }

    public function completeTest($stuId, $testId)
    {
        $query = $this->db->get_where("stu_test", ['stu_id' => $stuId, 'test_id' => $testId]);
        if ($query->num_rows() == 0) {
            $this->db->insert("stu_test", ['stu_id' => $stuId, 'test_id' => $testId, 'is_complete' => 1]);
        }
        return true;
    }

} 