@include('frontend.Auth.layouts.resources')
@include('frontend.Auth.layouts.header')

<body>
    <div id="auth">
        @yield('content')
    </div>
</body>

</html>

@yield('global.resources.footer')
@yield('private.js.file')
@yield('private.js.code')
