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
        
        <!--kindeditor begin-->
        <css href="__PUBLIC__/Admin/kindeditor/themes/default/default.css" />
        <js href="__PUBLIC__/Admin/kindeditor/kindeditor.js" />
        <js href="__PUBLIC__/Admin/kindeditor/lang/zh_CN.js" />
        <script type="text/javascript">
KindEditor.ready(function(K) {
    var editor = K.editor({
		uploadJson : '<?php echo U('uploadJson'); ?>',
		fileManagerJson : '<?php echo U('fileManagerJson'); ?>',
        allowFileManager : true,
		formatUploadUrl : false,
		extraFileUploadParams: {
			PHPSESSID: '<?php echo session_id(); ?>',
    	}
    });
	
	//上传缩略图
	K('#J_upload').click(function() {
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
				showRemote : false,
				imageUrl : K('#J_pic').val(),
				clickFn : function(url, title, width, height, border, align) {
					K('#J_pic').val(url);
					editor.hideDialog();
				}
			});
		});
	});
	K('#J_uploadMobile').click(function() {
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
				showRemote : false,
				imageUrl : K('#J_picMobile').val(),
				clickFn : function(url, title, width, height, border, align) {
					K('#J_picMobile').val(url);
					editor.hideDialog();
				}
			});
		});
	});
});
</script>
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
                <a href="<?php echo U('Banner/index'); ?>"><em>Banner管理</em></a>
                <span>|</span>
                <a class="on" href="javascript:void(0);"><em>添加Banner</em></a>
            </div>
        </div>
        <div class="pad_10">
            <div class="common-form">
                <form name="myform" id="myform" action="<?php echo U('Banner/add'); ?>" method="post" enctype="multipart/form-data">
                    <table width="100%" class="table_form contentWrap">
                        <tbody>
                            <tr>
                                <th style="width:140px;"><span class="required">*</span> 菜单名称：</th>
                                <td><input type="text" name="Banner[name]" id="name" class="input-text"></td>
                            </tr>
                            <tr>
                                <th>链接地址：</th>
                                <td><input type="text" name="Banner[url]" id="name" class="input-text" style="width:400px;"></td>
                            </tr>
                            <tr>
                                <th>标题：</th>
                                <td><input type="text" name="Banner[title]" id="name" class="input-text" style="width:250px;"></td>
                            </tr>
                            <tr>
                                <th>副标题：</th>
                                <td><textarea name="Banner[sub_title]" style="width:455px; height:46px;"></textarea></td>
                            </tr>
                            <tr>
                                <th><span class="required">*</span> 轮播图片(PC端)：</th>
                                <td>
                                    <input type="text" class="input-text" id="J_pic" name="Banner[pic]" style="width:250px;"> 
                                    <input type="button" class="button" id="J_upload" value="本地上传">
                                    <span class="tip">图片尺寸：1000x420(px)</span>
                                </td>
                            </tr>
<!--                            <tr>-->
<!--                                <th><span class="required">*</span> 轮播图片(移动端）：</th>-->
<!--                                <td>-->
<!--                                    <input type="text" class="input-text" id="J_picMobile" name="Banner[pic_mobile]" style="width:250px;"> -->
<!--                                    <input type="button" class="button" id="J_uploadMobile" value="本地上传">-->
<!--                                    <span class="tip">图片尺寸：720x520(px)</span>-->
<!--                                </td>-->
<!--                            </tr>-->
                            <tr>
                                <th>排序：</th>
                                <td><input type="text" name="Banner[sort]" id="sort" value="0" class="input-text" style="width:40px;"></td>
                            </tr>
                            <tr>
                                <th>新窗口打开：</th>
                                <td>
                                    <input type="radio" name="Banner[target]" value="0" checked="checked"> 否 </label>&nbsp;&nbsp;
                                    <input type="radio" name="Banner[target]" value="1"> 是 </label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <input name="dosubmit" type="submit" value="提交" class="button" style="margin-top:15px;">
                </form>
            </div>
        </div>
    </body>
</html>
