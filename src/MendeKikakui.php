<?php

namespace UnicodeCharacterRanges;

class MendeKikakui extends CharacterRange
{
	const RANGE_NAME = 'Mende Kikakui';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1E800',
			'1E8DF',
		];
	}
}
