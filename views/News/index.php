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
    //显示新闻项目左侧栏目
        window.top.$("#display_center_id").hide();
    </script>
    <div class="subnav">
        <div class="content-menu ib-a blue line-x">
            <a class="on" href="<?php echo U('News/index'); ?>"><em>项目管理</em></a>
            <span>|</span>
            <a href="<?php echo U('News/add'); ?>"><em>添加项目</em></a>
        </div>
    </div>
    <!-- list begin -->
    <div class="pad_10">
        <div class="table-list">
            <table width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th style="width:50px;">Id</th>
                        <th>标题</th>
                        <th style="width:140px;">所属类别</th>
                        <th style="width:100px;">列表页图</th>
                        <th style="width:100px;">首页图</th>
                        <th style="width:100px;">是否推荐</th>
                        <th style="width:120px;">添加时间</th>
                        <th style="width:100px;">管理操作</th>
                    </tr>
                </thead>
                <tbody>

                <tbody>
                <?php if (is_array($list) && !empty($list)) { ?>
                    <?php foreach($list as $item) { ?>
                    <tr>
                        <td><?php echo $item['id']; ?></td>
                        <td><?php echo $item['title']; ?></td>
                        <td><?php echo $item['cat_info']['name']; ?></td>
                        <td><img src="<?php echo $item['pic']; ?>" width="80" height="60"></td>
                        <td><?php if (!empty($item['index_pic'])) { ?><img src="<?php echo $item['index_pic']; ?>" width="80" height="60"><?php } ?></td>
                        <td>
                            <?php if ($item['is_rec'] == 1) { ?>
                                <span style="color:red">是</span>
                            <?php } ?>
                        </td>
                        <td><?php echo $item['create_time']; ?></td>
                        <td>
                            <a href="<?php echo U('News/update', array('id' => $item['id'])); ?>">更新</a> |
                            <a href="javascript:confirmUrl('<?php echo U('News/delete', array('id' => $item['id'])); ?>', '确定要删除吗？删除后就不能恢复啦！')">删除</a>
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
