<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmployesFormation Entity
 *
 * @property int $id
 * @property int|null $employe_id
 * @property int|null $formation_id
 * @property \Cake\I18n\FrozenDate|null $date_faite
 * @property string|null $remarques
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Employe $employe
 * @property \App\Model\Entity\Formation $formation
 */
class EmployesFormation extends Entity
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
        'employe_id' => true,
        'formation_id' => true,
        'date_faite' => true,
        'remarques' => true,
        'created' => true,
        'modified' => true,
        'employe' => true,
        'formation' => true
    ];
}
