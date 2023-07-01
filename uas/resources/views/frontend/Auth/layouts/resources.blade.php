
@section('global.resources.head')
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/compiled/css/app.css" />
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/compiled/css/app-dark.css" />
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/compiled/css/auth.css" />
    <script src="{{ asset('assets/backend') }}/static/js/initTheme.js"></script>
@endsection

@section('global.resources.footer')
    {{-- <script src="{{ asset('assets/backend') }}/static/js/components/dark.js"></script> --}}
@endsection

@section('private.css.code')
    <style>
        #auth #auth-right {
            height: 100%;
            background: url({{ asset('assets/backend') }}/static/images/bg/4853433.png), linear-gradient(90deg, #2d499d, #3f5491)
        }
    </style>
@endsection
