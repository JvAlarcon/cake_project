<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ChamadosFixture
 *
 */
class ChamadosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Cod_Chamado' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Ocorrencia' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'Solicitante' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Responsavel' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Status_Chamado' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'Data_Abertura' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'Data_Fechamento' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'Prioridade' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'Fk_CodFunc_Solicitante' => ['type' => 'index', 'columns' => ['Solicitante'], 'length' => []],
            'Fk_CodFunc_Responsavel' => ['type' => 'index', 'columns' => ['Responsavel'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Cod_Chamado'], 'length' => []],
            'Fk_CodFunc_Responsavel' => ['type' => 'foreign', 'columns' => ['Responsavel'], 'references' => ['funcionario', 'Cod_Func'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'Fk_CodFunc_Solicitante' => ['type' => 'foreign', 'columns' => ['Solicitante'], 'references' => ['funcionario', 'Cod_Func'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'Cod_Chamado' => 1,
                'Ocorrencia' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'Solicitante' => 1,
                'Responsavel' => 1,
                'Status_Chamado' => 1,
                'Data_Abertura' => '2018-11-04',
                'Data_Fechamento' => '2018-11-04',
                'Prioridade' => 1
            ],
        ];
        parent::init();
    }
}
