<?php if (is_active_sidebar('sidebar')) : ?>
          <?php dynamic_sidebar('sidebar'); ?>
        <?php else : ?>
          <p>No widgets added yet. Add some from Appearance → Widgets.</p>
        <?php endif; ?>