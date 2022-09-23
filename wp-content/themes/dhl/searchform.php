<form style="display: flex; align-items: center; width: 100%" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input name="s" type="search" class="search__field-input" value="<?php echo get_search_query(); ?>">
    <button type="submit" class="search__field-button">Search</button>
</form>