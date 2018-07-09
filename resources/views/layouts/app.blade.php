<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @include('layouts.partials.htmlHeader')
  </head>
  <body class="hold-transition skin-blue sidebar-mini fixed">
    <div class="wrapper">
      @include('layouts.partials.header')
      @include('layouts.partials.sidebar')
      @yield('content')
      @include('layouts.partials.footer')
      @include('layouts.partials.controlSidebar')
    </div>
    @include('layouts.partials.scripts')
  </body>
</html>
