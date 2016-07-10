<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/4/25
 * Time: 22:38
 */
/*----药品基本信息  start   --------*/
class SeedlingAction extends Action
{
    public function  operate()
    {
        $seedingoperate = M('seedingoperate');
        import('ORG.Util.Page');
        $keywords = $_GET['trayid'];
        $map = "trayid like '%$keywords%'";
        $count = $seedingoperate->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count, 4);// 实例化分页类 传入总记录数
        $show = $Page->show();// 分页显示输出
        $list = $seedingoperate->where($map)->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('data', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        $this->display(); // 输出模板
    }

    //修改数据
    public function updateoperate()
    {
        $seedingoperate = M('seedingoperate');  //选表
        $data['id'] = $_POST['id'];
        $data['trayid'] = $_POST['trayid'];
        $data['place'] = $_POST['place'];
        $data['seedingid'] = $_POST['seedingid'];
        $data['startdate'] = $_POST['startdate'];
        $data['enddate'] = $_POST['enddate'];
        $count = $seedingoperate->save($data);
        if ($count) {
            $this->success('数据修改成功', '__APP__/Seedlings/Seedling/operate');
        } else {
            $this->error('数据修改失败');
        }
    }

    //显示修改页面
    public function modifyoperate()
    {
        $id = $_GET['id'];
        $seedingoperate = M('seedingoperate');  //选表
        $arr = $seedingoperate->find($id);
        $this->assign('data', $arr);
        $this->display();
    }

    //删除数据
    public function deleteoperate()
    {
        $seedingoperate = M('seedingoperate');  //选表
        $id = $_GET['id'];
        $count = $seedingoperate->delete($id);
        if ($count) {
            $this->success('数据删除成功');
        } else {
            $this->error('数据删除失败');
        }
    }

    //显示添加页面
    public function addoperate()
    {
        $this->display();
    }

    public function insert_database_operate()
    {
        session_start();
        $id = $_POST['hidden'];
        if ($_SESSION['id'] != $id) {
            return;
        }
        $data = array(
            'trayid' => $_POST['trayid'],
            'place' => $_POST['place'],
            'seedingid' => $_POST['seedingid'],
            'startdate' => $_POST['startdate'],
            'enddate' => $_POST['enddate'],
        );
        $db = M('seedingoperate');
        $res = $db->add($data);
        if ($res) {
            $ajaxData['info'] = '数据添加成功';
            $ajaxData['url'] = U('__APP__/Seedlings/Seedling/operate');
            $ajaxData['status'] = 1;
            $this->ajaxReturn($ajaxData, 'JSON');
        } else {
            $ajaxData['url'] = U('__APP__/Seedlings/Seedling/addoperate');
            $ajaxData['info'] = '数据添加失败';
            $ajaxData['status'] = 0;
            $this->ajaxReturn($ajaxData, 'JSON');
        }
    }
    /*----药品基本信息  end   --------*/
    /*----秧苗基本信息  start   --------*/

    public function  seedseedinginfo()
    {
        $seedseedinginfo = M('seedseedinginfo');
        import('ORG.Util.Page');
        $keywords = $_GET['seedingid'];
        $map = "seedingid like '%$keywords%'";
        $count = $seedseedinginfo->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count, 4);// 实例化分页类 传入总记录数
        $show = $Page->show();// 分页显示输出
        $list = $seedseedinginfo->where($map)->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('data', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        $this->display(); // 输出模板
    }

    //修改数据
    public function updateseedinginfo()
    {
        $seedseedinginfo = M('seedseedinginfo');  //选表
        $data['id'] = $_POST['id'];
        $data['seedingid'] = $_POST['seedingid'];
        $data['density'] = $_POST['density'];
        $data['high'] = $_POST['high'];
        $data['leafnumber'] = $_POST['leafnumber'];
        $data['leaflength'] = $_POST['leaflength'];
        $data['leafwidth']  = $_POST['leafwidth'];
        $data['leafcolor'] = $_POST['leafcolor'];
        $data['leafthickness'] = $_POST['leafthickness'];
        $data['rootlength'] = $_POST['rootlength'];
        $data['date'] = $_POST['date'];
        $count = $seedseedinginfo->save($data);
        if ($count) {
            $this->success('数据修改成功', '__APP__/Seedlings/Seedling/seedseedinginfo');
        } else {
            $this->error('数据修改失败');
        }
    }

    //显示修改页面
    public function modifyseedinginfo()
    {
        $id = $_GET['id'];
        $seedseedinginfo = M('seedseedinginfo');  //选表
        $arr = $seedseedinginfo->find($id);
        $this->assign('data', $arr);
        $this->display();
    }

    //删除数据
    public function deleteseedinginfo()
    {
        $seedseedinginfo = M('seedseedinginfo');  //选表
        $id = $_GET['id'];
        $count = $seedseedinginfo->delete($id);
        if ($count) {
            $this->success('数据删除成功');
        } else {
            $this->error('数据删除失败');
        }
    }

    //显示添加页面
    public function addseedinginfo()
    {
        $this->display();
    }

    public function insert_database_seedinginfo()
    {
        session_start();
        $id = $_POST['hidden'];
        if ($_SESSION['id'] != $id) {
            return;
        }
        $data = array(
            'seedingid' => $_POST['seedingid'],
            'density' => $_POST['density'],
            'high' => $_POST['high'],
            'leafnumber' => $_POST['leafnumber'],
            'leaflength' => $_POST['leaflength'],
            'leafwidth' => $_POST['leafwidth'],
            'leafcolor' => $_POST['leafcolor'],
            'leafthickness' => $_POST['leafthickness'],
            'rootlength' => $_POST['rootlength'],
            'date' => $_POST['date'],
        );
        $db = M('seedseedinginfo');
        $res = $db->add($data);
        if ($res) {
            $ajaxData['info'] = '数据添加成功';
            $ajaxData['url'] = U('__APP__/Seedlings/Seedling/seedseedinginfo');
            $ajaxData['status'] = 1;
            $this->ajaxReturn($ajaxData, 'JSON');
        } else {
            $ajaxData['url'] = U('__APP__/Seedlings/Seedling/addseedinginfo');
            $ajaxData['info'] = '数据添加失败';
            $ajaxData['status'] = 0;
            $this->ajaxReturn($ajaxData, 'JSON');
        }
    }
    /*----秧苗基本信息  end   --------*/
}
?>