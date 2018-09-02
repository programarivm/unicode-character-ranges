<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class ShorthandFormatControls extends RangeAbstract
{
	const RANGE_NAME = 'Shorthand Format Controls';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1BCA0',
			'1BCAF',
		];
	}
}
