<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Curso Model
 *
 * @method \App\Model\Entity\Curso newEmptyEntity()
 * @method \App\Model\Entity\Curso newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Curso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Curso get($primaryKey, $options = [])
 * @method \App\Model\Entity\Curso findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Curso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Curso[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Curso|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Curso saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Curso[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Curso[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Curso[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Curso[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CursoTable extends Table
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

        $this->setTable('curso');
        $this->setDisplayField('ID_CURSO');
        $this->setPrimaryKey('ID_CURSO');

        $this->belongsToMany('Semestre',[
            'foreignKey' => 'ID_CURSO',
            'targetForeignKey' => 'ID_CARRERA',
            'joinTable' => 'semestre',
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
            ->scalar('NOMBRE')
            ->maxLength('NOMBRE', 100)
            ->requirePresence('NOMBRE', 'create')
            ->notEmptyString('NOMBRE');

        $validator
            ->scalar('DESCRIPCION')
            ->maxLength('DESCRIPCION', 200)
            ->allowEmptyString('DESCRIPCION');

        $validator
            ->boolean('ESTADO')
            ->allowEmptyString('ESTADO');

        return $validator;
    }
}
