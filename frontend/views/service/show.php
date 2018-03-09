<?php
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
          <dt><a href="<?=Url::toRoute('/service')?>" class="current"><i class="i1"></i>技术支持</a></dt>
     </dl>
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
			'label' => '技术支持',
			'url' => ['/service'],
			'template' => "{link}<span></span>",
		],

		[
			'label' => "{$article['title']}",
			'url' => ['/service/show', "id" => "{$article['id']}"],
			'template' => "{link}",
		],
	]]);
?>
                </div>
                <div class="back-color">
            <div class="art-box">
                <h2><?=$article->title?></h2>
                <div class="info">
                    <span><img src="/static/newimage/i_icon_scan.jpg"><em><?=$article->view?></em> </span>
                    <span><img src="/static/newimage/i_icon_zan.jpg"><em><?=$article->up?></em> </span>
                    <span><img src="/static/newimage/i_icon_time.jpg"><em><?php echo date("Y-m-d", $article->create_time); ?></em> </span>
                    <span><img src="/static/newimage/i_icon_pen.jpg"><em>新默真科技</em> </span>
                </div>
            </div>
            <div class="article" id="info_content">


     <?=$article->content?>
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
                        url:"<?=Url::toRoute(['/article/zan'])?>",
                        data:'id='+<?=$article->id?>,
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
            <div class="up-next-wrap">
                <div class="up-next">
                    <ul class="clearfix">
                      <?php if (!empty($nextArticle)) {?>
                          <li>上一条： <a href="<?=Url::toRoute(['/service/show', 'id' => $nextArticle->id])?>" title="<?=$nextArticle->title?>"><?=$nextArticle->title?></a>
                          </li>
                      <?php } else {?>
                              <li>没有上一条了</li>
                      <?php }?>
                      <?php if (!empty($beforeArticle)) {?>
                          <li class="noBorder">下一条： <a href="<?=Url::toRoute(['/service/show', 'id' => $beforeArticle->id])?>" title="<?=$beforeArticle->title?>"><?=$beforeArticle->title?></a>
                          </li>
                      <?php } else {?>
                          <li>没有下一条了</li>
                      <?php }?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>





