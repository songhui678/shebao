<?php
use common\helpers\StringHelper;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use yii\widgets\LinkPager;
?>
<div class="iBanner">
    <div class="bd">
        <?php foreach ($adverList as $adver) {?>
            <a href="<?=$adver->url?>" target="_blank" title="<?=$adver->title?>"><img src="<?=$adver->photo?>" alt="<?=$adver->title?>" width="1920" height="258" ></a>
        <?php }?>
    </div>
</div>

<div class="container">
  <div class="wrap clearfix">
    <div class="location">
      <?php echo Breadcrumbs::widget(['homeLink' => [
	'label' => '首页',
	'url' => ['/'],
	'template' => "<img src='/static/newimage/home.jpg'>{link}<span>&gt;</span>",
],
	'links' => [
		[
			'label' => '信息搜索',
			'url' => ['/search'],
			'template' => "{link}<span>&gt;</span>",
		],
		[
			'label' => "{$search_keyword}",
			'template' => "<span style='font-size: 12px;'>{link}</span>",
		],

	]]);
?>
    </div>
    <div class="main" style="background:#fff; padding:0 0 40px;">
      <div class="list-news">
            <?php foreach ($goodsList as $goods) {?>
                  <div class="pic-news clearfix">
                  <p class="pic">
                      <a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" target="_blank" title="<?=$goods->goods_name?>"><img src="<?=$goods->photo?>" width="228" height="158" alt="<?=$goods->goods_name?>"/></a>
                  </p>
                  <div class="txt">
                    <h4><a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" target="_blank" title="<?=$goods->goods_name?>"><?php echo StringHelper::truncate_utf8_string($goods->goods_name, 18); ?></a></h4>
                    <div class="i"><?=$goods->description?></div>
                    <p class="more"><a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" target="_blank">详 情</a></p>
                  </div>
                </div>
            <?php }?>
            <?php foreach ($articleList as $article) {?>
            <dl>
                <dt><a href="<?=Url::toRoute(['/article/show', 'id' => $article->id])?>" target="_blank" title="<?=$article->title?>"><?php echo StringHelper::truncate_utf8_string($article->title, 18); ?></a><em>发布时间：<?php echo date("Y-m-d H:i:s", $article->create_time); ?></em></dt>
                <dd>
                  <?=$article->description?><a href="<?=Url::toRoute(['/article/show', 'id' => $article->id])?>" title="<?=$article->title?>" target="_blank">[详情]</a>
                </dd>
            </dl>
            <?php }?>
      </div>
      <div class="pages">
                <?=LinkPager::widget([
	'pagination' => $pages,
	'firstPageLabel' => '首页',
	'lastPageLabel' => '尾页',
	'nextPageLabel' => '下一页',
	'prevPageLabel' => '上一页',
	'maxButtonCount' => 9,
]);?>
      </div>
    </div>
  </div>
</div>

