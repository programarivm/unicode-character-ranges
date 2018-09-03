<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class AnatolianHieroglyphs extends AbstractRange
{
	const RANGE_NAME = 'Anatolian Hieroglyphs';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'14400',
			'1467F',
		];
	}
}
