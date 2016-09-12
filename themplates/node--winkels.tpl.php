<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

    <div class="row">
        <div class="col-md-6 store_open">
            <?php print render($content['body']); ?>
        </div>

        <div class="col-md-6 store_img">
            <?php print render($content['field_image']); ?>
        </div>
    </div><!-- end row -->

</div>
