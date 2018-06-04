<?php

namespace UnicodeCharacterRanges\Range;

class AncientGreekNumbers extends RangeAbstract
{
	const RANGE_NAME = 'Ancient Greek Numbers';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'10140',
			'1018F',
		];
	}
}
