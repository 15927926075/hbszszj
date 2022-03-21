<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="show centerBox">
    <div class="kpzuo left">
        <h2><?php echo $CATEGORYS[$top_parentid]['catname'];?><img src="images/xj_06.png"></h2>
        <ul class="yiji">
 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=335f73a761f38514d9730aee3d7b4f86&action=category&catid=%24top_parentid&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$top_parentid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li class="yi<?php if($catid==$r[catid]) { ?> on<?php } ?>">
                <?php if($r[child]) { ?><a href="javascript:;"><?php } else { ?><a href="<?php echo $r['url'];?>"><?php } ?>
                <?php echo $r['catname'];?></a>
                <ul class="erji">
 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ecfa8b47f0b28eb5df70ec3018314ca7&action=category&catid=%24r%5Bcatid%5D&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $c) { ?>
                    <li><a href="<?php echo $c['url'];?>"><?php echo $c['catname'];?></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>             
                </ul>
            </li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
            <img src="<?php echo $CATEGORYS['42']['image'];?>" class="ma">
    </div>
    <div class="kpyou">
        <div class="lop">当前位置：<span><a href="<?php echo APP_PATH;?>"><?php echo $CATEGORYS['1']['catname'];?></a></span> - <span><?php echo $CATEGORYS[$top_parentid]['catname'];?></span> - <?php echo $CATEGORYS[$catid]['catname'];?></div>
        <h2 class="title"><?php echo $title;?></h2>
        <p class="time"><img src="images/sj_18.jpg"><?php echo date('Y-m-d',strtotime($inputtime));?></p>
        <div class="content">
            <div class="contenta" style="clear: both;overflow: hidden;">
        	<?php echo $content;?>
        </div><div class="bshare-custom icon-medium-plus"><a title="分享到" href="http://www.bShare.cn/" id="bshare-shareto" class="bshare-more">分享到</a><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到网易微博" class="bshare-neteasemb"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><span class="BSHARE_COUNT bshare-share-count">0</span></div><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
        	<!-- <a href="javascript:;" class="more">查看更多</a> -->
        	<div class="fanye" style="clear: both;overflow: hidden;">
        		<div>上一篇：</div><p><a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a></p>
                <div>下一篇：</div><p><a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a></p>
        	</div>
        </div>
    </div>
</div>
<?php include template("content","footer"); ?>
<script>
$(function(){
   $('.kpzuo h2').click(function(){
   $('.kpzuo .yiji').slideToggle();                     
})
 })
$(".yiji .yi").click(function() {
    var $this = $(this);
    if($this.hasClass("bg")){
        $this.removeClass("bg").find('.erji').slideToggle();
    }else{
        $this.addClass("bg").find('.erji').slideToggle();
        $this.siblings().removeClass("bg").find('.erji').slideUp();
    }
})
    </script>