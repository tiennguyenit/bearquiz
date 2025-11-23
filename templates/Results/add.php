<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Result $result
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $quizzes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Results'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="results form content">
            <?= $this->Form->create($result) ?>
            <fieldset>
                <legend><?= __('Add Result') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('quiz_id', ['options' => $quizzes, 'empty' => true]);
                    echo $this->Form->control('score');
                    echo $this->Form->control('started_at', ['empty' => true]);
                    echo $this->Form->control('finished_at', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
