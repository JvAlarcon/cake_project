<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Calls Model
 *
 * @property \App\Model\Table\SituationsTable|\Cake\ORM\Association\BelongsTo $Situations
 * @property \App\Model\Table\PrioritiesTable|\Cake\ORM\Association\BelongsTo $Priorities
 *
 * @method \App\Model\Entity\Call get($primaryKey, $options = [])
 * @method \App\Model\Entity\Call newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Call[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Call|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Call|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Call patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Call[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Call findOrCreate($search, callable $callback = null, $options = [])
 */
class CallsTable extends Table
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

        $this->setTable('calls');
        $this->setDisplayField('call_id');
        $this->setPrimaryKey('call_id');

        $this->belongsTo('Situations', [
            'foreignKey' => 'situation_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Priorities', [
            'foreignKey' => 'priority_id',
            'joinType' => 'INNER'
        ]);

        $this->belongsTo('Employees', [
            'foreignKey' => 'call_requester',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Employees', [
            'foreignKey' => 'call_responsible',
            'joinType' => 'INNER'
        ]);
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
            ->integer('call_id')
            ->allowEmpty('call_id', 'create');

        $validator
            ->scalar('call_occurrence')
            ->requirePresence('call_occurrence', 'create')
            ->notEmpty('call_occurrence');

        $validator
            ->date('call_creation')
            ->requirePresence('call_creation', 'create')
            ->notEmpty('call_creation');

        $validator
            ->date('call_closure')
            ->allowEmpty('call_closure');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['situation_id'], 'Situations'));
        $rules->add($rules->existsIn(['priority_id'], 'Priorities'));

        return $rules;
    }
}
