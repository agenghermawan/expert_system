  <!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      {{--style--}}
        
           @include('includes.style')

      {{-- End Style--}}

      <title>Lara View</title>
    </head>
    <body class="">
       
      {{-- header --}}
      @include('includes.header')
        
      <div class="content">
         @yield('content')
      </div>

      {{-- carousel --}}

      @include('includes.carousel')
    </body>

    @include('includes.script')

  </html>
