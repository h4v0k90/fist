<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'О НАС';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-06.jpg);">
		<h2 class="l-text2 t-center">
			<?= Html::encode($this->title) ?>
		</h2>
	</section>

	<section class="bgwhite p-t-66 p-b-38">
		<div class="container">
			<div class="row">
				<div class="col-md-4 p-b-30">
					<div class="hov-img-zoom">
						<img src="images/banner-14.jpg" alt="IMG-ABOUT">
					</div>
				</div>

				<div class="col-md-8 p-b-30">


					<h3 class="m-text26 p-t-15 p-b-16">
						<?= Html::encode($this->title) ?>
					</h3>

					<p class="p-b-28">
				 	This is the About page. You may modify the following file to customize its content:
					</p>

					<div class="bo13 p-l-29 m-l-9 p-b-10">
						<p class="p-b-11">
							 <code><?= __FILE__ ?></code>
						</p>

						
				</div>
				</div>
			</div>
		</div>
	</section>

