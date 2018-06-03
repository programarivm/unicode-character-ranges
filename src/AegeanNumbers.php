<?php

namespace UnicodeCharacterRanges;

class AegeanNumbers extends CharacterRange
{
	const RANGE_NAME = 'Aegean Numbers';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10100',
			'1013F',
		];
	}
}
