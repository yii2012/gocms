<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"<?php if(isset($addbg)) { ?> class="addbg"<?php } ?>>
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
        
    <div class="pad_10" style="margin-top:15px;">
        <div class="table-list">
            <table width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th style="width:50px;">Id</th>
                        <th style="width:120px;">主题</th>
                        <th style="width:80px;">姓名</th>
                        <th style="width:80px;">电话</th>
                        <th>内容</th>
                        <th style="width:120px;">提交时间</th>
                        <th style="width:80px;">操作</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (is_array($list) && !empty($list)) { ?>
                    <?php foreach($list as $item) { ?>
                    <tr>
                        <td><?php echo $item['id']; ?></td>
                        <td><?php echo $item['topic_info']['name']; ?></td>
                        <td><?php echo $item['name'];?></td>
                        <td><?php echo $item['phone']; ?></td>
                        <td><?php echo $item['content']; ?></td>
                        <td><?php echo $item['create_time']; ?></td>
                        <td>
                            <a href="<?php echo U('ForumTopicComment/view', array('id' => $item['id'])); ?>">查看详情</a>
                        </td>
                    </tr>
                    <?php } ?>
                <?php } else { ?>
                    <tr>
                        <td colspan="10" align="center">暂无数据！</td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div id="pages"><?php echo $page; ?></div>
    </div> 
    <!-- list over -->
</body>
</html>
