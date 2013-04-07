<?php $this->beginContent('//layouts/main'); ?>
<div class="row-fluid">
    <div id="sidebar" class="span3">
        <?php if(Yii::app()->user->checkAccess('admin')) { ?>
            <div class="well" style="padding: 8px 0;">
                <?php
                $this->widget('bootstrap.widgets.BootMenu', array(
                    'type' => 'list',
                    'items' => $this->menu,
                ));
                ?>
                Column2, Brownie
            </div>
    </div>
    <div id="content" class="span9">
        <?php echo $content; ?>
    </div>
        <?php } ?>
</div>
<?php $this->endContent(); ?>
