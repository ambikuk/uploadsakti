<?php

namespace ambikuk\uploadsakti;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

class UploadSakti extends InputWidget {

    use UploadSaktiTrait;

    public $imageDefault;
    public $imagePrefix;
    public $controller;
    public $crop = [
        'wsmall' => 180,
        'hsmall' => 78,
        'wbig' => 600,
        'hbig' => 260,
        'ratio' => 2.3
    ];

    public function init() {
        parent::init();
        $this->initOptions();
    }

    public function run() {
        if ($this->hasModel()) {
            echo $this->render('input', [
                        'data' => $this,
                        'image' => $this->image(),
            ]);
        } else {
            echo "for model just available";
        }
        $this->registerPlugin();
    }

    protected function image() {
        $attribute = $this->attribute;
        if ($this->model->isNewRecord === false) {
            if (!empty($this->model->$attribute)) {
                return $this->imagePrefix . $this->model->$attribute;
            }
        } else {
            return $this->imageDefault;
        }
    }

    protected function registerPlugin() {
        $view = $this->getView();
        UploadSaktiAsset::register($view);
    }

}
