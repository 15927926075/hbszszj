<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE HTML>
<html>
<head>
<link rel="shortcut icon" href="/favicon.ico" />
<!-- <script language="JavaScript" src="http://code.54kefu.net/kefu/js/b88/1081288.js" type="text/javascript" charset="utf-8"></script> -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/commonss.css">
<link rel="stylesheet" type="text/css" href="css/media.css">
<link rel="stylesheet" type="text/css" href="js/js/swiper.min.css">
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script src="js/js/swiper.min.js"></script>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
	<?php if($top_parentid) $idd=$top_parentid; elseif($parentid) $idd=$parentid; else $idd=$catid;?>
<div class="header">
	<div class="top">
		<div class="centerBox">
			<!-- <a href="<?php echo $CATEGORYS['14']['url'];?>"><?php echo $CATEGORYS['14']['catname'];?></a> -->
		<!-- 	<a href="<?php echo $CATEGORYS['15']['url'];?>"><?php echo $CATEGORYS['15']['catname'];?></a> -->
		<div class="search">
			<form action="<?php echo APP_PATH;?>index.php" method="get">
			<input type="hidden" name="m" value="content"/>
			<input type="hidden" name="c" value="index"/>
			<input type="hidden" name="a" value="lists"/>
			<input type="hidden" name="catid" value="13"/>     	
			<input type="text" name="q" id="q"  placeholder="搜索" class="key"/>
			<input type="submit" class="submit" value="GO"/>
			</form>
		</div>
	</div>
	</div>
	<div class="tou">
		<div class="logo"><a href="<?php echo APP_PATH;?>"><img src="<?php echo $CATEGORYS['11']['image'];?>"></a></div>
		<div class="pcmenu">
			<ul>
				<li <?php if($idd==0) { ?>class="on"<?php } ?>><a href="<?php echo APP_PATH;?>"><?php echo $CATEGORYS['1']['catname'];?></a></li>
				<li <?php if($idd==2) { ?>class="on"<?php } ?>>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=295750ec3af4988695903ae56370200c&action=category&catid=2&num=1&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'2','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'1',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<a href="<?php echo $r['url'];?>">
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					<?php echo $CATEGORYS['2']['catname'];?></a>
					<ul class="erji">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f004208d699b8b205e7c380207f99551&action=category&catid=2&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'2','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</ul>
				</li>
				<li <?php if($idd==3) { ?>class="on"<?php } ?>>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3d9653fabd33e65aed73a7c9dc2d5ecd&action=category&catid=3&num=1&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'3','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'1',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<a href="<?php echo $r['url'];?>">
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					<?php echo $CATEGORYS['3']['catname'];?></a>
					<ul class="erji">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a4d023a76aefdb423ab884fb767f970c&action=category&catid=3&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'3','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</ul>
				</li>
				<li <?php if($idd==4) { ?>class="on"<?php } ?>>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=996e16d7600335d5bff7b4d57850b56d&action=category&catid=4&num=1&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'4','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'1',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<a href="<?php echo $r['url'];?>">
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					<?php echo $CATEGORYS['4']['catname'];?></a>
					<ul class="erji">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a1508e0735a23311b7e00271de034265&action=category&catid=4&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'4','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</ul>
				</li>
				
				
				<li <?php if($idd==5) { ?>class="on"<?php } ?>>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1180dfd9022fb5801dd3d275552a40b5&action=category&catid=5&num=1&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'5','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'1',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<a href="<?php echo $r['url'];?>">
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					<?php echo $CATEGORYS['5']['catname'];?></a>
					<ul class="erji">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2a3fdeb001687bccd0439d3ad23095e3&action=category&catid=5&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'5','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</ul>
				</li>
				<li <?php if($idd==6) { ?>class="on"<?php } ?>>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4a885b259fcffe435b993e7879d6144d&action=category&catid=6&num=1&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'6','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'1',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<a href="<?php echo $r['url'];?>">
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					<?php echo $CATEGORYS['6']['catname'];?></a>
					<ul class="erji">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=de3f6125681db6370ea7f659641cefbc&action=category&catid=6&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'6','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</ul>
				</li>
				<li <?php if($idd==7) { ?>class="on"<?php } ?>>
					<a href="<?php echo $CATEGORYS['7']['url'];?>"><?php echo $CATEGORYS['7']['catname'];?></a>
									<ul class="erji">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5b0834c902796ec1545418fa69f50141&action=category&catid=7&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'7','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</ul>
				</li>
<!-- 				<li <?php if($idd==8) { ?>class="on"<?php } ?>><a href="<?php echo $CATEGORYS['8']['url'];?>"><?php echo $CATEGORYS['8']['catname'];?></a></li> -->
				<li <?php if($idd==9) { ?>class="on"<?php } ?>>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e0d6b484fca21b77dc3c624bc3ec9f4f&action=category&catid=9&num=1&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'9','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'1',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<a href="<?php echo $r['url'];?>">
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					<?php echo $CATEGORYS['9']['catname'];?></a>
					<ul class="erji">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8bff6d3a229524d966e2ad0dd45d9052&action=category&catid=9&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'9','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</ul>
				</li>
				<li <?php if($idd==10) { ?>class="on"<?php } ?>>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b1850c72b1e0ca13face3f0f4fc602fa&action=category&catid=10&num=1&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'10','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'1',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<a href="<?php echo $r['url'];?>">
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					<?php echo $CATEGORYS['10']['catname'];?></a>
					<ul class="erji">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=175842c3021744432b32edceca5fc5ac&action=category&catid=10&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'10','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</ul>
				</li>
			</ul>
		</div>
		<div class="sjmenu">
			<div class="cai"><img src="images/hcai_03.png"></div>
			<ul>
				<li><a href="<?php echo APP_PATH;?>"><?php echo $CATEGORYS['1']['catname'];?></a></li>
				<li>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=295750ec3af4988695903ae56370200c&action=category&catid=2&num=1&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'2','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'1',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<a href="<?php echo $r['url'];?>">
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					<?php echo $CATEGORYS['2']['catname'];?></a></li>
				<li>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3d9653fabd33e65aed73a7c9dc2d5ecd&action=category&catid=3&num=1&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'3','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'1',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<a href="<?php echo $r['url'];?>">
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					<?php echo $CATEGORYS['3']['catname'];?></a></li>
				<li><a href="<?php echo $CATEGORYS['4']['url'];?>"><?php echo $CATEGORYS['4']['catname'];?></a></li>
				<li>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1180dfd9022fb5801dd3d275552a40b5&action=category&catid=5&num=1&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'5','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'1',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<a href="<?php echo $r['url'];?>">
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					<?php echo $CATEGORYS['5']['catname'];?></a></li>
				<li>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4a885b259fcffe435b993e7879d6144d&action=category&catid=6&num=1&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'6','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'1',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<a href="<?php echo $r['url'];?>">
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					<?php echo $CATEGORYS['6']['catname'];?></a></li>
				<li><a href="<?php echo $CATEGORYS['7']['url'];?>"><?php echo $CATEGORYS['7']['catname'];?></a></li>
				<li><a href="<?php echo $CATEGORYS['8']['url'];?>"><?php echo $CATEGORYS['8']['catname'];?></a></li>
				<li>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e0d6b484fca21b77dc3c624bc3ec9f4f&action=category&catid=9&num=1&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'9','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'1',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<a href="<?php echo $r['url'];?>">
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					<?php echo $CATEGORYS['9']['catname'];?></a></li>
				<li>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b1850c72b1e0ca13face3f0f4fc602fa&action=category&catid=10&num=1&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'10','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'1',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<a href="<?php echo $r['url'];?>">
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					<?php echo $CATEGORYS['10']['catname'];?></a></li>
			</ul>
		</div>
		<div class="clearBoth"></div>
	</div>
	<div class="clearBoth"></div>
</div>
<div class="hei"></div>
<div class="fixed">
	<ul>
		<li><a href="<?php echo APP_PATH;?>"><img src="images/s1.png" onmouseover="this.src='images/q1.png'" onmouseout="this.src='images/s1.png'" /></a></li>
		<li class="zixun"><a href="<?php echo $CATEGORYS['45']['url'];?>" target="_blank"><img src="images/s2.png" onmouseover="this.src='images/q2.png'" onmouseout="this.src='images/s2.png'" /><p>在线咨询</p></a></li>
<!-- 		<li><a href="<?php echo $CATEGORYS['46']['url'];?>" target="_blank"><img src="images/s3.png" onmouseover="this.src='images/q3.png'" onmouseout="this.src='images/s3.png'" /></a></li>
		<li><a href="<?php echo $CATEGORYS['47']['url'];?>" target="_blank"><img src="images/s4.png" onmouseover="this.src='images/q4.png'" onmouseout="this.src='images/s4.png'" /></a></li>
		<li><a href="<?php echo $CATEGORYS['48']['url'];?>" target="_blank"><img src="images/s5.png" onmouseover="this.src='images/q5.png'" onmouseout="this.src='images/s5.png'" /></a></li> -->
		<li><a href="#top"><img src="images/s6.png" onmouseover="this.src='images/q6.png'" onmouseout="this.src='images/s6.png'" /></a></li>
	</ul>
</div>
<!-- Swiper -->
    <div class="swiper-container banner">
        <div class="swiper-wrapper">
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c6799b507f222c33f59b698dddf28c9a&action=lists&catid=12&order=listorder+desc&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'12','order'=>'listorder desc','moreinfo'=>'1','limit'=>'20',));}?> 
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
            <div class="swiper-slide" style="background: url(<?php echo $r['thumb'];?>)center no-repeat;background-size: cover;"><a href="<?php echo $r['url'];?>" style="display: block;height: 100%;" target="_blank"></a></div>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination dian"></div>
    </div>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.banner', {
        // direction: 'vertical',
        slidesPerView: 1,
        spaceBetween: 30,
        autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
        pagination: {
          el: '.dian',
          clickable: true,
        },
    });
    </script>
