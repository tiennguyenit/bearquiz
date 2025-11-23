<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Answer $answer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Answer'), ['action' => 'edit', $answer->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Answer'), ['action' => 'delete', $answer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $answer->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Answers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Answer'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="answers view content">
            <h3><?= h($answer->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Question') ?></th>
                    <td><?= $answer->hasValue('question') ? $this->Html->link($answer->question->id, ['controller' => 'Questions', 'action' => 'view', $answer->question->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($answer->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Correct') ?></th>
                    <td><?= $answer->is_correct ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Answer Text') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($answer->answer_text)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>