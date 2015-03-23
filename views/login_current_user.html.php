<?php defined("SYSPATH") or die("No direct script access.") ?>
<li>
  <?php $name = $menu->label->for_html() ?>
  <?php $hover_text = t("Your profile")->for_html_attr() ?>
  <?php echo t("Logged in as %name", array("name" => html::mark_clean(
        "<a href='$menu->url' title='$hover_text' id='$menu->id'>{$name}</a>"))) ?>
</li>
