<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Sharada extends AbstractRange
{
	const RANGE_NAME = 'Sharada';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'11180',
			'111DF',
		];
	}
}
