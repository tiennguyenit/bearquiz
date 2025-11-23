<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Quiz $quiz
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Quiz'), ['action' => 'edit', $quiz->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Quiz'), ['action' => 'delete', $quiz->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quiz->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Quizzes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Quiz'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="quizzes view content">
            <h3><?= h($quiz->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($quiz->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($quiz->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created By') ?></th>
                    <td><?= $quiz->created_by === null ? '' : $this->Number->format($quiz->created_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($quiz->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($quiz->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($quiz->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Questions') ?></h4>
                <?php if (!empty($quiz->questions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Quiz Id') ?></th>
                            <th><?= __('Question Text') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($quiz->questions as $question) : ?>
                        <tr>
                            <td><?= h($question->id) ?></td>
                            <td><?= h($question->quiz_id) ?></td>
                            <td><?= h($question->question_text) ?></td>
                            <td><?= h($question->created) ?></td>
                            <td><?= h($question->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Questions', 'action' => 'view', $question->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Questions', 'action' => 'edit', $question->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Questions', 'action' => 'delete', $question->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $question->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Results') ?></h4>
                <?php if (!empty($quiz->results)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Quiz Id') ?></th>
                            <th><?= __('Score') ?></th>
                            <th><?= __('Started At') ?></th>
                            <th><?= __('Finished At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($quiz->results as $result) : ?>
                        <tr>
                            <td><?= h($result->id) ?></td>
                            <td><?= h($result->user_id) ?></td>
                            <td><?= h($result->quiz_id) ?></td>
                            <td><?= h($result->score) ?></td>
                            <td><?= h($result->started_at) ?></td>
                            <td><?= h($result->finished_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Results', 'action' => 'view', $result->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Results', 'action' => 'edit', $result->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Results', 'action' => 'delete', $result->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $result->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>