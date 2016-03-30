<?php
namespace App\Model\Table;

use App\Model\Entity\Seopattern;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Seopatterns Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Keywords
 * @property \Cake\ORM\Association\BelongsTo $SeotrackingCategories
 */
class SeopatternsTable extends Table
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

        $this->table('seopatterns');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Keywords', [
            'foreignKey' => 'keyword_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SeotrackingCategories', [
            'foreignKey' => 'seotracking_category_id',
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->requirePresence('combination', 'create')
            ->notEmpty('combination');

        $validator
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmpty('date');

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
        $rules->add($rules->existsIn(['keyword_id'], 'Keywords'));
        $rules->add($rules->existsIn(['seotracking_category_id'], 'SeotrackingCategories'));
        return $rules;
    }
}
