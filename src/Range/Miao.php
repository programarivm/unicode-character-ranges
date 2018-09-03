<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Miao extends AbstractRange
{
	const RANGE_NAME = 'Miao';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'16F00',
			'16F9F',
		];
	}
}
