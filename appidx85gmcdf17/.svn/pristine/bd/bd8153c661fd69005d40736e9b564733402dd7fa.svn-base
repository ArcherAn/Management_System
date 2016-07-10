<?php
/*----粮食入库信息  start   --------*/
class WarehouseinAction extends Action{
    public function  put(){
        $warehousein = M('warehousein');
        import('ORG.Util.Page');
        $keywords = $_GET['putid'];
        $map = "putid like '%$keywords%'";
        $count = $warehousein->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count,8);// 实例化分页类 传入总记录数
        $show  = $Page->show();// 分页显示输出
        $list = $warehousein->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }

    //修改数据
    public function updateput(){
        $warehousein=M('warehousein');  //选表
        $data['id']=$_POST['id'];
        $data['putid']=$_POST['putid'];
        $data['breed']=$_POST['breed'];
        $data['type']=$_POST['type'];
        $data['batch']=$_POST['batch'];
        $data['weight']=$_POST['weight'];
        $data['source']=$_POST['source'];
        $data['warehouseid']=$_POST['warehouseid'];
        $data['putdate']=$_POST['putdate'];
	$data['admin']=$_POST['admin'];
        $count=$warehousein->save($data);
        if($count){
            $this->success('数据修改成功','__APP__/Warehouse/Warehousein/put');
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modifyput(){
        $id=$_GET['id'];
        $warehousein=M('warehousein');  //选表
        $arr=$warehousein->find($id);
        $this->assign('data',$arr);
        $this->display();
    }
    //删除数据
    public function deleteput(){
        $warehousein=M('warehousein');  //选表
        $id=$_GET['id'];
        $count=$warehousein->delete($id);
        if($count){
            $this->success('数据删除成功');
        }else{
            $this->error('数据删除失败');
        }
    }
    //显示添加页面
    public function addput(){
        $this->display();
    }

    public function insert_database_put(){
        session_start();
        $id=$_POST['hidden'];
        if($_SESSION['id']!=$id) {return;}
        $data=array(
            'putid'=>$_POST['putid'],
            'breed'=>$_POST['breed'],
            'type'=>$_POST['type'],
            'batch'=>$_POST['batch'],
            'weight'=>$_POST['weight'],
            'source'=>$_POST['source'],
            'warehouseid'=>$_POST['warehouseid'],
            'putdate'=>$_POST['putdate'],
            'admin'=>$_POST['admin'],
         );
        $db=M('warehousein');
        $res=$db->add($data);
        if($res){
            $ajaxData['info']='数据添加成功';
            $ajaxData['url']=U('__APP__/Warehouse/Warehousein/put');
            $ajaxData['status']=1;
            $this->ajaxReturn($ajaxData,'JSON');
        }
        else{
            $ajaxData['url']=U('__APP__/Warehouse/Warehousein/addput');
            $ajaxData['info']='数据添加失败';
            $ajaxData['status']=0;
            $this->ajaxReturn($ajaxData,'JSON');
        }
    }
    /*----粮食入库信息  end   --------*/

    /*----入库粮食理化特性信息  start   --------*/
    public function property(){
        $property = M('warehousein-property');
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
        $property=M('warehousein-property');  //选表
        $data['id']=$_POST['id'];
        $data['propertyid']=$_POST['propertyid'];
        $data['index1']=$_POST['index1'];
        $data['index2']=$_POST['index2'];
        $data['index3']=$_POST['index3'];
        $data['index4']=$_POST['index4'];
        $data['date']=$_POST['date'];
        $count=$property->save($data);
        if($count){
            $this->success('数据修改成功','__APP__/Warehouse/Warehousein/property');
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modifyproperty(){
        $id=$_GET['id'];
        $property=M('warehousein-property');  //选表
        $arr=$property->find($id);
        $this->assign('data',$arr);
        $this->display();
    }
    //删除数据
    public function deleteproperty(){
        $property=M('warehousein-property');  //选表
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
        $db=M('warehousein-property');
        $res=$db->add($data);
        if($res){
            $ajaxData['info']='数据添加成功';
            $ajaxData['url']=U('__APP__/Warehouse/Warehousein/property');
            $ajaxData['status']=1;
            $this->ajaxReturn($ajaxData,'JSON');
        }
        else{
            $ajaxData['url']=U('__APP__/Warehouse/Warehousein/addproperty');
            $ajaxData['info']='数据添加失败';
            $ajaxData['status']=0;
            $this->ajaxReturn($ajaxData,'JSON');
        }
    }
    /*----入库粮食理化特性信息  end   --------*/
    /*----入库粮食营养成分信息  start   --------*/
    public function nutrition(){
        $nutrition = M('warehousein-nutrition');
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
        $nutrition = M('warehousein-nutrition');  //选表
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
            $this->success('数据修改成功','__APP__/Warehouse/Warehousein/nutrition');
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modifynutrition(){
        $id=$_GET['id'];
        $nutrition = M('warehousein-nutrition');  //选表
        $arr=$nutrition->find($id);
        $this->assign('data',$arr);
        $this->display();
    }
    //删除数据
    public function deletenutrition(){
        $nutrition = M('warehousein-nutrition');   //选表
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
        $db = M('warehousein-nutrition');
        $res = $db->add($data);
        if ($res) {
            $ajaxData['info'] = '数据添加成功';
            $ajaxData['url'] = U('__APP__/Warehouse/Warehousein/nutrition');
            $ajaxData['status'] = 1;
            $this->ajaxReturn($ajaxData, 'JSON');
        } else {
            $ajaxData['url'] = U('__APP__/Warehouse/Warehousein/addnutrition');
            $ajaxData['info'] = '数据添加失败';
            $ajaxData['status'] = 0;
            $this->ajaxReturn($ajaxData, 'JSON');
        }
    }
    /*----入库粮食营养成分信息  end   --------*/
    /*----入库粮食质量信息  start   --------*/

    public function quality(){
        $quality=M('warehousein-quality');
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
        $quality = M('warehousein-quality'); //选表
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
            $this->success('数据修改成功','__APP__/Warehouse/Warehousein/quality');
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modifyquality(){
        $id=$_GET['id'];
        $quality = M('warehousein-quality'); //选表
        $arr=$quality->find($id);
        $this->assign('data',$arr);
        $this->display();
    }
    //删除数据
    public function deletequality(){
        $quality = M('warehousein-quality');  //选表
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
        $db = M('warehousein-quality');
        $res = $db->add($data);
        if ($res) {
            $ajaxData['info'] = '数据添加成功';
            $ajaxData['url'] = U('__APP__/Warehouse/Warehousein/quality');
            $ajaxData['status'] = 1;
            $this->ajaxReturn($ajaxData, 'JSON');
        } else {
            $ajaxData['url'] = U('__APP__/Warehouse/Warehousein/addquality');
            $ajaxData['info'] = '数据添加失败';
            $ajaxData['status'] = 0;
            $this->ajaxReturn($ajaxData, 'JSON');
        }
    }

    /*----入库粮食质量信息  end   --------*/
}

?>