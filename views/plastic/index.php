<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PlasticSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Пластик';

?>
<div class="plastic-index">
<br></br>
    <div class="partner">
		<div class="container">
			<div class="partner-top">
				<h1>Пластик</h1>
			</div>
			<div class="clearfix"> </div>
		</div>   
		
			<div id="portfoliolist">					
		

	  						<div class= "picture-assortment" style="display: inline-block; opacity: 1;" >
								<img src="/images/plastic/PVD_chistii.svg" />
		  				 	</div>	
							
							<div class= "picture-assortment" style="display: inline-block; opacity: 1;" >
								<img src="/images/plastic/Streih_chistii.svg" />
		  				 	</div>		

							<div class= "picture-assortment" style="display: inline-block; opacity: 1;" >
								<img src="/images/plastic/Plenka_mix.svg" />
		  				 	</div>								

							<div class= "picture-assortment" style="display: inline-block; opacity: 1;">
								<img src="/images/plastic/Pet_butilka.svg" />
		  				 	</div>

							<div class= "picture-assortment" style="display: inline-block; opacity: 1;" >
								<img src="/images/plastic/Pet_preforma.svg" />
		  				 	</div>							

							<div class= "picture-assortment" style="display: inline-block; opacity: 1;">
								<img src="/images/plastic/PND_borduri.svg" />
		  				 	</div>							
		
							<div class= "picture-assortment" style="display: inline-block; opacity: 1;" >
								<img src="/images/plastic/PND_kanistra.svg" />
		  				 	</div>

							<div class= "picture-assortment" style="display: inline-block; opacity: 1;">
								<img src="/images/plastic/PND_truba.svg" />
		  				 	</div>

							<div class= "picture-assortment" style="display: inline-block; opacity: 1;">
								<img src="/images/plastic/Poliprohilen_vedra.svg" />
		  				 	</div>					
			
							<div class= "picture-assortment" style="display: inline-block; opacity: 1;">
								<img src="/images/plastic/Poliprohilen_plenka.svg" />
		  				 	</div>
						
							<div class= "picture-assortment" style="display: inline-block; opacity: 1;">
								<img src="/images/plastic/Polikarbonat_butili.svg" />
		  				 	</div>

							<div  class= "picture-assortment" style="display: inline-block; opacity: 1;">	
							     <img src="/images/plastic/Polikarbonat_sotovii.svg" />
							</div>	
	
							<div  class= "picture-assortment" style="display: inline-block; opacity: 1;">
							     <img src="/images/plastic/Poliprohilen_bamperi.svg" />
							</div>	
     
							<div class= "picture-assortment" style="display: inline-block; opacity: 1;">
								<img src="/images/plastic/PVH_plenka.svg" />
		  				 	</div>  		
			</div> 
						
			</div> 
	</div>    
			   
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
            'price_in_base',
            'price_not_in_base',
        ],
    ]); ?>

				<div class="i-btn">
							<a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSfSNTprdr2cCL08M3CwrlgAgV5S5U_ZvsJ-NHWP8GqUjRCGeQ/viewform?usp=send_form">Оставить заявку</a>
						</div>
						<br></br>
</div>
