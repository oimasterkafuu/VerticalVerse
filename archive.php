<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('components/header.php');
?>

<?php if ($this->have()): ?>
    <?php while ($this->next()): ?>
        <?php postMeta($this); ?>
        <div class="article">
        <?php $this->content('阅读剩余部分'); ?>
        </div>
        <div class="divider"></div>
    <?php endwhile; ?>
<?php else: ?>
    没有找到内容
<?php endif; ?>

<div class="page-nav">
    <span><?php $this->pageLink('上一页', 'prev');?></span>
    <span><?php $this->pageLink('下一页', 'next'); ?></span>
</div>

<?php $this->need('components/footer.php'); ?>
