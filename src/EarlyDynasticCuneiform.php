<?php

namespace UnicodeCharacterRanges;

class EarlyDynasticCuneiform extends CharacterRange
{
	const RANGE_NAME = 'Early Dynastic Cuneiform';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'12480',
			'1254F',
		];
	}
}
