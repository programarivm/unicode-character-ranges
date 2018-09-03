<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Osmanya extends AbstractRange
{
	const RANGE_NAME = 'Osmanya';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10480',
			'104AF',
		];
	}
}
