<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<header class="header">
        <div class="header__menu">
            <div class="wrapper">
                <div class="header__menu-inner">
                    <div class="mleft">
                        <select class="header__menu-select">
                            <option>English</option>
                            <option>English</option>
                            <option>English</option>
                        </select>
                    </div>
                    <div class="mright">
                        <a class="header__menu-inner-contact" href="#"><i class="fas fa-users"></i><span>Contact Center</span></a>
                        <select class="header__menu-select">
                            <option>Country Profile</option>
                            <option>Country Profile</option>
                            <option>Country Profile</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-menu">
            <div class="wrapper">
                <div class="dhl-menu">
                    <div class="logo"><?php the_custom_logo() ?></div>
                    <?php wp_nav_menu( $args = array(
                            'theme_location' => 'head_menu',
                            'depth' => 1,
                            'container' => 'nav',
                            'menu_class' => 'dhl-links',
                            'add_li_class' => 'dhl-menu__item'
                        )) ?>
                    <div class="search__field">
                        <?php get_search_form(); ?>
                    </div>
                    <button class="searchBtn"><i class="fas fa-search"></i></button>
                    <button class="burger__btn">
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </header>