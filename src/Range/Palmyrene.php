<?php

namespace UnicodeRanges\Range;

class Palmyrene extends RangeAbstract
{
	const RANGE_NAME = 'Palmyrene';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10860',
			'1087F',
		];
	}
}
