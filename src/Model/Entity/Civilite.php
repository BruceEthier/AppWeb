<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Civilite Entity
 *
 * @property int $id
 * @property string|null $civilite
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Employe[] $employes
 */
class Civilite extends Entity
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
        'civilite' => true,
        'created' => true,
        'modified' => true,
        'employes' => true
    ];
}
