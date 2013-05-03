<div class="header">
  <?php if ($site_slogan): ?>
    <h2><?php print $site_slogan; ?></h2>
  <?php endif; ?>
  <?php if ($page['header']): ?>
    <?php print render($page['header']); ?>
  <?php endif; ?>
  <?php if ($page['highlight']): ?>
    <?php print render($page['highlight']) ?>
  <?php endif; ?>
  <?php print $messages; ?>
  <?php print render($page['help']); ?>
</div>

<div class="sidebar">
  <?php if ($site_name): ?>
    <h1><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a></h1>
  <?php endif; ?>

  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <h1><?php print $title; ?></h1>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php print render($page['sidebar_first']); ?>
</div>

<div class="content">
  <?php if ($tabs): ?>
    <?php print render($tabs); ?>
  <?php endif; ?>
  <?php print render($page['content']) ?>
</div>

<div class="footer">
  <?php if ($page['footer']): ?>
    <?php print render($page['footer']); ?>
  <?php endif; ?>
</div>
