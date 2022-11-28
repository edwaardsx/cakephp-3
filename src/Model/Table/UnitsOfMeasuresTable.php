<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UnitsOfMeasures Model
 *
 * @method \App\Model\Entity\UnitsOfMeasure get($primaryKey, $options = [])
 * @method \App\Model\Entity\UnitsOfMeasure newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UnitsOfMeasure[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UnitsOfMeasure|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UnitsOfMeasure saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UnitsOfMeasure patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UnitsOfMeasure[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UnitsOfMeasure findOrCreate($search, callable $callback = null, $options = [])
 */
class UnitsOfMeasuresTable extends Table
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

        $this->setTable('units_of_measures');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('categories')
            ->maxLength('categories', 255)
            ->requirePresence('categories', 'create')
            ->notEmptyString('categories');

        return $validator;
    }
}
