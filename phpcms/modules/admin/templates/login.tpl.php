<?php defined('IN_ADMIN') or exit('No permission resources.'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<link href="sign/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="sign/js/jquery.js"></script>
<script src="sign/js/cloud.js" type="text/javascript"></script>
<script language="javascript">
	$(function(){
    $('.loginbox').css({'position':'absolute','left':($(window).width()-471)/2});
	$(window).resize(function(){  
    $('.loginbox').css({'position':'absolute','left':($(window).width()-471)/2});
    })  
});  
</script>
<title><?php echo L('phpcms_logon')?></title>

</head>

<body style="background-color:#1c77ac; background-image:url(sign/images/light.png); background-repeat:no-repeat; background-position:center top; overflow:hidden;">
<div id="mainBody">
  <div id="cloud1" class="cloud"></div>
  <div id="cloud2" class="cloud"></div>
</div>
<div class="logintop"> <span>欢迎登录</span> </div>
<div class="loginbody"> <span class="systemlogo"></span>
  <form action="index.php?m=admin&c=index&a=login&dosubmit=1" method="post" name="myform">
    <div class="loginbox">
      <ul>
        <li>
        <input name="username" type="text" class="loginuser" value="" />
      
        </li>
        <li>
        <input name="password" type="password" class="loginpwd" value="" />
        
        </li>
        
        <!-- <label><?php echo L('security_code')?>：</label>
      <input name="code" type="text" class="ipt ipt_reg" onfocus="document.getElementById('yzm').style.display='block'" />
      <div id="yzm" class="yzm"><?php echo form::checkcode('code_img')?><br />
        <a href="javascript:document.getElementById('code_img').src='<?php echo SITE_PROTOCOL.SITE_URL.WEB_PATH;?>api.php?op=checkcode&m=admin&c=index&a=checkcode&time='+Math.random();void(0);"><?php echo L('click_change_validate')?></a></div>-->
        
        <li>
          <input name="sm1" type="submit" class="loginbtn" value="登录"/>
        </li>
      </ul>
    </div>
  </form>
</div>
</body>


</html>