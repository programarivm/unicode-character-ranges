<?php

namespace UnicodeCharacterRanges;

class SinhalaArchaicNumbers extends CharacterRange
{
	const RANGE_NAME = 'Sinhala Archaic Numbers';

	public function __construct()
	{
		$this->name = self::RANGE_NAME;
		$this->range = [
			'111E0',
			'111FF',
		];
	}
}
