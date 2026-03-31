<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Universitas Kristen Petra')</title>

    {{-- Tailwind CSS CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        petra: {
                            blue:    '#003DA5',
                            gold:    '#F5A623',
                            dark:    '#0A1628',
                            light:   '#F0F4FF',
                        }
                    },
                    fontFamily: {
                        display: ['"Playfair Display"', 'serif'],
                        sans:    ['"Plus Jakarta Sans"', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .nav-link {
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: #F5A623;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }
        .nav-link.active {
            color: #F5A623;
        }
    </style>
</head>
<body class="bg-white text-gray-800 antialiased">

    {{-- Navigation Bar --}}
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-sm shadow-sm border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">

                {{-- Logo --}}
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="w-12 h-12 bg-petra-blue rounded-full flex items-center justify-center shadow-md group-hover:shadow-lg transition-shadow">
                        <span class="text-white font-display font-bold text-lg">UK</span>
                    </div>
                    <div class="hidden sm:block">
                        <p class="font-display font-bold text-petra-blue text-base leading-tight">PETRA</p>
                        <p class="font-display text-gray-500 text-xs leading-tight tracking-widest uppercase">Christian University</p>
                    </div>
                </a>

                {{-- Desktop Menu --}}
                <div class="hidden md:flex items-center gap-10">
                    <a href="{{ route('home') }}"
                       class="nav-link font-semibold text-sm tracking-wide text-gray-700 hover:text-petra-blue transition-colors {{ request()->routeIs('home') ? 'active text-petra-gold' : '' }}">
                        Home
                    </a>
                    <a href="{{ route('facility') }}"
                       class="nav-link font-semibold text-sm tracking-wide text-gray-700 hover:text-petra-blue transition-colors {{ request()->routeIs('facility') ? 'active text-petra-gold' : '' }}">
                        Facility
                    </a>
                    <a href="https://petra.ac.id" target="_blank"
                       class="bg-petra-blue text-white px-5 py-2.5 rounded-full text-sm font-semibold hover:bg-blue-800 transition-colors shadow-sm">
                        Daftar Sekarang
                    </a>
                </div>

                {{-- Mobile Hamburger --}}
                <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg text-gray-600 hover:bg-gray-100 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>

            {{-- Mobile Menu --}}
            <div id="mobile-menu" class="hidden md:hidden pb-4 border-t border-gray-100 pt-4">
                <div class="flex flex-col gap-4">
                    <a href="{{ route('home') }}"
                       class="font-semibold text-sm text-gray-700 hover:text-petra-blue transition-colors {{ request()->routeIs('home') ? 'text-petra-blue' : '' }}">
                        Home
                    </a>
                    <a href="{{ route('facility') }}"
                       class="font-semibold text-sm text-gray-700 hover:text-petra-blue transition-colors {{ request()->routeIs('facility') ? 'text-petra-blue' : '' }}">
                        Facility
                    </a>
                    <a href="https://petra.ac.id" target="_blank"
                       class="bg-petra-blue text-white px-5 py-2.5 rounded-full text-sm font-semibold text-center hover:bg-blue-800 transition-colors">
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>
    </nav>

    {{-- Page Content --}}
    <main class="pt-20">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-petra-dark text-white py-12 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-petra-blue rounded-full flex items-center justify-center">
                            <span class="text-white font-display font-bold">UK</span>
                        </div>
                        <div>
                            <p class="font-display font-bold text-white text-sm">PETRA</p>
                            <p class="text-gray-400 text-xs tracking-widest uppercase">Christian University</p>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        #1 Best Private University in East Java<br>
                        QS World University Rankings 2026
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold text-sm text-petra-gold uppercase tracking-widest mb-4">Navigasi</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                        <li><a href="{{ route('facility') }}" class="hover:text-white transition-colors">Facility</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-sm text-petra-gold uppercase tracking-widest mb-4">Kontak</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Jl. Siwalankerto 121–131<br>
                        Surabaya 60236, Indonesia<br>
                        (031) 2983000
                    </p>
                </div>
            </div>
            <div class="border-t border-white/10 mt-10 pt-6 text-center text-gray-500 text-xs">
                &copy; {{ date('Y') }} Universitas Kristen Petra. All rights reserved.
            </div>
        </div>
    </footer>

    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        btn.addEventListener('click', () => menu.classList.toggle('hidden'));
    </script>
</body>
</html>
