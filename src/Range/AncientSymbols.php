<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class AncientSymbols extends AbstractRange
{
	const RANGE_NAME = 'Ancient Symbols';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;

		$this->range = [
			'10190',
			'101CF',
		];

		$this->keywords = [
			'roman',
			'currency',
			'weight',
			'measure',
			'dead',
		];
	}
}
