<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/4/25
 * Time: 22:36
 */
/*----种子基本信息  start   --------*/
class SeedAction extends Action
{
    public function  seedinginfo()
    {
        $seedinginfo = M('seedinginfo');
        import('ORG.Util.Page');
        $keywords = $_GET['seedid'];
        $map = "seedid like '%$keywords%'";
        $count = $seedinginfo->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count, 4);// 实例化分页类 传入总记录数
        $show = $Page->show();// 分页显示输出
        $list = $seedinginfo->where($map)->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('data', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        $this->display(); // 输出模板
    }

    //修改数据
    public function updateinfo()
    {
        $seedinginfo = M('seedinginfo');  //选表
        $data['id'] = $_POST['id'];
        $data['seedid'] = $_POST['seedid'];
        $data['varieties'] = $_POST['varieties'];
        $data['type'] = $_POST['type'];
        $data['weight'] = $_POST['weight'];
        $data['price'] = $_POST['price'];
        $data['source'] = $_POST['source'];
        $data['worker'] = $_POST['worker'];
        $data['buydate'] = $_POST['buydate'];
        $data['Seedproductiondate'] = $_POST['Seedproductiondate'];
        $count = $seedinginfo->save($data);
        if ($count) {
            $this->success('数据修改成功', '__APP__/Seedlings/Seed/seedinginfo');
        } else {
            $this->error('数据修改失败');
        }
    }

    //显示修改页面
    public function modifyinfo()
    {
        $id = $_GET['id'];
        $seedinginfo = M('seedinginfo');  //选表
        $arr = $seedinginfo->find($id);
        $this->assign('data', $arr);
        $this->display();
    }

    //删除数据
    public function deleteinfo()
    {
        $seedinginfo = M('seedinginfo');  //选表
        $id = $_GET['id'];
        $count = $seedinginfo->delete($id);
        if ($count) {
            $this->success('数据删除成功');
        } else {
            $this->error('数据删除失败');
        }
    }

    //显示添加页面
    public function addinfo()
    {
        $this->display();
    }

    public function insert_database_info()
    {
        session_start();
        $id = $_POST['hidden'];
        if ($_SESSION['id'] != $id) {
            return;
        }
        $data = array(
            'seedid' => $_POST['seedid'],
            'varieties' => $_POST['varieties'],
            'type' => $_POST['type'],
            'weight' => $_POST['weight'],
            'price' => $_POST['price'],
            'source' => $_POST['source'],
            'worker' => $_POST['worker'],
            'buydate' => $_POST['buydate'],
            'Seedproductiondate' => $_POST['Seedproductiondate'],
        );
        $db = M('seedinginfo');
        $res = $db->add($data);
        if ($res) {
            $ajaxData['info'] = '数据添加成功';
            $ajaxData['url'] = U('__APP__/Seedlings/Seed/seedinginfo');
            $ajaxData['status'] = 1;
            $this->ajaxReturn($ajaxData, 'JSON');
        } else {
            $ajaxData['url'] = U('__APP__/Seedlings/Seed/addinfo');
            $ajaxData['info'] = '数据添加失败';
            $ajaxData['status'] = 0;
            $this->ajaxReturn($ajaxData, 'JSON');
        }
    }
    /*----种子基本信息  end   --------*/
    /*----种子质量信息  start   --------*/

    public function  seedqualityinfo()
    {
        $seedqualityinfo = M('seedqualityinfo');
        import('ORG.Util.Page');
        $keywords = $_GET['seedid'];
        $map = "seedid like '%$keywords%'";
        $count = $seedqualityinfo->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count, 4);// 实例化分页类 传入总记录数
        $show = $Page->show();// 分页显示输出
        $list = $seedqualityinfo->where($map)->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('data', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        $this->display(); // 输出模板
    }

    //修改数据
    public function updatequalityinfo()
    {
        $seedqualityinfo = M('seedqualityinfo');  //选表
        $data['id'] = $_POST['id'];
        $data['seedid'] = $_POST['seedid'];
        $data['germinationrate'] = $_POST['germinationrate'];
        $data['germinationindex'] = $_POST['germinationindex'];
        $data['germinationpotential'] = $_POST['germinationpotential'];
        $data['weight'] = $_POST['weight'];
        $data['indicators'] = $_POST['indicators'];
        $count = $seedqualityinfo->save($data);
        if ($count) {
            $this->success('数据修改成功', '__APP__/Seedlings/Seed/seedqualityinfo');
        } else {
            $this->error('数据修改失败');
        }
    }

    //显示修改页面
    public function modifyqualityinfo()
    {
        $id = $_GET['id'];
        $seedqualityinfo = M('seedqualityinfo');  //选表
        $arr = $seedqualityinfo->find($id);
        $this->assign('data', $arr);
        $this->display();
    }

    //删除数据
    public function deletequalityinfo()
    {
        $seedqualityinfo = M('seedqualityinfo');  //选表
        $id = $_GET['id'];
        $count = $seedqualityinfo->delete($id);
        if ($count) {
            $this->success('数据删除成功');
        } else {
            $this->error('数据删除失败');
        }
    }

    //显示添加页面
    public function addqualityinfo()
    {
        $this->display();
    }

    public function insert_database_qualityinfo()
    {
        session_start();
        $id = $_POST['hidden'];
        if ($_SESSION['id'] != $id) {
            return;
        }
        $data = array(
            'seedid' => $_POST['seedid'],
            'germinationrate' => $_POST['germinationrate'],
            'germinationindex' => $_POST['germinationindex'],
            'germinationpotential' => $_POST['germinationpotential'],
            'weight' => $_POST['weight'],
            'indicators' => $_POST['indicators'],
        );
        $db = M('seedqualityinfo');
        $res = $db->add($data);
        if ($res) {
            $ajaxData['info'] = '数据添加成功';
            $ajaxData['url'] = U('__APP__/Seedlings/Seed/seedqualityinfo');
            $ajaxData['status'] = 1;
            $this->ajaxReturn($ajaxData, 'JSON');
        } else {
            $ajaxData['url'] = U('__APP__/Seedlings/Seed/addqualityinfo');
            $ajaxData['info'] = '数据添加失败';
            $ajaxData['status'] = 0;
            $this->ajaxReturn($ajaxData, 'JSON');
        }
    }
    /*----种子质量信息  end   --------*/
    /*----浸种操作信息  start   --------*/
    public function  soakoperate()
    {
        $seedsoakoperate = M('seedsoakoperate');
        import('ORG.Util.Page');
        $keywords = $_GET['seedid'];
        $map = "seedid like '%$keywords%'";
        $count = $seedsoakoperate->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count, 4);// 实例化分页类 传入总记录数
        $show = $Page->show();// 分页显示输出
        $list = $seedsoakoperate->where($map)->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('data', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        $this->display(); // 输出模板
    }

    //修改数据
    public function updatesoakoperate()
    {
        $seedsoakoperate = M('seedsoakoperate');  //选表
        $data['id'] = $_POST['id'];
        $data['seedid'] = $_POST['seedid'];
        $data['drugid'] = $_POST['drugid'];
        $data['concentration'] = $_POST['concentration'];
        $data['startdate'] = $_POST['startdate'];
        $data['enddate'] = $_POST['enddate'];
        $data['operator'] = $_POST['operator'];
        $count = $seedsoakoperate->save($data);
        if ($count) {
            $this->success('数据修改成功', '__APP__/Seedlings/Seed/soakoperate');
        } else {
            $this->error('数据修改失败');
        }
    }

    //显示修改页面
    public function modifysoakoperate()
    {
        $id = $_GET['id'];
        $seedsoakoperate = M('seedsoakoperate');  //选表
        $arr = $seedsoakoperate->find($id);
        $this->assign('data', $arr);
        $this->display();
    }

    //删除数据
    public function deletesoakoperate()
    {
        $seedsoakoperate = M('seedsoakoperate');  //选表
        $id = $_GET['id'];
        $count = $seedsoakoperate->delete($id);
        if ($count) {
            $this->success('数据删除成功');
        } else {
            $this->error('数据删除失败');
        }
    }

    //显示添加页面
    public function addsoakoperate()
    {
        $this->display();
    }

    public function insert_database_soakoperate()
    {
        session_start();
        $id = $_POST['hidden'];
        if ($_SESSION['id'] != $id) {
            return;
        }
        $data = array(
            'seedid' => $_POST['seedid'],
            'drugid' => $_POST['drugid'],
            'concentration' => $_POST['concentration'],
            'startdate' => $_POST['startdate'],
            'enddate' => $_POST['enddate'],
            'operator' => $_POST['operator'],
        );
        $db = M('seedsoakoperate');
        $res = $db->add($data);
        if ($res) {
            $ajaxData['info'] = '数据添加成功';
            $ajaxData['url'] = U('__APP__/Seedlings/Seed/soakoperate');
            $ajaxData['status'] = 1;
            $this->ajaxReturn($ajaxData, 'JSON');
        } else {
            $ajaxData['url'] = U('__APP__/Seedlings/Seed/addsoakoperate');
            $ajaxData['info'] = '数据添加失败';
            $ajaxData['status'] = 0;
            $this->ajaxReturn($ajaxData, 'JSON');
        }
    }
    /*----浸种操作信息  end   --------*/

    /*----暗化操作信息  start   --------*/
    public function  seeddarkening()
    {
        $seeddarkening = M('seeddarkening');
        import('ORG.Util.Page');
        $keywords = $_GET['trayid'];
        $map = "trayid like '%$keywords%'";
        $count = $seeddarkening->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count, 4);// 实例化分页类 传入总记录数
        $show = $Page->show();// 分页显示输出
        $list = $seeddarkening->where($map)->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('data', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        $this->display(); // 输出模板
    }

    //修改数据
    public function updatedarkening()
    {
        $seeddarkening = M('seeddarkening');  //选表
        $data['id'] = $_POST['id'];
        $data['trayid'] = $_POST['trayid'];
        $data['trayamount'] = $_POST['trayamount'];
        $data['traysite'] = $_POST['traysite'];
        $data['startdate'] = $_POST['startdate'];
        $data['enddate'] = $_POST['enddate'];
        $count = $seeddarkening->save($data);
        if ($count) {
            $this->success('数据修改成功', '__APP__/Seedlings/Seed/seeddarkening');
        } else {
            $this->error('数据修改失败');
        }
    }

    //显示修改页面
    public function modifydarkening()
    {
        $id = $_GET['id'];
        $seeddarkening = M('seeddarkening');  //选表
        $arr = $seeddarkening->find($id);
        $this->assign('data', $arr);
        $this->display();
    }

    //删除数据
    public function deletedarkening()
    {
        $seeddarkening = M('seeddarkening');  //选表
        $id = $_GET['id'];
        $count = $seeddarkening->delete($id);
        if ($count) {
            $this->success('数据删除成功');
        } else {
            $this->error('数据删除失败');
        }
    }

    //显示添加页面
    public function adddarkening()
    {
        $this->display();
    }

    public function insert_database_darkening()
    {
        session_start();
        $id = $_POST['hidden'];
        if ($_SESSION['id'] != $id) {
            return;
        }
        $data = array(
            'trayid' => $_POST['trayid'],
            'trayamount' => $_POST['trayamount'],
            'traysite' => $_POST['traysite'],
            'startdate' => $_POST['startdate'],
            'enddate' => $_POST['enddate'],
        );
        $db = M('seeddarkening');
        $res = $db->add($data);
        if ($res) {
            $ajaxData['info'] = '数据添加成功';
            $ajaxData['url'] = U('__APP__/Seedlings/Seed/seeddarkening');
            $ajaxData['status'] = 1;
            $this->ajaxReturn($ajaxData, 'JSON');
        } else {
            $ajaxData['url'] = U('__APP__/Seedlings/Seed/adddarkening');
            $ajaxData['info'] = '数据添加失败';
            $ajaxData['status'] = 0;
            $this->ajaxReturn($ajaxData, 'JSON');
        }
    }
    /*----暗化操作信息  end   --------*/
}
?>