<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"<?php if (isset($addbg))
{
   ?> class="addbg"<?php } ?>>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
        <title>管理中心 - <?php echo C("SITE_NAME"); ?></title>
        <css href="__PUBLIC__/Admin/css/reset.css" />
        <css href="__PUBLIC__/Admin/css/system.css" />
        <css href="__PUBLIC__/Admin/css/table_form.css" />
        <js href="__PUBLIC__/Admin/js/jquery.min.js" />
        <js href="__PUBLIC__/Admin/js/admin_common.js" />
        <style type="text/css">
            html{_overflow-y:scroll}
        </style>
        <script type="text/javascript">
            //显示新闻资讯左侧栏目
            window.top.$("#display_center_id").hide();
        </script>
    </head>
    <body>
        <div class="subnav">
            <div class="content-menu ib-a blue line-x">
                <a class="on" href="javascript:void(0);"><em>管理员管理</em></a>
                <span>|</span>
                <a href="<?php echo U("Admin/add"); ?>"><em>添加管理员</em></a>
            </div>
        </div>
        <div class="pad_10">
            <div class="table-list">
                <form name="myform" id="myform" action="<?php echo U('Admin/index'); ?>" method="post">
                    <table width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="width:30px;">序号</th>
                                <th>用户名</th>
                                <th style="width:100px;">真实姓名</th>
                                <th style="width:120px;">最后登录IP</th>
                                <th style="width:120px;">最后登录时间</th>
                                <th  style="width:200px;">管理操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list as $item) { ?>
                                <tr>
                                    <td><?php echo $item['id']; ?></td>
                                    <td><?php echo $item['admin_name']; ?></td>
                                    <td><?php echo $item['true_name']; ?></td>
                                    <td><?php echo $item['last_login_ip']; ?></td>
                                    <td>
                                    <?php 
                                        if ($item['last_login_time'] != 0) {
                                            echo date('Y-m-d H:i:s', $item['last_login_time']); 
                                        }
                                    ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo U("Admin/update", array('id' => $item['id'])); ?>">修改</a> | 
                                        <a href="javascript:confirmUrl('<?php echo U("Admin/delete?id=" . $item['id']); ?>', '是否删除该管理员?')">删除</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div> 
        <!-- list over -->
    </body>
</html>
