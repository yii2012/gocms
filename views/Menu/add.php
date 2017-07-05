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
    	<a href="<?php echo U('Menu/index'); ?>"><em>菜单管理</em></a>
        <span>|</span>
        <a class="on" href="javascript:void(0);"><em>添加菜单</em></a>
    </div>
</div>

<div class="common-form">
<form name="myform" id="myform" action="<?php echo U('Menu/add'); ?>" method="post">
<table width="100%" class="table_form contentWrap">
    <tr>
    	<th width="200">上级菜单：</th>
        <td>
            <select name="info[parent_id]" >
                <option value="0">作为一级菜单</option><?php echo $menu_list;?>
            </select>
        </td>
    </tr>
    <tr>
        <th>中文语言名称：</th>
        <td><input type="text" name="info[chinese_name]" id="chinese_name" class="input-text" ></td>
    </tr>
    <tr>
        <th>英文语言名称：</th>
        <td><input type="text" name="info[english_name]" id="english_name" class="input-text" ></td>
    </tr>
    <tr>
        <th>模块名（Module)：</th>
        <td><input type="text" name="info[module]" id="module" class="input-text" ></td>
    </tr>
    <tr>
        <th>控制器名（Controller)：</th>
        <td><input type="text" name="info[controller]" id="controller" class="input-text" ></td>
    </tr>
    <tr>
        <th>方法名（Action）：</th>
        <td><input type="text" name="info[action]" id="action" class="input-text" > <span id="a_tip"></span></td>
    </tr>
    <tr>
        <th>附加参数：</th>
        <td><input type="text" name="info[data]" class="input-text" ></td>
    </tr>
    <tr>
        <th>是否显示菜单：</th>
        <td><input type="radio" name="info[is_on]" value="1" checked> 是<input type="radio" name="info[is_on]" value="0"> 否</td>
    </tr>
</table>
<!--table_form_off-->
<div class="bk15"></div>
<div class="btn"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="提交"/></div>
</form>
</div>

</body>
</html>