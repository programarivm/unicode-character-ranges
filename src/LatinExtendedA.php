<?php

namespace UnicodeCharacterRanges;

class LatinExtendedA extends CharacterRange
{
	const RANGE_NAME = 'Latin Extended-A';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'0100',
			'017F'
		];
	}
}
