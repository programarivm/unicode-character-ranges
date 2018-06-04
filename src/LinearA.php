<?php

namespace UnicodeCharacterRanges;

class LinearA extends CharacterRange
{
	const RANGE_NAME = 'Linear A';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10600',
			'1077F',
		];
	}
}
