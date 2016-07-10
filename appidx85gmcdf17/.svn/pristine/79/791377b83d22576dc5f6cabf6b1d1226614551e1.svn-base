<?php
// 本类由系统自动生成，仅供测试用途
class SuyuanAction extends Action {
    function index(){
	 $keywords = $_GET['keywords'];//产品编号（大米或谷壳或米糠或细米编号）
	 $m=new Model();
	 $list= $m->table(array(
                      'processfeed '=>'a',
                      'produce-productinfo'=>'b' 
                    )
              )->where("b.feedid=a.feedid and (riceid='$keywords'  or finericeid='$keywords' or ricebranid='$keywords' or chaffid='$keywords')")
			  ->field(array('b.riceid','b.feedid'=>'feedid','a.feedid'=>'afeedid','b.finericeid','b.chaffid','b.ricebranid','a.picihao','a.source','a.date'=>'adate','b.date'=>'bdate'))
           ->select();
	 $feedid=$list[0][feedid];//进料编号

	 $m0=M('process-info ');
     $info=$m0->where("feedid=$feedid")->find();
     $clearid=$info[clearid];
     $polishingid=$info[polishingid];
	 $ridgevalleyid=$info[ridgevalleyid];
	 $sortoutid=$info[sortoutid];
		 
     $m1=M('process-clear');//清理工序
	 $clear=$m1->where("clearid=$clearid")->find();
	 
	 $m2=M('process-polishing');//碾米抛光
     $polishing=$m2->where("polishingid=$polishingid")->find();
	 
	 $m3=M('process-ridgevalley ');//垄谷工序
     $ridgevalley =$m3->where("ridgevalleyid=$ridgevalleyid")->find();
 
     $m4=M('process-sortout');//成品整理
     $sortout=$m4->where("sortoutid=$sortoutid")->find();

		
		
	 $this->assign('data1',$keywords);
	 $this->assign('data',$list);// 赋值数据集
	 $this->assign('clear',$clear);
	 $this->assign('ridgevalley',$ridgevalley);
	 $this->assign('sortout',$sortout);
	 $this->assign('polishing',$polishing);
     $this->display(); 
    }
   
    
	
	function  feedsearch(){
     $keywords = $_GET['keywords'];//进料批次号
	 $keywords1=$_GET['keywords1'];//出库批次号
	 $m=new Model();
	 $list= $m->table(array(
                      'processfeed '=>'a',
                      'warehouseout'=>'b' 
                    )
              )->where("b.outid=a.picihao and a.feedid=$keywords")
			  ->field(array('b.outid','a.feedid','a.breed','b.batch','a.type','a.operator','a.date','a.weight'=>'weight1','b.batch','b.weight'=>'weight2','b.warehouseid','b.outdate'=>'date2'))
           ->select();  	
		
		
		  $batch=$list[0][batch];       //入库批次号
		  $m0=M('warehousein');//入库信息表
		  $data0=$m0->where("putid=$batch")->select();
		  $shougebatch=$datao[0][batch];//收割批次号
		  
	      $m1=M('warehousein-quality ');//入库质量表
		  $data1=$m1->where("warehouseinid=$batch")->select();
		  
		  $data2=$m1->table(array(
                      'warehousein-quality'=>'a',
                      'warehousein-property'=>'b' 
                    ))->where("a.propertyid=b.propertyid  and a.warehouseinid=$batch")
					->field("a.date as date1,b.date as date2,a.*,b.*")->select();//入库理化特性		  
		  $data3=$m1->table(array(
                      'warehousein-quality'=>'a',
                      'warehousein-nutrition'=>'b' 
                    ))->where("a.nutritionid=b.nutritionid  and a.warehouseinid=$batch")
					->field("a.date as date1,b.date as date2,a.*,b.*")->select();//入库营养特性特性  
					
		  $m4=M('warehousemonitor-quality ');//仓库质量特性表
		  $data4=$m4->where("warehouseinid=$batch")->select();
		  
		  $data5=$m4->table(array(
                      'warehousemonitor-quality'=>'a',
                      'warehousemonitor-property'=>'b' 
                    ))->where("a.propertyid=b.propertyid  and a.warehouseinid=$batch")
					->field("a.date as date1,b.date as date2,a.*,b.*")->select();//仓库理化特性					
		  $data6=$m4->table(array(
                      'warehousemonitor-quality'=>'a',
                      'warehousemonitor-nutrition'=>'b' 
                    ))->where("a.nutritionid=b.nutritionid  and a.warehouseinid=$batch")
					->field("a.date as date1,b.date as date2,a.*,b.*")->select();//仓库营养特性表
					
		 	 $this->assign('data1',$data1);
			 $this->assign('data2',$data2);
	         $this->assign('data3',$data3);
			 $this->assign('data4',$data4);
			 $this->assign('data5',$data5);
			 $this->assign('data6',$data6); 
			 $this->assign('data0',$data0); 
		     $this->display();
		}
	
	
		function  outsearch(){
     $keywords = $_GET['keywords'];//出库批次号
	 $m=M('warehouseout');
	 $list= $m->where("outid=$keywords")->find();  	
		
		
		  $batch=$list[batch];       //入库批次号
		  $m0=M('warehousein');//入库信息表
		  $data0=$m0->where("putid=$batch")->select();
		  $shougebatch=$datao[0][batch];//收割批次号
		  
	      $m1=M('warehousein-quality ');//入库质量表
		  $data1=$m1->where("warehouseinid=$batch")->select();
		  
		  $data2=$m1->table(array(
                      'warehousein-quality'=>'a',
                      'warehousein-property'=>'b' 
                    ))->where("a.propertyid=b.propertyid  and a.warehouseinid=$batch")
					->field("a.date as date1,b.date as date2,a.*,b.*")->select();//入库理化特性		  
		  $data3=$m1->table(array(
                      'warehousein-quality'=>'a',
                      'warehousein-nutrition'=>'b' 
                    ))->where("a.nutritionid=b.nutritionid  and a.warehouseinid=$batch")
					->field("a.date as date1,b.date as date2,a.*,b.*")->select();//入库营养特性特性  
					
		  $m4=M('warehousemonitor-quality ');//仓库质量特性表
		  $data4=$m4->where("warehouseinid=$batch")->select();
		  
		  $data5=$m4->table(array(
                      'warehousemonitor-quality'=>'a',
                      'warehousemonitor-property'=>'b' 
                    ))->where("a.propertyid=b.propertyid  and a.warehouseinid=$batch")
					->field("a.date as date1,b.date as date2,a.*,b.*")->select();//仓库理化特性					
		  $data6=$m4->table(array(
                      'warehousemonitor-quality'=>'a',
                      'warehousemonitor-nutrition'=>'b' 
                    ))->where("a.nutritionid=b.nutritionid  and a.warehouseinid=$batch")
					->field("a.date as date1,b.date as date2,a.*,b.*")->select();//仓库营养特性表
					
		 	 $this->assign('data1',$data1);
			 $this->assign('data2',$data2);
	         $this->assign('data3',$data3);
			 $this->assign('data4',$data4);
			 $this->assign('data5',$data5);
			 $this->assign('data6',$data6); 
			 $this->assign('data0',$data0); 
		     $this->display();
		}
	    
	
}
?>