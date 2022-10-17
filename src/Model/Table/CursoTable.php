<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class CursoTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('curso');
        $this->setDisplayField('ID_CURSO');
        $this->setPrimaryKey('ID_CURSO');

        $this->belongsTo('Semestre', [
            'foreignKey' => 'ID_SEMESTRE',
            'targetForeignKey' => 'ID_SEMESTRE',
        ]);
    }

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
            ->scalar('ID_SEMESTRE')
            ->requirePresence('ID_SEMESTRE', 'create')
            ->allowEmptyString('ID_SEMESTRE');

        $validator
            ->boolean('ESTADO')
            ->allowEmptyString('ESTADO');

        return $validator;
    }
}
