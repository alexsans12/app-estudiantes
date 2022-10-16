<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Semestre Model
 *
 * @method \App\Model\Entity\Semestre newEmptyEntity()
 * @method \App\Model\Entity\Semestre newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Semestre[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Semestre get($primaryKey, $options = [])
 * @method \App\Model\Entity\Semestre findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Semestre patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Semestre[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Semestre|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Semestre saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Semestre[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Semestre[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Semestre[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Semestre[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SemestreTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('semestre');
        $this->setDisplayField('ID_SEMESTRE');
        $this->setPrimaryKey('ID_SEMESTRE');

        $this->belongsToMany('Carrera',[
            'dependent' => true
        ]);
        $this->belongsToMany('Curso', [
            'dependent' => true
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('ID_CARRERA')
            ->requirePresence('ID_CARRERA', 'create')
            ->notEmptyString('ID_CARRERA');

        $validator
            ->integer('ID_CURSO')
            ->requirePresence('ID_CURSO', 'create')
            ->notEmptyString('ID_CURSO');

        $validator
            ->scalar('CODIGO_SEMESTRE')
            ->maxLength('CODIGO_SEMESTRE', 25)
            ->requirePresence('CODIGO_SEMESTRE', 'create')
            ->notEmptyString('CODIGO_SEMESTRE');

        return $validator;
    }
}
