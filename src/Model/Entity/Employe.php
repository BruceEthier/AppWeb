<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employe Entity
 *
 * @property int $id
 * @property string|null $numero
 * @property int $civilite_id
 * @property string $nom
 * @property string $prenom
 * @property string|null $cellulaire
 * @property string $courriel
 * @property int|null $user_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Civilite $civilite
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Formation[] $formations
 */
class Employe extends Entity
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
        'numero' => true,
        'civilite_id' => true,
        'nom' => true,
        'prenom' => true,
        'cellulaire' => true,
        'courriel' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'civilite' => true,
        'user' => true,
        'formations' => true,
        'file_id' => true
    ];
}
