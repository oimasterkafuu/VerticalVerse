<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('components/header.php');
?>

<?php
postMeta($this);
?>

<div class="article">
<?php $this->content(); ?>
</div>

<div class="divider"></div>

<?php $this->need('components/footer.php'); ?>
