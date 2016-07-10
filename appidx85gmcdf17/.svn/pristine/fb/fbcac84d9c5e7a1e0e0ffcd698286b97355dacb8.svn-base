<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/5/16
 * Time: 15:30
 */
class SeedplantAction extends Action{
    public function index(){
        $this->display();
    }
    public function find(){

        $keywords = $_GET['keywords'];
        $m1=M("plantproduction");
        $data1=$m1->where("productionid=$keywords")->find();//根据收割编号得到收割信息
        //var_dump($data1);
        $m2=M("seedingoperate");
        $data2=$m2->where("seedingid=$data1[seedid]")->find();//根据收割表与育秧表的秧苗批次号得到育秧信息
        //var_dump($data2);
        $m3=M("seeddarkening");
        $data3=$m3->where("trayid=$data2[trayid]")->find();//根据育秧表与暗化表得到相同托盘批次号的操作信息
        //var_dump($data3);
        $m4=M("seedsoakoperate");
        $data4=$m4->where("seedid=$data3[seedid]")->select();//根据托盘种子表与浸种操作表查到相应种子编号的浸种操作信息(可能有多条)
        //var_dump($data4);
        $this->assign('data1',$data1);
        $this->assign('data2',$data2);
        $this->assign('data3',$data3);
        $this->assign('data4',$data4);
        $this->display();
    }
}
?>