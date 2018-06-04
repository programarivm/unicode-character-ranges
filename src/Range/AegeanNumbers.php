<?php

namespace UnicodeRanges\Range;

class AegeanNumbers extends RangeAbstract
{
	const RANGE_NAME = 'Aegean Numbers';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10100',
			'1013F',
		];
	}
}
