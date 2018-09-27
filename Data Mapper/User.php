<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 27/09/2018
 * Time: 14:02
 */
class User
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $email;


    /**
     * Pseudo variable '$this' and its operator '->' is not available
     * inside this method, because of its static declaration.
     *
     * @param array $state
     * @return User
     */
    public static function fromState(array $state): User
    {
        // always validate state first before setting return values
        return new self(
            $state['username'],
            $state['email']
        );
    }


    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
}