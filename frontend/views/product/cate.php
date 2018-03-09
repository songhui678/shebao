<?php
use common\helpers\StringHelper;
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<div class="iBanner">
    <div class="bd">
        <?php foreach ($adverList as $adver) {?>
            <a href="<?=$adver->url?>" target="_blank" title="<?=$adver->title?>"><img src="<?=$adver->photo?>" alt="<?=$adver->title?>" width="1920" height="258" ></a>
        <?php }?>
    </div>
</div>

<div class="menuwrap">
  <div class="menu wrap pro-tit">
    <dl class="clearfix">
      <?php foreach ($cateList as $key => $cat) {?>
        <dt>
          <a href="<?=Url::toRoute(['/product/cate', 'id' => $cat['id']])?>" title="<?=$cat['title']?>" class="current"><i class="i<?=$key + 1?>"></i><?=$cat['title']?></a>
        </dt>
      <?php }?>
    </dl>
  </div>
</div>
<div class="third_menu">
  <div class="s_menu">
      <ul class="clearfix">
        <?php foreach ($cateTree as $treeCate) {?>
          <?php if (isset($treeCate['_child']) && $treeCate['id'] == $cate->id) {?>
          <?php foreach ($treeCate['_child'] as $key => $erji) {?>
          <li><?php if ($key > 0) {?>|<?php }?> <a href="<?=Url::toRoute(['/product/cate', 'id' => $erji['id']])?>" title="<?=$erji['title']?>"  class='current'><?=$erji['title']?></a></li>
        <?php }}}?>
      </ul>
  </div>
</div>


<div class="container hhh">
  <div class="wrap clearfix">
    <div class="main">
                  <div class="pro-item-wrap clearfix">


          <?php foreach ($goodsList as $goods) {?>
                <div class="pro-item ">
                  <div class="pic">
                        <a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>" target="_blank"><img src="<?=$goods->photo?>" width="288" height="204" alt="<?=$goods->goods_name?>" /></a>
                        <div class="name"><a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>" target="_blank"><?=$goods->goods_name?></a></div>
                  </div>
                  <dl>
                      <dt><a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>"><?=$goods->goods_name?></a></dt>
                      <dd class="txt">
                        <?php echo StringHelper::truncate_utf8_string($goods->description, 55); ?>
                      </dd>
                      <!--<dd class="wendu">存储温度（℃）：</dd>-->
                  </dl>
              </div>
          <?php }?>


                <div class="clear"></div>
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
