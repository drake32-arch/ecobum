<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/png', 'href' => '/favicon.png']);

?>

<?php $this->beginPage() ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


<!---- start-smoth-scrolling---->

<!--start-smoth-scrolling-->
</head>
<body>
<!--start-banner-->
<?php $this->beginBody() ?>



				<?php	/*<ul class="navig">
						<li><a href="index.html" class="active">HOME</a></li><span><img src="images/clk.png" alt="" /></span>
						<li><a href="about-us.html">ABOUT US</a></li><span><img src="images/clk.png" alt="" /></span>
						<li><a href="/poddon/index">Поддоны</a></li><span><img src="images/clk.png" alt="" /></span>
						<li><a href="404.html">PROJECTS</a></li><span><img src="images/clk.png" alt="" /></span>
						<li><a href="carrers.html">CARRERS</a></li><span><img src="images/clk.png" alt="" /></span>
						<li><a href="contact.html">CONTACT</a></li>
					</ul> */ ?>


<div class="navigation">
				 <span class="menu"></span> 
				 
    <?php
    NavBar::begin([
        'brandLabel' => '<img src="/images/logo-ecobum-verh-103w100h-1.png" class="img-lol"  />',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Главная', 'url' => ['/site/index']],
            [
                'label' => 'Прием Вторсырья',
                 'url' => ['#'],
                 'options' => ['class' => 'dropdown'],
                 'items' => [
                    ['label' => 'Макулатура', 'url' => ['/maculatura/index']],
                    ['label' => 'Пластик', 'url' => ['/plastic/index']],
                    ['label' => 'Поддоны', 'url' => ['/poddon/index']],
                 ]
            ], 
			['label' => 'Продажа Вторсырья', 'url' => ['/sell/index']],
            ['label' => 'Продажа Поддонов', 'url' => ['/sellp/index']],
            ['label' => 'Контакты', 'url' => ['/site/about']],

           
        ],
    ]);
    NavBar::end();
    ?>
			</div>
				<div class="clearfix"></div>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>
	
		  <!--Slider-Starts-Here-->

			<!--End-slider-script-->		
	<!--end-banner-->
	<!--start-idea-->
	
	<!--start-footer-->
    <div class="clearfix"></div>
	<div class="footer">
		<div class="container">
			<div class="footer-main">
				<div class="contact">
					<div class="col-md-8 contact-left">
						<a href="/site/index"><img src="/images/logo-ecobum-verh-103w100h-1.png" alt="" /></a>
						
					</div>
					<div class="col-md-4 contact-right">
				
						<p>+7 968-261-03-11</p>		
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="footer-bottom">
					<div class="col-md-4 footer-left">
						<ul>
			<li> © Экобум 2021</li>
						</ul>
					</div>
					
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--end-footer-->
    <?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>



