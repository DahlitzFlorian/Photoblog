<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @category Helper
 * @author Florian Dahlitz
 *
 * helps navigating to assets
 */
if (! function_exists('asset_url'))
{

    function asset_url()
    {
        return base_url('assets', NULL, FALSE) . '/';
    }
}

/**
 * css
 */
if (! function_exists('css_url'))
{

    function css_url()
    {
        return asset_url() . 'css/';
    }
}

if (! function_exists('css_file_url'))
{

    function css_file_url($filename)
    {
        return css_url() . $filename . '.css';
    }
}

/**
 * js
 */
if(! function_exists('js_url'))
{

    function js_url()
    {
        return asset_url() . 'js/';
    }
}

if (! function_exists('js_file_url'))
{

    function js_file_url($filename)
    {
        return js_url() . $filename . '.js';
    }
}

/**
 * pics
 */
if (! function_exists('pics_url'))
{

    function pics_url()
    {
        return asset_url() . 'pics/';
    }
}

if (! function_exists('jpg_file_url'))
{

    function jpg_file_url($filename)
    {
        return pics_url() . $filename . '.jpg';
    }
}

if (! function_exists('png_file_url'))
{

    function png_file_url($filename)
    {
        return pics_url() . $filename . '.png';
    }
}
