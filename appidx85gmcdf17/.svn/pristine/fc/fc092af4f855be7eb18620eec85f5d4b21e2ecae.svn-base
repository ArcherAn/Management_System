<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/5/1
 * Time: 15:22
 */
/*----取苗种植信息  start   --------*/
class PlantingAction extends Action{
    public function take(){
        $db = M('planttake');
        import('ORG.Util.Page');
        $keywords = $_GET['seedid'];
        $map = "seedid like '%$keywords%'";
        $count = $db->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count, 4);// 实例化分页类 传入总记录数
        $show = $Page->show();// 分页显示输出
        $list = $db->where($map)->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('data', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        $this->display(); // 输出模板

    }
    //修改数据
    public function updatetake()
    {
        $db = M('planttake ');  //选表
        $data['id'] = $_POST['id'];
        $data['seedid'] = $_POST['seedid'];
        $data['farmlandid'] = $_POST['farmlandid'];
        $data['operator'] = $_POST['operator'];
        $data['date'] = $_POST['date'];
        $count = $db->save($data);
        if ($count) {
            $this->success('数据修改成功', '__APP__/Plant/Planting/take');
        } else {
            $this->error('数据修改失败');
        }
    }

//显示修改页面
    public function modifytake()
    {
        $id = $_GET['id'];
        $db = M('planttake ');  //选表
        $arr = $db->find($id);
        $this->assign('data', $arr);
        $this->display();
    }

//删除数据
    public function deletetake()
    {
        $db = M('planttake');  //选表
        $id = $_GET['id'];
        $count = $db->delete($id);
        if ($count) {
            $this->success('数据删除成功', '__APP__/Plant/Planting/take');
        } else {
            $this->error('数据删除失败');
        }
    }

    public function addtake()
    {
        $this->display();
    }

    public function insert_database_take()
    {
        session_start();
        $id = $_POST['hidden'];
        if ($_SESSION['id'] != $id) {
            return;
        }
        $data = array(
            'seedid' => $_POST['seedid'],
            'farmlandid' => $_POST['farmlandid'],
            'operator' => $_POST['operator'],
            'date' => $_POST['date'],
        );
        $db = M('planttake');
        $res = $db->add($data);
        if ($res) {
            $ajaxData['info'] = '数据添加成功';
            $ajaxData['url'] = U('__APP__/Plant/Planting/take');
            $ajaxData['status'] = 1;
            $this->ajaxReturn($ajaxData, 'JSON');
        } else {
            $ajaxData['url'] = U('__APP__/Plant/Planting/addtake');
            $ajaxData['info'] = '数据添加失败';
            $ajaxData['status'] = 0;
            $this->ajaxReturn($ajaxData, 'JSON');
        }
    }
    /*----取苗种植信息  end   --------*/

    /*----秧苗长势信息  start   --------*/
    public function zhangshi(){
        $db = M('plantseedinginfo');
        import('ORG.Util.Page');
        $keywords = $_GET['seedingid'];
        $map = "seedingid like '%$keywords%'";
        $count = $db->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count, 4);// 实例化分页类 传入总记录数
        $show = $Page->show();// 分页显示输出
        $list = $db->where($map)->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('data', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        $this->display(); // 输出模板

    }
    //修改数据
    public function updatezhangshi()
    {
        $db = M('plantseedinginfo ');  //选表
        $data['id'] = $_POST['id'];
        $data['seedingid'] = $_POST['seedingid'];
        $data['potential'] = $_POST['potential'];
        $data['density'] = $_POST['density'];
        $data['high'] = $_POST['high'];
        $data['leafnumber'] = $_POST['leafnumber'];
        $data['leaflength'] = $_POST['leaflength'];
        $data['leafwidth'] = $_POST['leafwidth'];
        $data['leafcolor'] = $_POST['leafcolor'];
        $data['leafthickness'] = $_POST['leafthickness'];
        $data['biomass'] = $_POST['biomass'];
        $data['insectpests'] = $_POST['insectpests'];
        $data['date'] = $_POST['date'];
        $count = $db->save($data);
        if ($count) {
            $this->success('数据修改成功', '__APP__/Plant/Planting/zhangshi');
        } else {
            $this->error('数据修改失败');
        }
    }

//显示修改页面
    public function modifyzhangshi()
    {
        $id = $_GET['id'];
        $db = M('plantseedinginfo ');  //选表
        $arr = $db->find($id);
        $this->assign('data', $arr);
        $this->display();
    }

//删除数据
    public function deletezhangshi()
    {
        $db = M('plantseedinginfo');  //选表
        $id = $_GET['id'];
        $count = $db->delete($id);
        if ($count) {
            $this->success('数据删除成功', '__APP__/Plant/Planting/zhangshi');
        } else {
            $this->error('数据删除失败');
        }
    }

    public function addzhangshi()
    {
        $this->display();
    }

    public function insert_database_zhangshi()
    {
        session_start();
        $id = $_POST['hidden'];
        if ($_SESSION['id'] != $id) {
            return;
        }

        $data = array(
            'seedingid' => $_POST['seedingid'],
            'potential' => $_POST['potential'],
            'density' => $_POST['density'],
            'high' => $_POST['high'],
            'leafnumber' => $_POST['leafnumber'],
            'leaflength' => $_POST['leaflength'],
            'leafwidth' => $_POST['leafwidth'],
            'leafcolor' => $_POST['leafcolor'],
            'leafthickness' => $_POST['leafthickness'],
            'biomass' => $_POST['biomass'],
            'insectpests' => $_POST['insectpests'],
            'date' => $_POST['date'],
        );
        $db = M('plantseedinginfo');
        $res = $db->add($data);
        if ($res) {
            $ajaxData['info'] = '数据添加成功';
            $ajaxData['url'] = U('__APP__/Plant/Planting/zhangshi');
            $ajaxData['status'] = 1;
            $this->ajaxReturn($ajaxData, 'JSON');
        } else {
            $ajaxData['url'] = U('__APP__/Plant/Planting/addzhangshi');
            $ajaxData['info'] = '数据添加失败';
            $ajaxData['status'] = 0;
            $this->ajaxReturn($ajaxData, 'JSON');
        }
    }
    /*----秧苗长势信息  end   --------*/

    /*----秧苗生物量信息  start   --------*/
    public function biomassinfo(){
        $db = M('plantbiomassinfo');
        import('ORG.Util.Page');
        $keywords = $_GET['seedingid'];
        $map = "seedingid like '%$keywords%'";
        $count = $db->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count, 4);// 实例化分页类 传入总记录数
        $show = $Page->show();// 分页显示输出
        $list = $db->where($map)->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('data', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        $this->display(); // 输出模板

    }
    //修改数据
    public function updatebiomassinfo()
    {
        $db = M('plantbiomassinfo ');  //选表
        $data['id'] = $_POST['id'];
        $data['seedingid'] = $_POST['seedingid'];
        $data['chlorophyllA'] = $_POST['chlorophyllA'];
        $data['indicators1'] = $_POST['indicators1'];
        $data['indicators2'] = $_POST['indicators2'];
        $data['indicators3'] = $_POST['indicators3'];
        $data['indicators4'] = $_POST['indicators4'];
        $data['date'] = $_POST['date'];
        $count = $db->save($data);
        if ($count) {
            $this->success('数据修改成功', '__APP__/Plant/Planting/biomassinfo');
        } else {
            $this->error('数据修改失败');
        }
    }

    public function modifybiomassinfo()
    {
        $id = $_GET['id'];
        $db = M('plantbiomassinfo ');  //选表
        $arr = $db->find($id);
        $this->assign('data', $arr);
        $this->display();
    }

    public function deletebiomassinfo()
    {
        $db = M('plantbiomassinfo');  //选表
        $id = $_GET['id'];
        $count = $db->delete($id);
        if ($count) {
            $this->success('数据删除成功', '__APP__/Plant/Planting/zhangshi');
        } else {
            $this->error('数据删除失败');
        }
    }

    public function addbiomassinfo()
    {
        $this->display();
    }

    public function insert_database_biomassinfo()
    {
        session_start();
        $id = $_POST['hidden'];
        if ($_SESSION['id'] != $id) {
            return;
        }

        $data = array(
            'seedingid' => $_POST['seedingid'],
            'chlorophyllA' => $_POST['chlorophyllA'],
            'indicators1' => $_POST['indicators1'],
            'indicators2' => $_POST['indicators2'],
            'indicators3' => $_POST['indicators3'],
            'indicators4' => $_POST['indicators4'],
            'date' => $_POST['date'],
        );
        $db = M('plantbiomassinfo');
        $res = $db->add($data);
        if ($res) {
            $ajaxData['info'] = '数据添加成功';
            $ajaxData['url'] = U('__APP__/Plant/Planting/biomassinfo');
            $ajaxData['status'] = 1;
            $this->ajaxReturn($ajaxData, 'JSON');
        } else {
            $ajaxData['url'] = U('__APP__/Plant/Planting/addbiomassinfo');
            $ajaxData['info'] = '数据添加失败';
            $ajaxData['status'] = 0;
            $this->ajaxReturn($ajaxData, 'JSON');
        }
    }
    /*----秧苗生物量信息  end   --------*/

    /*----灌溉操作信息  start   --------*/
    public function tirrigation(){
        $db = M('plantirrigation');
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
    public function updatetirrigation()
    {
        $db = M('plantirrigation ');  //选表
        $data['id'] = $_POST['id'];
        $data['farmlandid'] = $_POST['farmlandid'];
        $data['irrigationarea'] = $_POST['irrigationarea'];
        $data['amount'] = $_POST['amount'];
        $data['operator'] = $_POST['operator'];
        $data['date'] = $_POST['date'];
        $count = $db->save($data);
        if ($count) {
            $this->success('数据修改成功', '__APP__/Plant/Planting/tirrigation');
        } else {
            $this->error('数据修改失败');
        }
    }

    public function modifytirrigation()
    {
        $id = $_GET['id'];
        $db = M('plantirrigation ');  //选表
        $arr = $db->find($id);
        $this->assign('data', $arr);
        $this->display();
    }

    public function deletetirrigation()
    {
        $db = M('plantirrigation');  //选表
        $id = $_GET['id'];
        $count = $db->delete($id);
        if ($count) {
            $this->success('数据删除成功', '__APP__/Plant/Planting/tirrigation');
        } else {
            $this->error('数据删除失败');
        }
    }

    public function addtirrigation()
    {
        $this->display();
    }

    public function insert_database_tirrigation()
    {
        session_start();
        $id = $_POST['hidden'];
        if ($_SESSION['id'] != $id) {
            return;
        }

        $data = array(
            'farmlandid' => $_POST['farmlandid'],
            'irrigationarea' => $_POST['irrigationarea'],
            'amount' => $_POST['amount'],
            'operator' => $_POST['operator'],
            'date' => $_POST['date'],
        );
        $db = M('plantirrigation');
        $res = $db->add($data);
        if ($res) {
            $ajaxData['info'] = '数据添加成功';
            $ajaxData['url'] = U('__APP__/Plant/Planting/tirrigation');
            $ajaxData['status'] = 1;
            $this->ajaxReturn($ajaxData, 'JSON');
        } else {
            $ajaxData['url'] = U('__APP__/Plant/Planting/addtirrigation');
            $ajaxData['info'] = '数据添加失败';
            $ajaxData['status'] = 0;
            $this->ajaxReturn($ajaxData, 'JSON');
        }
    }
    /*----灌溉操作信息  end   --------*/
    /*----施肥操作信息  start   --------*/
    public function fertilization(){
        $db = M('plantfertilization');
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
    public function updatefertilize()
    {
        $db = M('plantfertilization ');  //选表
        $data['id'] = $_POST['id'];
        $data['farmlandid'] = $_POST['farmlandid'];
        $data['name'] = $_POST['name'];
        $data['ingredients1'] = $_POST['ingredients1'];
        $data['ingredients2'] = $_POST['ingredients2'];
        $data['ingredients3'] = $_POST['ingredients3'];
        $data['operator'] = $_POST['operator'];
        $data['date'] = $_POST['date'];
        $count = $db->save($data);
        if ($count) {
            $this->success('数据修改成功', '__APP__/Plant/Planting/fertilization');
        } else {
            $this->error('数据修改失败');
        }
    }

    public function modifyfertilize()
    {
        $id = $_GET['id'];
        $db = M('plantfertilization ');  //选表
        $arr = $db->find($id);
        $this->assign('data', $arr);
        $this->display();
    }

    public function deletefertilize()
    {
        $db = M('plantfertilization');  //选表
        $id = $_GET['id'];
        $count = $db->delete($id);
        if ($count) {
            $this->success('数据删除成功', '__APP__/Plant/Planting/fertilization');
        } else {
            $this->error('数据删除失败');
        }
    }

    public function addfertilize()
    {
        $this->display();
    }

    public function insert_database_fertilize()
    {
        session_start();
        $id = $_POST['hidden'];
        if ($_SESSION['id'] != $id) {
            return;
        }

        $data = array(
            'farmlandid' => $_POST['farmlandid'],
            'name' => $_POST['name'],
            'ingredients1' => $_POST['ingredients1'],
            'ingredients2' => $_POST['ingredients2'],
            'ingredients3' => $_POST['ingredients3'],
            'operator' => $_POST['operator'],
            'date' => $_POST['date'],
        );
        $db = M('plantfertilization');
        $res = $db->add($data);
        if ($res) {
            $ajaxData['info'] = '数据添加成功';
            $ajaxData['url'] = U('__APP__/Plant/Planting/fertilization');
            $ajaxData['status'] = 1;
            $this->ajaxReturn($ajaxData, 'JSON');
        } else {
            $ajaxData['url'] = U('__APP__/Plant/Planting/addfertilize');
            $ajaxData['info'] = '数据添加失败';
            $ajaxData['status'] = 0;
            $this->ajaxReturn($ajaxData, 'JSON');
        }
    }
    /*----施肥操作信息  end   --------*/
    /*----除虫操作信息  start   --------*/
    public function pest(){
        $db = M('plantpest');
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
    public function updatepest()
    {
        $db = M('plantpest');  //选表
        $data['id'] = $_POST['id'];
        $data['farmlandid'] = $_POST['farmlandid'];
        $data['drugid'] = $_POST['drugid'];
        $data['amount'] = $_POST['amount'];
        $data['action'] = $_POST['action'];
        $data['operator'] = $_POST['operator'];
        $data['date'] = $_POST['date'];
        $count = $db->save($data);
        if ($count) {
            $this->success('数据修改成功', '__APP__/Plant/Planting/pest');
        } else {
            $this->error('数据修改失败');
        }
    }

    public function modifypest()
    {
        $id = $_GET['id'];
        $db = M('plantpest');  //选表
        $arr = $db->find($id);
        $this->assign('data', $arr);
        $this->display();
    }

    public function deletepest()
    {
        $db = M('plantpest');  //选表
        $id = $_GET['id'];
        $count = $db->delete($id);
        if ($count) {
            $this->success('数据删除成功', '__APP__/Plant/Planting/pest');
        } else {
            $this->error('数据删除失败');
        }
    }

    public function addpest()
    {
        $this->display();
    }

    public function insert_database_pest()
    {
        session_start();
        $id = $_POST['hidden'];
        if ($_SESSION['id'] != $id) {
            return;
        }

        $data = array(
            'farmlandid' => $_POST['farmlandid'],
            'drugid' => $_POST['drugid'],
            'amount' => $_POST['amount'],
            'action' => $_POST['action'],
            'operator' => $_POST['operator'],
            'date' => $_POST['date'],
        );
        $db = M('plantpest');
        $res = $db->add($data);
        if ($res) {
            $ajaxData['info'] = '数据添加成功';
            $ajaxData['url'] = U('__APP__/Plant/Planting/pest');
            $ajaxData['status'] = 1;
            $this->ajaxReturn($ajaxData, 'JSON');
        } else {
            $ajaxData['url'] = U('__APP__/Plant/Planting/addpest');
            $ajaxData['info'] = '数据添加失败';
            $ajaxData['status'] = 0;
            $this->ajaxReturn($ajaxData, 'JSON');
        }
    }
    /*----除虫操作信息  end   --------*/
}
?>