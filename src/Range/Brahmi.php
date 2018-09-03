<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class Brahmi extends AbstractRange
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
