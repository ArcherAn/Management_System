<?php
class ProcessAction extends Action{
	
	
	/****清理工序信息start****/
  	public function clear(){
		// Model实例化对象 = M(表名);
    	$process= M('process-clear');
    	// 查询
    	// 分页类
	    import('ORG.Util.Page');
	    $keywords = $_GET['clearid'];
        $map = "clearid like '%$keywords%'";
        $count = $process->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count,8);// 实例化分页类 传入总记录数
        $show  = $Page->show();// 分页显示输出
        $list = $process->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
	}
    //修改数据
    public function updateclear(){
        $worker=M('process-clear');  //选表
		$data['id']=$_POST['id'];
        $data['clearid']=$_POST['clearid'];
        $data['index1']=$_POST['index1'];
        $data['index2']=$_POST['index2'];
        $data['index3']=$_POST['index3'];
        $data['index4']=$_POST['index4'];
        $data['date']=$_POST['date'];
        $count=$worker->save($data);
        if($count){
            $this->success("数据修改成功","__APP__/Process/Process/clear");
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modifyclear(){
        $id=$_GET['id'];
        $worker=M('process-clear');  //选表
        $arr=$worker->find($id);
        $this->assign('data',$arr);
        $this->display();
    }

    //删除数据
    public function deleteclear(){
        $worker=M('process-clear');  //选表
        $id=$_GET['id'];
        $count=$worker->delete($id);
        if($count){
            $this->success('数据删除成功','__APP__/Process/Process/clear');
        }else{
            $this->error('数据删除失败');
        }
    }
    public function create(){
        $m=M('process-clear');
        $m->clearid=$_POST['clearid'];
        $m->index1=$_POST['index1'];
        $m->index2=$_POST['index2'];
        $m->index3=$_POST['index3'];
        $m->index4=$_POST['index4'];
        $m->date=$_POST['date'];
        $idnum=$m->add();
        if($idnum>0){
            $this->success('数据添加成功','__APP__/Process/Process/clear');
        }else{
            $this->success('数据添加失败');
        }

    }
    public function addclear(){
        $this->display();
    }

    public function insert_database_clear(){
        session_start();
        $id=$_POST['hidden'];
        if($_SESSION['id']!=$id) {return;}
        $data=array(
            'clearid'=>$_POST['clearid'],
            'index1'=>$_POST['index1'],
            'index2'=>$_POST['index2'],
            'index3'=>$_POST['index3'],
            'index4'=>$_POST['index4'],
            'date'=>$_POST['date']
        );
        $db=M('process-clear');
        $res=$db->add($data);
        if($res){
        	$ajaxData['info']='数据添加成功';
        	$ajaxData['url']=U('__APP__/Process/Process/clear');
        	$ajaxData['status']=1;
        	$this->ajaxReturn($ajaxData,'JSON');
        }else{
        	$ajaxData['url']=U('__APP__/Process/Process/addclear');
			$ajaxData['info']='数据添加失败';
			$ajaxData['status']=0;
            $this->ajaxReturn($ajaxData,'JSON');
        }
    }
	/****清理工序信息end****/
	
	/*********************************************分割线**************************************************************/
	/****垄谷工序信息start****/
  	public function ridgevalley(){
		// Model实例化对象 = M(表名);
    	$process= M('process-ridgevalley');
    	// 查询
    	// 分页类
	    import('ORG.Util.Page');
	    $keywords = $_GET['ridgevalleyid'];
        $map = "ridgevalleyid like '%$keywords%'";
        $count = $process->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count,8);// 实例化分页类 传入总记录数
        $show  = $Page->show();// 分页显示输出
        $list = $process->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
	}
    //修改数据
    public function updateridgevalley(){
        $worker=M('process-ridgevalley');  //选表
		$data['id']=$_POST['id'];
        $data['ridgevalleyid']=$_POST['ridgevalleyid'];
        $data['index1']=$_POST['index1'];
        $data['index2']=$_POST['index2'];
        $data['index3']=$_POST['index3'];
        $data['index4']=$_POST['index4'];
        $data['date']=$_POST['date'];
        $count=$worker->save($data);
        if($count){
            $this->success("数据修改成功","__APP__/Process/Process/ridgevalley");
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modifyridgevalley(){
        $id=$_GET['id'];
        $worker=M('process-ridgevalley');  //选表
        $arr=$worker->find($id);
        $this->assign('data',$arr);
        $this->display();
    }

    //删除数据
    public function deleteridgevalley(){
        $worker=M('process-ridgevalley');  //选表
        $id=$_GET['id'];
        $count=$worker->delete($id);
        if($count){
            $this->success('数据删除成功','__APP__/Process/Process/ridgevalley');
        }else{
            $this->error('数据删除失败');
        }
    }
    public function createridgevalley(){
        $m=M('process-ridgevalley');
        $m->ridgevalleyid=$_POST['ridgevalleyid'];
        $m->index1=$_POST['index1'];
        $m->index2=$_POST['index2'];
        $m->index3=$_POST['index3'];
        $m->index4=$_POST['index4'];
        $m->date=$_POST['date'];
        $idnum=$m->add();
        if($idnum>0){
            $this->success('数据添加成功','__APP__/Process/Process/ridgevalley');
        }else{
            $this->success('数据添加失败');
        }

    }
    public function addridgevalley(){
        $this->display();
    }

    public function insert_database_ridgevalley(){
        session_start();
        $id=$_POST['hidden'];
        if($_SESSION['id']!=$id) {return;}
        $data=array(
            'ridgevalleyid'=>$_POST['ridgevalleyid'],
            'index1'=>$_POST['index1'],
            'index2'=>$_POST['index2'],
            'index3'=>$_POST['index3'],
            'index4'=>$_POST['index4'],
            'date'=>$_POST['date']
        );
        $db=M('process-ridgevalley');
        $res=$db->add($data);
        if($res){
        	$ajaxData['info']='数据添加成功';
        	$ajaxData['url']=U('__APP__/Process/Process/ridgevalley');
        	$ajaxData['status']=1;
        	$this->ajaxReturn($ajaxData,'JSON');
        }else{
        	$ajaxData['url']=U('__APP__/Process/Process/addridgevalley');
			$ajaxData['info']='数据添加失败';
			$ajaxData['status']=0;
            $this->ajaxReturn($ajaxData,'JSON');
        }
    }
	/****垄谷工序信息end****/
	
	
	/*********************************************分割线**************************************************************/
	/****碾米抛光工序信息start****/
  	public function polishing(){
		// Model实例化对象 = M(表名);
    	$process= M('process-polishing');
    	// 查询
    	// 分页类
	    import('ORG.Util.Page');
	    $keywords = $_GET['polishingid'];
        $map = "polishingid like '%$keywords%'";
        $count = $process->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count,8);// 实例化分页类 传入总记录数
        $show  = $Page->show();// 分页显示输出
        $list = $process->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
		$json = json_encode($list);
		$this->assign('count',$count);
		$this->assign('json',$json);
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
	}
    //修改数据
    public function updatepolishing(){
        $worker=M('process-polishing');  //选表
		$data['id']=$_POST['id'];
        $data['polishingid']=$_POST['polishingid'];
        $data['index1']=$_POST['index1'];
        $data['index2']=$_POST['index2'];
        $data['index3']=$_POST['index3'];
        $data['index4']=$_POST['index4'];
        $data['date']=$_POST['date'];
        $count=$worker->save($data);
        if($count){
            $this->success("数据修改成功","__APP__/Process/Process/polishing");
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modifypolishing(){
        $id=$_GET['id'];
        $worker=M('process-polishing');  //选表
        $arr=$worker->find($id);
        $this->assign('data',$arr);
        $this->display();
    }

    //删除数据
    public function deletepolishing(){
        $worker=M('process-polishing');  //选表
        $id=$_GET['id'];
        $count=$worker->delete($id);
        if($count){
            $this->success('数据删除成功','__APP__/Process/Process/polishing');
        }else{
            $this->error('数据删除失败');
        }
    }
    public function createpolishing(){
        $m=M('process-polishing');
        $m->polishingid=$_POST['polishingid'];
        $m->index1=$_POST['index1'];
        $m->index2=$_POST['index2'];
        $m->index3=$_POST['index3'];
        $m->index4=$_POST['index4'];
        $m->date=$_POST['date'];
        $idnum=$m->add();
        if($idnum>0){
            $this->success('数据添加成功','__APP__/Process/Process/polishing');
        }else{
            $this->success('数据添加失败');
        }

    }
    public function addpolishing(){
        $this->display();
    }

    public function insert_database_polishing(){
        session_start();
        $id=$_POST['hidden'];
        if($_SESSION['id']!=$id) {return;}
        $data=array(
            'polishingid'=>$_POST['polishingid'],
            'index1'=>$_POST['index1'],
            'index2'=>$_POST['index2'],
            'index3'=>$_POST['index3'],
            'index4'=>$_POST['index4'],
            'date'=>$_POST['date']
        );
        $db=M('process-polishing');
        $res=$db->add($data);
        if($res){
        	$ajaxData['info']='数据添加成功';
        	$ajaxData['url']=U('__APP__/Process/Process/polishing');
        	$ajaxData['status']=1;
        	$this->ajaxReturn($ajaxData,'JSON');
        }else{
        	$ajaxData['url']=U('__APP__/Process/Process/addpolishing');
			$ajaxData['info']='数据添加失败';
			$ajaxData['status']=0;
            $this->ajaxReturn($ajaxData,'JSON');
        }
    }
	/****碾米抛光工序工序信息end****/
	
	
	
	/*********************************************分割线**************************************************************/
	/****成品整理工序信息start****/
	
  	public function sortout(){
		// Model实例化对象 = M(表名);
    	$process= M('process-sortout');
    	// 查询
    	// 分页类
	    import('ORG.Util.Page');
	    $keywords = $_GET['sortoutid'];
        $map = "sortoutid like '%$keywords%'";
        $count = $process->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count,8);// 实例化分页类 传入总记录数
        $show  = $Page->show();// 分页显示输出
        $list = $process->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
	}
    //修改数据
    public function updatesortout(){
        $worker=M('process-sortout');  //选表
		$data['id']=$_POST['id'];
        $data['sortoutid']=$_POST['sortoutid'];
        $data['index1']=$_POST['index1'];
        $data['index2']=$_POST['index2'];
        $data['index3']=$_POST['index3'];
        $data['index4']=$_POST['index4'];
        $data['date']=$_POST['date'];
        $count=$worker->save($data);
        if($count){
            $this->success("数据修改成功","__APP__/Process/Process/sortout");
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modifysortout(){
        $id=$_GET['id'];
        $worker=M('process-sortout');  //选表
        $arr=$worker->find($id);
        $this->assign('data',$arr);
        $this->display();
    }

    //删除数据
    public function deletesortout(){
        $worker=M('process-sortout');  //选表
        $id=$_GET['id'];
        $count=$worker->delete($id);
        if($count){
            $this->success('数据删除成功','__APP__/Process/Process/sortout');
        }else{
            $this->error('数据删除失败');
        }
    }
    public function createsortout(){
        $m=M('process-sortout');
        $m->sortoutid=$_POST['sortoutid'];
        $m->index1=$_POST['index1'];
        $m->index2=$_POST['index2'];
        $m->index3=$_POST['index3'];
        $m->index4=$_POST['index4'];
        $m->date=$_POST['date'];
        $idnum=$m->add();
        if($idnum>0){
            $this->success('数据添加成功','__APP__/Process/Process/sortout');
        }else{
            $this->success('数据添加失败');
        }

    }
    public function addsortout(){
        $this->display();
    }

    public function insert_database_sortout(){
        session_start();
        $id=$_POST['hidden'];
        if($_SESSION['id']!=$id) {return;}
        $data=array(
            'sortoutid'=>$_POST['sortoutid'],
            'index1'=>$_POST['index1'],
            'index2'=>$_POST['index2'],
            'index3'=>$_POST['index3'],
            'index4'=>$_POST['index4'],
            'date'=>$_POST['date']
        );
        $db=M('process-sortout');
        $res=$db->add($data);
        if($res){
        	$ajaxData['info']='数据添加成功';
        	$ajaxData['url']=U('__APP__/Process/Process/sortout');
        	$ajaxData['status']=1;
        	$this->ajaxReturn($ajaxData,'JSON');
        }else{
        	$ajaxData['url']=U('__APP__/Process/Process/addsortout');
			$ajaxData['info']='数据添加失败';
			$ajaxData['status']=0;
            $this->ajaxReturn($ajaxData,'JSON');
        }
    }
	/****成品整理工序信息end****/
	
	/*********************************************分割线**************************************************************/
	
	                                    /****大米加工工序信息start****/	
	
		public function info(){
		// Model实例化对象 = M(表名);
    	$produce = M('process-info');
    	// 查询
    	// 分页类
	    import('ORG.Util.Page');
	    $keywords = $_GET['feedid'];
        $map = "feedid like '%$keywords%'";
        $count = $produce->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count,8);// 实例化分页类 传入总记录数
        $show  = $Page->show();// 分页显示输出
        $list = $produce->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
	}
    //修改数据
    public function updateinfo(){
        $produce=M('process-info');  //选表
		$data['id']=$_POST['id'];
        $data['feedid']=$_POST['feedid'];
        $data['clearid']=$_POST['clearid'];
        $data['ridgevalleyid']=$_POST['ridgevalleyid'];
        $data['polishingid']=$_POST['polishingid'];
		$data['sortoutid']=$_POST['sortoutid'];
		$data['date']=$_POST['date'];
        $count=$produce->save($data);
        if($count){
            $this->success("数据修改成功","__APP__/Process/Process/info");
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modifyinfo(){
        $id=$_GET['id'];
        $produce=M('process-info');  //选表
        $arr=$produce->find($id);
        $this->assign('data',$arr);
        $this->display();
    }

    //删除数据
    public function deleteinfo(){
        $produce=M('process-info');  //选表
        $id=$_GET['id'];
        $count=$produce->delete($id);
        if($count){
            $this->success('数据删除成功','__APP__/Process/Process/info');
        }else{
            $this->error('数据删除失败');
        }
    }

    public function addinfo(){
        $this->display();
    }

    public function insert_database_info(){
        session_start();
        $id=$_POST['hidden'];
        if($_SESSION['id']!=$id) {return;}
        $data=array(
		    'feedid'=>$_POST['feedid'],
			'clearid'=>$_POST['clearid'],
			'ridgevalleyid'=>$_POST['ridgevalleyid'],
			'polishingid'=>$_POST['polishingid'],
			'sortoutid'=>$_POST['sortoutid'],
            'date'=>$_POST['date']
        );
        $db=M('process-info');
        $res=$db->add($data);
        if($res){
        	$ajaxData['info']='数据添加成功';
        	$ajaxData['url']=U('__APP__/Process/Process/info');
        	$ajaxData['status']=1;
        	$this->ajaxReturn($ajaxData,'JSON');
        }else{
        	$ajaxData['url']=U('__APP__/Process/Process/addinfo');
			$ajaxData['info']='数据添加失败';
			$ajaxData['status']=0;
            $this->ajaxReturn($ajaxData,'JSON');
        }
    }
	
	                                                  /****大米加工工序信息end****/	
													  
	        /************************************************分割线*****************************************************/
	
	                                                  /****设备参数start****/
  	public function index(){
		// Model实例化对象 = M(表名);
    	$process= M('processdeviceparameters');
    	// 查询
    	// 分页类
	    import('ORG.Util.Page');
	    $keywords = $_GET['machineid'];
        $map = "machineid like '%$keywords%'";
        $count = $process->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count,8);// 实例化分页类 传入总记录数
        $show  = $Page->show();// 分页显示输出
        $list = $process->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
	}
    //修改数据
    public function update(){
        $worker=M('processdeviceparameters');  //选表
		$data['id']=$_POST['id'];
        $data['machineid']=$_POST['machineid'];
        $data['feedid']=$_POST['feedid'];
        $data['parameters1']=$_POST['parameters1'];
        $data['Parameters2']=$_POST['Parameters2'];
        $data['Parameters3']=$_POST['Parameters3'];
        $data['Parameters4']=$_POST['Parameters4'];
		$data['Parameters5']=$_POST['Parameters5'];
        $count=$worker->save($data);
        if($count){
            $this->success("数据修改成功","__APP__/Process/Process/index");
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modify(){
        $id=$_GET['id'];
        $worker=M('processdeviceparameters');  //选表
        $arr=$worker->find($id);
        $this->assign('data',$arr);
        $this->display();
    }

    //删除数据
    public function delete(){
        $worker=M('processdeviceparameters');  //选表
        $id=$_GET['id'];
        $count=$worker->delete($id);
        if($count){
            $this->success('数据删除成功','__APP__/Process/Process/index');
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
            'feedid'=>$_POST['feedid'],
            'parameters1'=>$_POST['parameters1'],
            'Parameters2'=>$_POST['Parameters2'],
            'Parameters3'=>$_POST['Parameters3'],
            'Parameters4'=>$_POST['Parameters4'],
			'Parameters5'=>$_POST['Parameters5']
        );
        $db=M('processdeviceparameters');
        $res=$db->add($data);
        if($res){
        	$ajaxData['info']='数据添加成功';
        	$ajaxData['url']=U('__APP__/Process/Process/index');
        	$ajaxData['status']=1;
        	$this->ajaxReturn($ajaxData,'JSON');
        }else{
        	$ajaxData['url']=U('__APP__/Process/Process/add');
			$ajaxData['info']='数据添加失败';
			$ajaxData['status']=0;
            $this->ajaxReturn($ajaxData,'JSON');
        }
    }
	                                                         /****设备参数end****/
															 
															 /****加工环境start****/
  	public function envi(){
		// Model实例化对象 = M(表名);
    	$process= M('processenvironment');
    	// 查询
    	// 分页类
	    import('ORG.Util.Page');
	    $keywords = $_GET['date'];
        $map = "date like '%$keywords%'";
        $count = $process->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count,8);// 实例化分页类 传入总记录数
        $show  = $Page->show();// 分页显示输出
        $list = $process->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
		$json = json_encode($list);
		$this->assign('count',$count);
		$this->assign('json',$json);
        $this->display(); // 输出模板
	}
    //修改数据
    public function updateenvi(){
        $worker=M('processenvironment');  //选表
		$data['id']=$_POST['id'];
        $data['temp']=$_POST['temp'];
		$data['humidity']=$_POST['humidity'];
        $data['index1']=$_POST['index1'];
        $data['index2']=$_POST['index2'];
        $data['index3']=$_POST['index3'];
        $data['date']=$_POST['date'];
        $count=$worker->save($data);
        if($count){
            $this->success("数据修改成功","__APP__/Process/Process/envi");
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modifyenvi(){
        $id=$_GET['id'];
        $worker=M('processenvironment');  //选表
        $arr=$worker->find($id);
        $this->assign('data',$arr);
        $this->display();
    }

    //删除数据
    public function deleteenvi(){
        $worker=M('processenvironment');  //选表
        $id=$_GET['id'];
        $count=$worker->delete($id);
        if($count){
            $this->success('数据删除成功','__APP__/Process/Process/envi');
        }else{
            $this->error('数据删除失败');
        }
    }
 
    public function addenvi(){
        $this->display();
    }

    public function insert_database_envi(){
        session_start();
        $id=$_POST['hidden'];
        if($_SESSION['id']!=$id) {return;}
        $data=array(
            'temp'=>$_POST['temp'],
			'humidity'=>$_POST['humidity'],
            'index1'=>$_POST['index1'],
            'index2'=>$_POST['index2'],
            'index3'=>$_POST['index3'],
            'date'=>$_POST['date']
        );
        $db=M('processenvironment');
        $res=$db->add($data);
        if($res){
        	$ajaxData['info']='数据添加成功';
        	$ajaxData['url']=U('__APP__/Process/Process/envi');
        	$ajaxData['status']=1;
        	$this->ajaxReturn($ajaxData,'JSON');
        }else{
        	$ajaxData['url']=U('__APP__/Process/Process/addenvi');
			$ajaxData['info']='数据添加失败';
			$ajaxData['status']=0;
            $this->ajaxReturn($ajaxData,'JSON');
        }
    }
	                                                       /****加工环境end****/
	
}

?>