<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class NotasTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('notas');
        $this->setDisplayField('ID_NOTAS');
        $this->setPrimaryKey('ID_NOTAS');

        $this->belongsTo('Curso', [
            'foreignKey' => 'ID_CURSO',
            'targetForeignKey' => 'ID_CURSO',
        ]);
        $this->belongsTo('Estudiante', [
            'foreignKey' => 'ID_ESTUDIANTE',
            'targetForeignKey' => 'ID_ESTUDIANTE',
        ]);

        $this->addBehavior('Timestamp', [
            'events' => [
                'Model.beforeSave' => [
                    'FECHA'=>'new',
                    'FECHA_MODIFICACION'=>'always'
                ]
            ]
        ]);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('ID_CURSO')
            ->requirePresence('ID_CURSO', 'create')
            ->notEmptyString('ID_CURSO');

        $validator
            ->integer('ID_ESTUDIANTE')
            ->requirePresence('ID_ESTUDIANTE', 'create')
            ->notEmptyString('ID_ESTUDIANTE');

        $validator
            ->numeric('NOTA')
            ->maxLength('NOTA', 3)
            ->requirePresence('NOTA', 'create')
            ->notEmptyString('NOTA');

        $validator
            ->boolean('APROBADO')
            ->requirePresence('APROBADO', 'create')
            ->notEmptyString('APROBADO');

        $validator
            ->scalar('SECCION')
            ->maxLength('SECCION', 1)
            ->requirePresence('SECCION', 'create')
            ->notEmptyString('SECCION');

        return $validator;
    }
}
