<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html class="off">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
        <title>后台管理 - <?php echo C("SITE_NAME"); ?></title>
        <css href="__PUBLIC__/Admin/css/reset.css" />
        <css href="__PUBLIC__/Admin/css/system.css" />
        <css href="__PUBLIC__/Admin/css/dialog.css" />
        <js href="__PUBLIC__/Admin/js/jquery-1.9.1.js" />
        <js href="__PUBLIC__/Admin/js/dialog.js" />
        <style type="text/css">
            .objbody{overflow:hidden}
        </style>
    </head>
    <body scroll="no" class="objbody">
        <!-- header begin -->
        <div class="header">
            <div class="logo lf"  style="font-size: 20px; color: #fff; text-align: center;"><a class="white" href="/" target="_blank">后台管理系统</a></div>
            <div class="col-auto">
                <div class="log white cut_line">
                    您好！<?php echo session('admin_name'); ?><span>|</span>[<a href="<?php echo U('Public/loginOut'); ?>">退出</a>]<span>|</span>
                    <a target="_blank" href="<?php echo C('SITE_URL'); ?>">站点首页</a>
                </div>
                <ul class="nav white" id="top_menu">
                <?php foreach ($nav_list as $nav) { ?>
                    <li id="_M<?php echo $nav['id']; ?>" class="top_menu">
                        <a style="outline:none;" hidefocus="true" href="javascript:_M(<?php echo $nav['id']; ?>, '<?php echo U($nav['module'] . '/' . $nav['controller'] . '/' . $nav['action']); ?>')">{$nav.chinese_name}</a>
                    </li>        
                <?php } ?>
                </ul>
            </div>
        </div>
        <!-- header over -->

        <!--content begin -->
        <div id="content" style="width:auto;">
            <!-- left1 begin--> 
            <div class="col-left left_menu">
                <div id="Scroll"><div id="leftMain"></div></div>
                <a href="javascript:;" id="openClose" class="open" title="展开与关闭"  style="outline-style: none; outline-color: invert; outline-width: medium;" hideFocus="hidefocus" ><span class="hidden">展开</span></a>
            </div>
            <div class="scroll" style="display:none">
                <a class="per" onclick="menuScroll(1);" title="使用鼠标滚轴滚动侧栏" href="javascript:;"></a>
            </div>
            <!-- left1 over-->

            <!--left2 begin -->
            <div class="col-1 lf cat-menu" id="display_center_id" style="display:none" height="100%">
                <div class="content">
                    <iframe name="center_frame" id="center_frame" src="" frameborder="false" scrolling="auto" style="border:none" width="100%" height="auto" allowtransparency="true"></iframe>
                </div>
            </div>
            <!--left2 over-->

            <!-- right begin -->
            <div class="col-auto mr8">
                <div class="crumbs">
                    <div class="shortcut cu-span">
                    </div>
                    当前位置：<span id="current_pos"></span>
                </div>

                <div class="col-1">
                    <div class="content" style="position:relative; overflow:hidden">
                        <iframe name="right" id="rightMain" src="<?php echo U('Index/home'); ?>" frameborder="false" scrolling="auto" style="border:none; margin-bottom:30px" width="100%" height="auto" allowtransparency="true"></iframe>
                    </div>
                </div>
            </div>
            <!-- right over -->
        </div>
        <!--content over -->

        <script type="text/javascript">
            if (!Array.prototype.map)
                Array.prototype.map = function(fn, scope) {
                    var result = [], ri = 0;
                    for (var i = 0, n = this.length; i < n; i++) {
                        if (i in this) {
                            result[ri++] = fn.call(scope, this[i], i, this);
                        }
                    }
                    return result;
                };

            var getWindowSize = function() {
                return ["Height", "Width"].map(function(name) {
                    return window["inner" + name] ||
                            document.compatMode === "CSS1Compat" && document.documentElement[ "client" + name ] || document.body[ "client" + name ]
                });
            }
            window.onload = function() {
                if (!+"\v1" && !document.querySelector) { // for IE6 IE7
                    document.body.onresize = resize;
                } else {
                    window.onresize = resize;
                }
                function resize() {
                    wSize();
                    return false;
                }
            }
            function wSize() {
                //这是一字符串
                var str = getWindowSize();
                var strs = new Array(); //定义一数组
                strs = str.toString().split(","); //字符分割
                var heights = strs[0] - 150, Body = $('body');
                $('#rightMain').height(heights);
                //iframe.height = strs[0]-46;
                if (strs[1] < 980) {
                    $('.header').css('width', 980 + 'px');
                    $('#content').css('width', 980 + 'px');
                    Body.attr('scroll', '');
                    Body.removeClass('objbody');
                } else {
                    $('.header').css('width', 'auto');
                    $('#content').css('width', 'auto');
                    Body.attr('scroll', 'no');
                    Body.addClass('objbody');
                }

                var openClose = $("#rightMain").height() + 39;
                $('#center_frame').height(openClose + 9);
                $("#openClose").height(openClose + 30);
                $("#Scroll").height(openClose - 20);
                windowW();
            }
            wSize();

            //左侧开关
            $("#openClose").click(function() {
                if ($(this).data('clicknum') == 1) {
                    $("html").removeClass("on");
                    $(".left_menu").removeClass("left_menu_on");
                    $(this).removeClass("close");
                    $(this).data('clicknum', 0);
                    $(".scroll").show();
                } else {
                    $(".left_menu").addClass("left_menu_on");
                    $(this).addClass("close");
                    $("html").addClass("on");
                    $(this).data('clicknum', 1);
                    $(".scroll").hide();
                }
                return false;
            });

            function windowW() {
                if ($("#Scroll").height() < $("#leftMain").height()) {
                    $(".scroll").show();
                } else {
                    $(".scroll").hide();
                }
            }

            //导航菜单单击
            function _M(menu_id, targetUrl) {
                $("#leftMain").load("<?php echo U('Public/left'); ?>", {menu_id: menu_id, limit: 25}, function() {
                    windowW();
                });

                $(".top_menu").removeClass("on");
                $("#_M" + menu_id).addClass("on");
                $.get("<?php echo U('Public/currentPos'); ?>", {menu_id: menu_id}, function(data) {
                    $("#current_pos").html(data);
                });

                //当点击顶部菜单后，隐藏中间的框架
                $('#display_center_id').css('display', 'none');
                //显示左侧菜单，当点击顶部时，展开左侧
                $(".left_menu").removeClass("left_menu_on");
                $("#openClose").removeClass("close");
                $("html").removeClass("on");
                $("#openClose").data('clicknum', 0);
                $("#current_pos").data('clicknum', 1);
            }

            //左侧菜单项单击
            function _MP(menu_id, targetUrl) {
                $("#rightMain").attr("src", targetUrl);
                $(".sub_menu").removeClass("on fb blue");
                $("#_MP" + menu_id).addClass("on fb blue");

                $.get("<?php echo U('Public/currentPos'); ?>", {menu_id: menu_id}, function(data) {
                    $("#current_pos").html(data + "<span id='current_pos_attr'></span>");
                });


            }

            //默认选中第一项
            _M(1, "<?php echo U('Setting/Setting/index'); ?>");
        </script>
    </body>
</html>
