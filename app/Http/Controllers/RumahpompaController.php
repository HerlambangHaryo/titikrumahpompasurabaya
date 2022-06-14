<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rumahpompa;

class RumahpompaController extends Controller
{
    //
    public $template    = 'Cv42';
    public $content     = 'Rumahpompa';

    public function index()
    {       
        // ----------------------------------------------------------- Initialize
            $panel_name     = 'Rumahpompa';
            
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'data';
            $view           = 'content.'.$this->template.'.backend.'.strtolower($this->content).'.'.$view_file;

        // ----------------------------------------------------------- Action
            $data       = Rumahpompa::get();

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

    public function create()
    {
        // ----------------------------------------------------------- Initialize
            $panel_name     = 'Rumahpompa';
            
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'create';
            $view           = 'content.'.$this->template.'.backend.'.strtolower($this->content).'.'.$view_file;

        // ----------------------------------------------------------- Action

        // ----------------------------------------------------------- Send
            return  view($view, 
                compact(
                    'content', 
                    'panel_name', 
                    'active_as', 
                    'view_file'
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function store(Request $request)
    {
        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action
            $this->validate($request, [
                'nama_lokasi'      => 'required',
            ]);

            $data = Rumahpompa::create([
                'nama_lokasi'         => $request->nama_lokasi,
                'lokasi'         => $request->lokasi,
                'telepon'         => $request->telepon,
                'pembuat'         => $request->pembuat,
                'tahun_pembuatan'         => $request->tahun_pembuatan
            ]);

        // ----------------------------------------------------------- Send
            if($data)
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Success' => 'Data successfully saved!']);
            }
            else
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Error' => 'Data Gagal Disimpan!']);
            }
        ///////////////////////////////////////////////////////////////
    }

    public function edit(Rumahpompa $Rumahpompa)
    {
        // ----------------------------------------------------------- Initialize
            $panel_name     = 'Rumahpompa';
            
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'edit';
            $view           = 'content.'.$this->template.'.backend.'.strtolower($this->content).'.'.$view_file;

        // ----------------------------------------------------------- Action
        
        // ----------------------------------------------------------- Send
            return  view($view, 
                compact(
                    'content', 
                    'panel_name', 
                    'active_as', 
                    'view_file',
                    'Rumahpompa'
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function update(Request $request, Rumahpompa $Rumahpompa)
    {
        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action
            $this->validate($request, [
                'nama_lokasi'      => 'required',
            ]);

            
            $model = Rumahpompa::findOrFail($Rumahpompa->id);

            $pre_pompa_air = str_replace(':', '', $request->pompa_air);
                $pompa_air = str_replace(PHP_EOL, '', $pre_pompa_air);

            $pre_pln = str_replace(':', '', $request->pln);
                $pln = str_replace(PHP_EOL, '', $pre_pln);

            $model->update([
                'nama_lokasi'         => $request->nama_lokasi,
                'lokasi'         => $request->lokasi,
                'telepon'         => $request->telepon,
                'pembuat'         => $request->pembuat,
                'tahun_pembuatan'         => $request->tahun_pembuatan,
                'latitude'         => $request->latitude,
                'longitude'         => $request->longitude,
                'pdam'         => $request->pdam,
                'pln'         => $pln,
                'pompa_air'         => $pompa_air,
                'keterangan'         => $request->keterangan
            ]);

        // ----------------------------------------------------------- Send
            if($model)
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Success' => 'Data Berhasil Disimpan!']);
            }else{
                return redirect()
                    ->route($content.'.index')
                    ->with(['error' => 'Data Gagal Disimpan!']);
            }
        ///////////////////////////////////////////////////////////////
    }

    public function show(Rumahpompa $Rumahpompa)
    {
        // ----------------------------------------------------------- Initialize
            $panel_name     = 'Rumahpompa';
            
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'show';
            $view           = 'content.'.$this->template.'.backend.'.strtolower($this->content).'.'.$view_file;

        // ----------------------------------------------------------- Action

        // ----------------------------------------------------------- Send
            return  view($view, 
                compact(
                    'content', 
                    'panel_name', 
                    'active_as', 
                    'view_file',
                    'Rumahpompa'
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function destroy($id)
    {
        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action
            $model = Rumahpompa::findOrFail($id);
            $model->delete();

        // ----------------------------------------------------------- Send
            if($model)
            {        
                return redirect()
                    ->route($content.'.index')
                    ->with(['Deleted' => 'Data successfully deleted!']);
            }
            else
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Error' => 'Data Gagal Disimpan!']);
            }
        ///////////////////////////////////////////////////////////////
    }
}
