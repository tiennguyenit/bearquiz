<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question $question
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Question'), ['action' => 'edit', $question->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Question'), ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Questions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Question'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="questions view content">
            <h3><?= h($question->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Quiz') ?></th>
                    <td><?= $question->hasValue('quiz') ? $this->Html->link($question->quiz->title, ['controller' => 'Quizzes', 'action' => 'view', $question->quiz->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($question->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($question->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($question->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Question Text') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($question->question_text)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Answers') ?></h4>
                <?php if (!empty($question->answers)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Question Id') ?></th>
                            <th><?= __('Answer Text') ?></th>
                            <th><?= __('Is Correct') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($question->answers as $answer) : ?>
                        <tr>
                            <td><?= h($answer->id) ?></td>
                            <td><?= h($answer->question_id) ?></td>
                            <td><?= h($answer->answer_text) ?></td>
                            <td><?= h($answer->is_correct) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Answers', 'action' => 'view', $answer->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Answers', 'action' => 'edit', $answer->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Answers', 'action' => 'delete', $answer->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $answer->id),
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