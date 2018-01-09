@extends('layouts.app')

@section('content')
<script async defer type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3wXe6QYs4TSAiOosIUojgXRVmqtQCj6M"></script>
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

                <div class="page-content inset" data-spy="scroll" data-target="#spy">
                    <div class="row">

                        <div class="card">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#BasicInformation">Basic Information</a></li>
                                    <li><a data-toggle="tab" href="#MerchantAddress">Merchant Address</a></li>
                                    <li><a data-toggle="tab" href="#MerchantCategory">Merchant Category</a></li>
                                    <li><a data-toggle="tab" href="#API">API</a></li>
                                </ul>

                                <div class="tab-content" style="padding: 0">
                                            <div id="BasicInformation" class="tab-pane fade in active" style="padding: 0; max-height : 300px;">  
                                                <div class="col-md-6">
                                                    <div class="panel" style="padding: 20px;">
                                                        <div class="panel-body">
                                                            <form>
                                                                <div class="form-group">
                                                                    <label class="project-label">Merchant Name
                                                                    <span class="text-danger">*</span></label>
                                                                    <input type="text" placeholder="e.g. Go3 Solutions Infotech" class="form-control">
                                                                    <br>
                                                                    <br>

                                                                    <label class="project-label">Contact Last Name
                                                                    <span class="text-danger">*</span></label>
                                                                    <input type="text" placeholder="e.g. Musk" class="form-control">
                                                                    <br>
                                                                    <br>
                                                                    
                                                                    <label class="project-label">Contact First Name
                                                                    <span class="text-danger">*</span></label>
                                                                    <input type="text" placeholder="e.g. Elon" class="form-control">
                                                                    <br>
                                                                    <br>

                                                                    <label class="project-label">Username
                                                                    <span class="text-danger">*</span></label>
                                                                    <input type="text" placeholder="e.g. tesla007" class="form-control">
                                                                    <br>
                                                                    <br>

                                                                    <label class="project-label">Password
                                                                    <span class="text-danger">*</span></label>
                                                                    <input type="password" class="form-control">
                                                                    <br>
                                                                    <br>

                                                                    <label class="project-label">Email Address
                                                                    <span class="text-danger">*</span></label>
                                                                    <input type="text" placeholder="e.g. elonm@goetu.com" class="form-control">
                                                                    <br>
                                                                    <br>
                                                                    
                                                                    
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="panel" style="padding: 20px;">
                                                        <div class="panel-body">
                                                            <form>
                                                                <div class="form-group">
                                                                    
                                                                    <label class="project-label">Support Email Address
                                                                    <span class="text-danger">*</span></label>
                                                                    <input type="text" placeholder="e.g. elomsup@goetu.com" class="form-control">
                                                                    <br>
                                                                    <br>

                                                                    <label class="project-label">Support Contact No
                                                                    <span class="text-danger">*</span></label>
                                                                    <input type="text" placeholder="" class="form-control">
                                                                    <br>
                                                                    <br>
                                                                    
                                                                    <label class="project-label">Telephone No
                                                                    <span class="text-danger">*</span></label>
                                                                    <input type="text" placeholder="" class="form-control">
                                                                    <br>
                                                                    <br>

                                                                    <label class="project-label">Mobile Phone
                                                                    <span class="text-danger">*</span></label>
                                                                    <input type="text" placeholder="" class="form-control">
                                                                    <br>
                                                                    <br>

                                                                    <label class="project-label">Fax
                                                                    <span class="text-danger">*</span></label>
                                                                    <input type="text" placeholder="" class="form-control">
                                                                    <br>
                                                                    <br>

                                                                    <label class="project-label">Check in Rate
                                                                    <span class="text-danger">*</span></label>
                                                                    <input type="text" placeholder="" class="form-control">
                                                                    <br>
                                                                    <br>
                                                                    
                                                                    
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="MerchantAddress" class="tab-pane fade" style="padding: 0; min-height : 300px;">
                                                <div style="width: 100%; height: 300px;">
                                                    <div style="width: 100%; height: 100%;">
                                                        
                                                            <i class="i pe-7s-drawer pe-5x"></i>
                                                                <div class="col-md-6">
                                                                    <div class="panel" style="padding: 20px;">
                                                                        <div class="panel-body">
                                                                            <form>
                                                                                <div class="form-group">
                                                                                    
                                                                                    <label class="project-label">Address
                                                                                    <span class="text-danger">*</span></label>
                                                                                    <input type="text" placeholder="" class="form-control">
                                                                                    <br>
                                                                                    <br>

                                                                                    <label class="project-label">Country
                                                                                    <span class="text-danger">*</span></label>
                                                                                    <input type="text" placeholder="" class="form-control">
                                                                                    <br>
                                                                                    <br>
                                                                                    
                                                                                    <label class="project-label">City
                                                                                    <span class="text-danger">*</span></label>
                                                                                    <input type="text" placeholder="" class="form-control">
                                                                                    <br>
                                                                                    <br>

                                                                                    <label class="project-label">State
                                                                                    <span class="text-danger">*</span></label>
                                                                                    <input type="text" placeholder="" class="form-control">
                                                                                    <br>
                                                                                    <br>

                                                                                    <label class="project-label">Zip Code
                                                                                    <span class="text-danger">*</span></label>
                                                                                    <input type="text" placeholder="" class="form-control">
                                                                                    <br>
                                                                                    <br>

                                                                                    <label class="project-label">Latitude
                                                                                    <span class="text-danger">*</span></label>
                                                                                    <input type="text" placeholder="" class="form-control">
                                                                                    <br>
                                                                                    <br>

                                                                                    <label class="project-label">Longtitude
                                                                                    <span class="text-danger">*</span></label>
                                                                                    <input type="text" placeholder="" class="form-control">
                                                                                    <br>
                                                                                    <br>
                                                                        
                                                                    
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="col-md-6">
                                                                    <div class="panel" style="padding: 20px;">
                                                                        <div class="panel-body">
                                                                            <div id="map"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                           
                                                    </div>
                                                </div>
                                            </div>
                                                        

                                            <div id="MerchantCategory" class="tab-pane fade" style="padding: 0; min-height : 300px;">
                                                <div style="width: 100%; height: 300px;">
                                                    <div style="width: 100%; height: 100%;">
                                                        
                                                            <i class="i pe-7s-drawer pe-5x"></i>
                                                                <div class="col-md-6">
                                                                    <div class="panel" style="padding: 20px;">
                                                                        <div class="panel-body">
                                                                            <form>
                                                                                <div class="form-group">
                                                                                    
                                                                                    <select class="form-control">
                                                                                        <option value="Restaurant">Restaurant</option>
                                                                                        <option value="Nail & Spa">Nail & Spa</option>
                                                                                        <option value="Grocery & Supermarket">Grocery & Supermarket</option>
                                                                                        <option value="Travel & Entertaimment">Travel & Entertaimment</option>
                                                                                        <option value="Retail">Retail</option>
                                                                                        <option value="Gas Station">Gas Station</option>
                                                                                        <option value="Health & Fitness">Health & Fitness</option>
                                                                                        <option value="Hotel">Hotel</option>
                                                                                    </select>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>       

                                            <div id="API" class="tab-pane fade" style="padding: 0; min-height : 300px;">
                                                <div style="width: 100%; height: 300px;">
                                                    <div style="width: 100%; height: 100%;">
                                                       
                                                            <i class="i pe-7s-drawer pe-5x"></i>
                                                                <div class="col-md-6">
                                                                    <div class="panel" style="padding: 20px;">
                                                                        <div class="panel-body">
                                                                            <form>
                                                                                <div class="form-group">
                                                                                    
                                                                                    <input type="checkbox" checked data-toggle="toggle" data-style="ios" data-onstyle="success" data-offstyle="danger">
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                </div>    
                        </div>
                    </div>
                </div>
                               
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
    
                                                                                <script>
                                                                                    $(document).ready(function () {
                                                                                        setTimeout(function() {
                                                                                                (function initMap() {
                                                                                                    var imus = {lat: 40.730610, lng: -73.935242};
                                                                                                    
                                                                                                    var map = new google.maps.Map(document.getElementById('map'), {
                                                                                                    zoom: 13,
                                                                                                    center: imus
                                                                                                    });

                                                                                                    var marker = new google.maps.Marker({
                                                                                                    position: imus,
                                                                                                    map: map
                                                                                                    });
                                                                                                    
                                                                                            })();
                                                                                        }, 1855);
                                                                                           
                                                                                    });
                                                                                
                                                                                </script>
                                                                       
                                                                                
@endsection