<div class="sidebar">
    <h2> <?php _e('Categories'); ?></h2>
    <ul>
        <?php wp_list_categories('sort_column=name&optioncount=1&ierarchial=0'); ?>
    </ul>
    <h2> <?php _e('Archives'); ?></h2>
    <ul>
    <?php wp_get_archives('type=monthly'); ?>
    </ul>
</div>
