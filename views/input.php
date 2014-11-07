<?php

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="row image">
    <a data-index="0" id="us-upload" href="#upload" data-toggle="modal">
        <?= \yii\helpers\BaseHtml::img($image); ?>
    </a>
</div>  
<?= Html::activeTextInput($data->model, $data->attribute, $data->options); ?>

<?php
Modal::begin([
    'header' => '<button type="button" id="button_close_picture" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                   <h4 class="modal-title"><i class="fa fa-picture-o"></i> Select Image</h4>',
    'options' => ['id' => 'us-modal']
]);
?>
<div class="wrap">
    <div id="step" class="subtitle_green">
        STEP 1: Choose Your Picture
    </div>

    <div id="step1">
        <?php
        $form = ActiveForm::begin([
                    'options' => [
                        'enctype' => 'multipart/form-data',
                        'action' => $data->controller
                    ],
        ]);

        echo Html::fileInput('us-file-upload',['id'=>'us-file-upload']);
        echo Html::hiddenInput('us-wsmall', $data->crop['wsmall']);
        echo Html::hiddenInput('us-hsmall', $data->crop['hsmall']);
        echo Html::hiddenInput('us-wbig', $data->crop['wbig']);
        echo Html::hiddenInput('us-hbig', $data->crop['hbig']);
        echo Html::hiddenInput('us-ratio', $data->crop['ratio']);
        echo Yii::t('app', '(Maximum image size is 3MB, and supported format are : "jpg", "jpeg", "png", "gif", "bmp".)');

        ActiveForm::end();
        ?>
    </div>
    <div class="clear clearfix"></div>
    <div id='step2'>
        <div class="us-preview">
            <div id="us-image-actual" class="us-prev-image"></div>
            <?php
            $form = ActiveForm::begin([
                        'options' => [
                            'action' => $data->controller
                        ],
            ]);

            echo Html::hiddenInput('us-x', $data->crop['wsmall']);
            echo Html::hiddenInput('us-y', $data->crop['hsmall']);
            echo Html::hiddenInput('us-w', $data->crop['wbig']);
            echo Html::hiddenInput('us-h', $data->crop['hbig']);

            echo Html::button('Crop Image',['class'=>'DTTT_button_text btn-primary btn-small']);
            echo Html::button('Skip',['class'=>'DTTT_button_text btn-primary btn-small']);
            ActiveForm::end();
            ?>
        </div>
        <div class="us-preview">
            <div id="us-image-result" class="us-prev-image"></div>
            <?php
            $form = ActiveForm::begin([
                        'options' => [
                            'action' => $data->controller
                        ],
            ]);
            echo Html::hiddenInput('us-x');
            echo Html::hiddenInput('us-y');
            echo Html::hiddenInput('us-w');
            echo Html::hiddenInput('us-h');
            
            echo Html::button('Save',['class'=>'DTTT_button_text btn-primary btn-small']);

            ActiveForm::end();
            ?>
        </div>
        <div class="clear clearfix"></div>
    </div>
</div>


<?php Modal::end(); ?>

<?php $this->registerJsFile('assets/js/uploadsakti.js', ['depends' => app\themes\avant\assets\AppAsset::className()]); ?> 
<?php $this->registerCssFile('assets/css/uploadsakti.css', ['depends' => app\themes\avant\assets\AppAsset::className()]); ?> 
