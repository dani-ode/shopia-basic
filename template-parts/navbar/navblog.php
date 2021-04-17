<header id="header-1" class="sticky-top">
    <nav class="navbar s-shadow navbar-expand-lg bg-primary">
        <div class="container">
            <div class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-text-left text-white hover" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                </svg>
            </div>

            <?php if (has_custom_logo()) : ?>
                <figure class="navbar-brand hover">
                    <?php the_custom_logo(); ?>
                </figure>
                <?php else: ?>
                <a class="navbar-brand text-v-l hover" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
            <?php endif; ?>

            <div class="navbar-toggler">
                <div id="blog-search-m">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search text-white hover" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </div>
            </div>
            <div id="blog-search-toggle" class="position-absolute d-none">

                <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>" name="s" title="Search">
                    <input type="search" class="search-field form-control" placeholder="🔍Search…" value="<?php echo get_search_query(); ?>" name="s">
                    <input type="hidden" value="post" name="post_type" id="post_type" />
                </form>

            </div>
            <div id="close-blog-search" class="position-absolute top-0 end-0 d-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-x bg-a-l bulat" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </div>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <?php 
                    wp_nav_menu( array(
                        'theme_location'    =>  'primary',
                        'container'         =>  false,
                        'menu_class'        =>  'navbar-nav text-v-l',
                        'walker'            =>  new WP_Bootstrap_Navwalker()                          ) 
                    );
                ?>
                <div class="search-form-container d-none d-lg-block">

                    <div id="wrap">
                        <form autocomplete="on"  action="<?php echo home_url('/'); ?>" name="s" title="Search">
                        <input id="search" type="search" placeholder="What're we looking for ?" value="<?php echo get_search_query(); ?>" name="s">
                        <input id="search_submit" class="text-center" value="Rechercher" type="submit"><p class="search-icon"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg></p>
                        <input type="hidden" value="post" name="post_type" id="post_type" />
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </nav>
</header>