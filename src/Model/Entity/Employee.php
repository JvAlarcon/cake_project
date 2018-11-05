<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employee Entity
 *
 * @property int $employee_id
 * @property string $employee_name
 * @property string $employee_cpf
 * @property string $employee_email
 * @property int $department_id
 * @property bool $employee_boss
 *
 * @property \App\Model\Entity\Department $department
 */
class Employee extends Entity
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
        'employee_name' => true,
        'employee_cpf' => true,
        'employee_email' => true,
        'department_id' => true,
        'employee_boss' => true,
        'department' => true
    ];
}
