<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Server Entity.
 *
 * @property int $id
 * @property int $code
 * @property string $name
 * @property string $ip
 * @property string $location
 * @property string $api
 * @property string $storage
 * @property string $memo
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $updated
 * @property \App\Model\Entity\Keyword[] $keywords
 */
class Server extends Entity
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
        '*' => true,
        'id' => false,
    ];
}
