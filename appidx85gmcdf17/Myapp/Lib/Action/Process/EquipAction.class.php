<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/4/14
 * Time: 9:51
 */
class EquipAction extends Action{
	
	/*********************************************设备基本信息*******************************************/
	  	public function index(){
    		// Model实例化对象 = M(表名);
	    	    $equip = M('processequipment');
	    	// 查询
	    	// 分页类
			    import('ORG.Util.Page');
	    	    $keywords = $_GET['type'];
		        $map = "type like '%$keywords%'";
		        $count = $equip->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
                $Page = new Page($count,4);// 实例化分页类 传入总记录数
                $show  = $Page->show();// 分页显示输出
                $list = $equip->where($map)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
                $this->assign('data',$list);// 赋值数据集
                $this->assign('page',$show);// 赋值分页输出
                $this->display(); // 输出模板


    	}

    //修改数据
    public function update(){
        $equip=M('processequipment');  //选表
		$data['id']=$_POST['id'];
        $data['machineid']=$_POST['machineid'];
        $data['type']=$_POST['type'];
        $data['model']=$_POST['model'];
        $data['workline']=$_POST['workline'];
        $data['status']=$_POST['status'];
        $data['purchasedate']=$_POST['purchasedate'];
        $count=$equip->save($data);
        if($count){
            $this->success("数据修改成功","__APP__/Process/Equip/index/");
            //$this->redirect("/Carinfo/index","",0);
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modify(){
        $id=$_GET['id'];
        $equip=M('processequipment');  //选表
        $arr=$equip->find($id);
        $this->assign('data',$arr);
        $this->display();
    }
    //删除数据
    public function delete(){
        $equip=M('processequipment');  //选表
        $id=$_GET['id'];
        $count=$equip->delete($id);
        if($count){
            //echo $count .":D";
            //exit;
            $this->success('数据删除成功');
        }else{
            $this->error('数据删除失败');
        }
    }
    public function create(){
        $m=M('processequipment');
		$m['id']=$_POST['id'];
        $m['machineid']=$_POST['machineid'];
        $m['type']=$_POST['type'];
        $m['model']=$_POST['model'];
        $m['workline']=$_POST['workline'];
        $m['status']=$_POST['status'];
        $m['purchasedate']=$_POST['purchasedate'];
        $idnum=$m->add();
        if($idnum>0){
            $this->success('数据添加成功','__APP__/Process/Equip/index');
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
            'machineid'=>$_POST['machineid'],
            'type'=>$_POST['type'],
            'model'=>$_POST['model'],
            'age'=>$_POST['age'],
            'workline'=>$_POST['workline'],
            'status'=>$_POST['status'],
            'purchasedate'=>$_POST['purchasedate']
        );
        $ret=$this->check_safety($data);
        if($ret) {echo $ret;return;}
        else{
            $db=M('processequipment');
            $res=$db->add($data);
            if($res){
                $this->success('数据添加成功','__APP__/Process/Equip/index');
            }
            else{
                $this->success('数据添加失败');
            }
        }
    }

    public function check_safety($data){
        $arr=array('machineid','type','model','workline','status','purchasedate');
        $count=count($arr);
        for($i=0;$i<$count;$i++)
        {
            $tem=$arr[$i];
            if(empty($data[$tem])) return $i+1;
        }
        return 0;
    }
	/*********************************************设备故障信息*******************************************/
	
    public function maintain(){
	    $equip = M('processmaintain');
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
        $this->display(); // 输出模板
	}

    //修改数据
    public function updatemaintain(){
        $equip=M('processmaintain');  //选表
		$data['id']=$_POST['id'];
        $data['machineid']=$_POST['machineid'];
        $data['type']=$_POST['type'];
        $data['reason']=$_POST['reason'];
        $data['operator']=$_POST['operator'];
        $data['date']=$_POST['date'];
        $count=$equip->save($data);
        if($count){
            $this->success("数据修改成功","__APP__/Process/Equip/maintain");
        }else{
            $this->error('数据修改失败');
        }
    }
    //显示修改页面
    public function modifymaintain(){
        $id=$_GET['id'];
        $equip=M('processmaintain');
        $arr=$equip->find($id);
        $this->assign('data',$arr);
        $this->display();
    }
    //删除数据
    public function deletemaintain(){
        $equip=M('processmaintain');
        $id=$_GET['id'];
        $count=$equip->delete($id);
        if($count){
            $this->success('数据删除成功');
        }else{
            $this->error('数据删除失败');
        }
    }
    
    public function addmmaintain(){
        $this->display();
    }

    public function insert_maintain_db(){
        session_start();
        $id=$_POST['hidden'];
        if($_SESSION['id']!=$id) {return;}
        $data=array(
            'machineid'=>$_POST['machineid'],
            'type'=>$_POST['type'],
            'reason'=>$_POST['reason'],
            'operator'=>$_POST['operator'],
            'date'=>$_POST['date']
        );
        $db=M('processmaintain');
        $res=$db->add($data);
        if($res){
            $ajaxData['info']='数据添加成功';
        	$ajaxData['url']=U('__APP__/Process/Equip/maintain');
        	$ajaxData['status']=1;
        	$this->ajaxReturn($ajaxData,'JSON');
        }
        else{
            $ajaxData['url']=U('__APP__/Process/Equip/addMaintain');
			$ajaxData['info']='数据添加失败';
			$ajaxData['status']=0;
            $this->ajaxReturn($ajaxData,'JSON');
        }
    }
	
  }

?>