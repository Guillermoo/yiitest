<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
<title><?php echo CHtml::encode($this->pageTitle); ?> - Main Brownie!!</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="robots" content="index,follow" />

<link media="screen" rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css"  />
<link media="screen" rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/flexslider.css"  />
<link media="screen" rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css"  />

<link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/favicon.ico" /> 
<!--[if (gte IE 6)&(lte IE 8)]>
<script type="text/javascript" src="js/html5.js"></script>
<script type="text/javascript" src="js/selectivizr-min.js"></script>
<link rel="stylesheet" href="css/ie_7.css" type="text/css" />
<![endif]-->

<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/all-in-one-min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/setup.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/main.js"></script>
<script type="text/javascript">
$(window).load(function(){
	$('#demo-side-bar').removeAttr('style');
});
</script>
<style type="text/css">
.demobar{display:none;}
#demo-side-bar{top:53px!important;left:90%!important;display:block!important;}
</style>
 <!--Dynamically creates ads markup-->
<?php //include("http://www.egrappler.com/ads-header.php"); ?>
<body>
	<!-- Header -->
	<header class="header_bg clearfix">
		<div class="container clearfix">
        	<!-- Social -->
            	<!--<ul class="social-links">
                	<li ><a href="javascript:"><img src="images/facebook.png" alt="Facebook"></a></li>
                    <li ><a href="javascript:"><img src="images/twitter.png" width="24" height="24" alt="Twitter"></a></li>
                </ul>-->
            <!-- /Social -->
			 <!-- Logo -->
			<div id="logo_brown"><h1><?php echo CHtml::encode(Yii::app()->name); ?></h1></div>
			 <!-- /Logo -->
			
			<!-- Master Nav -->
			<div id="mainmenu">
                <?php
                $this->widget('bootstrap.widgets.TbNavbar', array(
                    'brand' => false,
                    'fixed' => false,
                    'type' => '', //inverse
                    'fluid' => true,
                    'collapse' => true,
                    'items' => array(
                        array(
                            'class' => 'bootstrap.widgets.BootMenu',
                            'items' => array(
                                array('label' => 'Home', 'url' => array('/site/index')),
                                array('label' => 'Blog', 'url' => array('/post')),
                                array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
                                array('label' => 'Contact', 'url' => array('/site/contact')),
                                array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
				                    array('label'=>'Action', 'url'=>'#'),
				                    array('label'=>'Another action', 'url'=>'#'),
				                    array('label'=>'Something else here', 'url'=>'#'),
				                    '---',
				                    array('label'=>'NAV HEADER'),
				                    array('label'=>'Separated link', 'url'=>'#'),
				                    array('label'=>'One more separated link', 'url'=>'#'),
				                )),
                            ),

                        ),
                        
                        array(//Login
                            'class' => 'bootstrap.widgets.BootMenu',
                            'htmlOptions' => array('class' => 'pull-right'),
                            'items' => array(
                                array('label' => 'Login', 'url' => array(Yii::app()->user->ui->loginUrl), 'visible' => Yii::app()->user->isGuest),
                                array(
                                    'label' => 'Welcome ' . Yii::app()->user->name,
                                    'url' => '#',
                                    'visible' => !Yii::app()->user->isGuest,
                                    'items' => array(
                                        /*array('label' => '<span class="badge badge-success">10</span> Messages', 'url' => '#', 'encodeLabel' => false),*/
                                        array('label' => 'Edit Profile', 'url' => '#'),
                                        '---',
                                        array('label' => 'Logout', 'url' => array('/site/logout')),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ));
                ?>
            <?php echo Yii::app()->user->ui->loginLink?>
            </div><!-- mainmenu -->
		</div>
	</header>
	<!-- /Header -->
	
	<div class="clear"></div>
	
	<!-- Slider -->


	<div id="content">
        <?//Renders the views in the layout?>
        <div class="container-fluid">

            <?php //$this->widget('bootstrap.widgets.BootAlert'); ?>
           <?php $this->widget('bootstrap.widgets.TbAlert', array(
                'block'=>false, // display a larger alert block?
                'fade'=>true, // use transitions?
                'closeText'=>'&times;', // close link text - if set to false, no close link is displayed
                //'htmlOptions'=>array('class'=>'span2'),
                'alerts'=>array( // configurations per alert type
                    'success'=>array('block'=>true, 'fade'=>true, 'closeText'=>true), // success, info, warning, error or danger
                    'alert'=>array('block'=>true, 'fade'=>true, 'closeText'=>true), // success, info, warning, error or danger
                    'warning'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), // success, info, warning, error or danger
                    'error'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), // success, info, warning, error or danger
                ),
                )
            );?>
            <?php echo $content; ?>
        </div>
    </div>
    
</body>
</html>