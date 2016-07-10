$(function(){
 $.post('/lost_and_found/index.php/index/show_t',null,function(data){
		showTime('servertime12',data,12);
    });
	//  showTime('localtime12',0,12);
   // showTime('localtime24',0,0);
    //showTime('time',0,12);
    //数字<10加 "0" 函数(避免时间显示为8点1分3秒)
 function fillZero(v){
    if(v<10){
        v='0'+v;
    }
	return v;
}

function showTime(ev,date,type){
	var d;
    //ev = '#'+ev;
    var Y,M,D,W,H,I,S;
    var Week=['星期天','星期一','星期二','星期三','星期四','星期五','星期六'];
    if(date){
        d =new Date(date*1000);
    }else{
        d =new Date();
    }
    Y = d.getFullYear();;
    M = fillZero(d.getMonth()+1);
    D = fillZero(d.getDate());
    W = Week[d.getDay()];
    H = fillZero(d.getHours());
    I = fillZero(d.getMinutes());
    S = fillZero(d.getSeconds());
    var showData = Y+'年'+M+'月'+D+'日'+' '+W+' '+H+'点'+I+'分';
    $('#'+ev).html(showData);
    if(date){
        date++;
    }
    setTimeout(function(){showTime(ev,date,type)},1000);
} 
});
