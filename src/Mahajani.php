<?php

namespace UnicodeCharacterRanges;

class Mahajani extends CharacterRange
{
	const RANGE_NAME = 'Mahajani';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'11150',
			'1117F',
		];
	}
}
