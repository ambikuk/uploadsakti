<?php

namespace ambikuk\uploadsakti;

use yii\web\AssetBundle;

class UploadSaktiAsset extends AssetBundle {

    public $sourcePath = '@vendor/ambikuk/uploadsakti/assets';
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset'
    ];
    public $css = [
        'css/jquery.Jcrop.min.css',
//        'css/uploadsakti.css'
    ];
    public $js = [
        'js/jquery.Jcrop.min.js',
        'js/jquery.form.js',
//        'js/uploadsakti.js'
    ];

}
