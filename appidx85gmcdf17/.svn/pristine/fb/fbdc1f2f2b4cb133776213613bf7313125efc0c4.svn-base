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
        $warehouseequip = M('warehouseequip');
        // 查询
        // 分页类
        import('ORG.Util.Page');
        $keywords = $_GET['type'];
        $map = "type like '%$keywords%'";
        $count = $warehouseequip->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count,4);// 实例化分页类 传入总记录数
        $show  = $Page->show();// 分页显示输出
        $list = $warehouseequip->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板


    }

    //修改数据
    public function update(){
        $warehouseequip=M('warehouseequip');  //选表
        $data['id']=$_POST['id'];
        $data['machineid']=$_POST['machineid'];
        $data['type']=$_POST['type'];
        $data['model']=$_POST['model'];
        $data['brand']=$_POST['brand'];
        $data['price']=$_POST['price'];
		$data['status']=$_POST['status'];
        $data['purchasedate']=$_POST['purchasedate'];
        $data['useyear']=$_POST['useyear'];
        $count=$warehouseequip->save($data);
        if($count){
            $this->success('数据修改成功','__APP__/Warehouse/Equip/index');
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modify(){
        $id=$_GET['id'];
        $warehouseequip=M('warehouseequip');  //选表
        $arr=$warehouseequip->find($id);
        $this->assign('data',$arr);
        $this->display();
    }
    //删除数据
    public function delete(){
        $warehouseequip=M('warehouseequip');  //选表
        $id=$_GET['id'];
        $count=$warehouseequip->delete($id);
        if($count){
            //echo $count .":D";
            //exit;
            $this->success('数据删除成功','__APP__/Warehouse/Equip/index');
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
			'status'=>$_POST['status'],
            'purchasedate'=>$_POST['purchasedate'],
            'useyear'=>$_POST['useyear'],
        );
        $db=M('warehouseequip');
        $res=$db->add($data);
        if($res){
            $ajaxData['info']='数据添加成功';
            $ajaxData['url']=U('__APP__/Warehouse/Equip/index');
            $ajaxData['status']=1;
            $this->ajaxReturn($ajaxData,'JSON');
        }
        else{
            $ajaxData['url']=U('__APP__/Warehouse/Equip/add');
            $ajaxData['info']='数据添加失败';
            $ajaxData['status']=0;
            $this->ajaxReturn($ajaxData,'JSON');
        }
    }

}

?>