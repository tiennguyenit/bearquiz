<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Result Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $quiz_id
 * @property int|null $score
 * @property \Cake\I18n\DateTime|null $started_at
 * @property \Cake\I18n\DateTime|null $finished_at
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Quiz $quiz
 */
class Result extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'user_id' => true,
        'quiz_id' => true,
        'score' => true,
        'started_at' => true,
        'finished_at' => true,
        'user' => true,
        'quiz' => true,
    ];
}
