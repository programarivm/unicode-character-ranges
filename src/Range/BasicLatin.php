<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class BasicLatin extends AbstractRange
{
	const RANGE_NAME = 'Basic Latin';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'0020',
			'007F'
		];
	}
}
