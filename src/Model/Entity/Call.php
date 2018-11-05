<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Call Entity
 *
 * @property int $call_id
 * @property string $call_occurrence
 * @property int $call_requester
 * @property int $call_responsible
 * @property int $situation_id
 * @property \Cake\I18n\FrozenDate $call_creation
 * @property \Cake\I18n\FrozenDate $call_closure
 * @property int $priority_id
 *
 * @property \App\Model\Entity\Situation $situation
 * @property \App\Model\Entity\Priority $priority
 * @property \App\Model\Entity\Employee $employee
 */
class Call extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'call_occurrence' => true,
        'call_requester' => true,
        'call_responsible' => true,
        'situation_id' => true,
        'call_creation' => true,
        'call_closure' => true,
        'priority_id' => true,
        'situation' => true,
        'priority' => true,
        'employee' => true
    ];
}
