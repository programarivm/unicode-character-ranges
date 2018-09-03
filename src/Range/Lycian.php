<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Lycian extends AbstractRange
{
	const RANGE_NAME = 'Lycian';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10280',
			'1029F',
		];
	}
}
