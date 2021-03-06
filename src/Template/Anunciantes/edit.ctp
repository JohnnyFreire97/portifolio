<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Anunciante $anunciante
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $anunciante->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $anunciante->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Anunciantes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="anunciantes form large-9 medium-8 columns content">
    <?= $this->Form->create($anunciante) ?>
    <fieldset>
        <legend><?= __('Edit Anunciante') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('sobrenome');
            echo $this->Form->control('cpf_cnpj');
            echo $this->Form->control('logradouro');
            echo $this->Form->control('numero');
            echo $this->Form->control('complemento');
            echo $this->Form->control('bairro');
            echo $this->Form->control('cep');
            echo $this->Form->control('telefone');
            echo $this->Form->control('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
