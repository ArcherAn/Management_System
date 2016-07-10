<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>育秧人员信息</title>
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
        
    <script>
        function jump(){
            window.location="__APP__?s=Worker/add";
        }
    </script>
        <div style="margin-left: 230px">
            <div style="height: 50px">
                 <span style="margin-top: 5px;font-size: 28px">阅读器管理</span><span style="font-size: 14px;margin-top: 3px;">&nbsp;育秧管理平台</span>
            </div>
            <div style="background-color: #b1bab7;height: 30px">
                <span style="margin-top: 5px;float: left">主页&nbsp;>&nbsp;育秧&nbsp;>&nbsp;人员管理</span>
            </div>
            <div  style="margin-top: 10px;">
                <form action="__APP__/Seedlings/Worker/index" method="get">
                <span style="font-size: 16px;float: left">用户名称：</span>
                <span style="float: left;margin-left: 10px"><input name="username" type="text" placeholder="请输入要搜素的用户名" class="form-control"style="width: 200px;height: 30px"></span>
                 <span><button type="submit" class="btn btn-primary btn-sm" style="float: left;margin-left: 10px;">查询</button></span>
                 <span><button type="button" class="btn btn-success btn-sm" style="float: left;margin-left: 10px" onclick="jump()">新增用户</button></span>
                </form>
            </div>
            <div>
                <table  class="table table-striped table-bordered" style="margin-top: 50px;align:center;">
                      <thead>
                         <tr>
                             <th>员工编号</th>
                             <th>姓名</th>
                             <th>性别</th>
                             <th>年龄</th>
                             <th>工龄</th>
                             <th>岗位</th>
                             <th>家庭住址</th>
                             <th>联系电话</th>
                             <th>操作</th>
                         </tr>
                      </thead>
                      <tbody>
                      <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                             <td><?php echo ($vo["workid"]); ?></td>
                             <td><?php echo ($vo["name"]); ?></td>
                             <td><?php echo ($vo["sex"]); ?></td>
                             <td><?php echo ($vo["age"]); ?></td>
                             <td><?php echo ($vo["workage"]); ?></td>
                             <td><?php echo ($vo["post"]); ?></td>
                             <td><?php echo ($vo["address"]); ?></td>
                             <td><?php echo ($vo["telephone"]); ?></td>
                             <td><a href="__APP__?s=Worker/modify/id/<?php echo ($vo["id"]); ?>">修改</a>|
                                 <a href="__APP__?s=Worker/delete/id/<?php echo ($vo["id"]); ?>" onclick="return confirm('是否删除？')">删除</a>
                             </td>
                         </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                      </tbody>
					  </table>
            </div>
					  <div align="center"><?php echo ($page); ?></div>
            </div>
    
    </div>
</div>
</body>
</html>