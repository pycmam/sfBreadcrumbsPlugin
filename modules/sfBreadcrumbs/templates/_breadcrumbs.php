<?php
/**
 * Хлебные крошки
 *
 * Отрисовывает в виде вложенных списков
 */
$breadcrumbs = $sf_context->get('breadcrumbs');
use_helper('I18N');
?>

<?php if ($count = $breadcrumbs->count()): ?>
<ul>
    <?php foreach ($breadcrumbs->getItems() as $key => $item): ?>
    <li>
        <?php if ($item->getUri() && $count-1 > $key): ?>
            <?php echo link_to(__($item->getName()), $item->getUri(), $item->getParams()) ?>
        <?php else: ?>
            <span class="strong">
                <?php echo htmlspecialchars(__($item->getName()), ENT_QUOTES) ?>
            </span>
        <?php endif ?>
        <?php if ($count-1 > $key): ?>
            &nbsp;&raquo;&nbsp;
            <ul>
        <?php else: ?>
            <?php echo str_repeat('</li></ul>', $count) ?>
        <?php endif ?>
    <?php endforeach ?>
<?php endif ?>
