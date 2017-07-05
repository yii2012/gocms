<?php foreach($group_menus as $group_menu) { ?>
	<h3 class="f14"><span class="switchs cu on" title="展开与收缩"></span><?php echo $group_menu['chinese_name']; ?></h3>
    <ul>
        <?php foreach($group_menu['sub_menus'] as $sub_menu) { ?>
        	<li id="_MP<?php echo $sub_menu['id']; ?>" class="sub_menu">
                <a href="javascript:_MP(<?php echo $sub_menu['id']; ?>, '<?php echo U($sub_menu['module'] . '/' . $sub_menu['controller'] . '/' . $sub_menu['action']); ?>')" hidefocus="true" style="outline:none;"><?php echo $sub_menu['chinese_name']; ?></a>
            </li>
        <?php } ?>
    </ul>
<?php } ?>

<script type="text/javascript">
$(".switchs").each(function(i){
	var ul = $(this).parent().next();
	$(this).click(function(){
		if (ul.is(":visible")) {
			ul.hide();
			$(this).removeClass("on");
		} else {
			ul.show();
			$(this).addClass("on");
		}
	});
});
</script>