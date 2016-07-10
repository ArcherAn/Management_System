<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/4/14
 * Time: 9:51
 */
class EquipAction extends Action{

    /**
     * 种子设备信息
     */
    public function index(){
        // Model实例化对象 = M(表名);
        $seedequipment = M('seedequipment');
        // 查询
        // 分页类
        import('ORG.Util.Page');
        $keywords = $_GET['type'];
        $map = "type like '%$keywords%'";
        $count = $seedequipment->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count,4);// 实例化分页类 传入总记录数
        $show  = $Page->show();// 分页显示输出
        $list = $seedequipment->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板

    }

    //修改数据
    public function update(){
        $seedequipment=M('seedequipment');  //选表
        $data['id']=$_POST['id'];
        $data['machineid']=$_POST['machineid'];
        $data['type']=$_POST['type'];
        $data['model']=$_POST['model'];
        $data['brand']=$_POST['brand'];
        $data['price']=$_POST['price'];
        $data['status']=$_POST['status'];
        $data['purchasedate']=$_POST['purchasedate'];
        $data['useyear']=$_POST['useyear'];
        $count=$seedequipment->save($data);
        if($count){
            $this->success('数据修改成功','__APP__/Seedlings/Equip/index');
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modify(){
        $id=$_GET['id'];
        $seedequipment=M('seedequipment');  //选表
        $arr=$seedequipment->find($id);
        $this->assign('data',$arr);
        $this->display();
    }
    //删除数据
    public function delete(){
        $seedequipment=M('seedequipment');  //选表
        $id=$_GET['id'];
        $count=$seedequipment->delete($id);
        if($count){
            //echo $count .":D";
            //exit;
            $this->success('数据删除成功');
        }else{
            $this->error('数据删除失败');
        }
    }

    public function add(){
        $this->display();
    }
    public function insert_database()
    {
        session_start();
        $id = $_POST['hidden'];
        if ($_SESSION['id'] != $id) {
            return;
        }
        $data = array(
            'machineid' => $_POST['machineid'],
            'type' => $_POST['type'],
            'model' => $_POST['model'],
            'brand' => $_POST['brand'],
            'price' => $_POST['price'],
            'status' => $_POST['status'],
            'purchasedate' => $_POST['purchasedate'],
            'useyear' => $_POST['useyear']
        );
        $db = M('seedequipment');
        $res = $db->add($data);
        if ($res) {
            $ajaxData['info'] = '数据添加成功';
            $ajaxData['url'] = U('__APP__/Seedlings/Equip/index');
            $ajaxData['status'] = 1;
            $this->ajaxReturn($ajaxData, 'JSON');
        } else {
            $ajaxData['url'] = U('__APP__/Seedlings/Equip/add');
            $ajaxData['info'] = '数据添加失败';
            $ajaxData['status'] = 0;
            $this->ajaxReturn($ajaxData, 'JSON');
        }
    }

    /**
     * 种子设备维护信息
     */
    public function maintenance(){
        // Model实例化对象 = M(表名);
        $seedmaintain = M('seedmaintain');
        // 查询
        // 分页类
        import('ORG.Util.Page');
        $keywords = $_GET['period'];
        $map = "period like '%$keywords%'";
        $count = $seedmaintain->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count,4);// 实例化分页类 传入总记录数
        $show  = $Page->show();// 分页显示输出
        $list = $seedmaintain->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板

    }
    //修改数据
    public function updatemaintain(){
        $seedmaintain=M('seedmaintain');  //选表
        $data['id']=$_POST['id'];
        $data['equipmentid']=$_POST['equipmentid'];
        $data['period']=$_POST['period'];
        $data['reason']=$_POST['reason'];
        $data['person']=$_POST['person'];
        $data['date']=$_POST['date'];
        $count=$seedmaintain->save($data);
        if($count){
            $this->success('数据修改成功','__APP__/Seedlings/Equip/maintenance');
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modifymaintain(){
        $id=$_GET['id'];
        $seedmaintain=M('seedmaintain');  //选表
        $arr=$seedmaintain->find($id);
        $this->assign('data',$arr);
        $this->display();
    }
    //删除数据
    public function deletemaintain(){
        $seedmaintain=M('seedmaintain');  //选表
        $id=$_GET['id'];
        $count=$seedmaintain->delete($id);
        if($count){
            $this->success('数据删除成功');
        }else{
            $this->error('数据删除失败');
        }
    }

    public function addmaintain(){
        $this->display();
    }
    public function insert_database_maintain()
    {
        session_start();
        $id = $_POST['hidden'];
        if ($_SESSION['id'] != $id) {
            return;
        }
        $data = array(
            'equipmentid' => $_POST['machineid'],
            'period' => $_POST['type'],
            'reason' => $_POST['model'],
            'person' => $_POST['brand'],
            'date' => $_POST['price']
        );
        $db = M('seedmaintain');
        $res = $db->add($data);
        if ($res) {
            $ajaxData['info'] = '数据添加成功';
            $ajaxData['url'] = U('__APP__/Seedlings/Equip/maintenance');
            $ajaxData['status'] = 1;
            $this->ajaxReturn($ajaxData, 'JSON');
        } else {
            $ajaxData['url'] = U('__APP__/Seedlings/Equip/addmaintain');
            $ajaxData['info'] = '数据添加失败';
            $ajaxData['status'] = 0;
            $this->ajaxReturn($ajaxData, 'JSON');
        }
    }

}

?>