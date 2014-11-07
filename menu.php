<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

        <?php
            $menu1 = $_GET['parent-page-id-1'];
            $menu2 = $_GET['parent-page-id-2'];
            $menu3 = $_GET['parent-page-id-3'];
            $menu4 = $_GET['parent-page-id-4'];
            $menu5 = $_GET['parent-page-id-5'];
            
            $menuOne = $_GET['menu-name-1'];
            $menuTwo = $_GET['menu-name-2'];
            $menuThree = $_GET['menu-name-3'];
            $menuFour = $_GET['menu-name-4'];
            $menuFive = $_GET['menu-name-5'];
            
            
            if(is_page('$menu1') || '$menu1' $post->post_parent) {
                $selectedMenu = '$menuOne';
            } elseif(is_page('$menu2') || '$menu2' $post->post_parent) {
                $selectedMenu = '$menuTwo';
            } elseif(is_page('$menu3') || '$menu3' $post->post_parent) {
                $selectedMenu = '$menuThree';
            } elseif(is_page('$menu4') || '$menu4' $post->post_parent) {
                $selectedMenu = '$menuFour';
            } elseif(is_page('$menu5') || '$menu5' $post->post_parent) {
                $selectedMenu = '$menuFive';
            } elseif(is_page('$menu6') || '$menu6' $post->post_parent) {
                $selectedMenu = '$menuSix';
            } elseif(is_page('$menu7') || '$menu7' $post->post_parent) {
                $selectedMenu = '$menuSeven';
            } elseif(is_page('$menu8') || '$menu8' $post->post_parent) {
                $selectedMenu = '$menuEight';
            } elseif(is_page('$menu9') || '$menu9' $post->post_parent) {
                $selectedMenu = '$menuNine';
            } elseif(is_page('$menu10') || '$menu10' $post->post_parent) {
                $selectedMenu = '$menuTen';
            } else $selectedMenu = mainmenu;
            
            
                       
            wp_nav_menu( array(
                'menu'              => $selectedMenu,
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'navbar-collapse',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div>
</nav>