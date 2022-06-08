<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet"/>
        <script src="{{ mix('js/app.js') }}" defer></script>

        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div id="app">
            <div class="flex bg-gray-100 border-b border-gray-300 py-4" >
                <div class="container mx-auto flex justify-between">
                    <div class="flex">
                        <router-link class="mr-4" to='/' style="text-decoration: none;" exact>Home</router-link>
                        <router-link to='/about' style="text-decoration: none;"nbb >About</router-link>
                    </div>
                </div>
            </div>
            <div class="container mx-auto py-2">
                <router-view></router-view>
            </div>

        </div>
    </body>
</html>
