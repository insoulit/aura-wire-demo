<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Insoulit\AuraWire\Tests\TestCase as PackageTestCase;

/*
|--------------------------------------------------------------------------
| Test Case
|--------------------------------------------------------------------------
|
| The closure you provide to your test functions is always bound to a specific PHPUnit test
| case class. By default, that class is "PHPUnit\Framework\TestCase". Of course, you may
| need to change it using the "pest()" function to bind different classes or traits.
|
*/

pest()->extend(TestCase::class)->in('Feature', 'Unit');

if (class_exists(PackageTestCase::class)) {
    pest()->extend(PackageTestCase::class)->in('../packages/aura-wire/tests');
}

/*
|--------------------------------------------------------------------------
| Expectations
|--------------------------------------------------------------------------
*/

expect()->extend('toBeOne', function () {
    return $this->toBe(1);
});
