<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class EgyptianHieroglyphs extends AbstractRange
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
