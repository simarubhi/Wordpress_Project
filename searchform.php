<form class="search-container" action="<?php echo home_url('/');?>">
    <input type="search" class="search-area" name="s" placeholder="Search Here" value="<?php echo get_search_query();?>">
    <button class="search-box" type="submit"><i class="fas fa-search"></i></button>
</form>