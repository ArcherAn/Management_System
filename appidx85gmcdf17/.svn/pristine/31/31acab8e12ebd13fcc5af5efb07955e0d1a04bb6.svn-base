<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>人员信息添加</title>
    <script src="/fuwaproject1/Public/js/jquery.min.js" type="text/javascript"></script>
    <script src="/fuwaproject1/Public/js/tools.js" type="text/javascript"></script>
    <script src="/fuwaproject1/Public/js/jquery.ui.core.js"></script>
    <script src="/fuwaproject1/Public/js/jquery.ui.widget.js"></script>
    <script src="/fuwaproject1/Public/js/jquery.ui.datepicker.js"></script>
    <script src="/fuwaproject1/Public/js/jquery.ui.datepicker-zh-CN.js"></script>
    <script src="/fuwaproject1/Public/js/EventUtil.js"></script>
    <link href="/fuwaproject1/Public/css/zhuye.css" rel="stylesheet">
    <link href="/fuwaproject1/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/fuwaproject1/Public/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <link href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="/fuwaproject1/Public/js/jquery-1.8.3.min.js" charset="UTF-8">
    <script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="/fuwaproject1/Public/js/bootstrap.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="/fuwaproject1/Public/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script src="/fuwaproject1/Public/js/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"></script>
</head>
<body>
<div class="navbar-static-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <p class="navbar-brand" id="logo">福娃产业链信息管理系统
            </p>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <ul id="main-nav" class="nav nav-tabs nav-stacked" style="">
                <li class="active">
                    <a href="__APP__?s=Load/show">
                        <i class="glyphicon glyphicon-home"></i>
                        首页
                    </a>
                </li>
                <li>
                    <a href="#w" class="nav-header collapsed" data-toggle="collapse">
                        <i class="glyphicon glyphicon-grain"></i>
                        育秧
                        <span class="pull-right glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul id="w" class="nav nav-list collapse secondmenu" style="height: 0px;">
                        <li><a href="__APP__?s=Worker/index">人员管理</a></li>
                        <li><a href="__APP__?s=Equip/index">设备管理</a></li>
                        <li><a href="#">大棚管理</a></li>
                        <li><a href="#">种子管理</a></li>
                        <li><a href="#">药品管理</a></li>
                        <li><a href="#">育秧管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#systemSetting1" class="nav-header collapsed" data-toggle="collapse">
                        <i class="glyphicon glyphicon-tree-conifer"></i>
                        种植
                        <span class="pull-right glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul id="systemSetting1" class="nav nav-list collapse secondmenu" style="height: 0px;">
                        <li><a href="#">人员管理</a></li>
                        <li><a href="#">设备管理</a></li>
                        <li><a href="#">农田管理</a></li>
                        <li><a href="#">秧苗管理</a></li>
                        <li><a href="#">农机管理</a></li>
                        <li><a href="#">收割管理</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#systemSetting2" class="nav-header collapsed" data-toggle="collapse">
                        <i class="glyphicon glyphicon-globe"></i>
                        仓储
                        <span class="pull-right glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul id="systemSetting2" class="nav nav-list collapse secondmenu" style="height: 0px;">
                        <li><a href="#">人员管理</a></li>
                        <li><a href="#">设备管理</a></li>
                        <li><a href="#">仓库管理</a></li>
                        <li><a href="#">入库管理</a></li>
                        <li><a href="#">仓储管理</a></li>
                        <li><a href="#">出库管理</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#systemSetting3" class="nav-header collapsed" data-toggle="collapse">
                        <i class="glyphicon glyphicon-cutlery"></i>
                        加工
                        <span class="pull-right glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul id="systemSetting3" class="nav nav-list collapse secondmenu" style="height: 0px;">
                        <li><a href="__APP__/Process/Worker/index">人员管理</a></li>
                        <li><a href="#">设备管理</a></li>
                        <li><a href="#">进料</a></li>
                        <li><a href="#">大米加工</a></li>
                        <li><a href="#">出产管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#systemSetting4" class="nav-header collapsed" data-toggle="collapse">
                        <i class="glyphicon glyphicon-fire"></i>
                        深加工
                        <span class="pull-right glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul id="systemSetting4" class="nav nav-list collapse secondmenu" style="height: 0px;">
                        <li><a href="#">人员管理</a></li>
                        <li><a href="#">设备管理</a></li>
                        <li><a href="#">车间管理</a></li>
                        <li><a href="#">原料加工</a></li>
                        <li><a href="#">内包</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-phone-alt"></i>
                        联系我们
                    </a>
                </li>

            </ul>
        </div>
        
        <div style="margin-left: 230px;margin-top: 10px;width: 1000px">
            <form action="__APP__?s=Worker/insert_database" method="post">
            <table class="table table-bordered" style="border: 1px solid red">
                <tr style="height:45px">
                    <td colspan="5" align="center" bgcolor="#E9E9E9">育秧人员信息添加表</td>
                </tr>
                 <tr style="height:45px">
                    <td style="width: 150px;background-color:#E9E9E9">员工编号</td>
                     <td ><input class="form-control" placeholder="如：20080101" style="width: 250px;height: 30px" id="workid" type="text" name='workid' onclick="change_ipt" value=""/></td>
                 </tr>
                <tr style="height:45px">
                    <td style="background-color:#E9E9E9">姓名</td>
                    <td><input class="form-control" placeholder="如：张三" style="width: 250px;height: 30px" id="name" type="text" name='name' onclick="change_ipt"value="" /></td>
                </tr>
                <tr style="height:45px">
                    <td style="background-color:#E9E9E9">性别</td>
                    <td><input class="form-control" placeholder="如：男" style="width: 250px;height: 30px" id="sex" type="text" name='sex' onclick="change_ipt" value=""/></td>
                </tr>
                <tr style="height:45px">
                    <td style="background-color:#E9E9E9">年龄</td>
                    <td><input class="form-control" placeholder="如：35" style="width: 250px;height: 30px" id="age" type="text" name='age' onclick="change_ipt" value=""/></td>
                </tr>
                <tr style="height:45px">
                    <td style="background-color: #E9E9E9">工龄</td>
                    <td><input class="form-control" placeholder="如：4" style="width: 250px;height: 30px" id="workage" type="text" name='workage' onclick="change_ipt" value=""/></td>
                </tr>
                <tr style="height:45px">
                    <td style="background-color: #E9E9E9">岗位</td>
                    <td><input class="form-control" placeholder="如：育秧员" style="width: 250px;height: 30px" id="post" type="text" name='post' onclick="change_ipt" value=""/></td>
                </tr>
                <tr style="height:45px">
                    <td style="background-color: #E9E9E9">家庭住址</td>
                    <td><input class="form-control" placeholder="如：荆州市" style="width: 250px;height: 30px" id="address" type="text" name='address' onclick="change_ipt" value=""/></td>
                </tr>
                <tr style="height:45px">
                    <td style="background-color:#E9E9E9">联系电话</td>
                    <td><input class="form-control" placeholder="如：13456544537" style="width: 250px;height: 30px" id="telephone" type="text" name='telephone' onclick="change_ipt" value=""/></td>
                </tr>
                <tr style="height:45px">
                    <td style="background-color:#E9E9E9"></td>
                    <td><input class="btn btn-primary" id="apply_sumbit" type="submit" value="确认添加" onclick="return confirm('确认添加？')" /></td>
                </tr>
            </table>
            </form>
        </div>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#apply_submit").click(function(){
                    var a=$('#workid').val(),b=$('#name').val(),c=$('#sex').val(),d=$('#age').val(),
                            e=$('#workage').val(),f=$('#post').val(),g=$('#address').val(),h=$('#telephone').val();
                    var url='__APP__?s=Worker/insert_database';
                    if(!a){
                        alert("请填写员工编号！");
                        return false;}
                    if(!b) {
                        alert("请填写姓名！");
                        return false;}
                    if(!c) {
                        alert("请填写性别！");
                        return false;}
                    if(!d) {
                        alert("请填写年龄！");
                        return false;}
                    if(!e) {
                        alert("请填写工龄！");
                        return false;}
                    if(!f){
                        alert("请填写岗位！");
                        return false;}
                    if(!g){
                        alert("请填写家庭住址！");
                        return false;}
                    if(!h){
                        alert("请填写电话号码！");
                        return false;}
                    var data={
                        workid:a,
                        name:b,
                        sex:c,
                        age:d,
                        workage:e,
                        post:f,
                        address:g,
                        telephone:h,
                        hidden:$('#hash').val()
                    };
                    $(this).attr("disabled",true);
                    $(this).val("数据处理中.....");
                    $.post(url,data,function(data){
                        var check=data;
                        alert(check);
                        switch(check){
                            case "1" : alert("员工编号不能为空！");break;
                            case "2" : alert("姓名不能为空！");break;
                            case "3" : alert("性别不能为空！");break;
                            case "4" : alert("年龄不能为空！");break;
                            case "5" : alert("工龄不能为空！");break;
                            case "6" : alert("岗位不能为空！");break;
                            case "7" : alert("家庭住址不能为空！");break;
                            case "8" : alert("电话号码不能为空！");break;
                            case "9" : alert("插入成功！");
                                location.reload();  break;
                            default : alert("插入失败!");break;

                        }
                    });
                    $(this).val("数据处理成功.....");
                    return true;
                });
            });
        </script>
    
    </div>
</div>
</body>
</html>