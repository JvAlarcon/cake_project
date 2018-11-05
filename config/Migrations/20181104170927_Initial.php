<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('chamados', ['id' => false, 'primary_key' => ['Cod_Chamado']])
            ->addColumn('Cod_Chamado', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('Ocorrencia', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('Solicitante', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('Responsavel', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('Status_Chamado', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('Data_Abertura', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('Data_Fechamento', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('Prioridade', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addIndex(
                [
                    'Responsavel',
                ]
            )
            ->addIndex(
                [
                    'Solicitante',
                ]
            )
            ->create();

        $this->table('departamento', ['id' => false, 'primary_key' => ['Cod_Dpto']])
            ->addColumn('Cod_Dpto', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('Nome_Dpto', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('Cod_Chefe', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addIndex(
                [
                    'Cod_Chefe',
                ]
            )
            ->create();

        $this->table('funcionario', ['id' => false, 'primary_key' => ['Cod_Func']])
            ->addColumn('Cod_Func', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('Nome_Func', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('CPF', 'string', [
                'default' => null,
                'limit' => 15,
                'null' => false,
            ])
            ->addColumn('Email', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('Cod_Dpto', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addIndex(
                [
                    'CPF',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'Cod_Dpto',
                ]
            )
            ->create();

        $this->table('login', ['id' => false, 'primary_key' => ['Cod_Usuario']])
            ->addColumn('Cod_Usuario', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('Senha', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->create();

        $this->table('chamados')
            ->addForeignKey(
                'Responsavel',
                'funcionario',
                'Cod_Func',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->addForeignKey(
                'Solicitante',
                'funcionario',
                'Cod_Func',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('departamento')
            ->addForeignKey(
                'Cod_Chefe',
                'funcionario',
                'Cod_Func',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('funcionario')
            ->addForeignKey(
                'Cod_Dpto',
                'departamento',
                'Cod_Dpto',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('login')
            ->addForeignKey(
                'Cod_Usuario',
                'funcionario',
                'Cod_Func',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();
    }

    public function down()
    {
        $this->table('chamados')
            ->dropForeignKey(
                'Responsavel'
            )
            ->dropForeignKey(
                'Solicitante'
            )->save();

        $this->table('departamento')
            ->dropForeignKey(
                'Cod_Chefe'
            )->save();

        $this->table('funcionario')
            ->dropForeignKey(
                'Cod_Dpto'
            )->save();

        $this->table('login')
            ->dropForeignKey(
                'Cod_Usuario'
            )->save();

        $this->table('chamados')->drop()->save();
        $this->table('departamento')->drop()->save();
        $this->table('funcionario')->drop()->save();
        $this->table('login')->drop()->save();
    }
}
