<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rumahpompa;

class HomeController extends Controller
{
    //
    public $theme   = 'Cv42';
    public $content = 'Home';

    public function index()
    {       
        // ----------------------------------------------------------- Initialize
            $panel_name     = 'Home';
            
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'index';
            $view           = 'content.'.$this->theme.'.frontend.'.strtolower($this->content).'.'.$view_file;

        // ----------------------------------------------------------- Action
            $data       = Rumahpompa::whereNotNull('latitude')
                                    ->whereNotNull('longitude')
                                    ->get();

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
