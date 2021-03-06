<?php
class ProduceAction extends Action{
	/* 出产大米信息开始  */
  	public function index(){
		// Model实例化对象 = M(表名);
    	$produce = M('producericeinfo');
    	// 查询
    	// 分页类
	    import('ORG.Util.Page');
	    $keywords = $_GET['riceid'];
        $map = "riceid like '%$keywords%'";
        $count = $produce->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count,8);// 实例化分页类 传入总记录数
        $show  = $Page->show();// 分页显示输出
        $list = $produce->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
	}
    //修改数据
    public function update(){
        $produce=M('producericeinfo');  //选表
		$data['id']=$_POST['id'];
        $data['riceid']=$_POST['riceid'];
        $data['whiteness']=$_POST['whiteness'];
        $data['accuracy']=$_POST['accuracy'];
        $data['weight']=$_POST['weight'];
        $data['whereabouts']=$_POST['whereabouts'];
        $data['index1']=$_POST['index1'];
        $count=$produce->save($data);
        if($count){
            $this->success("数据修改成功","__APP__/Process/Produce/index");
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modify(){
        $id=$_GET['id'];
        $produce=M('producericeinfo');  //选表
        $arr=$produce->find($id);
        $this->assign('data',$arr);
        $this->display();
    }

    //删除数据
    public function delete(){
        $produce=M('producericeinfo');  //选表
        $id=$_GET['id'];
        $count=$produce->delete($id);
        if($count){
            $this->success('数据删除成功','__APP__/Process/Produce/index');
        }else{
            $this->error('数据删除失败');
        }
    }
    public function create(){
        $m=M('producericeinfo');
        $m->riceid=$_POST['riceid'];
        $m->whiteness=$_POST['whiteness'];
        $m->accuracy=$_POST['accuracy'];
        $m->weight=$_POST['weight'];
        $m->whereabouts=$_POST['whereabouts'];
        $m->index1=$_POST['index1'];
        $idnum=$m->add();
        if($idnum>0){
            $this->success('数据添加成功','__APP__/Process/Produce/index');
        }else{
            $this->success('数据添加失败');
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
            'riceid'=>$_POST['riceid'],
            'whiteness'=>$_POST['whiteness'],
            'accuracy'=>$_POST['accuracy'],
            'weight'=>$_POST['weight'],
            'whereabouts'=>$_POST['whereabouts'],
            'index1'=>$_POST['index1']
        );
        $db=M('producericeinfo');
        $res=$db->add($data);
        if($res){
        	$ajaxData['info']='数据添加成功';
        	$ajaxData['url']=U('__APP__/Process/Produce/index');
        	$ajaxData['status']=1;
        	$this->ajaxReturn($ajaxData,'JSON');
        }else{
        	$ajaxData['url']=U('__APP__/Process/Produce/add');
			$ajaxData['info']='数据添加失败';
			$ajaxData['status']=0;
            $this->ajaxReturn($ajaxData,'JSON');
        }
    }
	 /** 出产大米信息结束 **/

	/*******************************************分割线*****************************************************/ 
	 
	 /** 出产细米信息开始 **/
	 public function finerice(){
		// Model实例化对象 = M(表名);
    	$produce = M('produce-finericeinfo');
    	// 查询
    	// 分页类
	    import('ORG.Util.Page');
	    $keywords = $_GET['finericeid'];
        $map = "finericeid like '%$keywords%'";
        $count = $produce->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count,8);// 实例化分页类 传入总记录数
        $show  = $Page->show();// 分页显示输出
        $list = $produce->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
	}
    //修改数据
    public function updatefinerice(){
        $produce=M('produce-finericeinfo');  //选表
		$data['id']=$_POST['id'];
        $data['finericeid']=$_POST['finericeid'];
        $data['weight']=$_POST['weight'];
        $data['whereabouts']=$_POST['whereabouts'];
        $data['Use']=$_POST['Use'];
        $count=$produce->save($data);
        if($count){
            $this->success("数据修改成功","__APP__/Process/Produce/finerice");
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modifyfinerice(){
        $id=$_GET['id'];
        $produce=M('produce-finericeinfo');  //选表
        $arr=$produce->find($id);
        $this->assign('data',$arr);
        $this->display();
    }

    //删除数据
    public function deletefinerice(){
        $produce=M('produce-finericeinfo');  //选表
        $id=$_GET['id'];
        $count=$produce->delete($id);
        if($count){
            $this->success('数据删除成功','__APP__/Process/Produce/finerice');
        }else{
            $this->error('数据删除失败');
        }
    }
    public function createfinerice(){
        $m=M('produce-finericeinfo');
        $m->finericeid=$_POST['finericeid'];
        $m->weight=$_POST['weight'];
        $m->whereabouts=$_POST['whereabouts'];
        $m->Use=$_POST['Use'];
        $idnum=$m->add();
        if($idnum>0){
            $this->success('数据添加成功','__APP__/Process/Produce/finerice');
        }else{
            $this->success('数据添加失败');
        }

    }
    public function addfinerice(){
        $this->display();
    }

    public function insert_database_finerice(){
        session_start();
        $id=$_POST['hidden'];
        if($_SESSION['id']!=$id) {return;}
        $data=array(
            'finericeid'=>$_POST['finericeid'],
            'weight'=>$_POST['weight'],
            'whereabouts'=>$_POST['whereabouts'],
            'Use'=>$_POST['Use']
        );
        $db=M('produce-finericeinfo');
        $res=$db->add($data);
        if($res){
        	$ajaxData['info']='数据添加成功';
        	$ajaxData['url']=U('__APP__/Process/Produce/finerice');
        	$ajaxData['status']=1;
        	$this->ajaxReturn($ajaxData,'JSON');
        }else{
        	$ajaxData['url']=U('__APP__/Process/Produce/addfinerice');
			$ajaxData['info']='数据添加失败';
			$ajaxData['status']=0;
            $this->ajaxReturn($ajaxData,'JSON');
        }
    }

	 /** 出产细米信息结束 **/
	 
	/*******************************************分割线*****************************************************/ 	 
	
	 /** 出产米糠信息开始**/	 
		
		public function ricebran(){
		// Model实例化对象 = M(表名);
    	$produce = M('produce-ricebraninfo');
    	// 查询
    	// 分页类
	    import('ORG.Util.Page');
	    $keywords = $_GET['ricebranid'];
        $map = "ricebranid like '%$keywords%'";
        $count = $produce->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count,8);// 实例化分页类 传入总记录数
        $show  = $Page->show();// 分页显示输出
        $list = $produce->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
	}
    //修改数据
    public function updatericebran(){
        $produce=M('produce-ricebraninfo');  //选表
		$data['id']=$_POST['id'];
        $data['ricebranid']=$_POST['ricebranid'];
        $data['weight']=$_POST['weight'];
        $data['whereabouts']=$_POST['whereabouts'];
        $data['Use']=$_POST['Use'];
        $count=$produce->save($data);
        if($count){
            $this->success("数据修改成功","__APP__/Process/Produce/ricebran");
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modifyricebran(){
        $id=$_GET['id'];
        $produce=M('produce-ricebraninfo');  //选表
        $arr=$produce->find($id);
        $this->assign('data',$arr);
        $this->display();
    }

    //删除数据
    public function deletericebran(){
        $produce=M('produce-ricebraninfo');  //选表
        $id=$_GET['id'];
        $count=$produce->delete($id);
        if($count){
            $this->success('数据删除成功','__APP__/Process/Produce/ricebran');
        }else{
            $this->error('数据删除失败');
        }
    }
    public function createricebran(){
        $m=M('produce-ricebraninfo');
        $m->ricebranid=$_POST['ricebranid'];
        $m->weight=$_POST['weight'];
        $m->whereabouts=$_POST['whereabouts'];
        $m->Use=$_POST['Use'];
        $idnum=$m->add();
        if($idnum>0){
            $this->success('数据添加成功','__APP__/Process/Produce/ricebran');
        }else{
            $this->success('数据添加失败');
        }

    }
    public function addricebran(){
        $this->display();
    }

    public function insert_database_ricebran(){
        session_start();
        $id=$_POST['hidden'];
        if($_SESSION['id']!=$id) {return;}
        $data=array(
            'ricebranid'=>$_POST['ricebranid'],
            'weight'=>$_POST['weight'],
            'whereabouts'=>$_POST['whereabouts'],
            'Use'=>$_POST['Use']
        );
        $db=M('produce-ricebraninfo');
        $res=$db->add($data);
        if($res){
        	$ajaxData['info']='数据添加成功';
        	$ajaxData['url']=U('__APP__/Process/Produce/ricebran');
        	$ajaxData['status']=1;
        	$this->ajaxReturn($ajaxData,'JSON');
        }else{
        	$ajaxData['url']=U('__APP__/Process/Produce/addricebran');
			$ajaxData['info']='数据添加失败';
			$ajaxData['status']=0;
            $this->ajaxReturn($ajaxData,'JSON');
        }
    }	 
		 
	/** 出产米糠信息结束 **/
	/*******************************************分割线*****************************************************/ 	 
	/** 出产谷壳信息开始 **/
	
			public function chaff(){
		// Model实例化对象 = M(表名);
    	$produce = M('produce-chaffinfo');
    	// 查询
    	// 分页类
	    import('ORG.Util.Page');
	    $keywords = $_GET['chaffid'];
        $map = "chaffid like '%$keywords%'";
        $count = $produce->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count,8);// 实例化分页类 传入总记录数
        $show  = $Page->show();// 分页显示输出
        $list = $produce->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
	}
    //修改数据
    public function updatechaff(){
        $produce=M('produce-chaffinfo');  //选表
		$data['id']=$_POST['id'];
        $data['chaffid']=$_POST['chaffid'];
        $data['weight']=$_POST['weight'];
        $data['whereabouts']=$_POST['whereabouts'];
        $data['Use']=$_POST['Use'];
        $count=$produce->save($data);
        if($count){
            $this->success("数据修改成功","__APP__/Process/Produce/chaff");
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modifychaff(){
        $id=$_GET['id'];
        $produce=M('produce-chaffinfo');  //选表
        $arr=$produce->find($id);
        $this->assign('data',$arr);
        $this->display();
    }

    //删除数据
    public function deletechaff(){
        $produce=M('produce-chaffinfo');  //选表
        $id=$_GET['id'];
        $count=$produce->delete($id);
        if($count){
            $this->success('数据删除成功','__APP__/Process/Produce/chaff');
        }else{
            $this->error('数据删除失败');
        }
    }
    public function createchaff(){
        $m=M('produce-chaffinfo');
        $m->chaffid=$_POST['chaffid'];
        $m->weight=$_POST['weight'];
        $m->whereabouts=$_POST['whereabouts'];
        $m->Use=$_POST['Use'];
        $idnum=$m->add();
        if($idnum>0){
            $this->success('数据添加成功','__APP__/Process/Produce/chaff');
        }else{
            $this->success('数据添加失败');
        }

    }
    public function addchaff(){
        $this->display();
    }

    public function insert_database_chaff(){
        session_start();
        $id=$_POST['hidden'];
        if($_SESSION['id']!=$id) {return;}
        $data=array(
            'chaffid'=>$_POST['chaffid'],
            'weight'=>$_POST['weight'],
            'whereabouts'=>$_POST['whereabouts'],
            'Use'=>$_POST['Use']
        );
        $db=M('produce-chaffinfo');
        $res=$db->add($data);
        if($res){
        	$ajaxData['info']='数据添加成功';
        	$ajaxData['url']=U('__APP__/Process/Produce/chaff');
        	$ajaxData['status']=1;
        	$this->ajaxReturn($ajaxData,'JSON');
        }else{
        	$ajaxData['url']=U('__APP__/Process/Produce/addchaff');
			$ajaxData['info']='数据添加失败';
			$ajaxData['status']=0;
            $this->ajaxReturn($ajaxData,'JSON');
        }
    }
	
	/** 出产谷壳信息结束 **/
	
	/*******************************************分割线*****************************************************/ 	
	
	/** 出产产品信息开始 **/
	
	public function product(){
		// Model实例化对象 = M(表名);
    	$produce = M('produce-productinfo');
    	// 查询
    	// 分页类
	    import('ORG.Util.Page');
	    $keywords = $_GET['riceid'];
        $map = "riceid like '%$keywords%'";
        $count = $produce->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count,4);// 实例化分页类 传入总记录数
        $show  = $Page->show();// 分页显示输出
        $list = $produce->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
	}
    //修改数据
    public function updateproduct(){
        $produce=M('produce-productinfo');  //选表
		$data['id']=$_POST['id'];
        $data['feedid']=$_POST['feedid'];
        $data['riceid']=$_POST['riceid'];
        $data['finericeid']=$_POST['finericeid'];
        $data['ricebranid']=$_POST['ricebranid'];
		$data['chaffid']=$_POST['chaffid'];
		$data['consumption']=$_POST['consumption'];
		$data['operator']=$_POST['operator'];
		$data['date']=$_POST['date'];
        $count=$produce->save($data);
        if($count){
            $this->success("数据修改成功","__APP__/Process/Produce/product");
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modifyproduct(){
        $id=$_GET['id'];
        $produce=M('produce-productinfo');  //选表
        $arr=$produce->find($id);
        $this->assign('data',$arr);
        $this->display();
    }

    //删除数据
    public function deleteproduct(){
        $produce=M('produce-productinfo');  //选表
        $id=$_GET['id'];
        $count=$produce->delete($id);
        if($count){
            $this->success('数据删除成功','__APP__/Process/Produce/product');
        }else{
            $this->error('数据删除失败');
        }
    }
    public function createproduct(){
        $m=M('produce-productinfo');
		$m->feedid=$_POST['feedid'];
		$m->riceid=$_POST['riceid'];
		$m->finericeid=$_POST['finericeid'];
		$m->ricebranid=$_POST['ricebranid'];
        $m->chaffid=$_POST['chaffid'];
        $m->consumption=$_POST['consumption'];
        $m->operator=$_POST['operator'];
        $m->date=$_POST['date'];
        $idnum=$m->add();
        if($idnum>0){
            $this->success('数据添加成功','__APP__/Process/Produce/product');
        }else{
            $this->success('数据添加失败');
        }

    }
    public function addproduct(){
        $this->display();
    }

    public function insert_database_product(){
        session_start();
        $id=$_POST['hidden'];
        if($_SESSION['id']!=$id) {return;}
        $data=array(
		    'feedid'=>$_POST['feedid'],
			'riceid'=>$_POST['riceid'],
			'finericeid'=>$_POST['finericeid'],
			'ricebranid'=>$_POST['ricebranid'],
			'chaffid'=>$_POST['chaffid'],
            'consumption'=>$_POST['consumption'],
            'operator'=>$_POST['operator'],
            'date'=>$_POST['date']
        );
        $db=M('produce-productinfo');
        $res=$db->add($data);
        if($res){
        	$ajaxData['info']='数据添加成功';
        	$ajaxData['url']=U('__APP__/Process/Produce/product');
        	$ajaxData['status']=1;
        	$this->ajaxReturn($ajaxData,'JSON');
        }else{
        	$ajaxData['url']=U('__APP__/Process/Produce/addproduct');
			$ajaxData['info']='数据添加失败';
			$ajaxData['status']=0;
            $this->ajaxReturn($ajaxData,'JSON');
        }
    }
	
	
	/** 出产产品信息结束 **/
}

?>