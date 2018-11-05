<?php
namespace App\Test\TestCase\Model\Behavior;

use App\Model\Behavior\PrioritiesBehavior;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Behavior\PrioritiesBehavior Test Case
 */
class PrioritiesBehaviorTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Behavior\PrioritiesBehavior
     */
    public $Priorities;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Priorities = new PrioritiesBehavior();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Priorities);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
