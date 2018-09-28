<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 28/09/2018
 * Time: 13:22
 */
class FooBookPrototype extends BookPrototype
{
    /**
     * Setting book category.
     *
     * @var string
     */
    protected $category = 'Foo';

    /**
     * This function extends the abstract class method
     * __clone and clones the current object class.
     */
    public function __clone()
    {
    }
}