<?php
    function asset_dir(){
        $theme_url = get_template_directory_uri();
        if(WP_DEBUG){
            echo $theme_url.'/assets';
        }else{
            echo $theme_url.'/dist/assets';
        }
    }