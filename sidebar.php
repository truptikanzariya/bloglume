<?php
/**
 * The sidebar containing the main widget area
 *
 * @package bloglume
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    
    <!-- Secondary sidebar area -->
    <aside id="secondary" class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Primary Sidebar', 'bloglume' ); ?>">
        <?php
        // Output widgets added to 'sidebar-1' from the Widgets screen in the admin.
        dynamic_sidebar( 'sidebar-1' );
        ?>
    </aside>

<?php endif; ?>
