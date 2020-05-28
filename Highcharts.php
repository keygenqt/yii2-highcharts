<?php
/*
 * Copyright 2020 Vitaliy Zarubin
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace keygenqt\highcharts;

class Highcharts extends \yii\base\Widget
{
    public $option = [];
    public $jsOption = [];

    public function run()
    {
        BowerAssets::register($this->getView());
        $this->jsOption = \yii\helpers\Json::encode($this->jsOption);
        $this->getView()->registerJs("$('#{$this->getId()}').highcharts({$this->jsOption});");
        return \yii\helpers\Html::tag('div', '', \yii\helpers\ArrayHelper::merge($this->option, [
            'id' => $this->getId(),
        ]));
    }
}