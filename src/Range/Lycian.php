<?php

namespace UnicodeRanges\Range;

class Lycian extends RangeAbstract
{
	const RANGE_NAME = 'Lycian';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10280',
			'1029F',
		];
	}
}
