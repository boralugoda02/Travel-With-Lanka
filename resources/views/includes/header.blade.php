<header class="bg-gradient-to-r from-slate-900 via-blue-900 to-sky-900 text-white shadow-xl sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4">
        <div class="flex justify-between items-center">
            
            
            <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                
                <span class="bg-gradient-to-r from-sky-400 to-blue-500 text-slate-900 font-black text-xl px-3 py-1.5 rounded-xl shadow-md transform group-hover:scale-110 transition-transform">
                    LK
                </span>
                
                
                <span class="text-2xl sm:text-3xl font-extrabold tracking-tight bg-clip-text text-transparent bg-gradient-to-r from-white via-sky-100 to-sky-300">
                    Travel With Lanka
                </span>
            </a>

            
            <button id="menu-btn" class="md:hidden text-sky-200 focus:outline-none p-2 rounded-xl bg-blue-950/60 hover:bg-blue-900 transition border border-sky-500/30">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            
            <nav class="hidden md:flex items-center space-x-6 text-sm font-bold">
                <a href="{{ url('/') }}" 
                   class="{{ request()->is('/') ? 'text-sky-300 border-b-2 border-sky-400 font-extrabold' : 'text-slate-200 hover:text-sky-300' }} transition-colors py-1">
                   Home
                </a>

                <a href="{{ url('/about') }}" 
                   class="{{ request()->is('about') ? 'text-sky-300 border-b-2 border-sky-400 font-extrabold' : 'text-slate-200 hover:text-sky-300' }} transition-colors py-1">
                   About Us
                </a>

                <a href="{{ url('/contact') }}" 
                   class="{{ request()->is('contact') ? 'text-sky-300 border-b-2 border-sky-400 font-extrabold' : 'text-slate-200 hover:text-sky-300' }} transition-colors py-1">
                   Contact Us
                </a>
            </nav>
        </div>

        
        <nav id="mobile-menu" class="hidden md:hidden flex-col space-y-2 pt-4 pb-2 border-t border-sky-500/30 mt-3 text-sm font-bold">
            <a href="{{ url('/') }}" 
               class="{{ request()->is('/') ? 'text-sky-300 bg-blue-950/80 px-3 py-1.5 rounded-lg' : 'text-slate-200 hover:text-sky-300' }} transition-colors block">
               Home
            </a>

            <a href="{{ url('/about') }}" 
               class="{{ request()->is('about') ? 'text-sky-300 bg-blue-950/80 px-3 py-1.5 rounded-lg' : 'text-slate-200 hover:text-sky-300' }} transition-colors block">
               About Us
            </a>

            <a href="{{ url('/contact') }}" 
               class="{{ request()->is('contact') ? 'text-sky-300 bg-blue-950/80 px-3 py-1.5 rounded-lg' : 'text-slate-200 hover:text-sky-300' }} transition-colors block">
               Contact Us
            </a>
        </nav>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('flex');
        });
    });
</script>