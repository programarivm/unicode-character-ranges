<?php

namespace UnicodeCharacterRanges;

class BasicLatin extends CharacterRange
{
	const RANGE_NAME = 'Basic Latin';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'hex' => [
			'0020',
			'007F'
		],
			'dec' => [
			32,
			127
		]
		];
	}
}
