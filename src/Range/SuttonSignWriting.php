<?php

namespace UnicodeCharacterRanges\Range;

class SuttonSignWriting extends RangeAbstract
{
	const RANGE_NAME = 'Sutton Sign Writing';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1D800',
			'1DAAF',
		];
	}
}
