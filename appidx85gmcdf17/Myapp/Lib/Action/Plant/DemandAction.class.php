<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/5/1
 * Time: 15:22
 */
class DemandAction extends Action{
    public function plantdemand(){
        $db = M('plantdemand');
        import('ORG.Util.Page');
        $keywords = $_GET['worktype'];
        $map = "worktype like '%$keywords%'";
        $count = $db->where($map)->count(); //查询满足要求的总记录数 $map表示查询条件
        $Page = new Page($count, 4);// 实例化分页类 传入总记录数
        $show = $Page->show();// 分页显示输出
        $list = $db->where($map)->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('data', $list);// 赋值数据集
        $this->assign('page', $show);// 赋值分页输出
        $this->display(); // 输出模板

    }
    //修改数据
    public function updateplantdemand()
    {
        $db = M('plantdemand ');  //选表
        $data['id'] = $_POST['id'];
        $data['worktype'] = $_POST['worktype'];
        $data['site'] = $_POST['site'];
        $data['area'] = $_POST['area'];
        $data['timelong'] = $_POST['timelong'];
        $data['starttime'] = $_POST['starttime'];
        $count = $db->save($data);
        if ($count) {
            $this->success('数据修改成功', '__APP__/Plant/Demand/plantdemand');
        } else {
            $this->error('数据修改失败');
        }
    }

//显示修改页面
    public function modifyplantdemand()
    {
        $id = $_GET['id'];
        $db = M('plantdemand ');  //选表
        $arr = $db->find($id);
        $this->assign('data', $arr);
        $this->display();
    }

//删除数据
    public function deleteplantdemand()
    {
        $db = M('plantdemand');  //选表
        $id = $_GET['id'];
        $count = $db->delete($id);
        if ($count) {
            $this->success('数据删除成功', '__APP__/Plant/Demand/plantdemand');
        } else {
            $this->error('数据删除失败');
        }
    }

    public function addplantdemand()
    {
        $this->display();
    }

    public function insert_database_plantdemand()
    {
        session_start();
        $id = $_POST['hidden'];
        if ($_SESSION['id'] != $id) {
            return;
        }
        $data = array(
            'worktype' => $_POST['worktype'],
            'site' => $_POST['site'],
            'area' => $_POST['area'],
            'timelong' => $_POST['timelong'],
            'starttime' => $_POST['starttime'],
        );
        $db = M('plantdemand');
        $res = $db->add($data);
        if ($res) {
            $ajaxData['info'] = '数据添加成功';
            $ajaxData['url'] = U('__APP__/Plant/Demand/plantdemand');
            $ajaxData['status'] = 1;
            $this->ajaxReturn($ajaxData, 'JSON');
        } else {
            $ajaxData['url'] = U('__APP__/Plant/Demand/addplantdemand');
            $ajaxData['info'] = '数据添加失败';
            $ajaxData['status'] = 0;
            $this->ajaxReturn($ajaxData, 'JSON');
        }
    }

}
?>