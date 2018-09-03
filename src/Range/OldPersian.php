<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class OldPersian extends AbstractRange
{
	const RANGE_NAME = 'Old Persian';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'103A0',
			'103DF',
		];
	}
}
