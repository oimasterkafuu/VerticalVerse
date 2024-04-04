<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('components/header.php');
?>

<div class="post-title">
    <h1><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
</div>

<?php $this->content(); ?>

<?php $this->need('components/footer.php'); ?>
