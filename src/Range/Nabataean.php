<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Nabataean extends RangeAbstract
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
