<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class GeometricShapesExtended extends RangeAbstract
{
	const RANGE_NAME = 'Geometric Shapes Extended';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1F780',
			'1F7FF',
		];
	}
}
