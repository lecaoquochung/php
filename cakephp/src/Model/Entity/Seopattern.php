<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Seopattern Entity.
 *
 * @property int $id
 * @property string $keyword_id
 * @property \App\Model\Entity\Keyword $keyword
 * @property string $seotracking_category_id
 * @property \App\Model\Entity\SeotrackingCategory $seotracking_category
 * @property string $name
 * @property string $description
 * @property string $combination
 * @property \Cake\I18n\Time $date
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Seopattern extends Entity
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
