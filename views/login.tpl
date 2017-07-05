<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
  <script type="text/javascript" src="/static/js/jquery-1.9.1.js"></script>
  <title>管理中心</title>
  <style type="text/css">
    div{overflow:hidden; *display:inline-block;}div{*display:block;}
    .login_box{background:url(/static/images/login/login_bg.jpg) no-repeat; width:602px; height:416px; overflow:hidden; position:absolute; left:50%; top:50%; margin-left:-301px; margin-top:-208px;}
    .login_iptbox{bottom:90px;_bottom:72px;color:#FFFFFF;font-size:12px;height:30px;left:50%;
      margin-left:-280px;position:absolute;width:570px; overflow:visible;}
    .login_iptbox .ipt{height:24px; width:110px; margin-right:15px; color:#fff; background:url(/static/images/login/ipt_bg.jpg) repeat-x; *line-height:24px; border:none; color:#000; overflow:hidden;}
    .login_iptbox label{ *position:relative; *top:-6px;}
    .login_iptbox .ipt_reg{margin-left:12px;width:46px; margin-right:16px; background:url(/static/images/login/ipt_bg.jpg) repeat-x; *overflow:hidden;text-align:left;padding:2px 0 2px 5px;font-size:16px;font-weight:bold;}
    .login_tj_btn{ background:url(/static/images/login/login_dl_btn.jpg) no-repeat 0px 0px; width:52px; height:24px; margin-left:16px; border:none; cursor:pointer; padding:0px; float:right;}
    .yzm{position:absolute; background:url(/static/images/login/login_ts140x89.gif) no-repeat; width:140px; height:89px;right:56px;top:-96px; text-align:center; font-size:12px; display:none;}
    .yzm a:link,.yzm a:visited{color:#036;text-decoration:none;}
    .yzm a:hover{color:#C30;}
    .yzm img{cursor:pointer; margin:4px auto 7px; width:130px; height:50px; border:1px solid #fff;}
    .cr{font-size:12px;font-style:inherit;text-align:center;color:#ccc;width:100%; position:absolute; bottom:58px;}
    .cr a{color:#ccc;text-decoration:none;}
  </style>
  <script language="JavaScript">
      <!--
      if (top != self)
          if (self != top)
              top.location = self.location;
      //-->
  </script>
</head>

<body onload="javascript:document.myform.admin_name.focus();">
<div id="login_bg" class="login_box">
    <div class="login_iptbox">
        <form action="/login" method="post" name="myform">
            <input name="submit" value="" type="submit" class="login_tj_btn"/>
            <label>用户名：</label>
            <input name="admin_name" type="text" class="ipt" value=""/>
            <label>密码：</label>
            <input name="admin_password" type="password" class="ipt" value=""/>
            <label>验证码：</label>
            <input name="verify_code" type="text" class="ipt ipt_reg"
                   onfocus="document.getElementById('J_verifyWrap').style.display = 'block'"/>
            <div id="J_verifyWrap" class="yzm">
                <img src="<?php echo U('Public/verify'); ?>" id="J_verifyImg"/><br/>
                <a href="javascript:void(0);" onclick="refreshVerify('#J_verifyImg');">?单击更换验证码</a>
            </div>
        </form>
    </div>
    <div class="cr"><?php echo C('SITE_NAME'); ?>管理系统</div>
</div>
<script type="text/javascript">
    //验证码刷新
    function refreshVerify(verifyImgId) {
        $(verifyImgId).attr('src', "<?php echo U('Public/verify'); ?>" + '&' + Math.random());
    }
</script>
</body>
</html>