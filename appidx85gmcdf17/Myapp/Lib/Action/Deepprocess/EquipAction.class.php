﻿<?php
class EquipAction extends Action{
	/******* 设备信息 --start-- *********/
  	public function index(){
		$right = getRight(session('user'),'deepprocess-equipment');
		if ( $right == '0000') {
			$this->error('您没有权限查看,请检查权限配置或用户角色是否正确');
		}else {
		    $equip = M('deepprocess-equipment');
	    	// 分页查询
		    import('ORG.Util.Page');
		    $keywords = $_GET['type'];
	        $map = "type like '%$keywords%'";
	        $count = $equip->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
	        $Page = new Page($count,8);// 实例化分页类 传入总记录数
	        $show  = $Page->show();// 分页显示输出
	        $list = $equip->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
	        $this->assign('data',$list);// 赋值数据集
	        $this->assign('page',$show);// 赋值分页输出
	        $this->assign('right',$right);// 赋值权限
	        $this->display(); // 输出模板
		}
	}

    //修改数据
    public function update(){
        $equip=M('deepprocess-equipment');  //选表
		$data['id']=$_POST['id'];
        $data['machineid']=$_POST['machineid'];
        $data['type']=$_POST['type'];
        $data['model']=$_POST['model'];
        $data['line']=$_POST['line'];
        $data['state']=$_POST['state'];
        $data['date']=$_POST['date'];
        $data['workshop']=$_POST['workshop'];
        $data['efficiency']=$_POST['efficiency'];
        $count=$equip->save($data);
        if($count){
            $this->success("数据修改成功","__APP__/Deepprocess/Equip/index");
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modify(){
        $id=$_GET['id'];
        $equip=M('deepprocess-equipment');  //选表
        $arr=$equip->find($id);
        $this->assign('data',$arr);
        $this->display();
    }
    //删除数据
    public function delete(){
        $equip=M('deepprocess-equipment');  //选表
        $id=$_GET['id'];
        $count=$equip->delete($id);
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
            'machineid'=>$_POST['machineid'],
            'type'=>$_POST['type'],
            'model'=>$_POST['model'],
            'line'=>$_POST['line'],
            'date'=>$_POST['date'],
            'workshop'=>$_POST['workshop'],
            'efficiency'=>$_POST['efficiency'],
            'state'=>$_POST['state']
        );
        $db=M('deepprocess-equipment');
        $res=$db->add($data);
        if($res){
            $ajaxData['info']='数据添加成功';
        	$ajaxData['url']=U('__APP__/Deepprocess/Equip/index');
        	$ajaxData['status']=1;
        	$this->ajaxReturn($ajaxData,'JSON');
        }
        else{
            $ajaxData['url']=U('__APP__/Deepprocess/Equip/add');
			$ajaxData['info']='数据添加失败';
			$ajaxData['status']=0;
            $this->ajaxReturn($ajaxData,'JSON');
        }
    }
    /******* 设备信息 --end-- *********/
    /******* 设备维护信息 --start-- *********/
    public function maintenance(){
    	$right = getRight(session('user'),'deepprocess-maintenance');
		if ( $right == '0000') {
			$this->error('您没有权限查看');
		}else {
		    $equip = M('deepprocess-maintenance');
	    	// 分页查询
		    import('ORG.Util.Page');
		    $keywords = $_GET['name'];
	        $map = "name like '%$keywords%'";
	        $count = $equip->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
	        $Page = new Page($count,8);// 实例化分页类 传入总记录数
	        $show  = $Page->show();// 分页显示输出
	        $list = $equip->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
	        $this->assign('data',$list);// 赋值数据集
	        $this->assign('page',$show);// 赋值分页输出
	        $this->assign('right',$right);// 赋值权限
	        $this->display(); // 输出模板
		}
	}

    //修改数据
    public function updateMaintenance(){
        $equip=M('deepprocess-maintenance');  //选表
		$data['id']=$_POST['id'];
        $data['machineid']=$_POST['machineid'];
        $data['name']=$_POST['name'];
        $data['cycle']=$_POST['cycle'];
        $data['reason']=$_POST['reason'];
        $data['operator']=$_POST['operator'];
        $data['date']=$_POST['date'];
        $count=$equip->save($data);
        if($count){
            $this->success("数据修改成功","__APP__/Deepprocess/Equip/maintenance");
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modifyMaintenance(){
        $id=$_GET['id'];
        $equip=M('deepprocess-maintenance');
        $arr=$equip->find($id);
        $this->assign('data',$arr);
        $this->display();
    }
    //删除数据
    public function deleteMaintenance(){
        $equip=M('deepprocess-maintenance');
        $id=$_GET['id'];
        $count=$equip->delete($id);
        if($count){
            $this->success('数据删除成功');
        }else{
            $this->error('数据删除失败');
        }
    }
    
    public function addmMaintenance(){
        $this->display();
    }

    public function insert_maintenance_db(){
        session_start();
        $id=$_POST['hidden'];
        if($_SESSION['id']!=$id) {return;}
        $data=array(
            'machineid'=>$_POST['machineid'],
            'name'=>$_POST['name'],
            'cycle'=>$_POST['cycle'],
            'reason'=>$_POST['reason'],
            'operator'=>$_POST['operator'],
            'date'=>$_POST['date']
        );
        $db=M('deepprocess-maintenance');
        $res=$db->add($data);
        if($res){
            $ajaxData['info']='数据添加成功';
        	$ajaxData['url']=U('__APP__/Deepprocess/Equip/maintenance');
        	$ajaxData['status']=1;
        	$this->ajaxReturn($ajaxData,'JSON');
        }
        else{
            $ajaxData['url']=U('__APP__/Deepprocess/Equip/addMaintenance');
			$ajaxData['info']='数据添加失败';
			$ajaxData['status']=0;
            $this->ajaxReturn($ajaxData,'JSON');
        }
    }
    /******* 设备维护信息 --end-- *********/
  }

?>