<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class AlchemicalSymbols extends AbstractRange
{
	const RANGE_NAME = 'Alchemical Symbols';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;

		$this->range = [
			'1F700',
			'1F77F',
		];

		$this->keywords = [
			'alchemy',
			'chemical',
			'chemistry',
			'ancient',
			'medieval',
		];
	}
}
