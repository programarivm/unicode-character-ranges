<?php

namespace UnicodeCharacterRanges;

class Duployan extends CharacterRange
{
	const RANGE_NAME = 'Duployan';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1BC00',
			'1BC9F',
		];
	}
}
