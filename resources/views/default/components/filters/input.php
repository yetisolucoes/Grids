<?php
/** @var Nayjest\Grids\Components\Filter $component */
?>
<?php if($component->getLabel()): ?>
    <span><?= $component->getLabel() ?></span>
<?php endif ?>
<input
    placeholder="Insira <?= $component->getLabel() ?> para realizar a busca"
    class="form-control input-sm"
    style="display: inline; width: 80px; margin-right: 10px"
    type="text"
    name="<?= $component->getInputName() ?>"
    value="<?= htmlspecialchars($component->getValue()) ?>"
    >