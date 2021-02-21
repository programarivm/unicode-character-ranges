<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Ahom extends AbstractRange
{
	const RANGE_NAME = 'Ahom';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;

		$this->range = [
			'11700',
			'1173F',
		];

		$this->keywords = [
			'ahom',
			'assam',
			'india',
			'himalaya',
			'dead',
		];
	}
}
