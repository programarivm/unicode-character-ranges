<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class LinearA extends AbstractRange
{
	const RANGE_NAME = 'Linear A';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10600',
			'1077F',
		];
	}
}
