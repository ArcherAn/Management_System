<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>设备信息添加</title>
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
            <form action="__APP__?s=Equip/insert_database" method="post">
            <table class="table table-bordered" style="border: 1px solid red">
                <tr style="height:45px">
                    <td colspan="5" align="center" bgcolor="#E9E9E9">种子设备信息添加表</td>
                </tr>
                 <tr style="height:45px">
                    <td style="width: 150px;background-color:#E9E9E9">机器编号</td>
                     <td ><input class="form-control" placeholder="如：1" style="width: 250px;height: 30px" id="machineid" type="text" name='machineid' onclick="change_ipt" value=""/></td>
                 </tr>
                <tr style="height:45px">
                    <td style="background-color:#E9E9E9">类型</td>
                    <td><input class="form-control" placeholder="如：插秧机" style="width: 250px;height: 30px" id="type" type="text" name='type' onclick="change_ipt"value="" /></td>
                </tr>
                <tr style="height:45px">
                    <td style="background-color:#E9E9E9">型号</td>
                    <td><input class="form-control" placeholder="如：2ZT63" style="width: 250px;height: 30px" id="model" type="text" name='model' onclick="change_ipt" value=""/></td>
                </tr>
                <tr style="height:45px">
                    <td style="background-color:#E9E9E9">品牌</td>
                    <td><input class="form-control" placeholder="如：东风" style="width: 250px;height: 30px" id="brand" type="text" name='brand' onclick="change_ipt" value=""/></td>
                </tr>
                <tr style="height:45px">
                    <td style="background-color: #E9E9E9">价格</td>
                    <td><input class="form-control" placeholder="如：200000" style="width: 250px;height: 30px" id="price" type="text" name='price' onclick="change_ipt" value=""/></td>
                </tr>
                <tr style="height:45px">
                    <td style="background-color: #E9E9E9">状态</td>
                    <td><input class="form-control" placeholder="如：故障" style="width: 250px;height: 30px" id="status" type="text" name='status' onclick="change_ipt" value=""/></td>
                </tr>
                <tr style="height:45px">
                    <td style="background-color: #E9E9E9">购买日期</td>
                    <td>
                        <div class="form-group">
                        <div class="input-group date form_date"data-date="" data-date-format="" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                            <input class="form-control" placeholder="如：2015-3-15" style="width: 250px;height: 30px" id="purchasedate" type="text" name='purchasedate' onclick="change_ipt" value="" readonly/>
                            <span class="input-group-addon" style="float: left"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
                            <input type="hidden" id="dtp_input2" value="" /><br/>
                        </div>
                    </td>
                </tr>
                <tr style="height:45px">
                    <td style="background-color:#E9E9E9">使用年限</td>
                    <td><input class="form-control" placeholder="如：8" style="width: 250px;height: 30px" id="useyear" type="text" name='useyear' onclick="change_ipt" value=""/></td>
                </tr>
                <tr style="height:45px">
                    <td style="background-color:#E9E9E9"></td>
                    <td><input class="btn btn-primary" id="apply_sumbit" type="submit" value="确认添加" onclick="return confirm('确认添加？')"/></td>
                </tr>
            </table>
            </form>
        </div>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#apply_submit").click(function(){
                    var a=$('#workid').val(),b=$('#name').val(),c=$('#sex').val(),d=$('#age').val(),
                            e=$('#workage').val(),f=$('#post').val(),g=$('#address').val(),h=$('#telephone').val();
                    var url='__APP__?s=Equip/insert_database';
                    if(!a){
                        alert("请填写机器编号！");
                        return false;}
                    if(!b) {
                        alert("请填写类型！");
                        return false;}
                    if(!c) {
                        alert("请填写型号！");
                        return false;}
                    if(!d) {
                        alert("请填写品牌！");
                        return false;}
                    if(!e) {
                        alert("请填写价格！");
                        return false;}
                    if(!f){
                        alert("请填写状态！");
                        return false;}
                    if(!g){
                        alert("请填写购买日期！");
                        return false;}
                    if(!h){
                        alert("请填写使用年限！");
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
                            case "1" : alert("机器编号不能为空！");break;
                            case "2" : alert("类型不能为空！");break;
                            case "3" : alert("型号不能为空！");break;
                            case "4" : alert("品牌不能为空！");break;
                            case "5" : alert("价格不能为空！");break;
                            case "6" : alert("状态不能为空！");break;
                            case "7" : alert("购买日期不能为空！");break;
                            case "8" : alert("使用年限不能为空！");break;
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
        <script type="text/javascript">
            $('.form_date').datetimepicker({
                language: 'zh-CN',
                weekStart: 1,
                todayBtn: 1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 2,
                minView: 2,
                forceParse: 0
            });
        </script>
    
    </div>
</div>
</body>
</html>