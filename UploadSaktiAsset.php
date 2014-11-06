<?php

namespace ambikuk\uploadsakti;

use yii\web\AssetBundle;

class UploadSaktiAsset extends AssetBundle
{
	public $sourcePath = '@vendor/ambikuk/uploadsakti';

	public $depends = [
        'yii\web\YiiAsset',
		'yii\web\JqueryAsset'
	];
} 