<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class PauCinHau extends AbstractRange
{
	const RANGE_NAME = 'Pau Cin Hau';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'11AC0',
			'11AFF',
		];
	}
}
