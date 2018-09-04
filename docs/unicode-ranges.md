### Unicode Ranges

Here is an example showing how to use `AlchemicalSymbols`.

```php
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

#### `name()`

Gets the name of the Unicode range.

```php
$name = $alchemicalSymbols->name();
```

#### `count()`

Counts the number of characters in a range.

```php
$count = $alchemicalSymbols->count();
```
#### `range()`

Returns the Unicode range in hexadecimal format.

```php
$range = $alchemicalSymbols->range();
```
#### `chars()`

Returns an array containing the chars of that range.

```php
$chars = $alchemicalSymbols->chars();
```

See more [examples](https://github.com/programarivm/unicode-ranges/tree/master/tests/Range).
