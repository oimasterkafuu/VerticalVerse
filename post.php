<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('components/header.php');
?>

<div class="post-title">
    <a class="post-title-text" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
        <?php if(!empty($this->tags)): ?>
            <span class="post-tags">（<?php $this->tags('、', false, '博客'); ?>）</span>
        <?php endif; ?>
    </span>
</div>

<div class="article">
<?php $this->content(); ?>
</div>

<div class="divider"></div>

<?php $this->need('components/footer.php'); ?>
