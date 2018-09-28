<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 28/09/2018
 * Time: 11:26
 */
class Sql
{
    private $fields = [];

    private $from = [];

    private $where = [];


    /**
     * SQL SELECT method
     *
     * @param array $fields
     * @return Sql
     */
    public function select(array $fields): Sql
    {
        $this->fields =$fields;

        return $this;
    }


    /**
     * SQL FROM method
     *
     * @param string $table
     * @param string $alias
     * @return Sql
     */
    public function from(string $table, string $alias): Sql
    {
        $this->from[] = $table . ' AS ' . $alias;

        return $this;
    }


    /**
     * SQL WHERE method
     *
     * @param string $condition
     * @return Sql
     */
    public function where(string $condition): Sql
    {
        $this->where[]= $condition;

        return $this;
    }


    /**
     * Forms a string for query from above defined methods
     *
     * @return String
     */
    public function toString(): String
    {
        return sprintf(
            "SELECT %s FROM %s WHERE %s",
            join(', ', $this->fields),
            join(', ', $this->from),
            join(' AND ', $this->where)
        );
    }

}