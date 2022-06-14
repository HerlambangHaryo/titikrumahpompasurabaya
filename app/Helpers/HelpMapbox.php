<?php

use Illuminate\Support\Facades\DB;

    if(!function_exists('helper_mapbox_geojson'))
    {
        function helper_mapbox_geojson()
        {
            // ----------------------------------------------------------- Initialize
                $isi = '';

            // ----------------------------------------------------------- Action            
                $isi = '
                {
                    "type": "Feature",
                    "properties": 
                     {
                        "description": "'.$nama.'",
                        "dmha": "'.$dmha.'",
                        "filename": "'.$filename.'",
                        "icon": "'.$icon.'"
                    },
                    "geometry":  
                    {
                        "type": "Point",
                        "coordinates": ['.$long.', '.$lat.']
                    }
                },
                ';

            // ----------------------------------------------------------- Send
                $isi = $word;
                return $isi;

            ///////////////////////////////////////////////////////////////
        }
    }