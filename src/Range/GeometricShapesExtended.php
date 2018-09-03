<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class GeometricShapesExtended extends AbstractRange
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
