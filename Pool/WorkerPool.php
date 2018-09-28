<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 28/09/2018
 * Time: 14:57
 */
class WorkerPool implements \Countable
{
    /**
     * @var StringReverseWorker[]
     */
    private $occupiedWorkers = [];

    /**
     * @var StringReverseWorker[]
     */
    private $freeWorkers = [];


    /**
     * This function checks if there is any free workers.
     * If there is any, it removes them from freeWorkers
     * array. If not, creates a new worker object class
     * StringReverseObject.
     *
     * @return StringReverseWorker
     */
    public function get(): StringReverseWorker
    {
        if (count($this->freeWorkers) == 0){
            $worker = new StringReverseWorker();
        } else {
            $worker = array_pop($this->freeWorkers);
        }

        /**
         *  This id can be used as a hash key for storing objects,
         *  or for identifying an object, as long as the object is
         *  not destroyed. Once the object is destroyed, its hash
         *  may be reused for other objects.
         */
        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;

        // returns worker to StringReverseWorker class with unique id
        return $worker;
    }

    /**
     * This function checks if hash key added to occupiedWorker
     * is set. If it is then removes the hash key and gives it
     * to a freeWorker.
     *
     * @param StringReverseWorker $worker
     */
    public function dispose(StringReverseWorker $worker)
    {
        $key = spl_object_hash($worker);

        if (isset($this->occupiedWorkers[$key])){
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }

    }

    /**
     * Counts the number of all workers.
     *
     * @return int
     */
    public function count() :int
    {
        return count($this->occupiedWorkers) + count($this->freeWorkers);
    }

}