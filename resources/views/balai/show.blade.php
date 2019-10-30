@extends('layouts.master')

@section('content')
<div class="content">
    <div class="box box-primary">
        <div>
        <div class="box-body box-profile">
        <div class="row mt-3">
            <img class="profile-user-img img-responsive text-center" src="/img/logopu.jpg" alt="User profile picture">  
        </div>  
            <h1 class="profile-username text-center">Kementerian Pekerjaan Umum dan Perumahan Rakyat</h1>  
            <p class="text-muted text-center">Pusat Air Tanah dan Air Baku</p>
            <h1 class="profile-username text-center">{{{$balai->nmbalai}}}</h1>
        </div>
            <div class="row mt-5">                
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-building"></i></span>                
                        <div class="info-box-content">
                            <span class="info-box-text"><a href="/balai">Satker</a></span>
                            <span class="info-box-number">
                                        {{$satker->satker->count()}}
                                        <small>satker</small>
                            </span>
                        </div>
                    </div>
                </div>
                
                {{-- <div class="clearfix hidden-md-up"></div> --}}
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text"><a href="/paket">Jumlah Paket</a></span>
                            <span class="info-box-number">{{$balai->paket->count()}}<small>paket</small></span>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
        
                        <div class="info-box-content">
                            <span class="info-box-text">New Members</span>
                            <span class="info-box-number">2,000</span>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="row">                
                <div class="col-lg-4 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><sup style="font-size: 20px">Rp</sup>{{number_format($balai->paket->sum('pagurmp'))}}</h3>                        
                            <p>Jumlah Pagu</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{number_format($data_rekap->avg('progres_keu'),2)}}</h3>                        
                            <p>Progres Keuangan</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{number_format($data_rekap->avg('progres_fisik'),2)}}</h3>                        
                            <p>Progres Fisik</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Balai</h3>
                </div>        
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>No</th>
                                <th>Nama Satker</th>
                                <th>Pagu</th>
                                <th>Rencana Keuangan</th>
                                <th>Rencana Fisik</th>
                                <th>Progres Keuangan</th>
                                <th>Progres Fisik</th>
                                <th>Satker ID</th>
                                
                            </tr>
    
                        @foreach ($balai->paket as $no => $balai)                      
                            <tr>
                                <td>{{++$no}}</td>
                                <td><a href="/paket/{{$balai->id}}">{{$balai->nmpaket}}</td>
                                <td>{{$balai->pagurmp}}</td>
                                <td>{{$balai->keuangan}}</td>
                                <td>{{$balai->progres_fisik}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            
                        @endforeach
                        </tbody>
                    </table>
                    {{-- {{$wilayahall->links()}} --}}
                </div>        
            </div>       
        </div>    
    </div>
</div>

@endsection
