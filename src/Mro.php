<?php

namespace UnicodeCharacterRanges;

class Mro extends CharacterRange
{
	const RANGE_NAME = 'Mro';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'16A40',
			'16A6F',
		];
	}
}
