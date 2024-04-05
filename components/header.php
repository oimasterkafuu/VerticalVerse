<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh-Hans">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>
        <?php
            $this->archiveTitle([
                    'category' => '%s'
                ], '', ' - ');
        ?>
        <?php $this->options->title(); ?>
    </title>
    <?php if ($this->options->logoUrl): ?>
        <link rel="shortcut icon" href="<?php $this->options->logoUrl(); ?>" type="image/x-icon">
    <?php endif; ?>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/main.css'); ?>">
    <?php if ($this->options->gudianFont == 'gudian'): ?>
        <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/font.css'); ?>">
    <?php endif; ?>
    <script src="<?php $this->options->themeUrl('assets/js/formatter.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('assets/js/old-image.js'); ?>"></script>
    <?php $this->header(); ?>
</head>
<body>
    
<div class="site-title">
    <a class="site-title-text" href="<?php $this->options->siteUrl(); ?>">
        <?php if ($this->options->logoUrl): ?>
            <div class="old-style" style="background-image: url(<?php $this->options->logoUrl(); ?>);"></div>
        <?php endif; ?>
        <?php $this->options->title() ?>
    </a>
    <span><?php $this->options->description() ?></span>
</div>
