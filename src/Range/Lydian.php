<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Lydian extends RangeAbstract
{
	const RANGE_NAME = 'Lydian';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10920',
			'1093F',
		];
	}
}
