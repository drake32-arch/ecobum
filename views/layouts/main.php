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
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandImage' =>'<img src="/images/logo.png" />'
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
            ['label' => 'Продажа Вторсырья',
                 'url' => ['/sell/index'], ],
            ['label' => 'Продажа Поддонов', 'url' => ['/poddon/index']],
            ['label' => 'Контакты', 'url' => ['/site/about']],

           
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left"><img src="/images/logol.svg" alt="Наш логотип" /></p>
        <p class="pull-midle"><?= "+7(968)261-03-11" ?></p>
        <p class="pull-right"><?= "Соцсети" ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
