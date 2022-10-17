<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

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

        $this->hasMany('Curso');
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
            ->maxLength('NOMBRE', 50)
            ->requirePresence('NOMBRE', 'create')
            ->notEmptyString('NOMBRE');

        return $validator;
    }
}
