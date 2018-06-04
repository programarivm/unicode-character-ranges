<?php

namespace UnicodeCharacterRanges;

class Cuneiform extends CharacterRange
{
	const RANGE_NAME = 'Cuneiform';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'12000',
			'123FF',
		];
	}
}
