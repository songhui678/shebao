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
          <dt><a href="<?=Url::toRoute('/contact')?>" class="current"><i class="i1"></i>联系我们</a></dt>
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
			'label' => '联系我们',
			'url' => ['/contact'],
			'template' => " {link}",
		],

	]]);
?>

                        </div>

                    <div class="back-color">
                    <div class="contact-wrap">
                        <div class="contact clearfix">
                            <?=$content->content?>

                        </div>
                    </div>



                    <div class="cpxq">
                        <div class="tit">
                            <h2><span>推荐产品</span></h2>
                        </div>
                        <div class="xq-item-wrap clearfix">
                        <?php foreach ($goodsList as $goods) {?>
                            <div class="xq-item noMg">
                                <div class="pic"><a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>"><img src="<?=$goods->photo?>" width="264" height="187" alt="<?=$goods->goods_name?>"> </a></div>
                                <div class="name">
                                    <?=$goods->goods_name?>
                                </div>
                            </div>
                        <?php }?>
                        </div>

                    </div>
                </div>
</div>
    </div>
</div>
