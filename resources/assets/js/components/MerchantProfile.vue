<template>
    <div>
           <loading
            :show="show"
            :label="label"
            :overlay="overlay">
        </loading>
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
                                                                    <label class="merchant-name">Merchant Name
                                                                    <span class="text-danger">*</span></label>
                                                                    <input type="text" placeholder="e.g. Go3 Solutions Infotech" class="form-control">
                                                                    <br>
                                                                    <br>

                                                                    <label class="contact-lastname">Contact Last Name
                                                                    <span class="text-danger">*</span></label>
                                                                    <input type="text" placeholder="e.g. Musk" class="form-control">
                                                                    <br>
                                                                    <br>
                                                                    
                                                                    <label class="contact-firstname">Contact First Name
                                                                    <span class="text-danger">*</span></label>
                                                                    <input type="text" placeholder="e.g. Elon" class="form-control">
                                                                    <br>
                                                                    <br>

                                                                    <label class="username">Username
                                                                    <span class="text-danger">*</span></label>
                                                                    <input type="text" placeholder="e.g. tesla007" class="form-control">
                                                                    <br>
                                                                    <br>

                                                                    <label class="password">Password
                                                                    <span class="text-danger">*</span></label>
                                                                    <input type="password" class="form-control">
                                                                    <br>
                                                                    <br>

                                                                    <label class="email">Email Address
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
                                                                    
                                                                    <label class="support-email">Support Email Address
                                                                    <span class="text-danger">*</span></label>
                                                                    <input type="text" placeholder="e.g. elomsup@goetu.com" class="form-control">
                                                                    <br>
                                                                    <br>

                                                                    <label class="support-contact">Support Contact No
                                                                    <span class="text-danger">*</span></label>
                                                                    <input type="text" placeholder="" class="form-control">
                                                                    <br>
                                                                    <br>
                                                                    
                                                                    <label class="telephone">Telephone No
                                                                    <span class="text-danger">*</span></label>
                                                                    <input type="text" placeholder="" class="form-control">
                                                                    <br>
                                                                    <br>

                                                                    <label class="mobile-phone">Mobile Phone
                                                                    <span class="text-danger">*</span></label>
                                                                    <input type="text" placeholder="" class="form-control">
                                                                    <br>
                                                                    <br>

                                                                    <label class="fax">Fax
                                                                    <span class="text-danger">*</span></label>
                                                                    <input type="text" placeholder="" class="form-control">
                                                                    <br>
                                                                    <br>

                                                                    <label class="checkin-rate">Check in Rate
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
                                                                                    
                                                                                    <label class="addrress">Address
                                                                                    <span class="text-danger">*</span></label>
                                                                                    <input type="text" placeholder="" class="form-control">
                                                                                    <br>
                                                                                    <br>

                                                                                    <label class="country">Country
                                                                                    <span class="text-danger">*</span></label>
                                                                                    <select class="form-control" v-model="selectedCountry" v-on:change="fetchState">
                                                                                    <option v-for="country in countries">{{country}}</option>
                                                                                    </select>
                                                                                    <br>
                                                                                    <br>

                                                                                    <label class="state">State
                                                                                    <span class="text-danger">*</span></label>
                                                                                    <select class="form-control" :disabled="disabled == 1 ? true : false">
                                                                                        <option v-for="state in states">{{state}}</option>
                                                                                    </select>
                                                                                    <br>
                                                                                    <br>      
                                                                                    
                                                                                    <label class="city">City
                                                                                    <span class="text-danger">*</span></label>
                                                                                    <input type="text" placeholder="" class="form-control">
                                                                                    <br>
                                                                                    <br>

                                                                                    <label class="zip-code">Zip Code
                                                                                    <span class="text-danger">*</span></label>
                                                                                    <input type="text" placeholder="" class="form-control">
                                                                                    <br>
                                                                                    <br>

                                                                                    <label class="latitude">Latitude
                                                                                    <span class="text-danger">*</span></label>
                                                                                    <input type="text" placeholder="" class="form-control">
                                                                                    <br>
                                                                                    <br>

                                                                                    <label class="longitude">Longtitude
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
                                                                                    
                                                                                    <toggle-button/>
                                                                                    <toggle-button :value="false" :sync="true" :labels="true"/>
                                                                                    
                                                                                    
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
                     
                                              
        
    </div>
</template>

<script>
import Loading from 'vue-full-loading';

    export default {
        components: {
            Loading
        },
        data() {
            return {
                disabled: 1,
                show: false,
                label: 'Loading...',
                timeOut: 2000,
                overlay: true,
                selectedCountry: [],
                countries: [],
                states: []
            };
        },
        
        mounted() {
            this.fetchCountries();
        },
        
        methods: {
            fetchCountries() {
                this.show = true;
                axios.get("countries").then((res) => {
                    this.countries = res.data;
                    this.show = false;
                });
            },

            fetchState() {
                 this.show = true;
                 axios.get("states/"+this.selectedCountry).then((res) => {
                    this.states = res.data;
                    this.disabled = 0;
                    this.show = false;
                });
               
            }
        }
    }
</script>
<style scope>
    .white-overlay {
        background-color: rgba(240, 240, 251, 0.75) !important;
    }

</style>
