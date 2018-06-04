<?php

namespace UnicodeCharacterRanges\Range;

class Brahmi extends RangeAbstract
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
