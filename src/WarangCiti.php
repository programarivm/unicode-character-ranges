<?php

namespace UnicodeCharacterRanges;

class WarangCiti extends CharacterRange
{
	const RANGE_NAME = 'Warang Citi';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'118A0',
			'118FF',
		];
	}
}
