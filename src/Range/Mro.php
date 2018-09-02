<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Mro extends RangeAbstract
{
	const RANGE_NAME = 'Mro';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'16A40',
			'16A6F',
		];
	}
}
