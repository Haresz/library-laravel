<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
    <head>
        @includeIf('partials.head.meta')
        @includeIf('partials.head.title')
        @includeIf('partials.head.auth.css')
    </head>
    <body class="h-100" >
        @hasSection ('page-content')
            @yield('page-content')
        @endif

        @includeIf('partials.script.app')
        @includeIf('partials.script.popup')
        @includeIf('partials.script.bootstrap')
    </body>
</html>
