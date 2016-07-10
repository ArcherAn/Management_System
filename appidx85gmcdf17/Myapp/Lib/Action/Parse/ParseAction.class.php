<?php

class ParseAction extends Action {
	public function upload(){
		$data['temperature'] = $_POST['temperature'];
		$data['humidity'] = $_POST['humidity'];
		$data['dewPoint'] = $_POST['dewPoint'];
		$data['solarRadiation'] = $_POST['solarRadiation'];
		$data['leafWetness'] = $_POST['leafWetness'];
		$data['soilWaterContent'] = $_POST['soilWaterContent'];
		$data['node'] = $_POST['node'];
		$data['type'] = $_POST['type'];
		$data['time'] = date('Y-m-d H:i:s');
        $m=M('environment');  //选表
        $count=$m->add($data);
        $ww = $m->getLastSql();
        if($count){
            $this->success('success');
        }else{
            $this->error('fail'.$ww);
        }
    }
}
?>