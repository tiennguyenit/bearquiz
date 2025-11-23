<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Answer $answer
 * @var \Cake\Collection\CollectionInterface|string[] $questions
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Answers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="answers form content">
            <?= $this->Form->create($answer) ?>
            <fieldset>
                <legend><?= __('Add Answer') ?></legend>
                <?php
                    echo $this->Form->control('question_id', ['options' => $questions, 'empty' => true]);
                    echo $this->Form->control('answer_text');
                    echo $this->Form->control('is_correct');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
