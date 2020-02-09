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

### Examples

#### Instantiate a Unicode range

```php
<?php

use UnicodeRanges\Range\AlchemicalSymbols;

$alchemicalSymbols = new AlchemicalSymbols;

echo "Name: {$alchemicalSymbols->name()}".PHP_EOL;
echo "Total: {$alchemicalSymbols->count()}".PHP_EOL;
echo "Range: {$alchemicalSymbols->range()[0]}-{$alchemicalSymbols->range()[1]}".PHP_EOL;
```
Output:
```
Name: Alchemical Symbols
Total: 128
Range: 1F700-1F77F
```

#### From decimal to Unicode

```php
<?php

use UnicodeRanges\Converter;

$converter = new Converter();

$unicode = $converter->dec2unicode(926);

echo $unicode . PHP_EOL;
```

Output:

```
Ξ
```

#### From Unicode to decimal

```php
<?php

use UnicodeRanges\Converter;

$converter = new Converter();

$dec = $converter->unicode2dec('Ξ');

echo $dec . PHP_EOL;
```

Output:

```
926
```

#### From Unicode to hexadecimal

```php
<?php

use UnicodeRanges\Converter;

$converter = new Converter();

$hex = $converter->unicode2hex('Ξ');

echo $hex . PHP_EOL;
```

Output:

```
39E
```

#### From Unicode to `UnicodeRanges\Range` object

```php
<?php

use UnicodeRanges\Converter;

$converter = new Converter();

$range = $converter->unicode2range('Ξ');

echo "Name: {$range->name()}".PHP_EOL;
echo "Total: {$range->count()}".PHP_EOL;
echo "Range: {$range->range()[0]}-{$range->range()[1]}".PHP_EOL;
```

Output:

```
Name: Greek and Coptic
Total: 144
Range: 0370-03FF
```

#### A random Tibetan char

```php
<?php

use UnicodeRanges\Randomizer;
use UnicodeRanges\Range\Tibetan;

$randomizer = new Randomizer();

$char = $randomizer->char([
    new Tibetan,
]);

echo $char . PHP_EOL;
```

Output:

```
༻
```

#### A random char using multiple ranges

```php
<?php

use UnicodeRanges\Randomizer;
use UnicodeRanges\Range\Arabic;
use UnicodeRanges\Range\Balinese;
use UnicodeRanges\Range\HangulJamo;
use UnicodeRanges\Range\Phoenician;
use UnicodeRanges\Range\Runic;

$randomizer = new Randomizer();

$char = $randomizer->char([
    new Arabic,
    new Balinese,
    new HangulJamo,
    new Phoenician,
    new Runic
]);

echo $char . PHP_EOL;
```

Output:

```
ڗ
```

#### A random letter using multiple ranges

```php
<?php

use UnicodeRanges\Randomizer;
use UnicodeRanges\Range\Arabic;
use UnicodeRanges\Range\HangulJamo;
use UnicodeRanges\Range\Phoenician;

$randomizer = new Randomizer();

$letter = $randomizer->letter([
    new Arabic,
    new HangulJamo,
    new Phoenician,
]);

echo $letter . PHP_EOL;
```

Output:

```
𐤇
```

#### A random number using multiple ranges

```php
<?php

use UnicodeRanges\Randomizer;
use UnicodeRanges\Range\Arabic;
use UnicodeRanges\Range\HangulJamo;
use UnicodeRanges\Range\Phoenician;

$randomizer = new Randomizer();

$number = $randomizer->number([
    new Arabic,
    new HangulJamo,
    new Phoenician,
]);

echo $number . PHP_EOL;
```

Output:

```
۳
```

#### A printable char using multiple ranges

```php
<?php

use UnicodeRanges\Randomizer;
use UnicodeRanges\Range\Arabic;
use UnicodeRanges\Range\HangulJamo;
use UnicodeRanges\Range\Phoenician;

$randomizer = new Randomizer();

$char = $randomizer->printableChar([
    new Arabic,
    new HangulJamo,
    new Phoenician,
]);

echo $char . PHP_EOL;
```

Output:

```
ڦ
```

#### Multiple random letters using multiple ranges

```php
<?php

use UnicodeRanges\Randomizer;
use UnicodeRanges\Range\Arabic;
use UnicodeRanges\Range\HangulJamo;
use UnicodeRanges\Range\Phoenician;

$randomizer = new Randomizer();

$letters = $randomizer->letters([
    new Arabic,
    new HangulJamo,
    new Phoenician,
], 20);

echo $letters . PHP_EOL;
```

Output:

```
𐤊볘ᇵᅿ𐤄𐤅ᆵᄣ𐤃ۑ𐤆ᄰᆡᇐᄋہ𐤅ټ𐤊
```

#### Multiple random numbers using multiple ranges

```php
<?php

use UnicodeRanges\Randomizer;
use UnicodeRanges\Range\Arabic;
use UnicodeRanges\Range\HangulJamo;
use UnicodeRanges\Range\Phoenician;

$randomizer = new Randomizer();

$numbers = $randomizer->numbers([
    new Arabic,
    new HangulJamo,
    new Phoenician,
], 20);

echo $numbers . PHP_EOL;
```

Output:

```
𐤖𐤛٢۷𐤘𐤚𐤘𐤙𐤖۸٣٥۴𐤗𐤖۹𐤛𐤘١
```

#### Multiple random printable chars using multiple ranges

```php
<?php

use UnicodeRanges\Randomizer;
use UnicodeRanges\Range\Arabic;
use UnicodeRanges\Range\HangulJamo;
use UnicodeRanges\Range\Phoenician;

$randomizer = new Randomizer();

$chars = $randomizer->printableChars([
    new Arabic,
    new HangulJamo,
    new Phoenician,
], 20);

echo $chars . PHP_EOL;
```

Output:

```
ᄙئ𐤄ᄏجښڽᅴۈ𐤖؞كᅒڅ𐤌٩ښ𐤆ᆿآ
```

#### Frequency analysis of Unicode ranges

#### [`tests/AnalyzerTest.php`](https://github.com/programarivm/unicode-ranges/blob/master/tests/AnalyzerTest.php)

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

### License

The GNU General Public License.

### Contributions

Would you help make this library better? Contributions are welcome.

- Feel free to send a pull request
- Drop an email at info@programarivm.com with the subject "Unicode Ranges"
- Leave me a comment on [Twitter](https://twitter.com/programarivm)
- Say hello on [Google+](https://plus.google.com/+Programarivm)

Many thanks.
