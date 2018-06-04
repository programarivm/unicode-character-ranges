<?php

namespace UnicodeCharacterRanges;

class PlayingCards extends CharacterRange
{
	const RANGE_NAME = 'Playing Cards';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1F0A0',
			'1F0FF',
		];
	}
}
