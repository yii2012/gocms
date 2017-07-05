<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"<?php if (isset($addbg)){ ?> class="addbg"<?php } ?>>
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
    	<a class="on" href="javascript:void(0);"><em>菜单管理</em></a>
        <span>|</span>
        <a href="<?php echo U('Menu/add'); ?>"><em>添加菜单</em></a>
    </div>
</div>

<form name="myform" action="<?php echo U('Menu/listOrder'); ?>" method="post">
<div class="pad-lr-10">
    <div class="table-list">
        <table width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th width="80">排序</th>
                    <th width="100">id</th>
                    <th>菜单名称</th>
                    <th>管理操作</th>
                </tr>
            </thead>
            <tbody><?php echo $menu_list; ?></tbody>
        </table>
        <div class="btn"><input type="submit" class="button" name="dosubmit" value="排序" /></div>  </div>
    </div>
</div>
</form>
</body>
</html>