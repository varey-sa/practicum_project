<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Search Me</title>
    <link rel="stylesheet" href="https://bootswatch.com/paper/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.4/css/selectize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Scripts -->
    <script>
    window.Laravel = {
        !!json_encode([
            'csrfToken' => csrf_token(),
        ]) !!
    };
    </script>
</head>

<body>
    <div id="app">
        @include('layouts.partials.navbar')
        @yield('banner')
        <div class="row" style=" margin: 15px">
            <div class="col-sm-7" style="float: left">
                <form action="thread/search" method="get">
                    <!-- <div class="has-search"> -->
                    <input type="text" class="form-control" name="name" placeholder="Search...">

                    <!-- </div> -->
                </form>
            </div>
            <div class="col">
                <a class="btn btn-primary add-question" style="float: right" href="{{route('thread.create')}}"><i
                        class="fa fa-plus"></i> Ask Question</a>
            </div>
        </div>
        <div class="button-add"></div>
        <div class="thread-list-container">


            @include('layouts.partials.error')

            @include('layouts.partials.success')

            <!-- <div class="row"></div> -->
            <!-- @section('category')

            @include('layouts.partials.categories')
        @show -->

            <!-- <div class="col-md-9"> -->
            <!-- <div class="content-wrap "> -->
            @yield('content')
            <!-- </div> -->
        </div>
    </div>

    </div>
    </div>

    {{--<script src="https://code.jquery.com/jquery-3.1.1.min.js"--}}
    {{--integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="--}}
    {{--crossorigin="anonymous"></script>--}}
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    @yield('js')
</body>

</html>