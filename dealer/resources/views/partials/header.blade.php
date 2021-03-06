        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ URL::asset('css/foundation.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css">

        <!-- Scripts -->
        <script src = "{{ URL::asset('js/jquery.js') }}"></script>
        <script src = "{{ URL::asset('js/foundation.min.js') }}"></script>