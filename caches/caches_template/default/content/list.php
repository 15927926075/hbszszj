<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="list centerBox">
    <div class="kpzuo left">
        <h2><?php echo $CATEGORYS[$parentid]['catname'];?><img src="images/xj_06.png"></h2>
        <ul class="yiji">
 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a999797504c27ae6d247a83d5f1e86ef&action=category&catid=%24parentid&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$parentid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li class="yi<?php if($catid==$r[catid]) { ?> on<?php } ?>"><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
            <img src="<?php echo $CATEGORYS['42']['image'];?>" class="ma">
    </div>
    <div class="kpyou">
        <div class="lop">当前位置：<span><a href="<?php echo APP_PATH;?>"><?php echo $CATEGORYS['1']['catname'];?></a></span> - <?php echo $CATEGORYS[$catid]['catname'];?></div>
        <ul class="ul">
 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ae837ed401139e1548d048169482080c&action=lists&catid=%24catid&order=listorder+desc&num=4&moreinfo=1&page=%24page+\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 4;$page = intval($page ) ? intval($page ) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder desc','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder desc','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?> 
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" class="img"><div class="kphe"><h3><?php echo $r['title'];?></h3><div class="sj"><img src="images/sj_18.jpg"><?php echo date('Y-m-d',$r[inputtime]);?></div><p><?php echo $r['description'];?></p></div></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
        <div  id="pages"><?php echo $pages;?></div>
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