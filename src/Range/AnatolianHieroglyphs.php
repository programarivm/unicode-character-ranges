<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class AnatolianHieroglyphs extends RangeAbstract
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
