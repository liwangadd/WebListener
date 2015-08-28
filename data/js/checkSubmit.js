/**
 * Created by Nikolas on 2015/8/27.
 */
function checkSubmit()
{

    if(document.addcontent.title.value==""){
        alert("名称不能为空！");
        document.addcontent.title.focus();
        return false;
    }

}
