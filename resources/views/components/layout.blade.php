<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Solution</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white font-hanken-grotesk">
   
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>

            <div class="space-x-6"> 
                <a href="/"> Jobs </a>
                <a href="/careers"> Careers </a>
                <a href="/salaries"> Salaries </a>
                <a href="/companies"> Companies </a>
            </div>
            @auth 
                <div class="space-x-6 flex font-bold">
                    <a href="/jobs/create"> Post a Job</a>
                    
                    <form action="/logout" method="POST">
                        @csrf
                        @method('DELETE')

                        <button> Log Out </button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="space-x-6 flex font-bold">
                    <a href="/login"> Log In </a>    
                    <a href="/register"> Sign Up </a>
                </div>
            @endguest
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>

    </div>
</body>
    <footer class="mt-auto">
        <div class="px-10">
            <nav class="flex justify-between items-center py-4 border-t border-white/10 mt-10">
                <div>
                    <a href="/">
                        <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                    </a>
                </div>

                <div>
                    <p>© 2021 Pixel Solution. All Right Reserved.</p>
                </div>
            </nav>
        </div>
    </footer>
</html>