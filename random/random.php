<?php

use JetBrains\PhpStorm\Pure;

/**
 * Combined linear congruential generator
 * @link https://php.net/manual/en/function.lcg-value.php
 * @return float A pseudo random float value in the range of (0, 1)
 */
function lcg_value(): float {}

/**
 * Seeds the Mersenne Twister Random Number Generator
 * @link https://php.net/manual/en/function.mt-srand.php
 * @param int $seed <p>
 * An optional seed value
 * </p>
 * @param int $mode [optional] <p>
 * Use one of the following constants to specify the implementation of the algorithm to use.
 * </p>
 * @return void
 */
function mt_srand(int $seed = 0): void {}

/**
 * Seed the random number generator
 * <p><strong>Note</strong>: As of PHP 7.1.0, {@see srand()} has been made
 * an alias of {@see mt_srand()}.
 * </p>
 * @link https://php.net/manual/en/function.srand.php
 * @param int $seed <p>
 * Optional seed value
 * </p>
 * @param int $mode [optional] <p>
 * Use one of the following constants to specify the implementation of the algorithm to use.
 * </p>
 * @return void
 */
function srand(int $seed = 0): void {}

/**
 * Generate a random integer
 * @link https://php.net/manual/en/function.rand.php
 * @param int $min
 * @param int $max [optional]
 * @return int A pseudo random value between min
 * (or 0) and max (or getrandmax, inclusive).
 */
function rand(int $min = null, int $max): int {}

/**
 * Generate a random value via the Mersenne Twister Random Number Generator
 * @link https://php.net/manual/en/function.mt-rand.php
 * @param int $min <p>
 * Optional lowest value to be returned (default: 0)
 * </p>
 * @param int $max [optional] <p>
 * Optional highest value to be returned (default: mt_getrandmax())
 * </p>
 * @return int A random integer value between min (or 0)
 * and max (or mt_getrandmax, inclusive)
 */
function mt_rand(int $min = null, int $max): int {}

/**
 * Show largest possible random value
 * @link https://php.net/manual/en/function.mt-getrandmax.php
 * @return int the maximum random value returned by mt_rand
 */
#[Pure]
function mt_getrandmax(): int {}

/**
 * Show largest possible random value
 * @link https://php.net/manual/en/function.getrandmax.php
 * @return int The largest possible random value returned by rand
 */
#[Pure]
function getrandmax(): int {}

/**
 * Generates cryptographically secure pseudo-random bytes
 * @link https://php.net/manual/en/function.random-bytes.php
 * @param int $length The length of the random string that should be returned in bytes.
 * @return string Returns a string containing the requested number of cryptographically secure random bytes.
 * @since 7.0
 * @throws Exception if an appropriate source of randomness cannot be found.
 */
function random_bytes(int $length): string {}

/**
 * Generates cryptographically secure pseudo-random integers
 * @link https://php.net/manual/en/function.random-int.php
 * @param int $min The lowest value to be returned, which must be PHP_INT_MIN or higher.
 * @param int $max The highest value to be returned, which must be less than or equal to PHP_INT_MAX.
 * @return int Returns a cryptographically secure random integer in the range min to max, inclusive.
 * @since 7.0
 * @throws Exception if an appropriate source of randomness cannot be found.
 */
function random_int(int $min, int $max): int {}
