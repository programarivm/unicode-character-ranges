<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class EarlyDynasticCuneiform extends RangeAbstract
{
	const RANGE_NAME = 'Early Dynastic Cuneiform';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'12480',
			'1254F',
		];
	}
}
