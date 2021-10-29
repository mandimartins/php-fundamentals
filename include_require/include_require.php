<?php

    /**
     * Include e Require
     *
     * Include tries to work even if the file has some errors.
     * It also has more features(include path directory, and remote include => this can be dangerous) than Require.
     *
     * Require expects the file to exist and work properly (functioning) otherwise it will throw a fatal error.
     * In general Require is safer than Include.
     */

function somar($a, $b)
{
    return $a + $b;
}
