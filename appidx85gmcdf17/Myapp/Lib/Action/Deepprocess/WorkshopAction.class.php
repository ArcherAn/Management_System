<?php
class WorkshopAction extends Action{
	/************** 车间环境 start ******************/
	public function environment(){
		$right = getRight(session('user'),'deepprocess-environment');
		if ( $right == '0000') {
			$this->error('您没有权限查看,请检查权限配置或用户角色是否正确');
		}else {
	    	$m = M('deepprocess-environment');
	    	// 分页查询
		    import('ORG.Util.Page');
		    $keywords = $_GET['name'];
	        $map = "name like '%$keywords%'";
	        $count = $m->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
	        $Page = new Page($count,8);// 实例化分页类 传入总记录数
	        $show  = $Page->show();// 分页显示输出
	        $list = $m->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
	        $this->assign('data',$list);// 赋值数据集
	        $this->assign('page',$show);// 赋值分页输出
	        $this->assign('right',$right);// 赋值权限
	        $this->display();
		}
	}
    //修改数据
    public function updateEnv(){
        $m=M('deepprocess-environment');  //选表
		$data['id']=$_POST['id'];
        $data['workshopid']=$_POST['workshopid'];
        $data['name']=$_POST['name'];
        $data['temp']=$_POST['temp'];
        $data['humidity']=$_POST['humidity'];
        $data['level']=$_POST['level'];
        $data['index1']=$_POST['index1'];
        $data['date']=$_POST['date'];
        $count=$m->save($data);
        if($count){
            $this->success("数据修改成功","__APP__/Deepprocess/Workshop/environment");
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modifyEnv(){
        $id=$_GET['id'];
        $m=M('deepprocess-environment');
        $arr=$m->find($id);
        $this->assign('data',$arr);
        $this->display();
    }
    //删除数据
    public function deleteEnv(){
        $m=M('deepprocess-environment');
        $id=$_GET['id'];
        $count=$m->delete($id);
        if($count){
            $this->success('数据删除成功','__APP__/Deepprocess/Workshop/environment');
        }else{
            $this->error('数据删除失败');
        }
    }
    //显示添加页面
    public function addEnv(){
        $this->display();
    }
    public function insert_database_env(){
        session_start();
        $id=$_POST['hidden'];
        if($_SESSION['id']!=$id) {return;}
        $data=array(
            'workshopid'=>$_POST['workshopid'],
            'name'=>$_POST['name'],
            'temp'=>$_POST['temp'],
            'humidity'=>$_POST['humidity'],
            'level'=>$_POST['level'],
            'index1'=>$_POST['index1'],
            'date'=>$_POST['date']
        );
        $db=M('deepprocess-environment');
        $res=$db->add($data);
        if($res){
        	$ajaxData['info']='数据添加成功';
        	$ajaxData['url']=U('__APP__/Deepprocess/Workshop/environment');
        	$ajaxData['status']=1;
        	$this->ajaxReturn($ajaxData,'JSON');
        }else{
        	$ajaxData['url']=U('__APP__/Deepprocess/Workshop/addEnv');
			$ajaxData['info']='数据添加失败';
			$ajaxData['status']=0;
            $this->ajaxReturn($ajaxData,'JSON');
        }
    }
    /************** 车间环境 end ******************/
    /************** 设备工艺参数 start ******************/
	public function parameters(){
		$right = getRight(session('user'),'deepprocess-equipmentparameter');
		if ( $right == '0000') {
			$this->error('您没有权限查看');
		}else {
	    	$m = M('deepprocess-equipmentparameter');
	    	// 分页查询
		    import('ORG.Util.Page');
		    $keywords = $_GET['workshopid'];
	        $map = "workshopid like '%$keywords%'";
	        $count = $m->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
	        $Page = new Page($count,8);// 实例化分页类 传入总记录数
	        $show  = $Page->show();// 分页显示输出
	        $list = $m->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
	        $this->assign('data',$list);// 赋值数据集
	        $this->assign('page',$show);// 赋值分页输出
	        $this->assign('right',$right);// 赋值权限
	        $this->display();
		}
	}
    //修改数据
    public function updateParam(){
        $m=M('deepprocess-equipmentparameter');  //选表
		$data['id']=$_POST['id'];
        $data['workshopid']=$_POST['workshopid'];
        $data['machineid']=$_POST['machineid'];
        $data['parameter1']=$_POST['parameter1'];
        $data['parameter2']=$_POST['parameter2'];
        $data['parameter3']=$_POST['parameter3'];
        $data['parameter4']=$_POST['parameter4'];
        $data['date']=$_POST['date'];
        $count=$m->save($data);
        if($count){
            $this->success("数据修改成功","__APP__/Deepprocess/Workshop/parameters");
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modifyParam(){
        $id=$_GET['id'];
        $m=M('deepprocess-equipmentparameter');
        $arr=$m->find($id);
        $this->assign('data',$arr);
        $this->display();
    }
    //删除数据
    public function deleteParam(){
        $m=M('deepprocess-equipmentparameter');
        $id=$_GET['id'];
        $count=$m->delete($id);
        if($count){
            $this->success('数据删除成功','__APP__/Deepprocess/Workshop/parameters');
        }else{
            $this->error('数据删除失败');
        }
    }
    //显示添加页面
    public function addParam(){
        $this->display();
    }
    public function insert_database_param(){
        session_start();
        $id=$_POST['hidden'];
        if($_SESSION['id']!=$id) {return;}
        $data=array(
            'workshopid'=>$_POST['workshopid'],
            'machineid'=>$_POST['machineid'],
            'parameter1'=>$_POST['parameter1'],
            'parameter2'=>$_POST['parameter2'],
            'parameter3'=>$_POST['parameter3'],
            'parameter4'=>$_POST['parameter4'],
            'date'=>$_POST['date']
        );
        $db=M('deepprocess-equipmentparameter');
        $res=$db->add($data);
        if($res){
        	$ajaxData['info']='数据添加成功';
        	$ajaxData['url']=U('__APP__/Deepprocess/Workshop/parameters');
        	$ajaxData['status']=1;
        	$this->ajaxReturn($ajaxData,'JSON');
        }else{
        	$ajaxData['url']=U('__APP__/Deepprocess/Workshop/addParam');
			$ajaxData['info']='数据添加失败';
			$ajaxData['status']=0;
            $this->ajaxReturn($ajaxData,'JSON');
        }
    }
    /************** 设备工艺参数 end ******************/
    /************** 设备设备工作条件 start ******************/
	public function condition(){
		$right = getRight(session('user'),'deepprocess-equipmentconditions');
		if ( $right == '0000') {
			$this->error('您没有权限查看');
		}else {
	    	$m = M('deepprocess-equipmentconditions');
	    	// 分页查询
		    import('ORG.Util.Page');
		    $keywords = $_GET['workshopid'];
	        $map = "workshopid like '%$keywords%'";
	        $count = $m->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
	        $Page = new Page($count,8);// 实例化分页类 传入总记录数
	        $show  = $Page->show();// 分页显示输出
	        $list = $m->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
	        $this->assign('data',$list);// 赋值数据集
	        $this->assign('page',$show);// 赋值分页输出
	        $this->assign('right',$right);// 赋值权限
	        $this->display();
		}
	}
    //修改数据
    public function updateCon(){
        $m=M('deepprocess-equipmentconditions');  //选表
		$data['id']=$_POST['id'];
        $data['workshopid']=$_POST['workshopid'];
        $data['machineid']=$_POST['machineid'];
        $data['condition1']=$_POST['condition1'];
        $data['condition2']=$_POST['condition2'];
        $data['condition3']=$_POST['condition3'];
        $data['state']=$_POST['state'];
        $data['date']=$_POST['date'];
        $count=$m->save($data);
        if($count){
            $this->success("数据修改成功","__APP__/Deepprocess/Workshop/condition");
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modifyCon(){
        $id=$_GET['id'];
        $m=M('deepprocess-equipmentconditions');
        $arr=$m->find($id);
        $this->assign('data',$arr);
        $this->display();
    }
    //删除数据
    public function deleteCon(){
        $m=M('deepprocess-equipmentconditions');
        $id=$_GET['id'];
        $count=$m->delete($id);
        if($count){
            $this->success('数据删除成功','__APP__/Deepprocess/Workshop/condition');
        }else{
            $this->error('数据删除失败');
        }
    }
    //显示添加页面
    public function addCon(){
        $this->display();
    }
    public function insert_database_con(){
        session_start();
        $id=$_POST['hidden'];
        if($_SESSION['id']!=$id) {return;}
        $data=array(
            'workshopid'=>$_POST['workshopid'],
            'machineid'=>$_POST['machineid'],
            'condition1'=>$_POST['condition1'],
            'condition2'=>$_POST['condition2'],
            'condition3'=>$_POST['condition3'],
            'state'=>$_POST['state'],
            'date'=>$_POST['date']
        );
        $db=M('deepprocess-equipmentconditions');
        $res=$db->add($data);
        if($res){
        	$ajaxData['info']='数据添加成功';
        	$ajaxData['url']=U('__APP__/Deepprocess/Workshop/condition');
        	$ajaxData['status']=1;
        	$this->ajaxReturn($ajaxData,'JSON');
        }else{
        	$ajaxData['url']=U('__APP__/Deepprocess/Workshop/addCon');
			$ajaxData['info']='数据添加失败';
			$ajaxData['status']=0;
            $this->ajaxReturn($ajaxData,'JSON');
        }
    }
    /************** 设备工作条件 end ******************/
}
?>