<?php

namespace UnicodeRanges\Range;

use UnicodeRanges\RangeAbstract;

class AncientGreekMusicalNotation extends RangeAbstract
{
	const RANGE_NAME = 'Ancient Greek Musical Notation';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'1D200',
			'1D24F',
		];
	}
}
