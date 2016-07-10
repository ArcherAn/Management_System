<?php
class WarehouseAction extends Action{
	/******* 设备信息 --start-- *********/
  	public function index(){
		// Model实例化对象 = M(表名);
	    $warehouse = M('warehouse');
    	// 分页查询
	    import('ORG.Util.Page');
	    $keywords = $_GET['warehouseid'];
        $map = "warehouseid like '%$keywords%'";
        $count = $warehouse->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count,8);// 实例化分页类 传入总记录数
        $show  = $Page->show();// 分页显示输出
        $list = $warehouse->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
	}

    //修改数据
    public function update(){
        $warehouse=M('warehouse');  //选表
	$data['id']=$_POST['id'];
        $data['warehouseid']=$_POST['warehouseid'];
        $data['site']=$_POST['site'];
        $data['capacity']=$_POST['capacity'];
        $data['storage']=$_POST['storage'];
        $data['standard']=$_POST['standard'];
        $data['date']=$_POST['date'];
        $data['admin']=$_POST['admin'];
        $count=$warehouse->save($data);
        if($count){
            $this->success("数据修改成功",'__APP__/Warehouse/Warehouse/index');
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modify(){
        $id=$_GET['id'];
        $warehouse=M('warehouse');  //选表
        $arr=$warehouse->find($id);
        $this->assign('data',$arr);
        $this->display();
    }
    //删除数据
    public function delete(){
        $warehouse=M('warehouse');  //选表
        $id=$_GET['id'];
        $count=$warehouse->delete($id);
        if($count){
            $this->success('数据删除成功');
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
            'warehouseid'=>$_POST['warehouseid'],
            'site'=>$_POST['site'],
            'capacity'=>$_POST['capacity'],
            'storage'=>$_POST['storage'],
            'standard'=>$_POST['standard'],
            'date'=>$_POST['date'],
            'admin'=>$_POST['admin'],
        );
        $db=M('warehouse');
        $res=$db->add($data);
        if($res){
            $ajaxData['info']='数据添加成功';
            $ajaxData['url']=U('__APP__/Warehouse/Warehouse/index');
            $ajaxData['status']=1;
            $this->ajaxReturn($ajaxData,'JSON');
        }
        else{
            $ajaxData['url']=U('__APP__/Warehouse/Warehouse/add');
            $ajaxData['info']='数据添加失败';
            $ajaxData['status']=0;
            $this->ajaxReturn($ajaxData,'JSON');
        }
    }
}
?>