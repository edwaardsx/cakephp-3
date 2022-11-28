<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductsUnitOfMeasure Model
 *
 * @method \App\Model\Entity\ProductsUnitOfMeasure get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductsUnitOfMeasure newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProductsUnitOfMeasure[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductsUnitOfMeasure|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductsUnitOfMeasure saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductsUnitOfMeasure patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductsUnitOfMeasure[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductsUnitOfMeasure findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductsUnitOfMeasureTable extends Table
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

        $this->setTable('products_unit_of_measure');
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
            ->scalar('product_code')
            ->maxLength('product_code', 255)
            ->requirePresence('product_code', 'create')
            ->notEmptyString('product_code');

        $validator
            ->scalar('unit_of_measure')
            ->maxLength('unit_of_measure', 255)
            ->requirePresence('unit_of_measure', 'create')
            ->notEmptyString('unit_of_measure');

        $validator
            ->integer('price')
            ->requirePresence('price', 'create')
            ->notEmptyString('price');

        return $validator;
    }
}
