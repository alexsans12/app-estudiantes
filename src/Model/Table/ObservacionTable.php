<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ObservacionTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('observacion');
        $this->setDisplayField('ID_OBSERVACION');
        $this->setPrimaryKey('ID_OBSERVACION');

        $this->addBehavior('Timestamp', [
            'events' => [
                'Model.beforeSave' => [
                    'FECHA_OBSERVACION'=>'new',
                ]
            ]
        ]);

        $this->belongsTo('Estudiante', [
            'foreignKey' => 'ID_ESTUDIANTE',
            'targetForeignKey' => 'ID_ESTUDIANTE',
        ]);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('ID_ESTUDIANTE')
            ->requirePresence('ID_ESTUDIANTE', 'create')
            ->notEmptyString('ID_ESTUDIANTE');

        $validator
            ->scalar('OBSERVACION')
            ->requirePresence('OBSERVACION', 'create')
            ->notEmptyString('OBSERVACION');

        $validator
            ->boolean('TIPO')
            ->requirePresence('TIPO', 'create')
            ->notEmptyString('TIPO');

        return $validator;
    }
}
