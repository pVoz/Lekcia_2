<?php

/**
 * Database
 */

$advanture = [
    [
        'who' => 'asdaskdlak',
        'wat' => "sadlaskdoasd",
        'comments' => 4,
    ],
    [
        'who' => 'sad',
        'wat' => "aaaaaaaaaaaaaaaaaaaa",
        'comments' => 50,
    ],
    [
        'who' => 'ccc',
        'wat' => "aBBBBaa",
        'comments' => 50,
    ],

    [
        'who' => 'ccasdasc',
        'wat' => "aBBBasdasdsdBaa",
        'comments' => 10,
    ],



];
/**
 */
function make_hovna($dude)
{
    echo '<a href="dude/' . str_replace('', '-', strtolower($dude['who'])) . '">';
    echo $dude['who'];
    echo '</a>';
}
