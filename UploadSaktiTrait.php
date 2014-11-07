<?php

namespace ambikuk\uploadsakti;

use Yii;
use yii\helpers\ArrayHelper;


trait UploadSaktiTrait
{
	
	public $preset = 'standard';

	public $clientOptions = [];
        
	protected function initOptions()
	{
		switch ($this->preset) {
			case 'custom':
				$options = [];
				$preset = null;
				break;
			case 'basic':
			case 'full':
			case 'standard':
				$preset = __DIR__ . '/presets/' . $this->preset . '.php';
				break;
			default:
				$preset = __DIR__ . '/presets/standard.php';
		}
		if ($preset !== null) {
			$options = require($preset);
		}
		$this->clientOptions = ArrayHelper::merge($options, $this->clientOptions);
	}
} 