<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class MeroiticHieroglyphs extends AbstractRange
{
	const RANGE_NAME = 'Meroitic Hieroglyphs';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10980',
			'1099F',
		];
	}
}
