<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LoginFixture
 *
 */
class LoginFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'login';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Cod_Usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Senha' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Cod_Usuario'], 'length' => []],
            'Fk_CodFunc_CodUser' => ['type' => 'foreign', 'columns' => ['Cod_Usuario'], 'references' => ['funcionario', 'Cod_Func'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'Cod_Usuario' => 1,
                'Senha' => 'Lorem ip'
            ],
        ];
        parent::init();
    }
}
