<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class CypriotSyllabary extends AbstractRange
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
