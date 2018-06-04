<?php

namespace UnicodeCharacterRanges\Range;

class Multani extends RangeAbstract
{
	const RANGE_NAME = 'Multani';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'11280',
			'112AF',
		];
	}
}
