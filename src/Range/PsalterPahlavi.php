<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class PsalterPahlavi extends AbstractRange
{
	const RANGE_NAME = 'Psalter Pahlavi';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10B80',
			'10BAF',
		];
	}
}
