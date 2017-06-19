<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Goodlucks'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="goodlucks form large-9 medium-8 columns content">
    <?= $this->Form->create($goodluck) ?>
    <fieldset>
        <legend><?= __('Add Goodluck') ?></legend>
        <?php
            echo $this->Form->control('nickname');
            echo $this->Form->control('message');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
