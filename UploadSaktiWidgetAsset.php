<?php

namespace ambikuk\uploadsakti;

use yii\web\AssetBundle;

class UploadSaktiWidgetAsset extends AssetBundle
{
	public $sourcePath = '@vendor/ambikuk/uploadsakti/assets';

	public $depends = [
		'ambikuk\uploadsakti\UploadSaktiAsset'
	];

	public $js = [
		'js/upload-sakti.widget.js'
	];
} 