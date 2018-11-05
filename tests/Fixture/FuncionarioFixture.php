<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FuncionarioFixture
 *
 */
class FuncionarioFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'funcionario';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Cod_Func' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Nome_Func' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'CPF' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Email' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Cod_Dpto' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Chefe' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'Fk_CodDpto_CodDpto' => ['type' => 'index', 'columns' => ['Cod_Dpto'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Cod_Func'], 'length' => []],
            'CPF' => ['type' => 'unique', 'columns' => ['CPF'], 'length' => []],
            'Fk_CodDpto_CodDpto' => ['type' => 'foreign', 'columns' => ['Cod_Dpto'], 'references' => ['departamento', 'Cod_Dpto'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'Cod_Func' => 1,
                'Nome_Func' => 'Lorem ipsum dolor sit amet',
                'CPF' => 'Lorem ipsum d',
                'Email' => 'Lorem ipsum dolor sit amet',
                'Cod_Dpto' => 1,
                'Chefe' => 1
            ],
        ];
        parent::init();
    }
}
