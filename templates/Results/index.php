<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Result> $results
 */
?>
<div class="results index content">
    <?= $this->Html->link(__('New Result'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Results') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('quiz_id') ?></th>
                    <th><?= $this->Paginator->sort('score') ?></th>
                    <th><?= $this->Paginator->sort('started_at') ?></th>
                    <th><?= $this->Paginator->sort('finished_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $result): ?>
                <tr>
                    <td><?= $this->Number->format($result->id) ?></td>
                    <td><?= $result->hasValue('user') ? $this->Html->link($result->user->username, ['controller' => 'Users', 'action' => 'view', $result->user->id]) : '' ?></td>
                    <td><?= $result->hasValue('quiz') ? $this->Html->link($result->quiz->title, ['controller' => 'Quizzes', 'action' => 'view', $result->quiz->id]) : '' ?></td>
                    <td><?= $result->score === null ? '' : $this->Number->format($result->score) ?></td>
                    <td><?= h($result->started_at) ?></td>
                    <td><?= h($result->finished_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $result->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $result->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $result->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $result->id),
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>