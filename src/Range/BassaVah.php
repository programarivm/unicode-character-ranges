<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class BassaVah extends AbstractRange
{
	const RANGE_NAME = 'Bassa Vah';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'16AD0',
			'16AFF',
		];
	}
}
