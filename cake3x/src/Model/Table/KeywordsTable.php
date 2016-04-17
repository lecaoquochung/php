<?php
namespace App\Model\Table;

use App\Model\Entity\Keyword;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Keywords Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Servers
 * @property \Cake\ORM\Association\HasMany $Seopatterns
 */
class KeywordsTable extends Table
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

        $this->table('keywords');
        $this->displayField('ID');
        $this->primaryKey('ID');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Servers', [
            'foreignKey' => 'server_id'
        ]);
        $this->hasMany('Seopatterns', [
            'foreignKey' => 'keyword_id'
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
            ->integer('ID')
            ->allowEmpty('ID', 'create');

        $validator
            ->integer('UserID')
            ->requirePresence('UserID', 'create')
            ->notEmpty('UserID');

        $validator
            ->requirePresence('Keyword', 'create')
            ->notEmpty('Keyword');

        $validator
            ->requirePresence('Url', 'create')
            ->notEmpty('Url');

        $validator
            ->integer('Engine')
            ->requirePresence('Engine', 'create')
            ->notEmpty('Engine');

        $validator
            ->requirePresence('g_local', 'create')
            ->notEmpty('g_local');

        $validator
            ->integer('cost')
            ->allowEmpty('cost');

        $validator
            ->integer('Price')
            ->requirePresence('Price', 'create')
            ->notEmpty('Price');

        $validator
            ->integer('limit_price')
            ->allowEmpty('limit_price');

        $validator
            ->integer('limit_price_group')
            ->allowEmpty('limit_price_group');

        $validator
            ->requirePresence('upday', 'create')
            ->notEmpty('upday');

        $validator
            ->integer('goukeifee')
            ->requirePresence('goukeifee', 'create')
            ->notEmpty('goukeifee');

        $validator
            ->integer('sengoukeifee')
            ->requirePresence('sengoukeifee', 'create')
            ->notEmpty('sengoukeifee');

        $validator
            ->integer('$sensengoukeifee')
            ->requirePresence('$sensengoukeifee', 'create')
            ->notEmpty('$sensengoukeifee');

        $validator
            ->boolean('Enabled')
            ->requirePresence('Enabled', 'create')
            ->notEmpty('Enabled');

        $validator
            ->boolean('Strict')
            ->requirePresence('Strict', 'create')
            ->notEmpty('Strict');

        $validator
            ->boolean('Extra')
            ->requirePresence('Extra', 'create')
            ->notEmpty('Extra');

        $validator
            ->integer('start')
            ->requirePresence('start', 'create')
            ->notEmpty('start');

        $validator
            ->integer('rankstart')
            ->requirePresence('rankstart', 'create')
            ->notEmpty('rankstart');

        $validator
            ->integer('rankend')
            ->requirePresence('rankend', 'create')
            ->notEmpty('rankend');

        $validator
            ->requirePresence('kaiyaku_reason', 'create')
            ->notEmpty('kaiyaku_reason');

        $validator
            ->requirePresence('middle', 'create')
            ->notEmpty('middle');

        $validator
            ->integer('middleinfo')
            ->requirePresence('middleinfo', 'create')
            ->notEmpty('middleinfo');

        $validator
            ->integer('seika')
            ->requirePresence('seika', 'create')
            ->notEmpty('seika');

        $validator
            ->integer('nocontract')
            ->requirePresence('nocontract', 'create')
            ->notEmpty('nocontract');

        $validator
            ->integer('csv_type')
            ->requirePresence('csv_type', 'create')
            ->notEmpty('csv_type');

        $validator
            ->boolean('penalty')
            ->requirePresence('penalty', 'create')
            ->notEmpty('penalty');

        $validator
            ->integer('service')
            ->requirePresence('service', 'create')
            ->notEmpty('service');

        $validator
            ->boolean('mobile')
            ->requirePresence('mobile', 'create')
            ->notEmpty('mobile');

        $validator
            ->boolean('c_logic')
            ->requirePresence('c_logic', 'create')
            ->notEmpty('c_logic');

        $validator
            ->boolean('sales')
            ->allowEmpty('sales');

        $validator
            ->requirePresence('sitename', 'create')
            ->notEmpty('sitename');

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
        $rules->add($rules->existsIn(['server_id'], 'Servers'));
        return $rules;
    }
}
