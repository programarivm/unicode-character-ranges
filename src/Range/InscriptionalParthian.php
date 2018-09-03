<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class InscriptionalParthian extends AbstractRange
{
	const RANGE_NAME = 'Inscriptional Parthian';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10B40',
			'10B5F',
		];
	}
}
