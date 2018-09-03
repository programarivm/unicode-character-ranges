<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class ShorthandFormatControls extends AbstractRange
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
