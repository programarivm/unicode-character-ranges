<?php

namespace UnicodeCharacterRanges;

class MeroiticCursive extends CharacterRange
{
	const RANGE_NAME = 'Meroitic Cursive';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'109A0',
			'109FF',
		];
	}
}
