<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<link rel="stylesheet" type="text/css" href="css/animate.min.css">

<script type="text/javascript" src="js/wow.min.js"></script>

<div class="index centerBox">

    <div class="izuo wow slideInLeft">

        <h2>最新新闻<span>News</span></h2>

        <ul>

<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c032f1dbde0e11fae96a837f91dcee9e&sql=SELECT+%2A+from+huawai_news+where++catid+in%2861%2C25%2C38%2C24%2C22%2C28%2C23%2C27%2C59%2C30%2C33%2C36%2C37%29+order+by+id+desc&num=3&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * from huawai_news where  catid in(61,25,38,24,22,28,23,27,59,30,33,36,37) order by id desc LIMIT 3");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
	<li><a href="<?php echo $r['url'];?>"><div class="riqi"><h3><?php echo date('d',$r[inputtime]);?></h3><p><?php echo date('Y-m',$r[inputtime]);?></p></div><div class="zcen"><h4><?php echo $r['title'];?></h4>		<p class="yin"><img src="images/sj_18.jpg"><?php echo date('H:i',$r[inputtime]);?></p><p><?php echo $r['description'];?></p></div><img src="<?php echo $r['thumb'];?>" class="thumb"></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

        </ul>

    </div>

    <div class="iyou wow slideInRight">

       <h2><?php echo $CATEGORYS['50']['catname'];?><span><?php echo $CATEGORYS['50']['catdir'];?></span></h2> 

       <ul>

  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6869cadb07190610f05fc88dbf6f0217&action=lists&catid=50&order=listorder+desc&num=1&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'50','order'=>'listorder desc','moreinfo'=>'1','limit'=>'1',));}?> 

<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 

           <li><a href="<?php echo $r['url'];?>"><img src="images/zj_06.png"><p><?php echo $r['title'];?><span>NEW</span></p></a></li>

<?php $n++;}unset($n); ?>

<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=efdd6488758c3af0b97f8256e73b4514&action=lists&catid=50&order=listorder+desc&num=4&moreinfo=1&start=1+\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'50','order'=>'listorder desc','moreinfo'=>'1','limit'=>'1,4',));}?> 

<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 

           <li><a href="<?php echo $r['url'];?>"><img src="images/zj_06.png"><p><?php echo $r['title'];?></p></a></li>

 <?php $n++;}unset($n); ?>

<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

       </ul>

       <a href="<?php echo $CATEGORYS['50']['url'];?>" class="cha">查看更多</a>

    </div>

    <div class="clearBoth"></div>

</div>

<div class="serive wow slideInUp">

    <h2><?php echo $CATEGORYS['51']['catname'];?></h2>

    <h4><?php echo $CATEGORYS['51']['catdir'];?></h4>

    <ul class="centerBox">

   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f530a2cb8a861b42f1dd514a5a92e407&action=lists&catid=51&order=listorder+desc&num=3&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'51','order'=>'listorder desc','moreinfo'=>'1','limit'=>'3',));}?> 

<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>        

        <li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>"><p><?php echo $r['title'];?></p></a></li>

  <?php $n++;}unset($n); ?>

<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

    </ul>

</div>

<div class="jianzhang centerBox">

    <div class="jzzuo left wow slideInLeft">

        <img src="<?php echo $CATEGORYS['53']['image'];?>">

    </div>

    <div class="jzyou right wow slideInRight">

        <h2><?php echo $CATEGORYS['53']['catname'];?></h2>

        <h3><?php echo $CATEGORYS['53']['catdir'];?></h3>

        <p><?php echo $CATEGORYS['52']['description'];?></p>

        <div>

            <?php echo $CATEGORYS['53']['description'];?>

        </div>

        <a href="<?php echo $CATEGORYS['53']['url'];?>">阅读详细  ></a>

    </div>

</div>

<div class="fengg wow slideInUp">

    <div class="centerBox">

        <h2><?php echo $CATEGORYS['54']['catname'];?></h2>

        <h3><?php echo $CATEGORYS['54']['catdir'];?></h3>

<!-- Swiper -->

<div class="fzong" style="display: flex;flex-wrap: wrap;">

  <div class="swiper-container lunbo">

    <div class="swiper-wrapper">

   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b3642874ec230e379ed02be5eb32f5f3&action=lists&catid=54&order=listorder+desc&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'54','order'=>'listorder desc','moreinfo'=>'1','limit'=>'20',));}?> 

<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 

      <div class="swiper-slide"><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>"><p><?php echo $r['title'];?></p></a></div>

  <?php $n++;}unset($n); ?>

<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>



    </div>

  </div>

<div class="ckgd"><div><a href="<?php echo $CATEGORYS['54']['url'];?>"><h2>MORE</h2><h3>查看更多</h3></a></div></div>

</div>

    </div>

    <div class="swiper-button-prev zuo"><img src="images/bz_21.png" onmouseover="this.src='images/hz.png'" onmouseout="this.src='images/bz_21.png'" /></div>

    <div class="swiper-button-next you"><img src="images/by.png" onmouseover="this.src='images/hz_21.png'" onmouseout="this.src='images/by.png'" /></div>

</div>

  <!-- Initialize Swiper -->

  <script>

   var width_ = $(window).width();

    if(width_>1024){

    var swiper = new Swiper('.lunbo', {

      slidesPerView: 3,

      spaceBetween: 28,

      loop:true,

      navigation: {

        nextEl: '.you',

        prevEl: '.zuo',

      },

    });

}else{

     var swiper = new Swiper('.lunbo', {

      slidesPerView: 2,

      spaceBetween: 10,

      loop:true,

      navigation: {

        nextEl: '.you',

        prevEl: '.zuo',

      },

    });   

}

  </script>

<!-- <script>

var www=$(".lunbo").height();

$('.ckgd').css("height",www);

</script> -->

<script type="text/javascript">



　　　var wow = new WOW({



    boxClass: 'wow',



    animateClass: 'animated',



    offset: 0,



    mobile: true,



    live: true



  });



  wow.init();







</script>

<?php include template("content","footer"); ?>