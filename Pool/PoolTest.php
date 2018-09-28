<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 28/09/2018
 * Time: 15:17
 */

use PHPUnit\Framework\TestCase;

class PoolTest extends TestCase
{

    /**
     * This function tests if 2 workers are not the same.
     * They are created with get method of WorkerPool,
     * that means they have different hash keys
     * assigned to them.
     */
    public function testGettingNewInstancesWithGet()
    {
        // creating new workerPool
        $pool = new WorkerPool();

        // creating workers and assigning hash keys to them
        $worker1 = $pool->get();
        $worker2 = $pool->get();

        // checking if there is 2 occupied workers
        $this->assertCount(2, $pool);

        // checking if occupied worker's hash keys are different
        $this->assertNotSame($worker1, $worker2);

    }


    /**
     * This function tests if second worker that was created
     * after disposing of first worker has his hash key.
     */
    public function testCanGetSameInstanceTwiceWithDispose()
    {
        // creating new workerPool
        $pool = new WorkerPool();

        // creating worker and assigning hash key
        $worker1 = $pool->get();

        // disposing of worker and leaving his hash key for later use
        $pool->dispose($worker1);

        // creating second worker and assigning hash key from first worker
        // to him
        $worker2 = $pool->get();

        // check if there is only one occupied worker
        $this->assertCount(1, $pool);

        // check if occupied worker and free worker have the same hash keys
        $this->assertSame($worker1, $worker2);

    }

}