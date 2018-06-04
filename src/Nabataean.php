<?php

namespace UnicodeCharacterRanges;

class Nabataean extends CharacterRange
{
	const RANGE_NAME = 'Nabataean';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10880',
			'108AF',
		];
	}
}
