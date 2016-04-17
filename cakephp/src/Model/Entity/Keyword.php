<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Keyword Entity.
 *
 * @property int $ID
 * @property int $UserID
 * @property int $server_id
 * @property \App\Model\Entity\Server $server
 * @property string $Keyword
 * @property string $Url
 * @property int $Engine
 * @property string $g_local
 * @property int $cost
 * @property int $Price
 * @property int $limit_price
 * @property int $limit_price_group
 * @property string $upday
 * @property int $goukeifee
 * @property int $sengoukeifee
 * @property int $$sensengoukeifee
 * @property bool $Enabled
 * @property bool $Strict
 * @property bool $Extra
 * @property int $start
 * @property int $rankstart
 * @property int $rankend
 * @property string $kaiyaku_reason
 * @property string $middle
 * @property int $middleinfo
 * @property int $seika
 * @property int $nocontract
 * @property int $csv_type
 * @property bool $penalty
 * @property int $service
 * @property bool $mobile
 * @property bool $c_logic
 * @property bool $sales
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $updated
 * @property string $sitename
 * @property \App\Model\Entity\Seopattern[] $seopatterns
 */
class Keyword extends Entity
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
        'ID' => false,
    ];
}
