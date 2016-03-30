<?php
namespace App\Model\Table;

use App\Model\Entity\SeotrackingCategory;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SeotrackingCategories Model
 *
 * @property \Cake\ORM\Association\HasMany $Seopatterns
 */
class SeotrackingCategoriesTable extends Table
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

        $this->table('seotracking_categories');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Seopatterns', [
            'foreignKey' => 'seotracking_category_id'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->integer('parent')
            ->allowEmpty('parent');

        $validator
            ->requirePresence('detail', 'create')
            ->notEmpty('detail');

        return $validator;
    }
}
