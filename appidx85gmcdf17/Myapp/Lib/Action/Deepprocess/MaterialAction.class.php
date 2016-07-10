<?php

class MaterialAction extends Action{
	/************** 糕点原料信息 start ******************/
	public function material(){
		$right = getRight(session('user'),'deepprocess-pastrymaterials');
		if ( $right == '0000') {
			$this->error('您没有权限查看,请检查权限配置或用户角色是否正确');
		}else {
	    	$m = M('deepprocess-pastrymaterials');
	    	// 分页查询
		    import('ORG.Util.Page');
		    $keywords = $_GET['materialtype'];
	        $map = "materialtype like '%$keywords%'";
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
    public function updateMat(){
        $m=M('deepprocess-pastrymaterials');  //选表
		$data['id']=$_POST['id'];
		$data['batchid']=$_POST['batchid'];
        $data['materialtype']=$_POST['materialtype'];
        $data['source']=$_POST['source'];
        $data['weigh']=$_POST['weigh'];
        $data['batch']=$_POST['batch'];
        $data['operator']=$_POST['operator'];
        $data['date']=$_POST['date'];
        $count=$m->save($data);
        if($count){
            $this->success("数据修改成功","__APP__/Deepprocess/Material/material");
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modifyMat(){
        $id=$_GET['id'];
        $m=M('deepprocess-pastrymaterials');
        $arr=$m->find($id);
        $this->assign('data',$arr);
        $this->display();
    }
    //删除数据
    public function deleteMat(){
        $m=M('deepprocess-pastrymaterials');
        $id=$_GET['id'];
        $count=$m->delete($id);
        if($count){
            $this->success('数据删除成功','__APP__/Deepprocess/Material/material');
        }else{
            $this->error('数据删除失败');
        }
    }
    //显示添加页面
    public function addMat(){
        $this->display();
    }
    public function insert_database_mat(){
        session_start();
        $id=$_POST['hidden'];
        if($_SESSION['id']!=$id) {return;}
        $data=array(
            'materialtype'=>$_POST['materialtype'],
            'batchid'=>$_POST['batchid'],
            'source'=>$_POST['source'],
            'weigh'=>$_POST['weigh'],
            'batch'=>$_POST['batch'],
            'operator'=>$_POST['operator'],
            'date'=>$_POST['date']
        );
        $db=M('deepprocess-pastrymaterials');
        $res=$db->add($data);
        if($res){
        	$ajaxData['info']='数据添加成功';
        	$ajaxData['url']=U('__APP__/Deepprocess/Material/material');
        	$ajaxData['status']=1;
        	$this->ajaxReturn($ajaxData,'JSON');
        }else{
        	$ajaxData['url']=U('__APP__/Deepprocess/Material/addMat');
			$ajaxData['info']='数据添加失败';
			$ajaxData['status']=0;
            $this->ajaxReturn($ajaxData,'JSON');
        }
    }
    /************** 糕点原料信息 end ******************/
    /************** 糕点配方信息 start ******************/
	public function recipe(){
		$right = getRight(session('user'),'deepprocess-cakerecipe');
		if ( $right == '0000') {
			$this->error('您没有权限查看');
		}else {
	    	$m = M('deepprocess-cakerecipe');
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
    public function updateRec(){
        $m=M('deepprocess-cakerecipe');  //选表
		$data['id']=$_POST['id'];
        $data['recipeid']=$_POST['recipeid'];
        $data['name']=$_POST['name'];
        $data['ingredients1']=$_POST['ingredients1'];
        $data['ingredients2']=$_POST['ingredients2'];
        $data['ingredients3']=$_POST['ingredients3'];
        $data['ingredients4']=$_POST['ingredients4'];
        $count=$m->save($data);
        if($count){
            $this->success("数据修改成功","__APP__/Deepprocess/Material/recipe");
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modifyRec(){
        $id=$_GET['id'];
        $m=M('deepprocess-cakerecipe');
        $arr=$m->find($id);
        $this->assign('data',$arr);
        $this->display();
    }
    //删除数据
    public function deleteRec(){
        $m=M('deepprocess-cakerecipe');
        $id=$_GET['id'];
        $count=$m->delete($id);
        if($count){
            $this->success('数据删除成功','__APP__/Deepprocess/Material/recipe');
        }else{
            $this->error('数据删除失败');
        }
    }
    //显示添加页面
    public function addRec(){
        $this->display();
    }
    public function insert_database_rec(){
        session_start();
        $id=$_POST['hidden'];
        if($_SESSION['id']!=$id) {return;}
        $data=array(
            'recipeid'=>$_POST['recipeid'],
            'name'=>$_POST['name'],
            'ingredients1'=>$_POST['ingredients1'],
            'ingredients2'=>$_POST['ingredients2'],
            'ingredients3'=>$_POST['ingredients3'],
            'ingredients4'=>$_POST['ingredients4']
        );
        $db=M('deepprocess-cakerecipe');
        $res=$db->add($data);
        if($res){
        	$ajaxData['info']='数据添加成功';
        	$ajaxData['url']=U('__APP__/Deepprocess/Material/recipe');
        	$ajaxData['status']=1;
        	$this->ajaxReturn($ajaxData,'JSON');
        }else{
        	$ajaxData['url']=U('__APP__/Deepprocess/Material/addRec');
			$ajaxData['info']='数据添加失败';
			$ajaxData['status']=0;
            $this->ajaxReturn($ajaxData,'JSON');
        }
    }
    /************** 糕点配方信息 end ******************/
}
?>