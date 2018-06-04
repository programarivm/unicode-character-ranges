<?php

namespace UnicodeCharacterRanges;

class Miao extends CharacterRange
{
	const RANGE_NAME = 'Miao';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'16F00',
			'16F9F',
		];
	}
}
