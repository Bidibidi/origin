<nav class="navbar navbar-expand-md navbar-light navbar-laravel ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Bidibidi Origin') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->


                            <li><a href="{{ route('index') }}">{{  trans('bidibidi-origin-lang::origin-lang.index.1') }}</a></li>
                            <li><a href="{{ route('aboutus') }}">{{  trans('bidibidi-origin-lang::origin-lang.aboutus.1') }}</a></li>
                            <li><a href="{{ route('aboutus') }}">{{  trans('bidibidi-origin-lang::origin-lang.contact.1') }}</a></li>                            


                 </ul>
                </div>
            </div>
        </nav>