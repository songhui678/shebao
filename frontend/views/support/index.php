<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
?>
<div class="iBanner">
    <div class="bd">
        <?php foreach ($adverList as $adver) {?>
            <a href="<?=$adver->url?>" target="_blank" title="<?=$adver->title?>"><img src="<?=$adver->photo?>" alt="<?=$adver->title?>" width="1920" height="258" ></a>
        <?php }?>
    </div>
</div>
<div class="menuwrap">
  <div class="menu wrap ">
    <dl class="clearfix">
          <dt><a href="<?=Url::toRoute('/support')?>" class="current"><i class="i1"></i>解决方案</a></dt>
     </dl>
  </div>
</div>
<div class="container hhh">
  <div class="wrap clearfix">
    <div class="main">
            <div class="location">
            <?php echo Breadcrumbs::widget(['homeLink' => [
	'label' => '首页',
	'url' => ['/'],
	'template' => "<img src='/static/newimage/home.jpg'>{link}<span>&gt;</span>",
],
	'links' => [
		[
			'label' => '解决方案',
			'url' => ['/support'],
			'template' => " {link}",
		],

	]]);
?>

            </div>
       <div class="article clearfix" id="info_content">


              <?=$content->content?>
       </div>

        <script language="javascript">
          $(function(){
            var imgObj = $("#info_content").find("img");
            if (imgObj.length > 0)
            {
              for (var i = 0; i < imgObj.length; i++)
              {
                if (imgObj[i].width > 1140) imgObj[i].width = 1140;
              }
            }
          });
        </script>
                  </div>
  </div>
</div>
