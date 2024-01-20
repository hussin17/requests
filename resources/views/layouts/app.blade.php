<!DOCTYPE html>
{{-- {{ str_replace('_', '-', app()->getLocale()) }} --}}
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    {{-- Fontowsem CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBo5TTC5F5cxK5hht5w54a654a6wWp654a654a654a654a6wWp654a6wWp654a6wWp654a6wWp654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a654a6" />


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>
