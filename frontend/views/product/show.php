<?php
use yii\helpers\Url;
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
      <?php foreach ($cateList as $cate) {?>
        <dt>
          <a href="<?=Url::toRoute(['/product/cate', 'id' => $cate['id']])?>" title="<?=$cate['title']?>" class="current"><i class="i1"></i><?=$cate['title']?></a>
        </dt>
      <?php }?>
    </dl>
  </div>
</div>
<div class="third_menu">
  <div class="s_menu">
      <ul class="clearfix">
        <?php foreach ($cateTree as $cate) {?>
          <?php if (isset($cate['_child'])) {?>
          <?php foreach ($cate['_child'] as $key=>$erji) {?>
          <li><?php if($key>0){?>|<?}?> <a href="<?=Url::toRoute(['/product/cate', 'id' => $erji['id']])?>" title="<?=$cate['title']?>"  class='current'><?=$cate['title']?></a></li>
        <?php }}}?>
       </ul>
  </div>
</div>

<div class="container">
  <div class="wrap clearfix">
        <div class="back-color">
      <div class="art-box">
                <h2><?=$goods->goods_name?></h2>
                <div class="info">
                    <span><img src="/static/newimage/i_icon_scan.jpg"><em><?=$goods->view?></em> </span>
                    <span><img src="/static/newimage/i_icon_zan.jpg"><em><?=$goods->up?></em> </span>
                    <span><img src="/static/newimage/i_icon_time.jpg"><em><?php echo date("Y-m-d", $goods->create_time); ?></em> </span>
                    <span><img src="/static/newimage/i_icon_pen.jpg"><em>新默真科技</em> </span>
                </div>
            </div>
            <div class="pro-article clearfix">
                <ul class="pro-tit">
                                      <li><img src="<?=$goods->photo?>" width="108" height="100"></li>

                                  </ul>
                <div class="bigpic">
                  <ul>
                                        <li><img src="<?=$goods->photo?>" width="473" height="436"></li>

                                      </ul>
                </div>
                <div class="pro-info">
                    <h2><?=$goods->goods_name?></h2>
                    <div class="txt"><?=$goods->description?></div>
                    <div class="btn"><a href="tencent://message/?uin=898329669&amp;Site=&amp;Menu=yes"><img src="/static/newimage/p_btn.jpg"> </a> </div>
                </div>
            </div>
            <script type="text/javascript">
          $(".pro-article").slide({titCell:".pro-tit li", mainCell:".bigpic ul", effect:"fold", autoPlay:true});
      </script>
      <ul class="pro-txt-tit clearfix">
                <li class="on">产品介绍</li>
            </ul>
            <div class="pro-txt-con">
                <?=$goods->content?>
            </div>
      <script language="javascript">
      $(function(){
        $(".pro-txt-tit li").click(function(){
          var index = $(this).index();
          $(this).addClass("on");
          $(this).siblings().removeClass("on");
          $(".article_"+index).addClass("cur");
          $(".article_"+index).siblings().removeClass("cur");
        });

        var imgObj = $(".article").find("img");
        if (imgObj.length > 0)
        {
          for (var i = 0; i < imgObj.length; i++)
          {
            if (imgObj[i].width > 1140) imgObj[i].width = 1140;
          }
        }
      });
      </script>
      <div class="fx-wrap">
                <div class="article-bottom-fx clearfix">
                    <span class="fl">
                      <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone"></a><a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a><a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq"></a><a title="分享到人人网" href="#" class="bds_renren" data-cmd="renren"></a><a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
                      <p style="text-align: left; ">快给朋友分享吧！</p>
                    </span>
                    <span class="zan"><i><img src="/static/newimage/ico-zan.png"></i><span>点赞</span><em>+1</em></span>
                </div>
            </div>
     <script language="javascript">
      $(function(){
        $(".zan").click(function(){
          $.ajax({
            type:"get",
            url:"<?=Url::toRoute(['/product/zan'])?>",
            data:'id='+<?=$goods->goods_id?>,
            success: function(msg){
              if(msg.code==200){
                $(".zan").unbind("click");
                $(".zan span").text("已赞");
                $(".zan em").show(0);
                $(".zan em").animate({fontSize:'68px',opacity:'0'},1000);
                $(".zan em").hide(0);
              }else{
                  alert(msg.msg);
              };
            }
          });
        });

      });
      </script>
    </div>
    <div class="xgcp">
            <h2><span></span>相关产品</h2>
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
                        <?=$goods->description?>
                      </dd>
                      <!--<dd class="wendu">存储温度（℃）：</dd>-->
                  </dl>
              </div>
          <?php }?>
                            </div>
        </div>
  </div>
</div>
