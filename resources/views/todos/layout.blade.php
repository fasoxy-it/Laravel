<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"/>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

        @livewireStyles

        <title>Create New ToDo</title>
    </head>
    <body>
        <div class="text-center flex justify-center pt-10">
            <div class="w-1/3 border border-gray-400 rounded py-4">
                @yield('content')
            </div>
        </div>

        @livewireScripts
        
    </body>
</html>
