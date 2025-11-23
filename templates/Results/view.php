<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Result $result
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Result'), ['action' => 'edit', $result->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Result'), ['action' => 'delete', $result->id], ['confirm' => __('Are you sure you want to delete # {0}?', $result->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Results'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Result'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="results view content">
            <h3><?= h($result->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $result->hasValue('user') ? $this->Html->link($result->user->username, ['controller' => 'Users', 'action' => 'view', $result->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Quiz') ?></th>
                    <td><?= $result->hasValue('quiz') ? $this->Html->link($result->quiz->title, ['controller' => 'Quizzes', 'action' => 'view', $result->quiz->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($result->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Score') ?></th>
                    <td><?= $result->score === null ? '' : $this->Number->format($result->score) ?></td>
                </tr>
                <tr>
                    <th><?= __('Started At') ?></th>
                    <td><?= h($result->started_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Finished At') ?></th>
                    <td><?= h($result->finished_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>