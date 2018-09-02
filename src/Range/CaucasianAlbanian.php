<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class CaucasianAlbanian extends RangeAbstract
{
	const RANGE_NAME = 'Caucasian Albanian';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10530',
			'1056F',
		];
	}
}
