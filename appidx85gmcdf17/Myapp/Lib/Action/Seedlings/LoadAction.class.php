<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/3/30
 * Time: 9:07
 */
    class LoadAction extends Action{
        function verify_load(){
            $this->display("Load/admin");
            exit;
        }
        /*
         * 验证用户登录
         */

        function verify(){
            $db=D("admin");
            $where=array("id"=>$_POST['id'],"psw"=>md5($_POST['password']));
            $data=$db->where($where)->find();
            session_start();
            if($data){
                if($_SESSION['verify'] != md5($_POST['code'])) {
                    $this->error('验证码错误！');
                    $this->redirect("/Load/verify_load",'Fail',2);
                }else {
                    $_SESSION['load'] = 1;
                    $_SESSION['user'] = $data['name'];//将登录成功的用户名放入session
                    $_SESSION['userid'] = $data['id'];
                    $this->redirect("/Load/show", "", 0);
                }
            }else{
                $_SESSION['load']=0;
                $this->error('密码错误！');
                $this->redirect("/Load/verify_load",'Fail',2);
            }
        }

		public function logout() {
			session('user',null);
			$this->redirect('/Load/verify_load');//登出后重定向到登录页面
		}
		
		public function show() {
			$db=M("environment");
			//节点1数据
			$where['type']='eS1201';
			$where['node']='4.000000';
            $temperature1=$db->field('temperature')->order('time desc')->limit(7)->where($where)->select();
            $humidity1=$db->field('humidity')->order('time desc')->limit(7)->where($where)->select();
            $dewPoint1=$db->field('dewPoint')->order('time desc')->limit(7)->where($where)->select();
            $where['type']='eS1401';
            $solarRadiation1=$db->field('solarRadiation')->order('time desc')->limit(7)->where($where)->select();
            $where['type']='eS1301';
            $leafWetness1=$db->field('leafWetness')->order('time desc')->limit(7)->where($where)->select();
            $where['type']='eS1110';
            $soilWaterContent1=$db->field('soilWaterContent')->order('time desc')->limit(7)->where($where)->select();
            //节点2数据
			$where['type']='eS1201';
			$where['node']='5.000000';
            $temperature2=$db->field('temperature')->order('time desc')->limit(7)->where($where)->select();
            $humidity2=$db->field('humidity')->order('time desc')->limit(7)->where($where)->select();
            $dewPoint2=$db->field('dewPoint')->order('time desc')->limit(7)->where($where)->select();
            $where['type']='eS1401';
            $solarRadiation2=$db->field('solarRadiation')->order('time desc')->limit(7)->where($where)->select();
            $where['type']='eS1301';
            $leafWetness2=$db->field('leafWetness')->order('time desc')->limit(7)->where($where)->select();
            $where['type']='eS1110';
            $soilWaterContent2=$db->field('soilWaterContent')->order('time desc')->limit(7)->where($where)->select();
            $this->assign('temperature1',$temperature1);
            $this->assign('humidity1',$humidity1);
            $this->assign('dewPoint1',$dewPoint1);
            $this->assign('solarRadiation1',$solarRadiation1);
            $this->assign('leafWetness1',$leafWetness1);
            $this->assign('soilWaterContent1',$soilWaterContent1);
            $this->assign('temperature2',$temperature2);
            $this->assign('humidity2',$humidity2);
            $this->assign('dewPoint2',$dewPoint2);
            $this->assign('solarRadiation2',$solarRadiation2);
            $this->assign('leafWetness2',$leafWetness2);
            $this->assign('soilWaterContent2',$soilWaterContent2);
			$this->display();
		}
    }
?>