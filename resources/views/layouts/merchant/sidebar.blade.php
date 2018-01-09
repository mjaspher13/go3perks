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
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#anch2" data-scroll>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#anch3" data-scroll>
                            <span>Marketing</span>
                        </a>
                    </li>
                    <li>
                        <a href="#anch4" data-scroll>
                            <span>Reports</span>
                        </a>
                    </li>
                    <li>
                        <a href="#anch5" data-scroll>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="#anch6" data-scroll>
                            <span>Support</span>
                        </a>
                    </li>

                    <div class="back-button">    
                        <button class="btn" type="button" style="background-color: transparent !important;"><a href="{{ URL::previous() }}"><i class="fa fa-arrow-circle-left" style="color:Tomato; font-size: 40px;"></i></a></button>
                    </div>

                </ul>
            </nav>
        </div>
