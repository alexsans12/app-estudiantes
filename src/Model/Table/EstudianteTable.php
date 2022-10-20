<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class EstudianteTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('estudiante');
        $this->setDisplayField('ID_ESTUDIANTE');
        $this->setPrimaryKey('ID_ESTUDIANTE');


        $this->hasOne('Carrera', [
            'foreignKey' => 'ID_CARRERA',
            'targetForeignKey' => 'ID_CARRERA',
            'bindingKey' => 'ID_CARRERA',
        ]);

        $this->hasMany('Observacion', [
            'foreignKey' => 'ID_ESTUDIANTE',
            'targetForeignKey' => 'ID_ESTUDIANTE',
            'bindingKey' => 'ID_ESTUDIANTE',
        ]);

        $this->hasMany('Notas', [
            'foreignKey' => 'ID_ESTUDIANTE',
            'targetForeignKey' => 'ID_ESTUDIANTE',
            'bindingKey' => 'ID_ESTUDIANTE',
        ]);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('NOMBRE')
            ->maxLength('NOMBRE', 80)
            ->requirePresence('NOMBRE', 'create')
            ->notEmptyString('NOMBRE');

        $validator
            ->scalar('APELLIDO')
            ->maxLength('APELLIDO', 80)
            ->requirePresence('APELLIDO', 'create')
            ->notEmptyString('APELLIDO');

        $validator
            ->scalar('FOTOGRAFIA')
            ->maxLength('FOTOGRAFIA', 300)
            ->allowEmptyString('FOTOGRAFIA');

        $validator
            ->date('FECHA_NACIMIENTO')
            ->requirePresence('FECHA_NACIMIENTO', 'create')
            ->notEmptyDate('FECHA_NACIMIENTO');

        $validator
            ->scalar('ID_CARRERA')
            ->requirePresence('ID_CARRERA', 'create')
            ->allowEmptyString('ID_CARRERA');

        return $validator;
    }
}
