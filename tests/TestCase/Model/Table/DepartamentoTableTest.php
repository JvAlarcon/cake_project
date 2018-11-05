<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DepartamentoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DepartamentoTable Test Case
 */
class DepartamentoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DepartamentoTable
     */
    public $Departamento;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.departamento'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Departamento') ? [] : ['className' => DepartamentoTable::class];
        $this->Departamento = TableRegistry::getTableLocator()->get('Departamento', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Departamento);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
