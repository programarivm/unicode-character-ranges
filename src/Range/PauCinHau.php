<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class PauCinHau extends RangeAbstract
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
