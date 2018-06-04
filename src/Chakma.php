<?php

namespace UnicodeCharacterRanges;

class Chakma extends CharacterRange
{
	const RANGE_NAME = 'Chakma';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'11100',
			'1114F',
		];
	}
}
