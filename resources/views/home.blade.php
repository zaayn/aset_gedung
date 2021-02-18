@extends('layouts.master')

@section('content_header') 
<div class="panel">
    <div class="panel-body">
        <div class="col-md-6 col-sm-12">
          <h3 class="animated fadeInLeft">Welcome {{Auth::user()->name}}</h3>
          <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Batavia,Indonesia</p>
      </div>
      <div class="col-md-6 col-sm-12">
          <div class="col-md-6 col-sm-6 text-right" style="padding-left:10px;">
            <h3 style="color:#DDDDDE;"><span class="fa  fa-map-marker"></span> Surabaya</h3>
            <h1 style="margin-top: -10px;color: #ddd;">30<sup>o</sup></h1>
          </div>
          <div class="col-md-6 col-sm-6">
             <div class="wheather">
              <div class="stormy rainy animated pulse infinite">
                <div class="shadow">
                  
                </div>
              </div>
              <div class="sub-wheather">
                <div class="thunder">
                  
                </div>
                <div class="rain">
                    <div class="droplet droplet1"></div>
                    <div class="droplet droplet2"></div>
                    <div class="droplet droplet3"></div>
                    <div class="droplet droplet4"></div>
                    <div class="droplet droplet5"></div>
                    <div class="droplet droplet6"></div>
                  </div>
              </div>
            </div>
          </div>                   
      </div>
    </div>                    
  </div>
@endsection

@section('content')
<div class="col-md-12" style="padding:20px;">
    <div class="col-md-12 padding-0">
        <div class="col-md-12 padding-0">
            <a href="user">
                <div class="col-md-6">
                    <div class="panel box-v1">
                        <div class="panel-heading bg-white border-none">
                            <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                            <h4 class="text-left">User</h4>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <h4>
                            <span class="icon-user icons icon text-right"></span>
                            </h4>
                            </div>
                        </div>
                        <div class="panel-body text-center">
                            <h1>{{$user}}</h1>
                            <p>User Aktif</p>
                            <hr/>
                        </div>
                    </div>
                </div>
            </a>
            <a href="kampus">
                <div class="col-md-6">
                    <div class="panel box-v1">
                        <div class="panel-heading bg-white border-none">
                            <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                            <h4 class="text-left">Kampus</h4>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <h4>
                            <span class="icon-user icons icon text-right"></span>
                            </h4>
                            </div>
                        </div>
                        <div class="panel-body text-center">
                            <h1>{{$kampus}}</h1>
                            <p>Total Kampus</p>
                            <hr/>
                        </div>
                    </div>
                </div>
            </a>
            <a href="gedung">
                <div class="col-md-6">
                    <div class="panel box-v1">
                        <div class="panel-heading bg-white border-none">
                            <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                            <h4 class="text-left">Gedung</h4>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <h4>
                            <span class="icon-user icons icon text-right"></span>
                            </h4>
                            </div>
                        </div>
                        <div class="panel-body text-center">
                            <h1>{{$gedung}}</h1>
                            <p>Total Gedung</p>
                            <hr/>
                        </div>
                    </div>
                </div>
            </a>
            <a href="ruang">
                <div class="col-md-6">
                    <div class="panel box-v1">
                        <div class="panel-heading bg-white border-none">
                            <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                            <h4 class="text-left">Ruang</h4>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <h4>
                            <span class="icon-user icons icon text-right"></span>
                            </h4>
                            </div>
                        </div>
                        <div class="panel-body text-center">
                            <h1>{{$ruang}}</h1>
                            <p>Total Ruang</p>
                            <hr/>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection