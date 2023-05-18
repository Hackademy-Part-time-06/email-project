<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href={{route('homepage')}}>
    <img src="https://d1yjjnpx0p53s8.cloudfront.net/styles/logo-thumbnail/s3/102012/fjallr_fox_black.jpg?itok=JyuWhkaL" width="30" height="30" alt="">
  </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            
                            <li class="nav-item"><a class="nav-link  @if (Route::currentRouteName()=='homepage') active @endif " href={{route('homepage')}}>Home</a></li>
                            <li class="nav-item"><a class="nav-link  @if (Route::currentRouteName()=='form') active @endif" href={{route('form')}}>Contact</a></li>
                            <li class="nav-item"><a class="nav-link  @if (Route::currentRouteName()=='product') active @endif" href="pricing.html">Poduct</a></li>
                            <li class="nav-item"><a class="nav-link  @if (Route::currentRouteName()=='about') active @endif" href="faq.html">About</a></li>
                            
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


           
                
            