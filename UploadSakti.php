<?php

namespace ambikuk\uploadsakti;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

class UploadSakti extends InputWidget
{
	use CKEditorTrait;

	public function init()
	{
		parent::init();
		$this->initOptions();
	}

	public function run()
	{
		if ($this->hasModel()) {
			echo Html::activeTextarea($this->model, $this->attribute, $this->options);
		} else {
			echo Html::textarea($this->name, $this->value, $this->options);
		}
		$this->registerPlugin();
	}

	protected function registerPlugin()
	{
		
	}
} 