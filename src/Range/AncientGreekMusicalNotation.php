<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\AbstractRange;

class AncientGreekMusicalNotation extends AbstractRange
{
	const RANGE_NAME = 'Ancient Greek Musical Notation';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;

		$this->range = [
			'1D200',
			'1D24F',
		];

		$this->keywords = [];
	}
}
