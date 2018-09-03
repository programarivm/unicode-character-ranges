<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Cuneiform extends AbstractRange
{
	const RANGE_NAME = 'Cuneiform';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'12000',
			'123FF',
		];
	}
}
