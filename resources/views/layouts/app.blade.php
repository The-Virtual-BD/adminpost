<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @vite('resources/css/app.css')
    <script src="{{asset('build/assets/app.ed052aec.css')}}"></script>
    <title>Post Bahamas | @yield('title')</title>

    @yield('css')
    <script>
        let BASE_URL = {!! json_encode(url('/')) !!} + "/";
        var PROCESSING_IMG = "{{ asset('images/ajax-loading.gif') }}";
    </script>
    <script src="{{asset('build/assets/app.334e7359.js')}}"></script>
</head>

<body class="font-sans leading-normal tracking-normal mt-12">

    @include('layouts.partials.header')

    <main class="mt-[67px]">

        <div class="flex flex-col md:flex-row">



            @include('layouts.partials.sidebar')
            <section class="w-full">
                @yield('content')
            </section>
        </div>
    </main>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iconify/2.0.0/iconify.min.js"
        integrity="sha512-lYMiwcB608+RcqJmP93CMe7b4i9G9QK1RbixsNu4PzMRJMsqr/bUrkXUuFzCNsRUo3IXNUr5hz98lINURv5CNA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @yield('script')
</body>

</html>
