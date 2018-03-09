<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\helpers\Url;
$this->beginPage();
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="renderer" content="webkit">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
<title><?=Html::encode($this->title)?></title>
<meta name="description" content="<?php echo isset($this->metaTags['description']) ? $this->metaTags['description'] : ''; ?>" />
<meta name="keywords" content="<?php echo isset($this->metaTags['keywords']) ? $this->metaTags['keywords'] : ''; ?>" />
<link rel="shortcut icon" type="image/x-icon" href="" />
<link href="/static/newcss/base.css" type="text/css" rel="stylesheet">
<link href="/static/newcss/inside.css" type="text/css" rel="stylesheet">
<link href="/static/newcss/home.css" type="text/css" rel="stylesheet">
<script src="/static/newjs/jquery-1.8.3.min.js"></script>
<script src="/static/newjs/jquery.SuperSlide.2.1.1.js"></script>
<script src="/static/newjs/adver.js"></script>
<script type="text/javascript" src="/static/newjs/common.js?rightButton=0"></script>
<script language="javascript" type="text/javascript" src="/static/scripts/uaredirect.js"></script>
<script type="text/javascript">uaredirect('http://m.jieshuolol.com/');</script>
<!--[if lt IE 7]><script src="js/iepng.js"></script><![endif]-->
</head>
<body>

<div class="topArea wrap clearfix">
    <div class="logo fl">
        <h1 class="logo"><a href="<?=Url::toRoute('/')?>"><img src="/static/newimage/logo.png" alt=""/></a></h1>
    </div>
        <?php $this->beginContent('@app/views/layouts/public/menu.php')?>
        <?php $this->endContent()?>
     <script type="text/javascript">
        Nav();
    </script>
    <div class="set fr clearfix">
        <div class="searchbox fl">
            <form action="<?=Url::toRoute('/search')?>" method="get" class="search-form clearfix" onsubmit="if(this.search_keyword.value == ''){ alert('搜索关键字不能为空！'); this.search_keyword.focus(); return false; }">
                <div class="input-box"><input type="text" name="search_keyword" onsubmit="if(this.search_keyword.value == ''){ alert('搜索关键字不能为空！'); this.search_keyword.focus(); return false; }" onfocus="if (this.value == '请输入关键字') this.value=''" onblur="if (this.value == '') this.value=''" value="" /></div>
                <div class="btn-box"><button type="submit"></button></div>
            </form>
        </div>
    </div>
</div>


<?=$content?>
</div>
  </div>
        <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <?php $this->beginContent('@app/views/layouts/public/footer.php')?>
    <?php $this->endContent()?>
    <!-- END FOOTER -->
    <?php $this->beginContent('@app/views/layouts/public/side.php')?>
    <?php $this->endContent()?>
    <?php $this->endBody()?>
    </body>

</html>
<?php $this->endPage()?>