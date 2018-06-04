<?php

namespace UnicodeCharacterRanges;

class Emoticons extends CharacterRange
{
	const RANGE_NAME = 'Emoticons';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1F600',
			'1F64F',
		];
	}
}
