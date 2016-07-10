<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/5/1
 * Time: 15:21
 */
class FarmlandAction extends Action{
    /**农田基本信息      start     **/
    public function plantfarmland()
    {
        // Model实例化对象 = M(表名);
        $plantfarmland = M('plantfarmland');
        // 查询
        // 分页类
        import('ORG.Util.Page');
        $keywords = $_GET['farmlandid'];
        $map = "farmlandid like '%$keywords%'";
        $count = $plantfarmland->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count, 4);// 实例化分页类 传入总记录数
        $show = $Page->show();// 分页显示输出
        $list = $plantfarmland->where($map)->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('data', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        $this->display(); // 输出模板


    }

//修改数据
    public function updatefarmland()
    {
        $plantfarmland = M('plantfarmland');  //选表
        $data['id'] = $_POST['id'];
        $data['farmlandid'] = $_POST['farmlandid'];
        $data['site'] = $_POST['site'];
        $data['area'] = $_POST['area'];
        $data['head'] = $_POST['head'];
        $count = $plantfarmland->save($data);
        if ($count) {
            $this->success('数据修改成功', '__APP__/Plant/Farmland/plantfarmland');
        } else {
            $this->error('数据修改失败');
        }
    }

//显示修改页面
    public function modifyfarmland()
    {
        $id = $_GET['id'];
        $plantfarmland = M('plantfarmland');  //选表
        $arr = $plantfarmland->find($id);
        $this->assign('data', $arr);
        $this->display();
    }

//删除数据
    public function deletefarmland()
    {
        $plantfarmland = M('plantfarmland');  //选表
        $id = $_GET['id'];
        $count = $plantfarmland->delete($id);
        if ($count) {
            $this->success('数据删除成功', '__APP__/Plant/Farmland/plantfarmland');
        } else {
            $this->error('数据删除失败');
        }
    }

    public function addfarmland()
    {
        $this->display();
    }

    public function insert_database_farmland()
    {
        session_start();
        $id = $_POST['hidden'];
        if ($_SESSION['id'] != $id) {
            return;
        }
        $data = array(
            'farmlandid' => $_POST['farmlandid'],
            'site' => $_POST['site'],
            'model' => $_POST['model'],
            'area' => $_POST['area'],
            'head' => $_POST['head'],
        );
        $db = M('plantfarmland');
        $res = $db->add($data);
        if ($res) {
            $ajaxData['info'] = '数据添加成功';
            $ajaxData['url'] = U('__APP__/Plant/Farmland/plantfarmland');
            $ajaxData['status'] = 1;
            $this->ajaxReturn($ajaxData, 'JSON');
        } else {
            $ajaxData['url'] = U('__APP__/Plant/Farmland/addfarmland');
            $ajaxData['info'] = '数据添加失败';
            $ajaxData['status'] = 0;
            $this->ajaxReturn($ajaxData, 'JSON');
        }
    }
    /**农田基本信息      end     **/

    /**农田环境信息      start     **/
    public function environment()
    {
        $db = M('plantfarmland-environment-info');
        import('ORG.Util.Page');
        $keywords = $_GET['farmlandid'];
        $map = "farmlandid like '%$keywords%'";
        $count = $db->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count, 4);// 实例化分页类 传入总记录数
        $show = $Page->show();// 分页显示输出
        $list = $db->where($map)->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('data', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        $this->display(); // 输出模板


    }

//修改数据
    public function updateenvironment()
    {
        $db = M('plantfarmland-environment-info ');  //选表
        $data['id'] = $_POST['id'];
        $data['farmlandid'] = $_POST['farmlandid'];
        $data['meteorologicalid'] = $_POST['meteorologicalid'];
        $data['soilid'] = $_POST['soilid'];
        $data['waterid'] = $_POST['waterid'];
        $data['date'] = $_POST['date'];
        $count = $db->save($data);
        if ($count) {
            $this->success('数据修改成功', '__APP__/Plant/Farmland/environment');
        } else {
            $this->error('数据修改失败');
        }
    }

//显示修改页面
    public function modifyenvironment()
    {
        $id = $_GET['id'];
        $db = M('plantfarmland-environment-info ');  //选表
        $arr = $db->find($id);
        $this->assign('data', $arr);
        $this->display();
    }

//删除数据
    public function deleteenvironment()
    {
        $db = M('plantfarmland-environment-info');  //选表
        $id = $_GET['id'];
        $count = $db->delete($id);
        if ($count) {
            $this->success('数据删除成功', '__APP__/Plant/Farmland/environment');
        } else {
            $this->error('数据删除失败');
        }
    }

    public function addenvironment()
    {
        $this->display();
    }

    public function insert_database_environment()
    {
        session_start();
        $id = $_POST['hidden'];
        if ($_SESSION['id'] != $id) {
            return;
        }
        $data = array(
            'farmlandid' => $_POST['farmlandid'],
            'meteorologicalid' => $_POST['meteorologicalid'],
            'soilid' => $_POST['soilid'],
            'waterid' => $_POST['waterid'],
            'date' => $_POST['date'],
        );
        $db = M('plantfarmland-environment-info');
        $res = $db->add($data);
        if ($res) {
            $ajaxData['info'] = '数据添加成功';
            $ajaxData['url'] = U('__APP__/Plant/Farmland/environment');
            $ajaxData['status'] = 1;
            $this->ajaxReturn($ajaxData, 'JSON');
        } else {
            $ajaxData['url'] = U('__APP__/Plant/Farmland/addenvironment');
            $ajaxData['info'] = '数据添加失败';
            $ajaxData['status'] = 0;
            $this->ajaxReturn($ajaxData, 'JSON');
        }
    }
    /**农田环境信息      end     **/

    /**农田土壤信息      start     **/
    public function soil()
    {
        $db = M('plantfarmland-soil-info');
        import('ORG.Util.Page');
        $keywords = $_GET['soilid'];
        $map = "soilid like '%$keywords%'";
        $count = $db->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count, 4);// 实例化分页类 传入总记录数
        $show = $Page->show();// 分页显示输出
        $list = $db->where($map)->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('data', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        $this->display(); // 输出模板


    }

//修改数据
    public function updatesoil()
    {
        $db = M('plantfarmland-soil-info ');  //选表
        $data['id'] = $_POST['id'];
        $data['soilid'] = $_POST['soilid'];
        $data['soiltemp'] = $_POST['soiltemp'];
        $data['soilhumidity'] = $_POST['soilhumidity'];
        $data['PH'] = $_POST['PH'];
        $data['N'] = $_POST['N'];
        $data['others'] = $_POST['others'];
        $data['date'] = $_POST['date'];
        $count = $db->save($data);
        if ($count) {
            $this->success('数据修改成功', '__APP__/Plant/Farmland/soil');
        } else {
            $this->error('数据修改失败');
        }
    }

//显示修改页面
    public function modifysoil()
    {
        $id = $_GET['id'];
        $db = M('plantfarmland-soil-info ');  //选表
        $arr = $db->find($id);
        $this->assign('data', $arr);
        $this->display();
    }

//删除数据
    public function deletesoil()
    {
        $db = M('plantfarmland-soil-info');  //选表
        $id = $_GET['id'];
        $count = $db->delete($id);
        if ($count) {
            $this->success('数据删除成功', '__APP__/Plant/Farmland/soil');
        } else {
            $this->error('数据删除失败');
        }
    }

    public function addsoil()
    {
        $this->display();
    }

    public function insert_database_soil()
    {
        session_start();
        $id = $_POST['hidden'];
        if ($_SESSION['id'] != $id) {
            return;
        }
        $data = array(
            'soilid' => $_POST['soilid'],
            'soiltemp' => $_POST['soiltemp'],
            'soilhumidity' => $_POST['soilhumidity'],
            'PH' => $_POST['PH'],
            'N' => $_POST['N'],
            'others' => $_POST['others'],
            'date' => $_POST['date'],
        );
        $db = M('plantfarmland-soil-info');
        $res = $db->add($data);
        if ($res) {
            $ajaxData['info'] = '数据添加成功';
            $ajaxData['url'] = U('__APP__/Plant/Farmland/soil');
            $ajaxData['status'] = 1;
            $this->ajaxReturn($ajaxData, 'JSON');
        } else {
            $ajaxData['url'] = U('__APP__/Plant/Farmland/addsoil');
            $ajaxData['info'] = '数据添加失败';
            $ajaxData['status'] = 0;
            $this->ajaxReturn($ajaxData, 'JSON');
        }
    }
    /**农田土壤信息      end     **/
}
?>