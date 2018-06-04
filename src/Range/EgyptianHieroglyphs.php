<?php

namespace UnicodeRanges\Range;

class EgyptianHieroglyphs extends RangeAbstract
{
	const RANGE_NAME = 'Egyptian Hieroglyphs';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'13000',
			'1342F',
		];
	}
}
