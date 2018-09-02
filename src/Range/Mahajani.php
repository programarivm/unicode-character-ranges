<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Mahajani extends RangeAbstract
{
	const RANGE_NAME = 'Mahajani';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'11150',
			'1117F',
		];
	}
}
