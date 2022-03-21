<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="show centerBox">
    <div class="kpzuo left">
        <h2><?php echo $CATEGORYS[$catid]['catname'];?><img src="images/xj_06.png"></h2>
        <ul class="yiji">
            <li class="yi on"><a href="<?php echo $CATEGORYS[$catid]['url'];?>"><?php echo $CATEGORYS[$catid]['catname'];?></a></li>
        </ul>
            <img src="<?php echo $CATEGORYS['42']['image'];?>" class="ma">
    </div>
    <div class="kpyou">
        <div class="lop">当前位置：<span><a href="<?php echo APP_PATH;?>"><?php echo $CATEGORYS['1']['catname'];?></a></span> - <?php echo $CATEGORYS[$catid]['catname'];?></div>
        <h2 class="title"><?php echo $title;?></h2>
        <p class="time"><img src="images/sj_18.jpg"><?php echo date('Y-m-d',strtotime($inputtime));?></p>
        <div class="content">
            <div class="contenta" style="clear: both;overflow: hidden;">
        	<?php echo $content;?>
             </div>
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