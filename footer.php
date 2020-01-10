<?php
/**
 * The template for displaying the footer
 *
 *
 * @package mind
 */

?>

<footer class="footer">

    <div class="container">

        <div class="footer__inner">

            <div class="footer__col footer__col--first">
                <h2 class="footer__suptitle footer-about-us_title"><?php  echo get_theme_mod("footer_about_us_column_title");  ?></h2>
                <p class="footer__text footer-about-us_content">
                    <?php  echo get_theme_mod("footer_about_us_content");  ?>
                </p>
                <div class="footer__social">
                    <div class="footer__social-content">
                        <?php  esc_html_e("Поделись В Соцсетях:" , "mind"); ?>
                        <a rel="nofollow" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>', 'facebook', 'width=1000, height=1024'); return false;" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" title="Поделиться в Facebook">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a rel="nofollow"  onclick="window.open('http://twitter.com/home?status=Читаю <?php the_permalink(); ?>: <?php the_title(); ?>', 'twitter', 'width=1000, height=1024'); return false;" href="http://twitter.com/home?status=Читаю <?php the_permalink(); ?>: <?php the_title(); ?>" title="Добавить в Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a rel="nofollow" onclick="window.open('http://vkontakte.ru/share.php?url=<?php the_permalink(); ?>', 'vkontakte', 'width=626, height=436'); return false;" href="http://vkontakte.ru/share.php?url=<?php the_permalink(); ?>" title="Поделиться ВКонтакте">
                            <i class="fab fa-vk"></i>
                        </a>
                    </div>
                </div>

            </div>

            <div class="footer__col footer__col--second">
                <div class="footer-menu-block">
                    <h2 class="footer__suptitle footer-menu-title"><?php  echo get_theme_mod("footer_menu_column_title"); ?></h2>
                    <div class="footer-menu-wrap">
                        <?php mind_the_footer_menu(); ?>
                    </div>
                </div>
            </div>

            <div class="footer__col footer__col--third">
                <h2 class="footer__suptitle  footer-contact-title"><?php  echo get_theme_mod("footer_contact_column_title");  ?></h2>
                <?php 	$footer_email = get_theme_mod("footer_contact_email");
                 if(isset($footer_email) && !empty($footer_email)) :
                ?>
                <a href="<?php echo $footer_email;  ?>" class="footer__text__mail"><i class="fas fa-envelope-open-text"></i><span class="footer-contact-email"><?php 	echo  $footer_email; ?></span></a>
                <?php endif;
                $footer_phone = get_theme_mod("footer_contact_phone");   ;
                if(isset($footer_phone) && !empty($footer_phone)) :
                ?>
                <p class="footer__text"><i class="fas fa-phone"></i><span class="footer-contact-phone"><?php echo $footer_phone;  ?></span></p>
                <?php endif;
                $footer_address = get_theme_mod("footer_contact_address");   ;
                if(isset($footer_address) && !empty($footer_address)) :
                ?>
                <p class="footer__text"><i class="fas fa-map-marker-alt"></i> <span class="footer-contact-address"><?php echo $footer_address;   ?></span></p>
                <?php  endif;
                $footer_skype = get_theme_mod("footer_contact_skype");   ;
                if(isset($footer_skype) && !empty($footer_skype)) :
                ?>
                <p class="footer__text"><i class="fab fa-skype"></i> <span class="footer-contact-skype"><?php echo  $footer_skype;   ?></span></p>
                <?php endif;   ?>
            </div>


        </div>


    </div>

    <div class="divider"></div>

    <div class="copyright site-footer-copyright">
		    <?php
		    echo get_theme_mod("footer_copyright");
		    ?>
<!--        © 2016 MoGo free PSD template by  <span>Laaqiq</span>-->
    </div>

    </div>
</footer>
<?php
/**
 *
 */
 wp_footer();
 ?>
<div class="" id="adsBlock1">
	<?php
	echo get_theme_mod("ads_code");
	?>
</div>
</body>
</html>
