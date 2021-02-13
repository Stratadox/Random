# Random
Simple random generator abstraction.

## Installation
Install with: `composer install stratadox/random`

## Why use this
Code that involves random is tricky to test. 
Using this package, you can inject an IntegerGenerator. 
In the production setup, you inject the RandomIntegerGenerator.
By injecting a PredefinedIntegerGenerator during testing, you can test the code 
for one or more predefined outcomes of the IntegerGenerator.
