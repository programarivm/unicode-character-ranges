<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Mro extends AbstractRange
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
