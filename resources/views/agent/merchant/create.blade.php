@extends('layouts.app')

@section('content')

<div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.agent.sidebar')
        
        <!-- Page content -->
        <div id="page-content-wrapper">
            <div class="content-header">
                    <div class="box-header">
                        <div class="col-sm-6 col-xs-6 paddzero">
                                <h3 class="box-title">  
                                   Create Merchant
                                </h3>
                        </div>
                        <!-- <div class="col-sm-6 col-xs-6 paddzero" style="text-align:right;">
                               <button class="btn btn-primary"><a onclick="RegisterMerchant(false);return false;" class="btn bg-aqua"> <i class="fa fa-registered"></i> Register New Merchant</a></button>
                        </div> -->
                    </div>
            </div>

                <merchant-profile></merchant-profile>          
                <!-- ./tab-content -->
        </div>
  
                 <!--   <div class="jumbotron text-center" >
                            <h1>Hello Beautiful!</h1>
                            <p>This is a sidebar navigation responsive template built off of Bootstrap 3.0 and simple sidebar template. It includes anchors, scroll spy, smooth scroll, and Awesome icon fonts.</p>
                            <p><a class="btn btn-default">Click On Me!</a>
                            <a class="btn btn-info">Tweet Me!</a></p>
                        </div>
    
                </div> -->

              
    </div>                                                                          
@endsection