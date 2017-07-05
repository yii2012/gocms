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
    <div class="subnav">
        <div class="content-menu ib-a blue line-x">
            <a class="on" href="<?php echo U('Banner/index'); ?>"><em>Banner管理</em></a>
            <span>|</span>
            <a href="<?php echo U('Banner/add', array('pid' => $pid)); ?>"><em>添加Banner</em></a>
        </div>
    </div>
    <!-- list begin -->
    <div class="pad_10">
        <div class="table-list">
            <form name="myform" id="J_myForm" action="<?php echo U('Banner/sort'); ?>" method="post">
                <table width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width:35px;">排序</th>
                            <th style="width:50px;">Id</th>
                            <th style="width:150px;">菜单名称</th>
                            <th>URL</th>
                            <th style="width:100px;">轮播图片</th>
                            <th style="width:150px;">标题</th>
                            <th style="width:250px;">副标题</th>
                            <th style="width:60px;">新窗口打开</th>
                            <th style="width:100px;">管理操作</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    <tbody>
                    <?php if (is_array($list) && !empty($list)) { ?>
                        <?php foreach($list as $item) { ?>
                        <tr>
                            <td><input type="text" class="input-text-c input-text" name="sort[<?php echo $item['id']; ?>]" value="<?php echo $item['sort']; ?>" size="3"></td>
                            <td><?php echo $item['id']; ?></td>
                            <td><?php echo $item['name']; ?></td>
                            <td><?php echo $item['url']; ?></td>
                            <td><img src="<?php echo $item['pic']; ?>" width="80" height="40"></td>
                            <td><?php echo $item['title']; ?></td>
                            <td><?php echo $item['sub_title']; ?></td>
                            <td>
                                <?php if ($item['target'] == 0) { ?>
                                    否
                                <?php } else { ?>
                                    是
                                <?php } ?>
                            </td>
                            <td>
                                <a href="<?php echo U('Banner/update', array('id' => $item['id'])); ?>">更新</a> | 
                                <a href="javascript:confirmUrl('<?php echo U('Banner/delete', array('id' => $item['id'])); ?>', '确定要删除吗？删除后就不能恢复啦！')">删除</a>
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
            </form>
        </div>
        <div class="bk15"></div>
        <div class="btn">
            <input type="button" class="button" onClick="myform.action='<?php echo U('Banner/sort', array('travel_id' => $travel_id));?>'; myform.submit();" value="排序"/>
        </div>
        <div id="pages"><?php echo $page; ?></div>
    </div> 
    <!-- list over -->
</body>
</html>
