<?php

namespace UnicodeCharacterRanges;

class Multani extends CharacterRange
{
	const RANGE_NAME = 'Multani';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'11280',
			'112AF',
		];
	}
}
