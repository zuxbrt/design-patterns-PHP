<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 28/09/2018
 * Time: 11:36
 */

use PHPUnit\Framework\TestCase;

class FluentInterfaceTest extends TestCase
{
    /**
     * This function test if passed parameters into fluent interface will successfully
     * build a query
     */
    public function testBuildSQL()
    {
        // passing parameters to query
        $query = (new Sql())
            ->select(['foo', 'bar'])
            ->from('foobar', 'f')
            ->where('f.bar = ?');

        // validating if return string is equal to desired query
        $this->assertEquals(
            'SELECT foo, bar FROM foobar AS f WHERE f.bar = ?',
            (string) $query
        );
    }
}