<?php defined("SYSPATH") or die("No direct script access.") ?>
<div class="ui-helper-clearfix">
  <p>
  <?php if ($item->is_album()): ?>
    <?php echo t("Delete the album <b>%title</b>? All photos and movies in the album will also be deleted.",
          array("title" => html::purify($item->title))) ?>
  <?php else: ?>
    <?php echo t("Are you sure you want to delete <b>%title</b>?", array("title" => html::purify($item->title))) ?>
  <?php endif ?>
  </p>
  <?php echo $form ?>
</div>
