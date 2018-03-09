<?php
use yii\helpers\Url;
?>
<div class="banner">
    <div class="bd">
        <ul>
        <?php foreach ($adverList as $adver) {?>
            <li><a href="<?=Url::toRoute([$adver->url])?>" target="_blank" title="<?=$adver->title?>"><img src="<?=$adver->photo?>" alt="<?=$adver->title?>" width="1920" height="664" ></a>
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