<?php  if(!defined("ABSPATH")) exit; ?>
<?php if(is_front_page()) : // is_home() ??   ?>
    <h1 class="site-title header-site-title-text">
            <?php
            echo  get_bloginfo("site_name");
            ?>
        </h1>
        <?php  else:  ?>
        <h2 class="site-title h1">
            <a class="header-site-title-text text-decoration-none text-dark" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <?php
               echo  get_bloginfo("name");
                ?>
            </a>
        </h2>
        <?php endif;   ?>

        <h4 class="site-description">
            <?php
            echo  get_bloginfo("description");
            ?>
        </h4>

