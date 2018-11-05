<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CallsFixture
 *
 */
class CallsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'call_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'call_occurrence' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'call_requester' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'call_responsible' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'situation_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'call_creation' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'call_closure' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'priority_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'Fk_CodFunc_Solicitante' => ['type' => 'index', 'columns' => ['call_requester'], 'length' => []],
            'Fk_CodFunc_Responsavel' => ['type' => 'index', 'columns' => ['call_responsible'], 'length' => []],
            'Fk_CodPri_CodPrio' => ['type' => 'index', 'columns' => ['priority_id'], 'length' => []],
            'Fk_StatusId_StatusID' => ['type' => 'index', 'columns' => ['situation_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['call_id'], 'length' => []],
            'Fk_CodFunc_Responsavel' => ['type' => 'foreign', 'columns' => ['call_responsible'], 'references' => ['employees', 'employee_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'Fk_CodFunc_Solicitante' => ['type' => 'foreign', 'columns' => ['call_requester'], 'references' => ['employees', 'employee_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'Fk_CodPri_CodPrio' => ['type' => 'foreign', 'columns' => ['priority_id'], 'references' => ['priorities', 'priority_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'Fk_StatusId_StatusID' => ['type' => 'foreign', 'columns' => ['situation_id'], 'references' => ['situations', 'situation_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'call_id' => 1,
                'call_occurrence' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'call_requester' => 1,
                'call_responsible' => 1,
                'situation_id' => 1,
                'call_creation' => '2018-11-05',
                'call_closure' => '2018-11-05',
                'priority_id' => 1
            ],
        ];
        parent::init();
    }
}
