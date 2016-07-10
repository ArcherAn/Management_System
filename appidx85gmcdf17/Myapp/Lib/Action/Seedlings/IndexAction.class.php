<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    function index(){
        $wel="Welcome to system!";
        $this->redirect("/Load/verify_load","",0,$wel);
    }

     function verify(){
        import("ORG.Util.Image");
        Image::buildImageVerify(4,1,png,50,32,'verify');
    }
}
?>