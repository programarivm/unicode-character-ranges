<?php

namespace UnicodeCharacterRanges;

class Takri extends CharacterRange
{
	const RANGE_NAME = 'Takri';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'11680',
			'116CF',
		];
	}
}
