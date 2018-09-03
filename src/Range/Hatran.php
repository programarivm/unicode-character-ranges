<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Hatran extends AbstractRange
{
	const RANGE_NAME = 'Hatran';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'108E0',
			'108FF',
		];
	}
}
