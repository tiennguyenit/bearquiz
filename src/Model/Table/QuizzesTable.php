<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Quizzes Model
 *
 * @property \App\Model\Table\QuestionsTable&\Cake\ORM\Association\HasMany $Questions
 * @property \App\Model\Table\ResultsTable&\Cake\ORM\Association\HasMany $Results
 *
 * @method \App\Model\Entity\Quiz newEmptyEntity()
 * @method \App\Model\Entity\Quiz newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Quiz> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Quiz get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Quiz findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Quiz patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Quiz> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Quiz|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Quiz saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Quiz>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Quiz>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Quiz>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Quiz> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Quiz>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Quiz>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Quiz>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Quiz> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class QuizzesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('quizzes');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Questions', [
            'foreignKey' => 'quiz_id',
        ]);
        $this->hasMany('Results', [
            'foreignKey' => 'quiz_id',
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
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->integer('created_by')
            ->allowEmptyString('created_by');

        return $validator;
    }
}
