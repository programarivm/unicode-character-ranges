<?php

namespace UnicodeCharacterRanges;

class OldItalic extends CharacterRange
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
