<?php
/*----仓库环境监控信息  start   --------*/
class WarehousemonitorAction extends Action{
    public function  manage(){
        $manage = M('warehousemonitor-manage');
        import('ORG.Util.Page');
        $keywords = $_GET['warehouseid'];
        $map = "warehouseid like '%$keywords%'";
        $count = $manage->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count,8);// 实例化分页类 传入总记录数
        $show  = $Page->show();// 分页显示输出
        $list = $manage->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }

    //修改数据
    public function updatemanage(){
        $manage=M('warehousemonitor-manage');  //选表
        $data['id']=$_POST['id'];
        $data['warehouseid']=$_POST['warehouseid'];
        $data['foodtemp']=$_POST['foodtemp'];
        $data['foodhumidity']=$_POST['foodhumidity'];
        $data['warehousetemp']=$_POST['warehousetemp'];
        $data['index1']=$_POST['index1'];
        $data['index2']=$_POST['index2'];
        $data['date']=$_POST['date'];
        $count=$manage->save($data);
        if($count){
            $this->success('数据修改成功','__APP__/Warehouse/Warehousemonitor/manage');
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modifymanage(){
        $id=$_GET['id'];
        $manage=M('warehousemonitor-manage');  //选表
        $arr=$manage->find($id);
        $this->assign('data',$arr);
        $this->display();
    }
    //删除数据
    public function deletemanage(){
        $manage=M('warehousemonitor-manage');  //选表
        $id=$_GET['id'];
        $count=$manage->delete($id);
        if($count){
            $this->success('数据删除成功');
        }else{
            $this->error('数据删除失败');
        }
    }
    //显示添加页面
    public function addmanage(){
        $this->display();
    }

    public function insert_database_manage(){
        session_start();
        $id=$_POST['hidden'];
        if($_SESSION['id']!=$id) {return;}
        $data=array(
            'warehouseid'=>$_POST['warehouseid'],
            'foodtemp'=>$_POST['foodtemp'],
            'foodhumidity'=>$_POST['foodhumidity'],
            'warehousetemp'=>$_POST['warehousetemp'],
            'index1'=>$_POST['index1'],
            'index2'=>$_POST['index2'],
            'date'=>$_POST['date'],
         );
        $db=M('warehousemonitor-manage');
        $res=$db->add($data);
        if($res){
            $ajaxData['info']='数据添加成功';
            $ajaxData['url']=U('__APP__/Warehouse/Warehousemonitor/manage');
            $ajaxData['status']=1;
            $this->ajaxReturn($ajaxData,'JSON');
        }
        else{
            $ajaxData['url']=U('__APP__/Warehouse/Warehousemonitor/addmanage');
            $ajaxData['info']='数据添加失败';
            $ajaxData['status']=0;
            $this->ajaxReturn($ajaxData,'JSON');
        }
    }
    /*----仓库环境监控信息  end   --------*/

    /*----仓库粮食质量监控理化特性信息  start   --------*/
    public function property(){
        $property = M('warehousemonitor-property');
        import('ORG.Util.Page');
        $keywords = $_GET['propertyid'];
        $map = "propertyid like '%$keywords%'";
        $count = $property->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count,4);// 实例化分页类 传入总记录数
        $show  = $Page->show();// 分页显示输出
        $list = $property->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }

    //修改数据
    public function updateproperty(){
        $property=M('warehousemonitor-property');  //选表
        $data['id']=$_POST['id'];
        $data['propertyid']=$_POST['propertyid'];
        $data['index1']=$_POST['index1'];
        $data['index2']=$_POST['index2'];
        $data['index3']=$_POST['index3'];
        $data['index4']=$_POST['index4'];
        $data['date']=$_POST['date'];
        $count=$property->save($data);
        if($count){
            $this->success('数据修改成功','__APP__/Warehouse/Warehousemonitor/property');
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modifyproperty(){
        $id=$_GET['id'];
        $property=M('warehousemonitor-property');  //选表
        $arr=$property->find($id);
        $this->assign('data',$arr);
        $this->display();
    }
    //删除数据
    public function deleteproperty(){
        $property=M('warehousemonitor-property');  //选表
        $id=$_GET['id'];
        $count=$property->delete($id);
        if($count){
            $this->success('数据删除成功');
        }else{
            $this->error('数据删除失败');
        }
    }
    //显示添加页面
    public function addproperty(){
        $this->display();
    }

    public function insert_database_property(){
        session_start();
        $id=$_POST['hidden'];
        if($_SESSION['id']!=$id) {return;}
        $data=array(
            'propertyid'=>$_POST['propertyid'],
            'index1'=>$_POST['index1'],
            'index2'=>$_POST['index2'],
            'index3'=>$_POST['index3'],
            'index4'=>$_POST['index4'],
            'date'=>$_POST['date'],
         );
        $db=M('warehousemonitor-property');
        $res=$db->add($data);
        if($res){
            $ajaxData['info']='数据添加成功';
            $ajaxData['url']=U('__APP__/Warehouse/Warehousemonitor/property');
            $ajaxData['status']=1;
            $this->ajaxReturn($ajaxData,'JSON');
        }
        else{
            $ajaxData['url']=U('__APP__/Warehouse/Warehousemonitor/addproperty');
            $ajaxData['info']='数据添加失败';
            $ajaxData['status']=0;
            $this->ajaxReturn($ajaxData,'JSON');
        }
    }
    /*----仓库粮食质量监控理化特性信息  end   --------*/
    /*----仓库粮食质量监控营养成分信息  start   --------*/
    public function nutrition(){
        $nutrition = M('warehousemonitor-nutrition');
        import('ORG.Util.Page');
        $keywords = $_GET['nutritionid'];
        $map = "nutritionid like '%$keywords%'";
        $count = $nutrition->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count,4);// 实例化分页类 传入总记录数
        $show  = $Page->show();// 分页显示输出
        $list = $nutrition->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }

    //修改数据
    public function updatenutrition(){
        $nutrition = M('warehousemonitor-nutrition');  //选表
        $data['id']=$_POST['id'];
        $data['nutritionid']=$_POST['nutritionid'];
        $data['index1']=$_POST['index1'];
        $data['index2']=$_POST['index2'];
        $data['index3']=$_POST['index3'];
        $data['index4']=$_POST['index4'];
        $data['index5']=$_POST['index5'];
        $data['date']=$_POST['date'];
        $count=$nutrition->save($data);
        if($count){
            $this->success('数据修改成功','__APP__/Warehouse/Warehousemonitor/nutrition');
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modifynutrition(){
        $id=$_GET['id'];
        $nutrition = M('warehousemonitor-nutrition');  //选表
        $arr=$nutrition->find($id);
        $this->assign('data',$arr);
        $this->display();
    }
    //删除数据
    public function deletenutrition(){
        $nutrition = M('warehousemonitor-nutrition');   //选表
        $id=$_GET['id'];
        $count=$nutrition->delete($id);
        if($count){
            $this->success('数据删除成功');
        }else{
            $this->error('数据删除失败');
        }
    }
    //显示添加页面
    public function addnutrition(){
        $this->display();
    }
    public function insert_database_nutrition()
    {
        session_start();
        $id = $_POST['hidden'];
        if ($_SESSION['id'] != $id) {
            return;
        }
        $data = array(
            'nutritionid' => $_POST['nutritionid'],
            'index1' => $_POST['index1'],
            'index2' => $_POST['index2'],
            'index3' => $_POST['index3'],
            'index4' => $_POST['index4'],
            'index5' => $_POST['index5'],
            'date' => $_POST['date'],
        );
        $db = M('warehousemonitor-nutrition');
        $res = $db->add($data);
        if ($res) {
            $ajaxData['info'] = '数据添加成功';
            $ajaxData['url'] = U('__APP__/Warehouse/Warehousemonitor/nutrition');
            $ajaxData['status'] = 1;
            $this->ajaxReturn($ajaxData, 'JSON');
        } else {
            $ajaxData['url'] = U('__APP__/Warehouse/Warehousemonitor/addnutrition');
            $ajaxData['info'] = '数据添加失败';
            $ajaxData['status'] = 0;
            $this->ajaxReturn($ajaxData, 'JSON');
        }
    }
    /*----仓库粮食质量监控营养成分信息  end   --------*/
    /*----仓库粮食质量监控信息  start   --------*/

    public function quality(){
        $quality=M('warehousemonitor-quality');
        import('ORG.Util.Page');
        $keywords = $_GET['warehouseinid'];
        $map = "warehouseinid like '%$keywords%'";
        $count = $quality->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count,4);// 实例化分页类 传入总记录数
        $show  = $Page->show();// 分页显示输出
        $list = $quality->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }

    //修改数据
    public function updatequality(){
        $quality = M('warehousemonitor-quality'); //选表
        $data['id']=$_POST['id'];
        $data['warehouseinid']=$_POST['warehouseinid'];
        $data['propertyid']=$_POST['propertyid'];
        $data['nutritionid']=$_POST['nutritionid'];
        $data['mildew']=$_POST['mildew'];
        $data['insectpest']=$_POST['insectpest'];
        $data['level']=$_POST['level'];
        $data['date']=$_POST['date'];
        $count=$quality->save($data);
        if($count){
            $this->success('数据修改成功','__APP__/Warehouse/Warehousemonitor/quality');
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modifyquality(){
        $id=$_GET['id'];
        $quality = M('warehousemonitor-quality'); //选表
        $arr=$quality->find($id);
        $this->assign('data',$arr);
        $this->display();
    }
    //删除数据
    public function deletequality(){
        $quality = M('warehousemonitor-quality');  //选表
        $id=$_GET['id'];
        $count=$quality->delete($id);
        if($count){
            $this->success('数据删除成功');
        }else{
            $this->error('数据删除失败');
        }
    }
    //显示添加页面
    public function addquality(){
        $this->display();
    }
    public function insert_database_quality()
    {
        session_start();
        $id = $_POST['hidden'];
        if ($_SESSION['id'] != $id) {
            return;
        }
        $data = array(
            'warehouseinid' => $_POST['warehouseinid'],
            'propertyid' => $_POST['propertyid'],
            'nutritionid' => $_POST['nutritionid'],
            'mildew' => $_POST['mildew'],
            'insectpest' => $_POST['insectpest'],
            'level' => $_POST['level'],
            'date' => $_POST['date'],
        );
        $db = M('warehousemonitor-quality');
        $res = $db->add($data);
        if ($res) {
            $ajaxData['info'] = '数据添加成功';
            $ajaxData['url'] = U('__APP__/Warehouse/Warehousemonitor/quality');
            $ajaxData['status'] = 1;
            $this->ajaxReturn($ajaxData, 'JSON');
        } else {
            $ajaxData['url'] = U('__APP__/Warehouse/Warehousemonitor/addquality');
            $ajaxData['info'] = '数据添加失败';
            $ajaxData['status'] = 0;
            $this->ajaxReturn($ajaxData, 'JSON');
        }
    }

    /*----仓库粮食质量监控信息  end   --------*/
}

?>