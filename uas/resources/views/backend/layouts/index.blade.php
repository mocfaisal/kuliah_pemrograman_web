@include('backend.layouts.resources')
@include('backend.layouts.header')

<body>
    <div id="app">

        @include('backend.layouts.sidebar')

        <div id="main" class="layout-navbar navbar-fixed">
            <header>
                <nav class="navbar navbar-expand navbar-light navbar-top">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            @include('backend.layouts.navbar')
                        </div>
                    </div>
                </nav>
            </header>

            <div id="main-content">
                <section class="section">
                    @yield('content')
                </section>
            </div>

            @include('backend.layouts.footer')

        </div>
    </div>

    @yield('global.resources.footer')
    @yield('global.javascript.footer')
    @yield('private.js.file')
    @yield('private.js.code')

</body>

</html>
