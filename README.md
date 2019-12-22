## Unicode Ranges

[![Latest Stable Version](https://poser.pugx.org/programarivm/unicode-ranges/v/stable)](https://packagist.org/packages/programarivm/unicode-ranges)
[![Build Status](https://travis-ci.org/programarivm/unicode-ranges.svg?branch=master)](https://travis-ci.org/programarivm/unicode-ranges)
[![Total Downloads](https://poser.pugx.org/programarivm/unicode-ranges/downloads)](https://packagist.org/packages/programarivm/unicode-ranges)
[![Documentation Status](https://readthedocs.org/projects/unicode-ranges/badge/?version=latest)](https://unicode-ranges.readthedocs.io/en/latest/?badge=latest)
[![License: GPL v3](https://img.shields.io/badge/License-GPL%20v3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)

![Unicode Character Ranges](/resources/logo.jpg?raw=true)

Unicode character ranges (or blocks) in a friendly object-oriented way for multiple purposes. See [Unicode ranges](https://github.com/programarivm/unicode-ranges/tree/master/src/Range).

### Install

Via composer:

    $ composer require programarivm/unicode-ranges

### Example

Here is an example showing how to use `AlchemicalSymbols`.

```php
<?php
use UnicodeRanges\Range\AlchemicalSymbols;

$alchemicalSymbols = new AlchemicalSymbols;

echo "Name: {$alchemicalSymbols->name()}".PHP_EOL;
echo "Total: {$alchemicalSymbols->count()}".PHP_EOL;
echo "Range: {$alchemicalSymbols->range()[0]}-{$alchemicalSymbols->range()[1]}".PHP_EOL;
echo 'Characters: '.PHP_EOL;

print_r($alchemicalSymbols->chars());
```
Output:
```
Name: Alchemical Symbols
Total: 128
Range: 1F700-1F77F
Characters:
Array
(
    [0] => 🜀
    [1] => 🜁
    [2] => 🜂
    [3] => 🜃
    [4] => 🜄
    [5] => 🜅
    [6] => 🜆
    [7] => 🜇
    ...
```

### Frequency Analysis of Unicode Ranges

#### [`tests/unit/UnicodeTest.php`](https://github.com/programarivm/unicode-ranges/blob/master/tests/AnalyzerTest.php)

```php
<?php

namespace UnicodeRanges\Tests;

use UnicodeRanges\Analyzer;
use PHPUnit\Framework\TestCase;

class AnalyzerTest extends TestCase
{
    /**
     * @test
     */
    public function freq()
    {
        $text = '律絕諸篇俱宇宙古今مليارات في мале,тъйжалнопе hola que tal como 토마토쥬스 estas tu hoy この平安朝の';
        $expected = [
            'Basic Latin' => 25,
            'Cyrillic' => 14,
            'CJK Unified Ideographs' => 12,
            'Arabic' => 9,
            'Hangul Syllables' => 5,
            'Hiragana' => 3,
        ];

        $this->assertEquals($expected, (new Analyzer($text))->freq());
    }

    /**
     * @test
     */
    public function most_freq()
    {
        $text = '律絕諸篇俱宇宙古今مليارات في мале,тъйжалнопе hola que tal como 토마토쥬스 estas tu hoy この平安朝の';

        $this->assertEquals('Basic Latin', (new Analyzer($text))->mostFreq());
    }
}
```
### Documentation

For further information please read the [Documentation](https://unicode-ranges.readthedocs.io/en/latest/).

### License

The GNU General Public License.

### Contributions

Would you help make this library better? Contributions are welcome.

- Feel free to send a pull request
- Drop an email at info@programarivm.com with the subject "Unicode Ranges"
- Leave me a comment on [Twitter](https://twitter.com/programarivm)
- Say hello on [Google+](https://plus.google.com/+Programarivm)

Many thanks.
