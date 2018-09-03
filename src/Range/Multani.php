<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Multani extends AbstractRange
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
