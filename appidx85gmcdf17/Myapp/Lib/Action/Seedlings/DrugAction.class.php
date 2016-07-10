<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/4/25
 * Time: 22:37
 */
/*----药品基本信息  start   --------*/
class DrugAction extends Action
{
    public function  druginfo()
    {
        $seeddruginfo = M('seeddruginfo');
        import('ORG.Util.Page');
        $keywords = $_GET['drugid'];
        $map = "drugid like '%$keywords%'";
        $count = $seeddruginfo->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count, 4);// 实例化分页类 传入总记录数
        $show = $Page->show();// 分页显示输出
        $list = $seeddruginfo->where($map)->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('data', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        $this->display(); // 输出模板
    }

    //修改数据
    public function updatedruginfo()
    {
        $seeddruginfo = M('seeddruginfo');  //选表
        $data['id'] = $_POST['id'];
        $data['drugid'] = $_POST['drugid'];
        $data['drugname'] = $_POST['drugname'];
        $data['prostandard'] = $_POST['prostandard'];
        $data['dosageform'] = $_POST['dosageform'];
        $data['function'] = $_POST['function'];
        $count = $seeddruginfo->save($data);
        if ($count) {
            $this->success('数据修改成功', '__APP__/Seedlings/Drug/druginfo');
        } else {
            $this->error('数据修改失败');
        }
    }

    //显示修改页面
    public function modifydruginfo()
    {
        $id = $_GET['id'];
        $seeddruginfo = M('seeddruginfo');  //选表
        $arr = $seeddruginfo->find($id);
        $this->assign('data', $arr);
        $this->display();
    }

    //删除数据
    public function deletedruginfo()
    {
        $seeddruginfo = M('seeddruginfo');  //选表
        $id = $_GET['id'];
        $count = $seeddruginfo->delete($id);
        if ($count) {
            $this->success('数据删除成功');
        } else {
            $this->error('数据删除失败');
        }
    }

    //显示添加页面
    public function adddruginfo()
    {
        $this->display();
    }

    public function insert_database_druginfo()
    {
        session_start();
        $id = $_POST['hidden'];
        if ($_SESSION['id'] != $id) {
            return;
        }
        $data = array(
            'drugid' => $_POST['drugid'],
            'drugname' => $_POST['drugname'],
            'prostandard' => $_POST['prostandard'],
            'dosageform' => $_POST['dosageform'],
            'function' => $_POST['function'],
        );
        $db = M('seeddruginfo');
        $res = $db->add($data);
        if ($res) {
            $ajaxData['info'] = '数据添加成功';
            $ajaxData['url'] = U('__APP__/Seedlings/Drug/druginfo');
            $ajaxData['status'] = 1;
            $this->ajaxReturn($ajaxData, 'JSON');
        } else {
            $ajaxData['url'] = U('__APP__/Seedlings/Drug/adddruginfo');
            $ajaxData['info'] = '数据添加失败';
            $ajaxData['status'] = 0;
            $this->ajaxReturn($ajaxData, 'JSON');
        }
    }
    /*----药品基本信息  end   --------*/
    /*----药品操作信息  start   --------*/

    public function  sprayoperate()
    {
        $seedsprayoperate = M('seedsprayoperate');
        import('ORG.Util.Page');
        $keywords = $_GET['seedid'];
        $map = "seedid like '%$keywords%'";
        $count = $seedsprayoperate->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count, 4);// 实例化分页类 传入总记录数
        $show = $Page->show();// 分页显示输出
        $list = $seedsprayoperate->where($map)->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('data', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        $this->display(); // 输出模板
    }

    //修改数据
    public function updateSprayoperate()
    {
        $seedsprayoperate = M('seedsprayoperate');  //选表
        $data['id'] = $_POST['id'];
        $data['seedid'] = $_POST['seedid'];
        $data['drugid'] = $_POST['drugid'];
        $data['amount'] = $_POST['amount'];
        $data['date'] = $_POST['date'];
        $data['operator'] = $_POST['operator'];
        $count = $seedsprayoperate->save($data);
        if ($count) {
            $this->success('数据修改成功', '__APP__/Seedlings/Drug/sprayoperate');
        } else {
            $this->error('数据修改失败');
        }
    }

    //显示修改页面
    public function modifysprayoperate()
    {
        $id = $_GET['id'];
        $seedsprayoperate = M('seedsprayoperate');  //选表
        $arr = $seedsprayoperate->find($id);
        $this->assign('data', $arr);
        $this->display();
    }

    //删除数据
    public function deletesprayoperate()
    {
        $seedsprayoperate = M('seedsprayoperate');  //选表
        $id = $_GET['id'];
        $count = $seedsprayoperate->delete($id);
        if ($count) {
            $this->success('数据删除成功');
        } else {
            $this->error('数据删除失败');
        }
    }

    //显示添加页面
    public function addsprayoperate()
    {
        $this->display();
    }

    public function insert_database_sprayoperate()
    {
        session_start();
        $id = $_POST['hidden'];
        if ($_SESSION['id'] != $id) {
            return;
        }
        $data = array(
            'seedid' => $_POST['seedid'],
            'drugid' => $_POST['drugid'],
            'amount' => $_POST['amount'],
            'date' => $_POST['date'],
            'operator' => $_POST['operator'],
        );
        $db = M('seedsprayoperate');
        $res = $db->add($data);
        if ($res) {
            $ajaxData['info'] = '数据添加成功';
            $ajaxData['url'] = U('__APP__/Seedlings/Drug/sprayoperate');
            $ajaxData['status'] = 1;
            $this->ajaxReturn($ajaxData, 'JSON');
        } else {
            $ajaxData['url'] = U('__APP__/Seedlings/Drug/addsprayoperte');
            $ajaxData['info'] = '数据添加失败';
            $ajaxData['status'] = 0;
            $this->ajaxReturn($ajaxData, 'JSON');
        }
    }
    /*----药品操作信息  end   --------*/
}
?>