<?php

namespace UnicodeCharacterRanges;

class SupplementalArrowsC extends CharacterRange
{
	const RANGE_NAME = 'Supplemental Arrows-C';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1F800',
			'1F8FF',
		];
	}
}
