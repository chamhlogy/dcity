<?php
session_start();
if($_SESSION['username']){
    echo " <script language = 'javascript'  
    type = 'text/javascript' > ";  
    echo " window.location.href = '../login/login.php' ";  
    echo " </script> ";  
}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>已审核</title>
<?php
$link=mysql_connect('localhost','root','10086');
mysql_select_db('asdf');
mysql_query('set names utf8');	
$resulta=mysql_query('select * from bussiness order by id asc');
$count = mysql_num_rows($resulta);	
$sql="select * from bussiness where status=1 order by id asc"; 	
$result=mysql_query($sql,$link);
?>
    <meta name="description" content="index">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="assets/css/admin.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body data-type="generalComponents">


    <header class="am-topbar am-topbar-inverse admin-header">
        <div class="am-topbar-brand">
            <a href="javascript:;" class="tpl-logo">
                <img src="assets/img/logo.png" alt="">
            </a>
        </div>
        <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">

        </div>

        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

        <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

            <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">
                <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen" class="tpl-header-list-link"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>

                <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                        <span class="tpl-header-list-user-nick">Administrator</span><span class="tpl-header-list-user-ico"></span>
                    </a>
                    <ul class="am-dropdown-content">
                        <li><a href="#"><span class="am-icon-bell-o"></span> 资料</a></li>
                        <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
                        <li><a href="#"><span class="am-icon-power-off"></span> 退出</a></li>
                    </ul>
                </li>
                <li><a href="###" class="tpl-header-list-link"><span class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li>
            </ul>
        </div>
    </header>







    <div class="tpl-page-container tpl-page-header-fixed">

        <div class="tpl-left-nav tpl-left-nav-hover">
            <div class="tpl-left-nav-title">
                列表
            </div>
            <div class="tpl-left-nav-list">
                <ul class="tpl-left-nav-menu">
                    <li class="tpl-left-nav-item">
                        <a href="index.php" class="nav-link">
                            <i class="am-icon-home"></i>
                            <span>首页</span>
                        </a>
                    </li>
                    <li class="tpl-left-nav-item">
                        <a href="goods.php" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-bar-chart"></i>
                            <span>货物</span>
                            <i class="tpl-left-nav-content tpl-badge-danger"></i>
                        </a>
                    </li>

                    <li class="tpl-left-nav-item">
                        <!-- 打开状态 a 标签添加 active 即可   -->
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list active">
                            <i class="am-icon-table"></i>
                            <span>发货人资格审核</span>
                            <!-- 列表打开状态的i标签添加 tpl-left-nav-more-ico-rotate 图表即90°旋转  -->
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu" style="display:block">
                            <li>
                                <a href="no-examine.php">
                                    <i class="am-icon-angle-right"></i>
                                    <span>未审核</span>
                                    <i class="tpl-left-nav-content tpl-badge-danger"></i>
                                </a>
                                <!-- 打开状态 a 标签添加 active 即可   -->
                                <a href="have-examine.php" class="active">
                                    <i class="am-icon-angle-right"></i>
                                    <span>已审核</span>
                                    <i class="tpl-left-nav-content tpl-badge-success">></i>
								</a>
                        </li>
                        </ul>
                    </li>

                    <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-wpforms"></i>
                            <span>送货人资格审核</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu">
                            <li>
                                <a href="sender-no.php">
                                    <i class="am-icon-angle-right"></i>
                                    <span>未审核</span>
                                    <i class="tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>

                                <a href="sender-have.php">
                                    <i class="am-icon-angle-right"></i>
                                    <span>已审核</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>





        <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                已审核部分
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">首页</a></li>
                <li><a href="#">发货人资格审核</a></li>
                <li class="am-active">已审核</li>
            </ol>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 列表
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                    </div>


                </div>
                <div class="tpl-block">
                    
                    <div class="am-g">
                    <div class="am-u-sm-12">
                            <form class="am-form">
                                <table class="am-table tpl-table">
                                    <thead>
                                        <tr>
                                            <th class="table-title">名称</th>
                                            <th class="table-type">分类</th>
                                            <th class="table-date am-hide-sm-only">提交时间</th>
                                            <th class="table-type">电话</th>
                                            <th class="table-type">身份证信息</th>
                                            <th class="table-type">营业执照</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php  while($row=mysql_fetch_array($result)){ 
	                                  switch($row['type']){
												   		case "1": $type="个人";break;
													    case "2": $type="商家";break;
												        default:$type="发生错误";
											   }
										?>	 
                                        <tr>
                                            <td><a href="#"><?php echo $row['name']?></a></td>
                                            <td><?php echo $type?></td>
                                            <td class="am-hide-sm-only"><?php echo $row['submit-time']?></td>
                                            <td><?php echo $row['phone']?></td>
                                            <td>
                                                <button type="button" class="am-btn am-btn-danger am-radius" data-am-modal="{target: '#<?php echo $row['username']?>1', closeViaDimmer: 0, width: 400, height: 275}">
                                                    正面
                                                </button>
                                                <button type="button" class="am-btn am-btn-secondary am-radius" data-am-modal="{target: '#<?php echo $row['username']?>2', closeViaDimmer: 0, width: 400, height: 275}">
                                                    反面
                                                </button>
                                            </td>
                                            <td><button type="button" class="am-btn am-btn-warning am-radius" data-am-modal="{target: '#<?php echo $row['username']?>3', closeViaDimmer: 0, width: 400, height: 275}">
                                                    营业执照
                                                </button>
                                            </td>
                                        </tr>
                                        <div class="am-modal am-modal-no-btn" tabindex="-1" id="<?php echo $row['username']?>1">
                                        <div class="am-modal-dialog">
                                            <div class="am-modal-hd">
                                                身份证正面 <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
                                            </div>
                                            <div class="am-modal-bd">
                                                <img width="300" height="200" src=../../../app/picture/idcarda/<?php echo $row['username']?>.jpg" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="am-modal am-modal-no-btn" tabindex="-1" id="<?php echo $row['username']?>2">
                                        <div class="am-modal-dialog">
                                            <div class="am-modal-hd">
                                                身份证反面<a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
                                            </div>
                                            <div class="am-modal-bd">
                                                <img width="300" height="200" src="../../../app/picture/idcardb/<?php echo $row['username']?>.jpg" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="am-modal am-modal-no-btn" tabindex="-1" id="<?php echo $row['username']?>3">
                                        <div class="am-modal-dialog">
                                            <div class="am-modal-hd">
                                                营业执照<a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
                                            </div>
                                            <div class="am-modal-bd">
                                                <img width="300" height="200" src="../../../app/picture/idcard/<?php echo $row['username']?>.jpg" />
                                            </div>
                                        </div>
                                    </div>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <div class="am-cf">

                                    <div class="am-fr">
                                        <ul class="am-pagination tpl-pagination">
                                            <li class="am-disabled"><a href="#">«</a></li>
                                            <li class="am-active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="tpl-alert"></div>
            </div>
        </div>

    </div>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/amazeui.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>