@extends('template.color_admin_apple_v42.datatable')

@section('content')             
    <div id="content" class="content">
        <x-cv42.breadcrumb link2="{{ route($content.'.index') }}" level2="{!!$panel_name!!}" level3="Create" />
        <x-cv42.page-header header="{!!$panel_name!!}"/>
        
        <div class="panel panel-inverse">
            <x-cv42.panel-heading title="Table Data"/>

            <div class="panel-body"> 
                @if(session()->has('Success'))
                    <x-cv42.alert-form-saved />
                @elseif(session()->has('Deleted'))
                    <x-cv42.alert-form-deleted />
                @endif

                <div class="m-b-20">      
                    <x-cv42.a-white-right 
                        link="{{ route($content.'.create') }}" 
                        icon="ion-ios-add" 
                        title="Create"
                    />      
                </div>
                
                <br/>

                <div class="table-responsive m-t-20">               
                    <table id="data-table-default" class="table table-striped table-bordered">
                        <thead>
                            <tr>               
                                <x-cv42.th-first/>            
                                <x-cv42.th-content title="Nama" />
                                <x-cv42.th-content title="Lokasi" />
                                <x-cv42.th-content title="Pembuatan" />
                                <x-cv42.th-content title="Tahun Pembuatan" />
                                <x-cv42.th-content title="Pompa Air" />
                                <x-cv42.th-content title="PLN" />
                                <x-cv42.th-content title="PDAM" />
                                <x-cv42.th-content title="Keterangan" />
                                <x-cv42.th-last/>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $row)
                                <tr>
                                    <td>
                                        {{ $row->id }}
                                    </td>
                                    <td class="text-center">
                                        {{ $row->nama_lokasi }}
                                    </td>
                                    <td class="text-center">
                                        {{ $row->lokasi }}
                                    </td>
                                    <td class="text-center">
                                        {{ $row->pembuat }}
                                    </td>
                                    <td class="text-center">
                                        {{ substr($row->tahun_pembuatan,0,4) }}
                                    </td>
                                    <td class="text-center">
                                        {{ $row->pompa_air }}
                                    </td>
                                    <td class="text-center">
                                        {{ $row->pln }}
                                    </td>
                                    <td class="text-center">
                                        {{ $row->pdam }}
                                    </td>
                                    <td class="text-center">
                                        {{ $row->keterangan }}
                                    </td>
                                    <td class="with-btn" nowrap> 
                                        <div class="btn-group m-r-5 m-b-5">
                                            <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                            <ul class="dropdown-menu">                                                
      
                                                <x-cv42.dropdown-li-a 
                                                    link="{{ route($content.'.edit', $row->id) }}" 
                                                    icon="ion-md-create" 
                                                    title="Edit"
                                                />                                             
                                                <li class="divider"></li>
                                                <x-cv42.dropdown-li-a 
                                                    link="{{ route($content.'.show', $row->id) }}" 
                                                    icon="ion-ios-trash" 
                                                    title="Delete"
                                                />
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @empty 
                                    <x-message.tr-no-record-data col="4"/>
                            @endforelse
                        </tbody>
                    </table>        
                </div>
            </div>
        </div>
    </div>    
@endsection
