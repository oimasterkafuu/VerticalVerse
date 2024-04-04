<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<!DOCTYPE html>
<html lang="zh-Hans">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle([
            'category' => '%s'
        ], '', ' - '); ?><?php $this->options->title(); ?></title>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/main.css'); ?>">
    <?php $this->header(); ?>
</head>
<body>

<div class="site-title">
    <a class="site-title-text" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
    <span><?php $this->options->description() ?></span>
</div>
