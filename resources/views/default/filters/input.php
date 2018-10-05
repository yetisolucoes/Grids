<?php
/** @var Nayjest\Grids\Filter $filter */
?>

<input
    class="form-control form-control-sm"
    name="<?= $filter->getInputName() ?>"
    value="<?= $filter->getValue() ?>"
    placeholder="Buscar por: <?= $filter->getColumn()->getLabel(); ?>"
    />
<?php if($label): ?>
    <span><?= $label ?></span>
<?php endif ?>
