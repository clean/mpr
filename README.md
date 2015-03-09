# mpr
My print_r - debug function

Dumbs information about variable in a nice way

## Installation

via Composer:

```json
"require-dev": {
  "romannowicki/clix": "1.0.0"
}
```

## Usage

Dump variable and continue

```php
mpr($variable);
```

Dump variable and exit

```php
mpr($variable, 1);
```

When second parameter given you will get information from which file mpr was called

```
Who called me: mpr/test.php line 14
```

## Output

### Objects

```php
--MPR--Foo Object
(
    [name] => Foo
    [data:protected] => Array
        (
            [0] => 1
            [1] => 2
            [2] => 3
            [3] => 4
        )

)
```

### Array

```php
--MPR--Array
(
    [x] => Hello
    [y] => Array
        (
            [0] => 1
            [1] => 2
            [2] => 3
            [3] => 4
        )

    [z] => stdClass Object
        (
            [0] => a
            [1] => b
            [2] => c
        )

)
```

### Scalar

```php
--MPR--string(5) "Hello"
```
