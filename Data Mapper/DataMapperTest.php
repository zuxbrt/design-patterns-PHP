<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 27/09/2018
 * Time: 14:26
 */

use PHPUnit\Framework\TestCase;

class DataMapperTest extends TestCase
{
    /**
     * This function is used for testing of userMapper with data from storage.
     */
    public function testMappingUserFromStorage()
    {
        // sets data for storageAdapter
        $storage = new StorageAdapter(
            [1 => ['username' => 'testUser', 'email' => 'testMail@live.com']]
        );

        // creates new userMapper with storageAdapter data
        $mapper = new UserMapper($storage);

        // calls function for finding user by id
        $user = $mapper->findById(1);

        // validates if returned instance of userMapper is equal to $user
        $this->assertInstanceOf(User::class, $user);
    }


    /**
     * This function needs to throw invalidArgumentException - User not found.
     */
    public function testWillNotMapInvalidData()
    {
        // sets empty data for storageAdapter
        $storage = new StorageAdapter([]);

        // creates new userMapper with storageAdapter data
        $mapper = new UserMapper($storage);

        // calls function for finding user by id
        $mapper->findById(1);
    }
}