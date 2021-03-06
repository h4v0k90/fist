<?php


use app\widgets\Alert;
use yii\helpers\Html;
// use yii\bootstrap\Nav;
// use yii\bootstrap\NavBar;
// use yii\widgets\Breadcrumbs;
use yii\widgets\Menu;
use app\assets\AppAsset;

AppAsset::register($this);

?>

<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

 <?php $this->head() ?>

</head>
<body class="animsition">

<?php $this->beginBody() ?>
	<!-- Header -->
	<header class="header3">
		<!-- Header desktop -->
		<div class="container-menu-header-v3">
			<div class="wrap_header3 p-t-74">
				<!-- Logo -->
				<a class="logo3" href="<?=Yii::$app->urlManager->createUrl(['site/index'])?>">
    				<img src="images/icons/logo.png" alt="IMG-LOGO"> 
				</a>

				<!-- Header Icon -->
				<div class="header-icons3 p-t-38 p-b-60 p-l-8">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
White Shirt With Pleat Detail Back
</a>

										<span class="header-cart-item-info">
1 x $19.00
</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-02.jpg" alt="IMG">
									</div>
									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
Converse All Star Hi Black Canvas
</a>

										<span class="header-cart-item-info">
1 x $39.00
</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
Nixon Porter Leather Watch In Tan
</a>

										<span class="header-cart-item-info">
1 x $17.00
</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
Total: $75.00
</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
View Cart
</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
Check Out
</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
				<?php
					echo Menu::widget([
      						'items' => [
           						 ['label' => 'Главная', 'url' => ['/site/index']],
            						 ['label' => 'Магазин', 'url' => ['/site/index']],
            						 ['label' => 'Sale', 'url' => ['/site/index']],
           						 ['label' => 'Корзина', 'url' => ['/site/index']],
            						 ['label' => 'О нас', 'url' => ['/site/about']],
            						 ['label' => 'Контакты', 'url' => ['/site/contact']],
            					Yii::$app->user->isGuest ? (
                					 ['label' => 'Логин', 'url' => ['/site/login']]
            						) : (
                				'<li>'
               						 . Html::beginForm(['/site/logout'], 'post')
               					 . Html::submitButton(
                   				 'Logout (' . Yii::$app->user->identity->username . ')',
                   					 ['class' => 'btn btn-link logout']
                					)
               					 . Html::endForm()
               					 . '</li>'
            							)
       									 ],

							'options' => [
									'class' => 'main_menu',
		     							 ],
							]);

				?>
					</nav>
				</div>
			</div>

			<div class="bottombar flex-col-c p-b-65">
				<div class="bottombar-social t-center p-b-8">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<div class="bottombar-child2 p-r-20">

				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
				<img src="images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
White Shirt With Pleat Detail Back
</a>

										<span class="header-cart-item-info">
1 x $19.00
</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
Converse All Star Hi Black Canvas
</a>

										<span class="header-cart-item-info">
1 x $39.00
</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
Nixon Porter Leather Watch In Tan
</a>

										<span class="header-cart-item-info">
1 x $17.00
</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
Total: $75.00
</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
View Cart
</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
Check Out
</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
Free shipping for standard order over $100
</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
fashe@example.com
</span>


						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="index.html">Главная</a>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">Магазин</a>
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">Sale</a>
					</li>

					<li class="item-menu-mobile">
						<a href="cart.html">Корзина</a>
					</li>
					<li class="item-menu-mobile">
						<a href="about.html">О нас</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.html">Контакты</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

<?= Alert::widget() ?>
<?= $content ?>




	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
