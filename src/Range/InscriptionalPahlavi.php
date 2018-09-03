<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class InscriptionalPahlavi extends AbstractRange
{
	const RANGE_NAME = 'Inscriptional Pahlavi';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10B60',
			'10B7F',
		];
	}
}
