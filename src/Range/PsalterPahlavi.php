<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class PsalterPahlavi extends RangeAbstract
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
