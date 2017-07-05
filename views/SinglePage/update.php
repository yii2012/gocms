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
        <js href="__PUBLIC__/Admin/js/area.js" />
        
        <!--kindeditor begin-->
        <css href="__PUBLIC__/Admin/kindeditor/themes/default/default.css" />
        <js href="__PUBLIC__/Admin/kindeditor/kindeditor.js" />
        <js href="__PUBLIC__/Admin/kindeditor/lang/zh_CN.js" />
        <script type="text/javascript">
var editor;
KindEditor.ready(function(K) {
    editor = K.create('#J_Content', {
        autoHeightMode: true,
        afterCreate: function() {
            this.loadPlugin('autoheight');
        },
        uploadJson: '<?php echo U('uploadJson'); ?>',
        fileManagerJson: '<?php echo U('fileManagerJson'); ?>',
        allowFileManager: true,
        formatUploadUrl: false,
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
					K("#J_UploadBannerPic").val(url);
					editor.hideDialog();
				}
			});
		});
	});
    
    $(document).on('click', '.J_Upload', function() {
        var imgurl = $(this).prev('.J_Pic');
        editor.loadPlugin('image', function() {
            editor.plugin.imageDialog({
                showRemote : false,
                imageUrl : imgurl.val(),
                clickFn : function(url, title, width, height, border, align) {
                    imgurl.val(url);
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
        <div class="pad_10" style="margin-top:15px;">
            <div class="common-form">
                <form name="myform" id="myform" action="<?php echo U('SinglePage/update'); ?>" method="post">
                    <table class="table_form contentWrap" width="100%" cellspacing="0">
                        <tbody>
                            <tr>
                                <th width="100"><span class="required">*</span> 标题：</th>
                                <td>
                                    <input type="text" class="measure-input  input-text" name="SinglePage[title]" value="<?php echo $page_info['title']; ?>" style="width:400px;">
                                </td>
                            </tr>
                            <tr>
                                <th>描述：</th>
                                <td>
                                    <textarea name="SinglePage[description]" style="width:600px; height:40px;"><?php echo $page_info['description']; ?></textarea>
                                </td>
                            </tr>  
<!--                            <tr>-->
<!--                                <th><span class="required">*</span> Banner图片：</th>-->
<!--                                <td>-->
<!--                                    <input type="text" class="input-text" id="J_UploadBannerPic" name="SinglePage[banner_pic]" value="--><?php //echo $page_info['banner_pic']; ?><!--" style="width:250px;"> -->
<!--                                    <input type="button" class="button" id="J_UploadBanner" value="本地上传">-->
<!--                                    <span class="tip">图片尺寸：1290x400(px)</span>-->
<!--                                    --><?php //if (!empty($page_info['banner_pic'])) { ?>
<!--                                    <img src="--><?php //echo $page_info['banner_pic']; ?><!--" width="50" height="50">-->
<!--                                    --><?php //} ?><!--  -->
<!--                                </td>-->
<!--                            </tr>-->
                            <tr>
                                <th>内容：</th>
                                <td>
                                    <textarea name="SinglePage[content]" id="J_Content" style="width:95%; height:800px; visibility:hidden;"><?php echo $page_info['content']; ?></textarea>
                                </td>
                            </tr>  
                        </tbody>
                    </table>
                    <input type="hidden" name="SinglePage[id]" value="<?php echo $page_info['id']; ?>" />
                    <input name="dosubmit" type="submit" value="提交" class="button" style="margin-top: 15px;">
                </form>
            </div>
        </div>
    </body>
</html>
