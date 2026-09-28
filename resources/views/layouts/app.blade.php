<!DOCTYPE html>
<html lang="en">
<head>
    <title>laravel-blade-onboarding | @yield('title', 'Ocean Tourism')</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='22' fill='%230f172a' stroke='%2338bdf8' stroke-width='4'/><text x='50' y='68' font-size='50' font-weight='bold' font-family='Arial, sans-serif' fill='white' text-anchor='middle'>TL</text></svg>">
    @include('includes.head')
</head>
<body class="flex flex-col min-h-screen bg-slate-100 text-slate-800 antialiased">

    
    @include('includes.header')

    
    <main class="flex-grow container mx-auto px-4 sm:px-6 py-8">
        @yield('content')
    </main>

    
    @include('includes.footer')

</body>
</html>