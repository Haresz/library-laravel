<!DOCTYPE html>
<html lang="en">
    <head>
        @includeIf('partials.head.meta')
        @includeIf('partials.head.title')
        @includeIf('partials.head.css')
    </head>
    <body>
        @hasSection ('page-content')
            @yield('page-content')
        @endif

        @includeIf('partials.script.app')
    </body>
</html>
