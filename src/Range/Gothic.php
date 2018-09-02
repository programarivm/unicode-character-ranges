<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class Gothic extends RangeAbstract
{
	const RANGE_NAME = 'Gothic';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10330',
			'1034F',
		];
	}
}
