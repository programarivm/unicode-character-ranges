<?php

namespace UnicodeCharacterRanges;

class Hatran extends CharacterRange
{
	const RANGE_NAME = 'Hatran';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'108E0',
			'108FF',
		];
	}
}
