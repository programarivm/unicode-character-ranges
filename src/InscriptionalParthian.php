<?php

namespace UnicodeCharacterRanges;

class InscriptionalParthian extends CharacterRange
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
