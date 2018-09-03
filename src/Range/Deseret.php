<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Deseret extends AbstractRange
{
	const RANGE_NAME = 'Deseret';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10400',
			'1044F',
		];
	}
}
