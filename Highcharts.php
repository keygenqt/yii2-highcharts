<?php

namespace keygenqt\highcharts;

class Highcharts extends \yii\base\Widget
{
    public $option = [];
    public $jsOption = [];

    public function run()
    {
        BowerAssets::register($this->getView());
        
        $jsOption = \yii\helpers\Html::encode($this->jsOption);
        $jsOption = \yii\helpers\Html::encode($jsOption);
        
        $this->getView()->registerJs("$('#{$this->getId()}').highcharts($jsOption);");

        return \yii\helpers\Html::tag('div', $this->name, \yii\helpers\ArrayHelper::merge($this->option, [
            'id' => $this->getId(),
        ]));
    }
}