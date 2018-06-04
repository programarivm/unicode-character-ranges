<?php

namespace UnicodeCharacterRanges;

class OldPersian extends CharacterRange
{
	const RANGE_NAME = 'Old Persian';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'103A0',
			'103DF',
		];
	}
}
