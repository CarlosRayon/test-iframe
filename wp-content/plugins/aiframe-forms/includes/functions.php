<?php

function aiforms_enable()
{
    /* TODO we can do somethings */
    // add_option('iform_option', 'Util data to plugin (opcional)', '', 'yes');
}

/**
 * @return void
 */
function aiforms_disabled()
{
    /* TODO we can do somethings */
    flush_rewrite_rules();
}

/**
 * @return void
 */
function loadJS()
{
    /* nuestro js y jquery que ya viene con WordPress */
    wp_enqueue_script('aiformjs', plugins_url('../public/js/aiforms.js', __FILE__), array('jquery'));
}

/**
 * @return void
 */
function loadCSS()
{
    wp_enqueue_style('aiformcss', plugins_url('../public/css/aiforms.css', __FILE__));
}

/**
 * @return void
 */
function aiforms_shortcodes_init()
{
    add_shortcode('aiforms', 'aiforms_shortcode');
}

/**
 * @param array $atts
 * @param mixed $content
 * @param string $tag
 * @return string
 */
function aiforms_shortcode($atts = [], $content = null, $tag = '')
{
    $paramsUrl = $_GET;
    $uuid = $atts['uuid'];
    $type = $atts['type'];

    add_action('wp_enqueue_scripts', 'loadCSS');
    add_action('wp_enqueue_scripts', 'loadJS');

    $contentIframe = sprintf(
        '<div class="iforms-container">
            <iframe src="https://formularios-fundacion.local/form/%s/embed"></iframe>
        </div>
        ',
        $uuid
    );

    return $contentIframe;
}
