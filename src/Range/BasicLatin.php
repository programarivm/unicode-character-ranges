<?php

namespace UnicodeCharacterRanges\Range;

class BasicLatin extends RangeAbstract
{
	const RANGE_NAME = 'Basic Latin';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'0020',
			'007F'
		];
	}
}
