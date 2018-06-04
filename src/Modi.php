<?php

namespace UnicodeCharacterRanges;

class Modi extends CharacterRange
{
	const RANGE_NAME = 'Modi';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'11600',
			'1165F',
		];
	}
}
