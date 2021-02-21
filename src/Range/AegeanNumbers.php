<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class AegeanNumbers extends AbstractRange
{
	const RANGE_NAME = 'Aegean Numbers';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;

		$this->range = [
			'10100',
			'1013F',
		];

		$this->keywords = [
			'aegean',
			'number',
			'ancient',
			'minoan',
			'minoan',
			'mycenaean',
			'greece',
			'greek',
			'dead',
		];
	}
}
