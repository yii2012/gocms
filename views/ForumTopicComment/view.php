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
        
<div class="common-form">
<form name="myform" id="myform" action="<?php echo U('ForumTopicComment/view'); ?>" method="post">
<table width="100%" class="table_form contentWrap">
    <tr>
    	<th width="180">主题名称：</th>
        <td><?php echo $topic_info['topic_info']['name']; ?></td>
    </tr>
    <tr>
    	<th>姓名：</th>
        <td><?php echo $topic_info['name']; ?></td>
    </tr>
    <tr>
    	<th>联系电话：</th>
        <td><?php echo $topic_info['phone']; ?></td>
    </tr>
    <tr>
    	<th>提交时间：</th>
        <td><?php echo $topic_info['create_time']; ?></td>
    </tr>
<!--    <tr>-->
<!--        <th>是否设为已处理：</th>-->
<!--        <td>-->
<!--            <input type="radio" name="Order[is_handled]" id="is_handled1" value="0" --><?php //if ($travel_info['is_handled'] == 0) { ?><!-- checked="checked" --><?php //} ?><!-->-->
<!--            <label for="is_handled1">未处理</label>-->
<!--            <input type="radio" name="Order[is_handled]" id="is_handled2" value="1" --><?php //if ($travel_info['is_handled'] == 1) { ?><!-- checked="checked" --><?php //} ?><!-->-->
<!--            <label for="is_handled2">已处理</label> -->
<!--        </td>-->
<!--    </tr>-->
</table>
<!--table_form_off-->
<div class="bk15"></div>
<!--<input name="Order[id]" value="--><?php //echo $topic_info['id']; ?><!--" type="hidden">-->
<!--<div class="btn"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="提交"/></div>-->
</form>
</div>

</body>
</html>