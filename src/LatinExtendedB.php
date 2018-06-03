<?php

namespace UnicodeCharacterRanges;

class LatinExtendedB extends CharacterRange
{
	const RANGE_NAME = 'Latin Extended-B';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'0180',
			'024F'
		];
	}
}
