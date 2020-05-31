[HighCharts](https://keygenqt.com/work/yii2-highcharts)
===================

![GitHub](https://img.shields.io/github/license/keygenqt/yii2-highcharts)
![Packagist Downloads](https://img.shields.io/packagist/dt/keygenqt/yii2-highcharts)

Extension yii for library [Highcharts](https://www.highcharts.com/)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either add

```
"require": {
    "keygenqt/yii2-highcharts": "*"
}
```

of your `composer.json` file.

## Usage

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