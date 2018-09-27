<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 27/09/2018
 * Time: 14:03
 */
class StorageAdapter
{
    /**
     * @var array
     */
    private $data = [];

    /**
     * StorageAdapter constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }


    /**
     * Find id if its present.
     *
     * @param int $id
     * @return mixed|null
     */
    public function find(int $id)
    {
        if (isset($this->data[$id])){
            return $this->data[$id];
        }

        return null;
    }
}