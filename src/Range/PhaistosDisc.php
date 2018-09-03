<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class PhaistosDisc extends AbstractRange
{
	const RANGE_NAME = 'Phaistos Disc';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'101D0',
			'101FF',
		];
	}
}
