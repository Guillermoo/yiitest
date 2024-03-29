<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <link media="screen" rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css"  />

    </head>
    <!-- To show debug info -->
    <?php if(!empty(Yii::app()->params['debugContent'])):?>
                    <?php echo Yii::app()->params['debugContent'];?>
    <?php endif;?>

    <body>
        <div id="wrapper"  style="display:block;">
            <div id="header" class="container-fluid">
                <div id="logo"><h1><?php echo CHtml::encode(Yii::app()->name); ?></h1></div>
            </div><!-- header -->

            <div id="mainmenu">
                <?php
                $this->widget('bootstrap.widgets.BootNavbar', array(
                    'brand' => false,
                    'fixed' => false,
                    'fluid' => true,
                    'collapse' => true,
                    'items' => array(
                        array(
                            'class' => 'bootstrap.widgets.BootMenu',
                            'items' => array(
                                array('label' => 'Home', 'url' => array('/site/index')),
                                array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
                                array('label' => 'Admin blog', 'url' => array('/site/adminBlog')),
                                array('label' => 'Contact', 'url' => array('/site/contact')),
                            ),
                        ),
                        array(
                            'class' => 'bootstrap.widgets.BootMenu',
                            'htmlOptions' => array('class' => 'pull-right'),
                            'items' => array(
                                array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
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

            </div><!-- mainmenu -->
            <?php if (isset($this->breadcrumbs) && !empty($this->breadcrumbs)): ?>
                <div id="breadcrumbs-container">
                    <?php
                    $this->widget('bootstrap.widgets.BootBreadcrumbs', array(
                        'links' => $this->breadcrumbs,
                    ));
                    ?>
                    <div class="clear"></div>
                </div>
            <?php endif ?>
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
        </div>
        <div id="footer">
            <div class="container-fluid">
                Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
                All Rights Reserved.<br/>
                <?php echo Yii::powered(); ?>
            </div>
        </div><!-- footer -->
    </body>
</html>

<!--<?php 
    /*Yii::app()->clientScript->registerScript(
        'myHideEffect',
        '$(".info").animate({opacity:1.0},10000).slideUp("slow");',
        CClientScript::POS_READY
    );*/
?>-->