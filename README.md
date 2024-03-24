HighCharts
===================

![Packagist Downloads](https://img.shields.io/packagist/dt/keygenqt/yii2-highcharts?label=Packagist%20Downloads)

Extension yii2 allowing to use library [Highcharts](https://www.highcharts.com/).

<p>
    <a href="https://old.keygenqt.com/work/yii2-highcharts">
        <img src="data/demo_button.gif" width="136px"/>
    </a>
</p>

#### Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

```
"require": {
    "keygenqt/yii2-highcharts": "*"
}
```

#### Usage

```php
use \keygenqt\highcharts\Highcharts;

<?= Highcharts::widget([
'jsOption' => [
    'chart' => [
        'type' => 'column',
        'plotBackgroundColor' => null,
        'plotBorderWidth' => null,
        'plotShadow' => false
    ],
    'title' => [
        'text' => 'Statistics'
    ],
    'xAxis' => [
        'allowDecimals' => true,
        'categories' => [
            'Download', 'Upload', 'Compress', 'Validate'
        ]
    ],
    'series' => [
        [
            'showInLegend' => false,
            'data' => [
                [
                    'y' => 134,
                    'color' => '#D6251F',
                ],
                [
                    'y' => 100,
                    'color' => '#26ABDB',
                ],
                [
                    'y' => 10,
                    'color' => '#33BDA4',
                ],
                [
                    'y' => 50,
                    'color' => '#51078D',
                ],
            ],
        ],
    ]
]]);
?>

<?= Highcharts::widget([
    'jsOption' => [
        'chart' => [
            'plotBackgroundColor' => null,
            'plotBorderWidth' => null,
            'plotShadow' => false
        ],
        'title' => [
            'text' => 'Statistics'
        ],
        'plotOptions' => [
            'pie' => [
                'allowPointSelect' => true,
                'cursor' => 'pointer',
                'dataLabels' => [
                    'enabled' => false
                ],
                'showInLegend' => true
            ]
        ],
        'series' => [[
            'type' => 'pie',
            'data' => [
                [
                    'name' => 'ENG',
                    'y' => 200,
                    'color' => '#1E5E61'
                ],
                [
                    'name' => 'RU',
                    'y' => 100,
                    'color' => '#C8F1F3'
                ],
            ],
        ]]
    ]]);
?>
```

#### License

```
Copyright 2016-2024 Vitaliy Zarubin

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
```
