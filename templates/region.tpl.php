<?php
/**
 * @file
 * Esteem theme implementation to display a region.
 */

if (!empty($content)): ?>
<div class="<?php print implode(' ', $classes); ?>">
  <?php print render($content); ?>
</div>
<?php endif; ?>
