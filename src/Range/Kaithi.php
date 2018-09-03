<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Kaithi extends AbstractRange
{
	const RANGE_NAME = 'Kaithi';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'11080',
			'110CF',
		];
	}
}
