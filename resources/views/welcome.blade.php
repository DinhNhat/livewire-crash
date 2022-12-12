<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- tailwindcss -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Styles -->
        @livewireStyles

    </head>
    <body class="">
        <h1>Livewire Crash Course</h1>

        <div x-data="{ open: false }">
            <button type="button" class="rounded-md border-4 border-lime-500 bg-slate-500" @click="open = ! open">Toggle Content</button>
         
            <div x-show="open">
                Content...
            </div>
        </div>

        <livewire:counter />
        

        <script type="text/javascript" src="{{ asset('vendor/livewire/livewire.js') }}"></script>
        @livewireScripts
        
        <!-- AlpineJs and Main JS -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
