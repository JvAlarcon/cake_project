<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmployeesFixture
 *
 */
class EmployeesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'employee_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'employee_name' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'employee_cpf' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'employee_email' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'department_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'employee_boss' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'Fk_CodDpto_CodDpto' => ['type' => 'index', 'columns' => ['department_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['employee_id'], 'length' => []],
            'CPF' => ['type' => 'unique', 'columns' => ['employee_cpf'], 'length' => []],
            'Fk_CodDpto_CodDpto' => ['type' => 'foreign', 'columns' => ['department_id'], 'references' => ['departments', 'department_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'employee_id' => 1,
                'employee_name' => 'Lorem ipsum dolor sit amet',
                'employee_cpf' => 'Lorem ipsum d',
                'employee_email' => 'Lorem ipsum dolor sit amet',
                'department_id' => 1,
                'employee_boss' => 1
            ],
        ];
        parent::init();
    }
}
