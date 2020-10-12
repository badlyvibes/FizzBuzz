# FizzBuzz

## Instructions
From this folder:

1. Run `composer install`
2. Run `composer dump-autoload`
3. Run `vendor/bin/phpunit FizzBuzz/test/FizzBuzzTest.php`

_This requires **minimum** PHP version 7.4 as FizzBuzzTest.php (line 10) uses a typed property (remove the `FizzBuzz` type if you're on a lower version)._ 

## Business requirements
Write a class with a method that takes 2 integers between 1 and 100.
- Loop from the first integer to the second integer.
- Write out each integer.
- If the integer is divisible by 3 also print out “fizz”
- If the integer is divisible by 5 also print out “buzz”
- Spend no longer than 40 minutes.

## Development requirements
- Before you write any other code write some unit tests

As we are developing Enterprise Software, we will be paying particular
attention to:
- Code clarity and ease of understating
- Well commented code that gives clear and appropriate explanations
- Code that shows an understanding of Enterprise Software development
requirements. i.e. we are just as interested in failure modes as in
the happy path.
- Code should demonstrate an understanding of the features of PHP 7. 
