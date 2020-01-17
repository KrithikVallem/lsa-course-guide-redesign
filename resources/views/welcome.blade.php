<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LSA Course Guide Redesign</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="public/lsacg_favicon.ico?" type="image/x-icon"/>
    </head>
    <body>
        <div id="app">
            <search-criteria-form></search-criteria-form>
        </div>
        <script src="{{asset('js/app.js')}}" ></script>
    </body>
</html>