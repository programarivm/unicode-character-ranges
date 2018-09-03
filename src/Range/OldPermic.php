<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class OldPermic extends AbstractRange
{
	const RANGE_NAME = 'Old Permic';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10350',
			'1037F',
		];
	}
}
