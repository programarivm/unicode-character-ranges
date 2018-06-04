<?php

namespace UnicodeCharacterRanges;

class BamumSupplement extends CharacterRange
{
	const RANGE_NAME = 'Bamum Supplement';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'16800',
			'16A3F',
		];
	}
}
