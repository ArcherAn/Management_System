<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/4/14
 * Time: 9:51
 */
class EquipAction extends Action{


    public function index(){
        // Model实例化对象 = M(表名);
        $plantequipment = M('plantequipment');
        // 查询
        // 分页类
        import('ORG.Util.Page');
        $keywords = $_GET['type'];
        $map = "type like '%$keywords%'";
        $count = $plantequipment->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count,4);// 实例化分页类 传入总记录数
        $show  = $Page->show();// 分页显示输出
        $list = $plantequipment->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板


    }

    //修改数据
    public function update(){
        $plantequipment=M('plantequipment');  //选表
        $data['id']=$_POST['id'];
        $data['machineid']=$_POST['machineid'];
        $data['type']=$_POST['type'];
        $data['model']=$_POST['model'];
        $data['brand']=$_POST['brand'];
        $data['price']=$_POST['price'];
        $data['purchasedate']=$_POST['purchasedate'];
        $data['belongs']=$_POST['belongs'];
        $data['efficiency']=$_POST['efficiency'];
        $data['status']=$_POST['status'];
        $count=$plantequipment->save($data);
        if($count){
            $this->success('数据修改成功','__APP__/Plant/Equip/index');
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modify(){
        $id=$_GET['id'];
        $plantequipment=M('plantequipment');  //选表
        $arr=$plantequipment->find($id);
        $this->assign('data',$arr);
        $this->display();
    }
    //删除数据
    public function delete(){
        $plantequipment=M('plantequipment');  //选表
        $id=$_GET['id'];
        $count=$plantequipment->delete($id);
        if($count){
            //echo $count .":D";
            //exit;
            $this->success('数据删除成功','__APP__/Plant/Equip/index');
        }else{
            $this->error('数据删除失败');
        }
    }

    public function add(){
        $this->display();
    }

    public function insert_database(){
        session_start();
        $id=$_POST['hidden'];
        if($_SESSION['id']!=$id) {return;}
        $data=array(
            'machineid'=>$_POST['machineid'],
            'type'=>$_POST['type'],
            'model'=>$_POST['model'],
            'brand'=>$_POST['brand'],
            'price'=>$_POST['price'],
            'purchasedate'=>$_POST['purchasedate'],
            'belongs'=>$_POST['belongs'],
            'efficiency'=>$_POST['efficiency'],
            'status'=>$_POST['status'],
        );
        $db=M('plantequipment');
        $res=$db->add($data);
        if($res){
            $ajaxData['info']='数据添加成功';
            $ajaxData['url']=U('__APP__/Plant/Equip/index');
            $ajaxData['status']=1;
            $this->ajaxReturn($ajaxData,'JSON');
        }
        else{
            $ajaxData['url']=U('__APP__/Plant/Equip/add');
            $ajaxData['info']='数据添加失败';
            $ajaxData['status']=0;
            $this->ajaxReturn($ajaxData,'JSON');
        }
    }

    /**
     * 种子设备维护信息
     */
    public function maintenance(){
        // Model实例化对象 = M(表名);
        $plantmaintain = M('plantmaintain');
        // 查询
        // 分页类
        import('ORG.Util.Page');
        $keywords = $_GET['period'];
        $map = "period like '%$keywords%'";
        $count = $plantmaintain->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count,4);// 实例化分页类 传入总记录数
        $show  = $Page->show();// 分页显示输出
        $list = $plantmaintain->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板

    }
    //修改数据
    public function updatemaintain(){
        $plantmaintain=M('plantmaintain');  //选表
        $data['id']=$_POST['id'];
        $data['equipmentid']=$_POST['equipmentid'];
        $data['period']=$_POST['period'];
        $data['reason']=$_POST['reason'];
        $data['person']=$_POST['person'];
        $data['date']=$_POST['date'];
        $count=$plantmaintain->save($data);
        if($count){
            $this->success('数据修改成功','__APP__/Plant/Equip/maintenance');
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modifymaintain(){
        $id=$_GET['id'];
        $plantmaintain=M('plantmaintain');  //选表
        $arr=$plantmaintain->find($id);
        $this->assign('data',$arr);
        $this->display();
    }
    //删除数据
    public function deletemaintain(){
        $plantmaintain=M('plantmaintain');  //选表
        $id=$_GET['id'];
        $count=$plantmaintain->delete($id);
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
            'equipmentid' => $_POST['equipmentid'],
            'period' => $_POST['period'],
            'reason' => $_POST['reason'],
            'person' => $_POST['person'],
            'date' => $_POST['date']
        );
        $db = M('plantmaintain');
        $res = $db->add($data);
        if ($res) {
            $ajaxData['info'] = '数据添加成功';
            $ajaxData['url'] = U('__APP__/Plant/Equip/maintenance');
            $ajaxData['status'] = 1;
            $this->ajaxReturn($ajaxData, 'JSON');
        } else {
            $ajaxData['url'] = U('__APP__/Plant/Equip/addmaintain');
            $ajaxData['info'] = '数据添加失败';
            $ajaxData['status'] = 0;
            $this->ajaxReturn($ajaxData, 'JSON');
        }
    }

}

?>