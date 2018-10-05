<div class="table-responsive">

<?php
/** @var Nayjest\Grids\DataProvider $data **/
/** @var Nayjest\Grids\Grid $grid **/
?>
<table class="table table-sm table-hover table-bordered" id="<?= $grid->getConfig()->getName() ?>">
<form><?= $grid->header() ? $grid->header()->render() : '' ?><input type="submit" style="display: none;" /></form>
<?php # ========== TABLE BODY ========== ?>
<tbody>
<?php while($row = $data->getRow()): ?>
    <?= $grid->getConfig()->getRowComponent()->setDataRow($row)->render() ?>
<?php endwhile; ?>
</tbody>
<?= $grid->footer() ? $grid->footer()->render() : '' ?>
</table>
<?php # Hidden input for submitting form by pressing enter if there are no other submits ?>

</div>