<?php

namespace keygenqt\highcharts;

use \yii\web\AssetBundle;

/**
 * @author KeyGen <keygenqt@gmail.com>
 */
class BowerAssets extends AssetBundle
{
	public $sourcePath = '@bower/highcharts';

	public $js = [
		'highcharts.js'
	];
}
