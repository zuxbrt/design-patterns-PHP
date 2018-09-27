<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 27/09/2018
 * Time: 14:02
 */
class UserMapper
{
    /**
     * @var StorageAdapter
     */
    private $adapter;


    /**
     * UserMapper constructor.
     * @param StorageAdapter $storage
     */
    public function __construct(StorageAdapter $storage)
    {
        $this->adapter = $storage;
    }


    /**
     * This function finds a user from storage based on ID and returns a
     * User object located in memory. This kind of logic is later implemented by Repository pattern.
     * More about Repository pattern below.
     *
     * @param int $id
     * @return User
     */
    public function findById(int $id):User
    {
        // calls storage adapter for finding id
        $result = $this->adapter->find($id);

        // checks return value from storage adapter and sets return value in function
        if ($result === null){
            throw new InvalidArgumentException("User #$id not found");
        }

        // calls function mapRowToUser()
        return $this->mapRowToUser($result);
    }

    /**
     * Creates a business object from data fetched from the storage
     *
     * @param array $row
     * @return User
     */
    public function mapRowToUser(array $row):User
    {
        return User::fromState($row);
    }

}




//  Repository pattern mediates between the domain and data mapping layers using a collection-like interface
//  for accessing domain objects. Repository encapsulates the set of objects persisted in a data store and
//  the operations performed over them, providing a more object-oriented view of the persistence layer.
//  Repository also supports the objective of achieving a clean separation and
//  one-way dependency between the domain and data mapping layers.
//
//  Source: https://designpatternsphp.readthedocs.io/en/latest/More/Repository/README.html