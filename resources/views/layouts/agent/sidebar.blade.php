<div id="sidebar-wrapper">
            <nav id="spy">
                <ul class="sidebar-nav nav">
                    <li class="sidebar-brand">
                        <!-- Branding Image -->
                        <a href="{{ url('/') }}" class="logo">
                            <!-- logo for regular state and mobile devices -->
                            <span class="logo-lg"><img class="logo-img" src="{{ asset('img/logomainpage.png') }}"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#anch1" data-scroll>
                            <span>Merchant</span>
                        </a>
                    </li>
                    <li>
                        <a href="#anch2" data-scroll>
                            <span>List of Categories</span>
                        </a>
                    </li>
                    <li>
                        <a href="#anch3" data-scroll>
                            <span>SMS</span>
                        </a>
                    </li>

                    <div class="back-button">    
                        <button class="btn" type="button" style="background-color: transparent !important;"><a href="{{ URL::previous() }}"><i class="fa fa-arrow-circle-left" style="color:Tomato; font-size: 40px;"></i></a></button>
                    </div>

                </ul>
            </nav>
        </div>
