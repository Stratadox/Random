# Random

[![Github Action](https://github.com/Stratadox/Random/workflows/Github%20Action/badge.svg)](https://github.com/Stratadox/Random/actions)
[![codecov](https://codecov.io/gh/Stratadox/Random/branch/main/graph/badge.svg)](https://codecov.io/gh/Stratadox/Random)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Stratadox/Random/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/Stratadox/Random/?branch=main)
[![Latest Stable Version](https://poser.pugx.org/stratadox/random/v/stable)](https://packagist.org/packages/stratadox/random)
[![License](https://poser.pugx.org/stratadox/random/license)](https://packagist.org/packages/stratadox/random)

Simple random generator abstraction.

## Installation
Install with: `composer install stratadox/random`

## Why use this
Code that involves random is tricky to test. 
Using this package, you can inject an IntegerGenerator. 
In the production setup, you inject the RandomIntegerGenerator.
By injecting a PredefinedIntegerGenerator during testing, you can test the code 
for one or more predefined outcomes of the IntegerGenerator.
