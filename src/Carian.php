<?php

namespace UnicodeCharacterRanges;

class Carian extends CharacterRange
{
	const RANGE_NAME = 'Carian';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'102A0',
			'102DF',
		];
	}
}
