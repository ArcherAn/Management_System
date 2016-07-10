<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>人员信息修改</title>
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
            <form action="__APP__?s=Worker/update" method="post">
                <table class="table table-bordered" style="border: 1px solid red">
                    <tr style="height:45px">
                        <td colspan="5" align="center" bgcolor="#E9E9E9">育秧人员信息修改</td>
                    </tr>
                    <tr style="height:45px">
                        <td style="width: 150px;background-color:#E9E9E9">员工编号</td>
                        <td ><input class="form-control" placeholder="如：20080101" style="width: 250px;height: 30px" type="text" name='workid'  value="<?php echo ($data["workid"]); ?>"/></td>
                    </tr>
                    <tr style="height:45px">
                        <td style="background-color:#E9E9E9">姓名</td>
                        <td><input class="form-control" placeholder="如：张三" style="width: 250px;height: 30px" type="text" name='name'value="<?php echo ($data["name"]); ?>"/></td>
                    </tr>
                    <tr style="height:45px">
                        <td style="background-color:#E9E9E9">性别</td>
                        <td><input class="form-control" placeholder="如：男" style="width: 250px;height: 30px" type="text" name='sex'  value="<?php echo ($data["sex"]); ?>"/></td>
                    </tr>
                    <tr style="height:45px">
                        <td style="background-color:#E9E9E9">年龄</td>
                        <td><input class="form-control" placeholder="如：35" style="width: 250px;height: 30px" type="text" name='age'  value="<?php echo ($data["age"]); ?>"/></td>
                    </tr>
                    <tr style="height:45px">
                        <td style="background-color: #E9E9E9">工龄</td>
                        <td><input class="form-control" placeholder="如：4" style="width: 250px;height: 30px" type="text" name='workage'  value="<?php echo ($data["workage"]); ?>"/></td>
                    </tr>
                    <tr style="height:45px">
                        <td style="background-color: #E9E9E9">岗位</td>
                        <td><input class="form-control" placeholder="如：育秧员" style="width: 250px;height: 30px" type="text" name='post'  value="<?php echo ($data["post"]); ?>"/></td>
                    </tr>
                    <tr style="height:45px">
                        <td style="background-color: #E9E9E9">家庭住址</td>
                        <td><input class="form-control" placeholder="如：荆州市" style="width: 250px;height: 30px" type="text" name='address'  value="<?php echo ($data["address"]); ?>"/></td>
                    </tr>
                    <tr style="height:45px">
                        <td style="background-color:#E9E9E9">联系电话</td>
                        <td><input class="form-control" placeholder="如：13456544537" style="width: 250px;height: 30px" type="text" name='telephone'  value="<?php echo ($data["telephone"]); ?>"/></td>
                    </tr>
                    <tr style="height:45px">
                        <td style="background-color:#E9E9E9"></td>
                        <td><input type='hidden' name='id' value="<?php echo ($data["id"]); ?>"/><input class="btn btn-primary" type="submit" value="确认修改"/></td>
                    </tr>
                </table>
            </form>
        </div>
    
    </div>
</div>
</body>
</html>