<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class TransportAndMapSymbols extends AbstractRange
{
	const RANGE_NAME = 'Transport and Map Symbols';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1F680',
			'1F6FF',
		];
	}
}
