<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MaculaturaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Макулатура';

?>

<div class="maculatura-index">
<br></br>

<div class="partner">
		<div class="container">
			<div class="partner-top">
				<h1>Макулатура</h1>
			</div>	
		</div>
                       

					<div id="portfoliolist">
           
						<div class= "picture-assortment" style="display: inline-block; opacity: 1;">						
							     <img src="/images/maculatura/m_karton.svg" />
						</div>				

						<div class= "picture-assortment" style="display: inline-block; opacity: 1;">
							     <img src="/images/maculatura/m_arhiv.svg" />
						</div>		
	
						<div class= "picture-assortment" style="display: inline-block; opacity: 1;">							
							     <img src="/images/maculatura/m_gazeta.svg" />			                
						</div>
	
						<div class= "picture-assortment" style="display: inline-block; opacity: 1;">						
							     <img src="/images/maculatura/m_mix.svg" />		                
						</div>

						<div class= "picture-assortment" style="display: inline-block; opacity: 1;">
							     <img src="/images/maculatura/m_glianec.svg" />		       
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
            'price_more_500',
            'price_200',
            'price_50',
            'price_in_base',
        ],
    ]); ?>

				<div class="i-btn">
							<a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSfSNTprdr2cCL08M3CwrlgAgV5S5U_ZvsJ-NHWP8GqUjRCGeQ/viewform?usp=send_form">Оставить заявку</a>
						</div>
						<br></br>
</div>
</div>
