HighCharts
===================

![GitHub](https://img.shields.io/github/license/keygenqt/yii2-highcharts)
![Packagist Downloads](https://img.shields.io/packagist/dt/keygenqt/yii2-highcharts)

Wrap on a wonderful library [Highcharts](https://github.com/highcharts/highcharts).

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
use keygenqt\highcharts\Highcharts;

<?= Highcharts::widget([
	'jsOption' => [
		'chart' => [
			'plotBackgroundColor' => null,
			'plotBorderWidth' => null,
			'plotShadow' => false
		],
		'title' => [
			'text' => 'User. (All count - ' . ((int) User::find()->count()) . ').'
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
					'name' => 'User disable',
					'y' => (int) User::find()->where(['blocked' => User::STATUS_BLOCKED])->count(),
					'color' => '#009b96'
				],
				[
					'name' => 'User enable',
					'y' => (int) User::find()->where(['blocked' => User::STATUS_ENABLE])->count(),
				],
			],
		]]
	]]);
?>
```