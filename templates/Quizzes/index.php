<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Quiz> $quizzes
 */
?>
<div class="quizzes index content">
    <?= $this->Html->link(__('New Quiz'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Quizzes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('created_by') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($quizzes as $quiz): ?>
                <tr>
                    <td><?= $this->Number->format($quiz->id) ?></td>
                    <td><?= h($quiz->title) ?></td>
                    <td><?= $quiz->created_by === null ? '' : $this->Number->format($quiz->created_by) ?></td>
                    <td><?= h($quiz->created) ?></td>
                    <td><?= h($quiz->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $quiz->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $quiz->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $quiz->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $quiz->id),
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