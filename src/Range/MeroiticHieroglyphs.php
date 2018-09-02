<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class MeroiticHieroglyphs extends RangeAbstract
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
