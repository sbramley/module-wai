<?php

namespace TMS\WI;

class WI
{
    public function __construct()
    {
    }

    // Build wonderful things
    public function example()
    {
        return 'example output and version is: '.config('wi.version');
    }

    public function echoPhrase(string $phrase): string
    {
        return $phrase;
    }
}
