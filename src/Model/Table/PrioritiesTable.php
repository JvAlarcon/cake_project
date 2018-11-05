<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Priorities Model
 *
 * @method \App\Model\Entity\Priority get($primaryKey, $options = [])
 * @method \App\Model\Entity\Priority newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Priority[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Priority|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Priority|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Priority patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Priority[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Priority findOrCreate($search, callable $callback = null, $options = [])
 */
class PrioritiesTable extends Table
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

        $this->setTable('priorities');
        $this->setDisplayField('priority_description');
        $this->setPrimaryKey('priority_id');
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
            ->integer('priority_id')
            ->allowEmpty('priority_id', 'create');

        $validator
            ->scalar('priority_description')
            ->maxLength('priority_description', 50)
            ->requirePresence('priority_description', 'create')
            ->notEmpty('priority_description');

        return $validator;
    }
}
