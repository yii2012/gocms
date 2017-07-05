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
	K('#J_UploadBanner').click(function() {
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
				showRemote : false,
				imageUrl : K('#J_UploadBannerPic').val(),
				clickFn : function(url, title, width, height, border, align) {
					K('#J_UploadBannerPic').val(url);
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
                <a href="<?php echo U('NewsCategory/index'); ?>"><em>管理类别</em></a>
                <span>|</span>
                <a class="on" href="<?php echo U('NewsCategory/updae'); ?>"><em>更新类别</em></a>
            </div>
        </div>
        <div class="pad_10">
            <div class="common-form">
                <form name="myform" id="myform" action="<?php echo U('NewsCategory/update'); ?>" method="post" enctype="multipart/form-data">
                    <table width="100%" class="table_form contentWrap">
                        <tbody>
                            <tr>
                                <th style="width:140px;"><span class="required">*</span> 类别名称：</th>
                                <td><input type="text" class="input-text" name="NewsCategory[name]" value="<?php echo $category_info['name']; ?>" style="width:250px;"></td>
                            </tr>
                            <tr>
                                <th>描述：</th>
                                <td><textarea name="NewsCategory[description]" style="width:700px; height:60px;"><?php echo $category_info['description']; ?></textarea></td>
                            </tr>
                            <tr>
                                <th>图片：</th>
                                <td>
                                    <input type="text" class="input-text" id="J_UploadBannerPic" name="NewsCategory[pic]" value="<?php echo $category_info['pic']; ?>" style="width:250px;"> 
                                    <input type="button" class="button" id="J_UploadBanner" value="本地上传">
                                    <span class="tip">图片尺寸：340x335(px)</span>
                                    <img src="<?php echo $category_info['pic']; ?>" width="80" height="40">
                                </td>
                            </tr>
                            <tr>
                                <th>是否推荐：</th>
                                <td>
                                    <input type="checkbox" value="1" name="NewsCategory[is_rec]" <?php if ($category_info['is_rec'] == 1) { ?> checked="checked" <?php } ?>/>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <input type="hidden" name="NewsCategory[id]" value="<?php echo $category_info['id']; ?>">
                    <input name="dosubmit" type="submit" value="提交" class="button" style="margin-top:15px;">
                </form>
            </div>
        </div>
    </body>
</html>
