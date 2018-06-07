## Unicode Ranges

[![Build Status](https://travis-ci.org/programarivm/unicode-ranges.svg?branch=master)](https://travis-ci.org/programarivm/unicode-ranges)
[![License: GPL v3](https://img.shields.io/badge/License-GPL%20v3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)
![Unicode Character Ranges](/resources/logo.jpg?raw=true)

Unicode character ranges (or blocks) in a friendly object-oriented way for multiple purposes. See [Unicode ranges](https://github.com/programarivm/unicode-ranges/tree/master/src/Range).

### 1. Install

Via composer:

    $ composer require programarivm/unicode-ranges

### 2. Use

### The Ranges

```php
use UnicodeRanges\Range\AlchemicalSymbols;

$alchemicalSymbols = new AlchemicalSymbols;
```

#### `count()`

Counts the number of characters in a range.

```php
$alchemicalSymbols->count();
```
#### `range()`

Returns the Unicode range in hexadecimal format.

```php
$alchemicalSymbols->range();
```
#### `chars()`

Returns an array containing the chars of that range.

```php
$alchemicalSymbols->chars();
```

See [examples](https://github.com/programarivm/unicode-ranges/tree/master/examples/ranges).

- - -

### The `Converter` class

#### `dec2unicode()`

Converts a decimal number into its Unicode character counterpart.

```php
use UnicodeRanges\Converter;

Converter::dec2unicode(12004);
```

See [examples](https://github.com/programarivm/unicode-ranges/tree/master/examples/converter).

- - -

### The `Randomizer` class

#### `char()`

Generates a random Unicode character given one or multiple Unicode ranges.

```php
use UnicodeRanges\Randomizer;
use UnicodeRanges\Range\BasicLatin;
use UnicodeRanges\Range\Tibetan;
use UnicodeRanges\Range\Cherokee;

$char = Randomizer::char([
    new BasicLatin,
    new Tibetan,
    new Cherokee,
]);

echo $char . PHP_EOL;
```

Output:

    Ꮉ

#### `letter()`

Generates a random Unicode letter given one or multiple Unicode ranges.

```php
use UnicodeRanges\Randomizer;
use UnicodeRanges\Range\Arabic;
use UnicodeRanges\Range\HangulJamo;
use UnicodeRanges\Range\Phoenician;

$letter = Randomizer::letter([
    new Arabic,
    new HangulJamo,
    new Phoenician,
]);

echo $letter . PHP_EOL;
```

Output:

    ᄗ

#### `number()`

Generates a random Unicode number given one or multiple Unicode ranges.

```php
use UnicodeRanges\Randomizer;
use UnicodeRanges\Range\Arabic;
use UnicodeRanges\Range\HangulJamo;
use UnicodeRanges\Range\Phoenician;

$number = Randomizer::number([
    new Arabic,
    new HangulJamo,
    new Phoenician,
]);

echo $number . PHP_EOL;
```

Output:

    ۴

#### `printableChar()`

Generates a random Unicode printable char given one or multiple Unicode ranges.

```php
use UnicodeRanges\Randomizer;
use UnicodeRanges\Range\Arabic;
use UnicodeRanges\Range\HangulJamo;
use UnicodeRanges\Range\Phoenician;

$char = Randomizer::printableChar([
    new Arabic,
    new HangulJamo,
    new Phoenician,
]);

echo $char . PHP_EOL;
```

Output:

    چ

#### `letters()`

Generates random Unicode letters given one or multiple Unicode ranges.

```php
use UnicodeRanges\Randomizer;
use UnicodeRanges\Range\Arabic;
use UnicodeRanges\Range\HangulJamo;
use UnicodeRanges\Range\Phoenician;

$letters = Randomizer::letters([
    new Arabic,
    new HangulJamo,
    new Phoenician,
], 20);

echo $letters . PHP_EOL;
```

Output:

    ᄺᆺڽ𐤂ᆉᅔᅱ𐤆𐤄ᅰᇼᄓ𐤊𐤄ᄃ𐤋ᆝᆛەᅎ

#### `numbers()`

Generates random Unicode letters given one or multiple Unicode ranges.

```php
use UnicodeRanges\Randomizer;
use UnicodeRanges\Range\Arabic;
use UnicodeRanges\Range\HangulJamo;
use UnicodeRanges\Range\Phoenician;

$numbers = Randomizer::numbers([
    new Arabic,
    new HangulJamo,
    new Phoenician,
], 20);

echo $numbers . PHP_EOL;
```

Output:

    𐤚𐤙۶𐤘٩𐤖۳𐤚۴𐤘𐤖𐤖٣۱𐤛𐤙۵𐤛𐤘𐤘

#### `printableChars()`

Generates random Unicode printable chars given one or multiple Unicode ranges.

```php
use UnicodeRanges\Randomizer;
use UnicodeRanges\Range\Arabic;
use UnicodeRanges\Range\HangulJamo;
use UnicodeRanges\Range\Phoenician;

$chars = Randomizer::printableChars([
    new Arabic,
    new HangulJamo,
    new Phoenician,
], 20);

echo $chars . PHP_EOL;
```

Output:

    ۱نگ𐤏ځᄳ٩ؠᄕᅂ𐤍𐤇𐤆ᅁۊᆤᇚᄒᅕᆺ

See [examples](https://github.com/programarivm/unicode-ranges/tree/master/examples/randomizer).

### 3. License

The GNU General Public License.

### 4. Contributions

Would you help make this library better? Contributions are welcome.

- Feel free to send a pull request
- Drop an email at info@programarivm.com with the subject "Unicode Ranges"
- Leave me a comment on [Twitter](https://twitter.com/programarivm)
- Say hello on [Google+](https://plus.google.com/+Programarivm)

Many thanks.
