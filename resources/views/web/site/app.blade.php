@include('web.site.layouts.head')

<body>
    <div class="page-wrapper">
@include('web.site.layouts.partials.nav')
@stack('card details')
        <div class="container">
           @yield('content')
        </div>
    </div>
@include('web.site.layouts.footer')
</body>
</html>