<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>管理员登录</title>
    <link href="/fuwaproject1/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/fuwaproject1/Public/css/load.css" rel="stylesheet">
    <script language="JavaScript">
        function fleshVerify(){
            //重载验证码
            var time = new Date().getTime();
            document.getElementById('code').src= '__APP__/Index/verify/'+time;
        }
    </script>
</head>
<body>
<div class="container">
    <div class="top">
        <img src="/fuwaproject1/Public/img/biaoti.png"/>
    </div>
    <div class="down">
        <div class="down_left">
            <img src="/fuwaproject1/Public/img/brand.jpg">
        </div>
        <div class="down_right">
           <form class="form-horizontal" action="__APP__?s=Load/verify" method="post" class="search"
                   style="margin-top: 30px">
              <div class="form-group">
                 <label for="admin" class="col-sm-3 control-label">用户名：</label>
                <div class="col-sm-4">
                 <input name="username" type="text" class="form-control" id="admin" >
                </div>
              </div>
               <div class="form-group">
                   <label for="apassword" class="col-sm-3 control-label">密&nbsp;&nbsp;&nbsp;码：</label>
                   <div class="col-sm-4">
                       <input name="password" type="password" class="form-control" id="apassword" >
                   </div>
               </div>
               <div class="form-group">
                   <lable class="col-sm-3 control-label"style="font-size:14px;font-weight: bold;margin-left: 1px">验证码：</lable>
                   <div class="col-sm-4">
                       <input type="code" class="form-control" name="code" style="height: 31px;width: 190px;border: 1px solid #7D91AB"/>
                   </div>
                   <img src='__APP__/Index/verify/' id="code" onclick="fleshVerify()" style="margin-left: 40px"/>
               </div>
               <div class="form-group">
                   <div class="col-sm-offset-2 col-sm-10">
                       <div class="checkbox" style="font-size: 15px ;margin-left: 185px">
                           <label>
                               <input type="checkbox" id="remember"> 记住用户名
                           </label>
                       </div>
                   </div>
               </div>
               <div class="form-group">
                   <div class="col-md-1 col-md-offset-3">
                       <button type="submit" class="btn btn-info" style="margin-left: 30px">登录</button>
                   </div>
                   <div class="col-md-3 col-md-offset-2">
                       <button type="reset" class="btn btn-info" style="margin-left: 30px">重置</button>
                   </div>
               </div>
           </form>
        </div>
    </div>
</div>
</body>
</html>