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

function postMeta(\Widget\Archive $archive)
{
?>
    <div class="post-meta">
        <div class="post-title">
            <a class="post-title-text" href="<?php $archive->permalink() ?>"><?php $archive->title() ?></a>
            <?php if(!empty($archive->tags)): ?>
                <span class="post-tags">（<?php $archive->tags('、', false); ?>）</span>
            <?php endif; ?>
        </div>
        <div class="post-author"><?php $archive->author(); ?></div>
    </div>
<?php
}
?>
