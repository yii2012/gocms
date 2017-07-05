<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"<?php if (isset($addbg))
{ ?> class="addbg"<?php } ?>>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
        <title>管理中心 - <?php echo C("SITE_NAME"); ?></title>
        <css href="__PUBLIC__/Admin/css/reset.css" />
        <css href="__PUBLIC__/Admin/css/system.css" />
        <css href="__PUBLIC__/Admin/css/table_form.css" />
        <js href="__PUBLIC__/Admin/js/jquery.min.js" />
        <js href="__PUBLIC__/Admin/js/admin_common.js" />
    </head>
    <body>
        <style type="text/css">
            html{_overflow-y:scroll}
        </style>
        <script type="text/javascript">
            //显示新闻资讯左侧栏目
            window.top.$("#display_center_id").hide();
        </script>
        <div class="subnav">
            <div class="content-menu ib-a blue line-x">
                <a href="<?php echo U("Admin/index"); ?>"><em>管理员管理</em></a>
                <span>|</span>
                <a class="on" href="javascript:void(0);"><em>添加管理员</em></a>
            </div>
        </div>
        <div class="pad_10">
            <div class="common-form">
                <form name="myform" id="myform" action="<?php echo U("Admin/add"); ?>" method="post">
                    <table width="100%" class="table_form contentWrap">
                        <tbody>
                            <tr>
                                <th style="width:100px;"><span class="required">*</span> 用户名：</th>
                                <td><input type="text" name="Admin[admin_name]" id="admin_name" autocomplete="off" class="input-text"></td>
                            </tr>
                            <tr>
                                <th><span class="required">*</span> 密码：</th>
                                <td><input type="password" name="Admin[admin_password]" id="admin_password" autocomplete="off" class="input-text"></td>
                            </tr>
                            <tr>
                                <th><span class="required">*</span> 确认密码：</th>
                                <td><input type="password" name="Admin[admin_password2]" id="admin_password2" autocomplete="off" class="input-text"></td>
                            </tr>
                            <tr>
                                <th>真实姓名：</th>
                                <td><input type="text" name="Admin[true_name]" id="J_trueName" class="input-text"></td>
                            </tr>
                        </tbody>
                    </table>
                    <input name="dosubmit" type="submit" value="提交" class="button" style="margin-top:15px;">
                </form>
            </div>
        </div>
    </body>
</html>
