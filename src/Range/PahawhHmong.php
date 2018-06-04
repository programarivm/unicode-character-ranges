<?php

namespace UnicodeRanges\Range;

class PahawhHmong extends RangeAbstract
{
	const RANGE_NAME = 'Pahawh Hmong';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'16B00',
			'16B8F',
		];
	}
}
