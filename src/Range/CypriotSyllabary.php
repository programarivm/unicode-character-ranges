<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class CypriotSyllabary extends RangeAbstract
{
	const RANGE_NAME = 'Cypriot Syllabary';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10800',
			'1083F',
		];
	}
}
