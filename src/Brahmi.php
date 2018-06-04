<?php

namespace UnicodeCharacterRanges;

class Brahmi extends CharacterRange
{
	const RANGE_NAME = 'Brahmi';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'11000',
			'1107F',
		];
	}
}
