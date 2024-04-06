<?php
/**
 * @package 立韵阁
 * @author oimasterkafuu
 * @version 0.5
 * @link https://oimaster.top
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('components/header.php');
?>

<div class="category-list">
<?php
\Widget\Metas\Category\Rows::alloc()->listCategories([
    'wrapTag' => 'ul',
    'wrapClass' => '',
    'itemTag' => 'li',
    'itemClass' => 'category-title'
]);
?>
</div>

<div class="divider"></div>

<?php $this->need('components/footer.php'); ?>
