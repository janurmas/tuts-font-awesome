<?php global $wp_query; ?>

<?php if ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) { ?>

        <ul class="pager">

            <?php if( get_next_posts_link() ) { ?>
                <li>
                    <?php next_posts_link( __( '<span class="fa fa-chevron-left"></span> Older', 'tuts-font-awesome' ) ); ?>
                </li>
            <?php } // end if ?>

            <?php if( get_previous_posts_link() ) { ?>
                <li>
                    <?php previous_posts_link( __( 'Newer <span class="fa fa-chevron-right"></span>', 'tuts-font-awesome' ) ); ?>
                </li>
            <?php } // end if ?>

        </ul><!-- /.pager -->

<?php } // end if/else ?>