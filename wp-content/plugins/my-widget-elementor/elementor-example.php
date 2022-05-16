<?php
/** 
    * Plugin Name: My Widget Elementor
    * Plugin URI: https://example.com
    * Description: A custum elementor widget
    * Version: 1.0.0
    * Author: RAFFIN Jean-Daniel
    * Author URI: https://raffin.jeandaniel.me
    * Text Domain: my-widget-elementor
*/

if( ! defined ( 'ABSPATH' ) ) exit();

/** 
 * Elementor Extension main class
 * @since 1.0.0
 */
 final class My_Widget_Elementor {

    // Plugin version
    const VERSION = '1.0.0';

    // Minimum Elementor Version
    const MINIMU_ELEMENTOR_VERSION = '2.0.0';

    // Minimum PHP version
    const MINIMUM_ELEMENTOR_VERSION = '7.0';

    // Instance
    private static $_instance = null;

    /**
     * Singletone Instance Method
     * @since 1.0.0
     */
    public static function instance() {
        if( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * Constuct Method
     * @since 1.0.0
     */
    public function __construct() {
        // Call Constants Method
        $this->define_constants();
        add_action( 'wp_enqueue_scripts', [ $this, 'scripts_styles'] );
        add_action( 'init', [ $this, 'i18n'] );
    }
    
    /**
     * Define Plugin Constants
     * @since 1.0.0
     */
    public function define_constants() {
        define( 'MYEW_PLUGIN_URL', trailingslashit( plugins_url( '/', __FILE__) ) ); 
        define( 'MYEW_PLUGIN_PATH', trailingslashit( plugin_dir_path( '/', __FILE__) ) ); 
    }

    /**
     * Load Scripts & Styles
     * @since 1.0.0
     */
    public function scripts_styles() {
        wp_register_style( 'myew-style', MYEW_PLUGIN_URL . 'assets/dist/css/public.min.css', [], rand(), 'all' );
        wp_register_script( 'myew-style', MYEW_PLUGIN_URL . 'assets/dist/js/public.min.css', [ 'jquery' ], rand(), true );
        
        wp_enqueue_style( 'myem-style' );
        wp_enqueue_script( 'myew-script');
    }

    /**
     * Load Text Domain
     * @since 1.0.0 
     */
    public function i18() {
        load_plugin_textdomain( 'my-widget-elementor', false, dirname( plugin_basename(__FILE__ ) ) . '/languges' );
    }

    /**
     * Initialise the plugin
     * @since 1.0.0
     */
    public function init() {
            add_action( 'elementor/init', [ $this, 'init_category' ] );  
            add_action( 'elementor/widgets/widgets_registered', [ $this, 'init_widgets'] );
        }

    /**
     * Init Widgets
     * @since 1.0.0
     */
    public function init_widgets() {
        require_once MYEW_PLUGIN_PATH . '/widgets/example.php';
    }

    /**
     * Init Category Section
     * @since 1.0.0
     */
    public function init_category() {
        Elementor\Plugin::instance()->elements_manager->add_category(
            'myew-for-elementor',
            [
                'title' => 'My Widgets Elementor'
            ],
            1
            );
    }

 }

 My_Widget_Elementor::instance();
 
