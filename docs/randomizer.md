### `Randomizer`

#### `char()`

Generates a random Unicode character given one or multiple Unicode ranges.

Example:

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

Example:

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

Example:

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

Example:

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

Example:

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

Generates random Unicode numbers given one or multiple Unicode ranges.

Example:

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

Example:

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

See more [examples](https://github.com/programarivm/unicode-ranges/blob/master/tests/RandomizerTest.php).
