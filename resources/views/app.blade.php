@include('layouts.header')



@include('layouts.logoutModal')

@include('layouts.sidebar')

@include('profile.edit')

@yield('content')

@include('layouts.navbar')
@include('layouts.footer')