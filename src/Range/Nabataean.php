<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Nabataean extends AbstractRange
{
	const RANGE_NAME = 'Nabataean';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10880',
			'108AF',
		];
	}
}
