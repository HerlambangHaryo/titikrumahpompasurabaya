<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public $theme   = 'Cv42';
    public $content = 'Dashboard';

    public function index()
    {       
        // ----------------------------------------------------------- Initialize
            $panel_name     = 'Dashboard';
            
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'index';
            $view           = 'content.'.$this->theme.'.backend.'.strtolower($this->content).'.'.$view_file;

        // ----------------------------------------------------------- Action
            $data       = array();

        // ----------------------------------------------------------- Send
            return view($view, 
                compact(
                    'data', 
                    'content', 
                    'panel_name', 
                    'active_as'
                )
            );
        ///////////////////////////////////////////////////////////////
    }
}
