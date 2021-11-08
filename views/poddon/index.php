<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PoddonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Поддоны';

?>
<br></br>
<div class="poddon-index">

<div class="partner">
		<div class="container">
			<div class="partner-top">
				<h1>Поддоны</h1>
				
			</div>
			<div class="clearfix"></div>
			</div>
                        <div class="clearfix"> </div>

					<div id="portfoliolist">
           
						<div class= "picture-assortment" style="display: inline-block; opacity: 1;">							
							     <img src="/images/poddon/p-Poddon-EPAL.svg" />
						</div>				

						<div class= "picture-assortment" style="display: inline-block; opacity: 1;">							
							     <img src="/images/poddon/p-Poddon-1000x1200.svg" />
						</div>		
	
						<div class= "picture-assortment" style="display: inline-block; opacity: 1;">							
							     <img src="/images/poddon/p-Poddon-oblegchennyi.svg" />
						</div>	

						<div class= "picture-assortment" style="display: inline-block; opacity: 1;">
							     <img src="/images/poddon/p-Poddon-lomanii.svg" />
						</div>							

                        </div>
                        </div>
                   <div class="clearfix"> </div>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => false,

		'tableOptions' => [
			'class' => 'table table-striped',
		],
		'options' => [
			'class' => 'table-responsive',
		],
        'columns' => [
            'name',
            'price',

        ],
    ]); ?>

				<div class="i-btn">
							<a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSfSNTprdr2cCL08M3CwrlgAgV5S5U_ZvsJ-NHWP8GqUjRCGeQ/viewform?usp=send_form">Оставить заявку</a>
						</div>
						<br></br>
</div>
