<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class OldItalic extends AbstractRange
{
	const RANGE_NAME = 'Old Italic';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10300',
			'1032F',
		];
	}
}
