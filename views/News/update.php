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
        var editor;
        KindEditor.ready(function(K) {
            editor = K.create('#J_content', {
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
            K('#J_upload').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        showRemote : false,
                        imageUrl : K('#J_thumb').val(),
                        clickFn : function(url, title, width, height, border, align) {
                            K("#J_thumb").val(url);
                            editor.hideDialog();
                        }
                    });
                });
            });
            K('#J_uploadIndexPic').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        showRemote : false,
                        imageUrl : K('#J_indexPic').val(),
                        clickFn : function(url, title, width, height, border, align) {
                            K("#J_indexPic").val(url);
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
    //显示新闻项目左侧栏目
    window.top.$("#display_center_id").hide();
</script>
<div class="subnav">
    <div class="content-menu ib-a blue line-x">
        <a href="<?php echo U('News/index'); ?>"><em>项目管理</em></a>
        <span>|</span>
        <a class="on" href="javascript:void(0);"><em>添加项目</em></a>
    </div>
</div>
<div class="pad_10">
    <div class="common-form">
        <form name="myform" id="myform" action="<?php echo U('News/update'); ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="News[id]" value="<?php echo $news_info['id']; ?>" />
            <table width="100%" class="table_form contentWrap">
                <tbody>
                <tr>
                    <th><span class="required">*</span>标题：</th>
                    <td><input type="text" name="News[title]" id="title" class="measure-input input-text" style="width:450px;" value="<?php echo $news_info['title']; ?>"></td>
                </tr>
                <tr>
                    <th><span class="required">*</span>所属类别：</th>
                    <td>
                        <select name="News[cat_id]">
                            <option value="">==请选择==</option>
                            <?php foreach($cat_list as $item) { ?>
                                <option value="<?php echo $item['id']; ?>" <?php if ($news_info['cat_id'] == $item['id']) { ?> selected="selected" <?php } ?>><?php echo $item['name']; ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><span class="required">*</span> 列表页图：</th>
                    <td>
                        <input type="text" class="input-text" id="J_thumb" name="News[pic]" value="<?php echo $news_info['pic']; ?>" style="width:250px;">
                        <input type="button" class="button" id="J_upload" value="本地上传">
                        <span class="tip">图片尺寸：890*451(px)</span>
                        <img src="<?php echo $news_info['pic'];?>" width="80" height="60" />
                    </td>
                </tr>
                <tr>
                    <th>首页图：</th>
                    <td>
                        <input type="text" class="input-text" id="J_indexPic" name="News[index_pic]" value="<?php echo $news_info['index_pic']; ?>" style="width:250px;">
                        <input type="button" class="button" id="J_uploadIndexPic" value="本地上传">
                        <span class="tip">图片尺寸：267*385(px)</span>
                        <img src="<?php echo $news_info['index_pic'];?>" width="80" height="60" />
                    </td>
                </tr>
                <tr>
                    <th>描述：</th>
                    <td><textarea name="News[description]" style="width:655px; height:46px;"><?php echo $news_info['description']; ?></textarea></td>
                </tr>
                <tr>
                    <th>内容：</th>
                    <td>
                        <textarea name="News[content]" id="J_content" style="width:95%;height:300px;visibility:hidden;"><?php echo $news_info['content']; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th>是否推荐：</th>
                    <td>
                        <input type="checkbox" value="1" name="News[is_rec]" <?php if ($news_info['is_rec'] == 1) { ?> checked="checked" <?php } ?>/>
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
