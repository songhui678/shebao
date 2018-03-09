<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Url;
?>
<div class="banner">
    <div class="bd">
        <ul>
        <?php foreach ($adverList as $adver) {?>
            <li><a href="<?=$adver->url?>" target="_blank" title="<?=$adver->title?>"><img src="<?=$adver->photo?>" alt="<?=$adver->title?>" width="1920" height="664" ></a>
            </li>
        <?php }?>
        </ul>
    </div>
    <div class="hd">
        <ul></ul>
    </div>
    <p class="aPrev"><img src="/static/newimage/aPrev.png"></p>
    <p class="aNext"><img src="/static/newimage/aNext.png"></p>
</div>
<script type="text/javascript">
    $(".banner").slide({titCell:".hd ul", mainCell:".bd ul", effect:"fold", autoPlay:true, autoPage:true, delayTime:2000,interTime:4000, prevCell:".aPrev", nextCell:".aNext"});
</script>
<div class="hadv">
    <div class="hd">
        <h2>解决方案</h2>
        <div class="txt">   新默真科技，为研发和中试实验室提供物料冻干、超微粉碎和微射流均质的系统解决方案</div>
    </div>
    <div class="bd">
        <img src="/static/newimage/hadv.jpg">
    </div>
    <div class="wrap">
        <ul>
            <li>
                <a href="<?=Url::toRoute(['/product/cate', 'id' => 1])?>"><i class="i1"></i>冻干设备与工艺</a>
            </li>
            <li>
                <a href="<?=Url::toRoute(['/product/cate', 'id' => 2])?>">
                    <i class="i2"></i>超微粉碎及检测 </a>
            </li>
            <li>
                <a href="<?=Url::toRoute(['/product/cate', 'id' => 4])?>">
                    <i class="i3"></i>微射流均质与配液 </a>
            </li>
        </ul>
    </div>

</div>
<div class="product">
    <div class="wrap">
        <div class="pro-wrap">
            <div class="pro-tit">
                <ul>
                  <?php foreach ($cateList as $key => $cate) {?>
                  <li><a href="<?=Url::toRoute(['/product/cate', 'id' => $cate['id']])?>"><i class="i<?=$key + 1?>"></i><?=$cate['title']?></a></li>
                  <?php }?>
                </ul>
            </div>
            <div class="pro-Box">
                   <div class="pro-con clearfix">
                    <div class="pro-big">
                        <div class="bd">
                            <ul>
                              <?php foreach ($cateList as $key => $cate) {?>
                               <?php foreach ($cate['tuijianList'] as $goods) {?>

                               <li class="clearfix">
                                    <p class="p"><a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>"><img src="<?=$goods->photo?>" width="300" height="277"></a></p>
                                    <div class="t">
                                        <h2><a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>"><?=$goods->goods_name?></a></h2>
                                        <span><a href="?=Url::toRoute(['/product/show', 'id' =>  $goods->goods_id])?>"><?=$goods->goods_name?></a></span>
                                        <p class="m"><a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>">了解详情</a></p>
                                    </div>
                                </li>
                                <?php }}?>

                           </ul>
                        </div>
                        <div class="hd">
                            <ul></ul>
                        </div>
                    </div>
                    <div class="pro-item">
                        <ul>
                        <?php foreach ($cateList as $key => $cate) {?>
                          <?php foreach ($cate['goodsList'] as $goods) {?>
                           <li>
                                <div class="list-pic"><a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>"><img src="<?=$goods->photo?>" width="233" height="165"></a></div>
                                <p class="name"><?=$goods->goods_name?></p>
                                <div class="gray">
                                    <a href="<?=Url::toRoute(['/product/show', 'id' => $goods->goods_id])?>" title="<?=$goods->goods_name?>">
                                        <p class="name"><?=$goods->goods_name?></p>
                                        <p class="txt"><?=$goods->description?></p>
                                    </a>
                                </div>
                            </li>
                          <?php }}?>

                          </ul>
                    </div>
                </div>
              </div>
        </div>
        <script type="text/javascript">
            $(".pro-big").slide({titCell:".hd ul", mainCell:".bd ul", effect:"fold", autoPlay:true, autoPage:true});
            $(".pro-wrap").slide({titCell:".pro-tit li", mainCell:".pro-Box", effect:"fold", autoPlay:false, delayTime:0});
        </script>
        <div class="more">
            <a href="<?=Url::toRoute('/product')?>">更多产品</a>
        </div>
    </div>
</div>
<div class="about">
    <div class="wrap">
        <div class="hd">
            <h2>关于我们</h2>
            <div class="txt">新默真科技，为您提供冻干、粉碎、纳米均质系统解决方案。</div>
        </div>
        <div class="bd">
            <div class="about-con clearfix">
                                <div class="intropic">
                    <img src="/static/newimage/147643440164642800.jpg" width="604" height="346">
                </div>
                <div class="intro">
                    <h2><a href="<?=Url::toRoute('/about')?>">新默真科技</a> </h2>
                    <div class="txt">
新默真科技（北京）有限公司经销仪器设备，主要致力和服务于研究和中试生产领域，有着优质的产品和良好的售后服务。新默真科技（北京）有限公司的诚信、实力和产品质量获得业界的认可。</div>
                    <ul>
                        <li><span>一流的<Br>产品</span></li>
                        <li><span>先进的<Br>技术</span></li>
                        <li><span>广泛的<Br>应用</span></li>
                        <li><span>细致的<Br>服务</span></li>
                    </ul>
                    <p class="more"><a href="<?=Url::toRoute('/about')?>"><img src="/static/newimage/more2.png"> </a> </p>
                </div>
            </div>

            <script type="text/javascript">
                jQuery(".about-item").slide({mainCell:"ul", autoPage:true, effect:"leftLoop",autoPlay:false, vis:4, prevCell:".aPrev", nextCell:".aNext", trigger:"click"});
            </script>
        </div>
    </div>
</div>

<script type="text/javascript">
    jQuery(".news").slide({titCell:".news-quan ul", mainCell:".wrap .news-item-wrap", autoPage:true, effect:"leftLoop", autoPlay:true, vis:3, prevCell:".aPrev", nextCell:".aNext", trigger:"click"});
</script>

<script type="text/javascript">
    $(".case-item").slide({titCell:".case-quan ul", mainCell:".case-con ul", autoPage:true, effect:"left", autoPlay:false, vis:6, scroll:6, trigger:"click"});
    $(".case .bd").slide({titCell:".case-tit li", mainCell:".case-box", effect:"fold", autoPlay:false});
</script>
<style type="text/css" >
.box-wrap, .wrap {
    margin: 0 auto;
    position: relative;
    width: 1200px;
}
.col-hd-1 {
    border-bottom: 1px solid #005AB1;
    height: 45px;
    margin-bottom: 25px;
    position: relative;
}
.col-hd-1 h2 {
    border-bottom: 3px solid #005AB1;
    color: #005AB1;
    float: left;
    font-size: 16px;
    line-height: 39px;
    padding: 5px 15px 0 0;
    position: relative;
}
.col-hd-1 h2 .hot-ico {
    height: 15px;
    position: absolute;
    right: -10px;
    top: 5px;
    width: 25px;
}
.col-hd-1 .more {
    position: absolute;
    right: 15px;
    top: 18px;
}
.col-hd-1 .more a {
    color: #888;
    font-size: 12px;
}
.col-hd-1 .more a:hover {
    color: #d70c25;
}
.col-hd-2 {
    background: rgba(0, 0, 0, 0) url("/static/newimage/xian.png") no-repeat scroll center center;
    height: 50px;
    margin-bottom: 25px;
    text-align: center;
}
.col-hd-2 h2 {
    color: #d70c25;
    font-size: 16px;
    margin: 0 auto;
    padding-top: 5px;
    position: relative;
    text-align: center;
    width: 145px;
}
.col-hd-2 h2 em {
    color: #a8a7a7;
    display: block;
    font-family: arial,helvetica,sans-serif;
    font-size: 10px;
    text-transform: uppercase;
}
.col-hd-2 h2 .hot-ico {
    height: 15px;
    position: absolute;
    right: 15px;
    top: -3px;
    width: 25px;
}
.pic-list-panel li {
    float: left;
    padding: 5px 0 20px;
    text-align: center;
}
</style>

    <div class="area-content" style="padding:20px 0 30px; background:#FFFFFF">
        <div class="box-wrap clearfix">
            <div class="col-Area fr" style="width:1200px;">
                <div class="col-hd-1">
                    <h2>友情链接</h2>
                </div>
                    <div class="pic-list-panel clearfix" id="index-module-4">
                        <ul>
                        <?php foreach ($linksList as $links) {?>
                            <li style="width:152px;" class='Mgright'>
                                <div class="pic"><a href="<?=$links->link?>" target="_blank" rel="nofollow" title="<?=$links->title?>"><?=$links->title?></a></div>
                            </li>
                        <?php }?>
                        </ul>
                </div>
                    <script type="text/javascript">
                        getPicSpace("#index-module-4",152,7);  //设置图片间距
                    </script>
            </div>
         </div>
    </div>
