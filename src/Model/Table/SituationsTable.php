<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Situations Model
 *
 * @method \App\Model\Entity\Situation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Situation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Situation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Situation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Situation|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Situation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Situation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Situation findOrCreate($search, callable $callback = null, $options = [])
 */
class SituationsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('situations');
        $this->setDisplayField('situation_description');
        $this->setPrimaryKey('situation_id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('situation_id')
            ->allowEmpty('situation_id', 'create');

        $validator
            ->scalar('situation_description')
            ->maxLength('situation_description', 80)
            ->requirePresence('situation_description', 'create')
            ->notEmpty('situation_description');

        return $validator;
    }
}
