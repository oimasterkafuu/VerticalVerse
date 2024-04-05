<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form)
{
    $logoUrl = new \Typecho\Widget\Helper\Form\Element\Text(
        'logoUrl',
        null,
        null,
        '网站 Logo',
        '在这里填写图片 URL，网站将显示 Logo'
    );

    $form->addInput($logoUrl->addRule('url', _t('请填写正确的 URL 地址')));

    $gudianFont = new \Typecho\Widget\Helper\Form\Element\Select(
        'gudianFont',
        array(
            'gudian' => '繁体',
            'standard' => '简体'
        ),
        'standard',
        _t('文字风格'),
        _t('如果选择了繁体，将会使用 文悦古典明朝体')
    );

    $form->addInput($gudianFont);
}
