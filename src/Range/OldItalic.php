<?php

namespace UnicodeCharacterRanges\Range;

class OldItalic extends RangeAbstract
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
