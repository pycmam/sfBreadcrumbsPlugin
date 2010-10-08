<?php
/**
 * Хлебные крошки
 *
 * Отрисовывает в виде вложенных списков
 *
 * @param string $devider
 */
$breadcrumbs = $sf_context->get('breadcrumbs')->getRawValue();
$devider = isset($devider) ? $sf_data->getRaw('devider') : '&raquo;';

use_helper('I18N');
?>

<?php if (($count = $breadcrumbs->count())): ?>
<ul class="breadcrumbs">
    <?php foreach ($breadcrumbs->getItems() as $key => $item): ?>
    <li>
        <?php if ($item->getUri() && $count-1 > $key): ?>
            <?php echo link_to(__($item->getName()), $item->getUri(), $item->getParams()) ?>
        <?php else: ?>
            <span><?php echo htmlspecialchars(__($item->getName()), ENT_QUOTES) ?></span>
        <?php endif ?>
        <?php if ($count-1 > $key): ?>
            <?php echo $devider ?>
            <ul>
        <?php else: ?>
            <?php echo str_repeat('</li></ul>', $count) ?>
        <?php endif ?>
    <?php endforeach ?>

<?php endif ?>
