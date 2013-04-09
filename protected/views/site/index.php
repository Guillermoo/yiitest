
Index Default

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading'=>'Hello, admin!',
)); ?>
 
    <p>Welcome to Admin  dashboard, a super cool design agency.</p>
    <p><?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'=>'primary',
        'size'=>'large',
        'label'=>'Posts',
    )); ?></p>

    <p><?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'=>'primary',
        'size'=>'large',
        'label'=>'Users',
    )); ?></p>
 
<?php $this->endWidget(); ?>

<!-- Services -->
<div class="what-we-do container">
    <div class="row">
        <div class="service span3">
            <div class="icon-awesome">
                <i class="icon-eye-open"></i>
            </div>
            <h4>Beautiful Websites</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
            <a href="services.html">Read more</a>
        </div>
        <div class="service span3">
            <div class="icon-awesome">
                <i class="icon-table"></i>
            </div>
            <h4>Responsive Layout</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
            <a href="services.html">Read more</a>
        </div>
        <div class="service span3">
            <div class="icon-awesome">
                <i class="icon-magic"></i>
            </div>
            <h4>Awesome Logos</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
            <a href="services.html">Read more</a>
        </div>
        <div class="service span3">
            <div class="icon-awesome">
                <i class="icon-print"></i>
            </div>
            <h4>High Res Prints</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
            <a href="services.html">Read more</a>
        </div>
    </div>
</div>

<!-- Latest Work -->
<div class="portfolio container">
    <div class="portfolio-title">
        <h3>Our Latest Work</h3>
    </div>
    <div class="row">
        <div class="work span3">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/portfolio/work1.jpg" alt="">
            <h4>Lorem Website</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
            <div class="icon-awesome">
                <a href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/portfolio/work1.jpg" rel="prettyPhoto"><i class="icon-search"></i></a>
                <a href="portfolio.html"><i class="icon-link"></i></a>
            </div>
        </div>
        <div class="work span3">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/portfolio/work2.jpg" alt="">
            <h4>Ipsum Logo</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
            <div class="icon-awesome">
                <a href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/portfolio/work2.jpg" rel="prettyPhoto"><i class="icon-search"></i></a>
                <a href="portfolio.html"><i class="icon-link"></i></a>
            </div>
        </div>
        <div class="work span3">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/portfolio/work3.jpg" alt="">
            <h4>Dolor Prints</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
            <div class="icon-awesome">
                <a href="assets/img/portfolio/work3.jpg" rel="prettyPhoto"><i class="icon-search"></i></a>
                <a href="portfolio.html"><i class="icon-link"></i></a>
            </div>
        </div>
        <div class="work span3">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/portfolio/work4.jpg" alt="">
            <h4>Sit Amet Website</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
            <div class="icon-awesome">
                <a href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/portfolio/work4.jpg" rel="prettyPhoto"><i class="icon-search"></i></a>
                <a href="portfolio.html"><i class="icon-link"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials -->
<div class="testimonials container">
    <div class="testimonials-title">
        <h3>Testimonials</h3>
    </div>
    <div class="row">
        <div class="testimonial-list span12">
            <div class="tabbable tabs-below">
                <div class="tab-content">
                    <div class="tab-pane active" id="A">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/testimonials/1.jpg" title="" alt="">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur..."<br /><span class="violet">Lorem Ipsum, dolor.co.uk</span></p>
                    </div>
                    <div class="tab-pane" id="B">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/testimonials/2.jpg" title="" alt="">
                        <p>"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat..."<br /><span class="violet">Minim Veniam, nostrud.com</span></p>
                    </div>
                    <div class="tab-pane" id="C">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/testimonials/3.jpg" title="" alt="">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur..."<br /><span class="violet">Lorem Ipsum, dolor.co.uk</span></p>
                    </div>
                    <div class="tab-pane" id="D">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/testimonials/1.jpg" title="" alt="">
                        <p>"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat..."<br /><span class="violet">Minim Veniam, nostrud.com</span></p>
                    </div>
                </div>
               <ul class="nav nav-tabs">
                   <li class="active"><a href="#A" data-toggle="tab"></a></li>
                   <li class=""><a href="#B" data-toggle="tab"></a></li>
                   <li class=""><a href="#C" data-toggle="tab"></a></li>
                   <li class=""><a href="#D" data-toggle="tab"></a></li>
               </ul>
           </div>
        </div>
    </div>
</div>