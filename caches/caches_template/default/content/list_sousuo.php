<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<?php $q = $_GET[q]?>
  <?php if($q) { ?>
   <?php $keywords = " where  title like '%$q%'"?>
   <?php } else { ?>
   <?php $keywords = ''?>
  <?php } ?>
<div class="list centerBox">
    <div class="kpzuo left">
        <h2><?php echo $CATEGORYS[$catid]['catname'];?><img src="images/xj_06.png"></h2>
        <ul class="yiji">
            <li class="yi on"><a href="<?php echo $CATEGORYS[$catid]['url'];?>"><?php echo $CATEGORYS[$catid]['catname'];?></a></li>
        </ul>
            <img src="<?php echo $CATEGORYS['42']['image'];?>" class="ma">
    </div>
    <div class="kpyou">
        <div class="lop">当前位置：<span><a href="<?php echo APP_PATH;?>"><?php echo $CATEGORYS['1']['catname'];?></a></span> - <?php echo $CATEGORYS[$catid]['catname'];?></div>
        <ul class="ul">

            
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=d35f1ea2179da72242fe92687afc1668&sql=select+%2A+from+huawai_news++%24keywords+ORDER+BY++id+desc&num=100\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from huawai_news  $keywords ORDER BY  id desc LIMIT 100");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
<?php if($keywords) { ?>
<?php if($data) { ?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
     
<li><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" class="img"><div class="kphe"><h3><?php echo $r['title'];?></h3><div class="sj"><img src="images/sj_18.jpg"><?php echo date('Y-m-d',$r[inputtime]);?></div><p><?php echo $r['description'];?></p></div></a></li>

<?php $n++;}unset($n); ?> 
<?php } else { ?>
没有找到相关信息！
<?php } ?>
<?php } else { ?>
没有找到相关信息！
<?php } ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
        <div  id="pages"><?php echo $pages;?></div>
    </div>
</div>
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
<?php include template("content","footer"); ?>