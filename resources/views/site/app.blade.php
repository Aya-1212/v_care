@include('site.layouts.head')

<body>
    <div class="page-wrapper">
@include('site.layouts.partials.nav')
@stack('card details')
        <div class="container">
           @yield('content')
        </div>
    </div>
@include('site.layouts.footer')
</body>
</html>