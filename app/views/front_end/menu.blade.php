                    <ul class="nav navbar-nav">
                        <li {{$home_active}}><a href="home">Home</a></li>
                        <li {{$about_active}}><a href="about">About</a></li>
                        <li {{$services_active}} ><a href="services">Service</a></li>
                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Features <b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="button.html">Buttons</a></li>
                            </ul>
                        </li>
                        <li {{$pricing_active}} ><a href="pricing">Pricing</a></li>

                        <li {{$contact_active}}><a href="contact">Contact</a></li>
                        <li><input type="text" placeholder=" Search" class="form-control search"></li>
                    </ul>
