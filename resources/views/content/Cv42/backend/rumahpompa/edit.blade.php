@extends('template.color_admin_apple_v42.form')
@section('content')             
    <div id="content" class="content">
        <x-cv42.breadcrumb link2="{{ route($content.'.index') }}" level2="{!!$panel_name!!}" level3="Create" />
        <x-cv42.page-header header="{!!$panel_name!!}"/>
        
        <div class="panel panel-inverse">
            <x-cv42.panel-heading title="Form"/>
            <div class="panel-body">
                <form action="{{ route($content.'.update', $Rumahpompa->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group row m-b-15">    
                        <x-cv42.label-form title="Nama Lokasi" />
                        <div class="col-md-5">
                            <input type="text" 
                                name        = "nama_lokasi" 
                                class       = "form-control form-control-lg m-b-5 @error('nama_lokasi') is-invalid @enderror" 
                                value       = "{{ old('title', $Rumahpompa->nama_lokasi) }}" 
                            />
                                
                            @error('nama_lokasi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>            
                    </div>

                    <div class="form-group row m-b-15">    
                        <x-cv42.label-form title="Alamat" />
                        <div class="col-md-5">
                            <input type="text" 
                                name        = "lokasi" 
                                class       = "form-control form-control-lg m-b-5 @error('lokasi') is-invalid @enderror" 
                                value       = "{{ old('title', $Rumahpompa->lokasi) }}" 
                            />
                                
                            @error('lokasi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>            
                    </div>

                    <div class="form-group row m-b-15">    
                        <x-cv42.label-form title="Telepon" />
                        <div class="col-md-5">
                            <input type="text" 
                                name        = "telepon" 
                                class       = "form-control form-control-lg m-b-5 @error('telepon') is-invalid @enderror" 
                                value       = "{{ old('title', $Rumahpompa->telepon) }}" 
                            />
                                
                            @error('telepon')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>            
                    </div>

                    <div class="form-group row m-b-15">    
                        <x-cv42.label-form title="Pembuat" />
                        <div class="col-md-5">
                            <input type="text" 
                                name        = "pembuat" 
                                class       = "form-control form-control-lg m-b-5 @error('pembuat') is-invalid @enderror" 
                                value       = "{{ old('title', $Rumahpompa->pembuat) }}" 
                            />
                                
                            @error('pembuat')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>            
                    </div>

                    <div class="form-group row m-b-15">    
                        <x-cv42.label-form title="Tahun Pembuatan" />
                        <div class="col-md-5">
                            <input type="date" 
                                name        = "tahun_pembuatan" 
                                class       = "form-control form-control-lg m-b-5 @error('tahun_pembuatan') is-invalid @enderror"
                                value       = "{{ old('title', $Rumahpompa->tahun_pembuatan) }}"  
                            />
                                
                            @error('tahun_pembuatan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>            
                    </div>

                    <div class="form-group row m-b-15">    
                        <x-cv42.label-form title="PDAM" />
                        <div class="col-md-5">
                            <input type="text" 
                                name        = "pdam" 
                                class       = "form-control form-control-lg m-b-5 @error('pdam') is-invalid @enderror" 
                                value       = "{{ old('title', $Rumahpompa->pdam) }}" 
                            />
                                
                            @error('pdam')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>            
                    </div>

                    <div class="form-group row m-b-15">    
                        <x-cv42.label-form title="Pompa Air" />
                        <div class="col-md-8">
                            <textarea 
                                name        = "pompa_air" 
                                class       = "form-control form-control-lg m-b-5 @error('pompa_air') is-invalid @enderror" 
                                rows        = "7">{{ old('title', $Rumahpompa->pompa_air) }}</textarea>

                            @error('pompa_air')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>            
                    </div>
                    
                    <div class="form-group row m-b-15">    
                        <x-cv42.label-form title="PLN" />
                        <div class="col-md-8">
                            <textarea 
                                name        = "pln" 
                                class       = "form-control form-control-lg m-b-5 @error('pln') is-invalid @enderror" 
                                rows        = "7">{{ old('title', $Rumahpompa->pln) }}</textarea>

                            @error('pln')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>            
                    </div>

                    <div class="form-group row m-b-15">    
                        <x-cv42.label-form title="Latitude" />
                        <div class="col-md-5">
                            <input type="text" 
                                name        = "latitude" 
                                class       = "form-control form-control-lg m-b-5 @error('latitude') is-invalid @enderror" 
                                value       = "{{ old('title', $Rumahpompa->latitude) }}" 
                            />
                                
                            @error('latitude')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>            
                    </div>

                    <div class="form-group row m-b-15">    
                        <x-cv42.label-form title="Longitude" />
                        <div class="col-md-5">
                            <input type="text" 
                                name        = "longitude" 
                                class       = "form-control form-control-lg m-b-5 @error('longitude') is-invalid @enderror" 
                                value       = "{{ old('title', $Rumahpompa->longitude) }}" 
                            />
                                
                            @error('longitude')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>            
                    </div>

                    <div class="form-group row m-b-15">    
                        <x-cv42.label-form title="Keterangan" />
                        <div class="col-md-5">
                            <textarea 
                                name        = "keterangan" 
                                class       = "form-control form-control-lg m-b-5 @error('keterangan') is-invalid @enderror" 
                                rows        = "3">{{ old('title', $Rumahpompa->keterangan) }}</textarea>

                            @error('keterangan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>            
                    </div>


                    <div class="form-group row m-b-15"> 
                        <div class="col-md-8 offset-md-2">
                            <x-cv42.button-submit />
                        </div>
                    </div>
                </form>
            </div>
        </div>   
    </div>    
@endsection
