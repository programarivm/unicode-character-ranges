### `Converter`

#### `dec2unicode()`

Converts a decimal number into its Unicode character counterpart.

Example:

```php
use UnicodeRanges\Converter;

$dec = 926;
$unicode = Converter::dec2unicode($dec);

echo "$dec is $unicode" . PHP_EOL;
```

Output:

```
926 is Ξ
```

#### `unicode2dec()`

Converts a Unicode character into its decimal counterpart.

Example:

```php
use UnicodeRanges\Converter;

$char = 'a';
$dec = Converter::unicode2dec($char);

echo "$char is $dec" . PHP_EOL;
```

Output:

```
a is 97
```

#### `unicode2hex()`

Converts a Unicode character into its hexadecimal counterpart.

Example:

```php
use UnicodeRanges\Converter;

$char = 'a';
$hex = Converter::unicode2hex($char);

echo "$char is $hex" . PHP_EOL;
```

Output:

```
a is 61
```

#### `unicode2range()`

Converts a Unicode character into an object oriented Unicode range.

Example:

```php
use UnicodeRanges\Converter;

$char = 'a';
$range = Converter::unicode2range($char);

echo "Total: {$range->count()}".PHP_EOL;
echo "Name: {$range->name()}".PHP_EOL;
echo "Range: {$range->range()[0]}-{$range->range()[1]}".PHP_EOL;
echo 'Characters: ' . PHP_EOL;
print_r($range->chars());
```

Output:

```
Total: 96
Name: Basic Latin
Range: 0020-007F
Characters:
Array
(
    [0] =>  
    [1] => !
    [2] => "
    [3] => #
    [4] => $
    [5] => %
    [6] => &
    [7] => '
    ...
```

See more [examples](https://github.com/programarivm/unicode-ranges/blob/master/tests/ConverterTest.php).
