<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="footer">
	<div class="centerBox">
		<div class="weixin"><img src="<?php echo $CATEGORYS['42']['image'];?>"><p><?php echo $CATEGORYS['42']['catname'];?></p></div>
		<div class="fxinxi">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=e2ba8306349c0cb97b1517c7e6d589f7&sql=SELECT+%2A+FROM+huawai_page+where+catid%3D43\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM huawai_page where catid=43 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
			<?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
			<?php echo $val['content'];?>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			<a href="#top">- 回到顶部 -</a>
		</div>
	</div>
</div>
<div class="copy">
	<div class="centerBox"><?php echo $CATEGORYS['44']['description'];?></div>
</div>
<script>
window.onload = function() {
    var hei=$(window).height();
    var aa=$(".kpyou").height();
    var cc=$(".header").height();
    var ddd= hei - cc;
    $('.kpzuo').css("min-height",aa);
    $('.sjmenu ul').css("height",ddd);
    $('.sjmenu ul').css("top",cc);
    var width_ = $(window).width();
    if(width_<=1024){
    $('.hei').css("margin-top",cc);
}
};
</script>
<script>
$(function(){
   $('.cai').click(function(){
   $('.sjmenu ul').slideToggle();                    
})
 })
</script>
<script>
    $(document).ready(function(){
        //首先将#back-to-top隐藏
        $(".fixed").hide();
        //当滚动条的位置处于距顶部600像素以下时，跳转链接出现，否则消失
        $(function () {
            $(window).scroll(function(){
                if ($(window).scrollTop()>600){
                    $(".fixed").fadeIn(500);
                }else{
                    $(".fixed").fadeOut(500);
                }
            });
        });
    });
</script>
</body>
</html>