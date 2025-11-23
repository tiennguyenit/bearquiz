<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ResultsFixture
 */
class ResultsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 1,
                'quiz_id' => 1,
                'score' => 1,
                'started_at' => '2025-11-04 06:32:38',
                'finished_at' => '2025-11-04 06:32:38',
            ],
        ];
        parent::init();
    }
}
