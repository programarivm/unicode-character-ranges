<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Duployan extends AbstractRange
{
	const RANGE_NAME = 'Duployan';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1BC00',
			'1BC9F',
		];
	}
}
