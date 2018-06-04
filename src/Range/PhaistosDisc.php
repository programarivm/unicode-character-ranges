<?php

namespace UnicodeRanges\Range;

class PhaistosDisc extends RangeAbstract
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
