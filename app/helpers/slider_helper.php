<?php

/*
 * Helper: slider
 * helps creating image-slider
 * 
 * @author Florian Dahlitz
 */

if (! function_exists('create_image_slider')) {
    
    function create_image_slider($path, $number)
    {
        echo '<script src="' . js_file_url('jssor.slider.mini') . '"></script>';
        echo '<!-- use jssor.slider.debug.js instead for debug -->';
        echo '<script src="' . js_file_url('image-slider') . '"></script>';
        echo '<link rel="stylesheet" href="' . css_file_url('image-slider') . '" type="text/css">';
        
        /* Loading Screen */
        
        echo '<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 800px; height: 456px; overflow: hidden; visibility: hidden; background-color: #24262e;">';
        echo '<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">';
        echo '<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>';
        echo '<div style="position:absolute;display:block;background:url("' . pics_url('loading.gif') . '") no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>';
        echo '</div>';
        echo '<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 356px; overflow: hidden;">';
        
        for($i = 1; $i <= $number; $i++)
        {
            echo '<div data-p="144.50" style="display: none;">';
            if($i > 9)
            {
                echo '<img data-u="image" src="' . $path . '/bild_' . $i . '_l.jpg' . '"></img>';
                echo '<img data-u="thumb" src="' . $path . '/bild_' . $i . '_l.jpg' . '"></img>';
            }
            else 
            {
                echo '<img data-u="image" src="' . $path . '/bild_0' . $i . '_s.jpg' . '"></img>';
                echo '<img data-u="thumb" src="' . $path . '/bild_0' . $i . '_s.jpg' . '"></img>';
            }
            echo '</div>';
        }
        
        echo '<a data-u="ad" href="http://www.jssor.com" style="display:none">Responsive Slider</a>';
        echo '</div>';
        
        /* Thumbnail Navigator */
        
        echo '<div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;" data-autocenter="1">';
        echo '<div data-u="slides" style="cursor: default;">';
        echo '<div data-u="prototype" class="p">';
        echo '<div class="w">';
        echo '<div data-u="thumbnailtemplate" class="t"></div>';
        echo '</div>';
        echo '<div class="c"></div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        
        /* Arrow Navigator */
        
        echo '<span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>';
        echo '<span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>';
        echo '</div>';
    }
}
