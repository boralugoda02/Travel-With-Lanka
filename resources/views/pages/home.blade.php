@extends('layouts.app')

@section('title', 'Home - Tourism Portal')

@section('content')
    
    <div class="relative overflow-hidden bg-gradient-to-br from-slate-900 via-blue-900 to-sky-700 text-white rounded-3xl p-8 md:p-16 text-center shadow-2xl mb-12 border border-sky-500/20">
        <div class="absolute -top-12 -right-12 w-48 h-48 bg-sky-400/20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-12 -left-12 w-48 h-48 bg-blue-600/30 rounded-full blur-3xl"></div>

        <span class="inline-block bg-sky-400/20 backdrop-blur-md text-sky-200 font-extrabold text-xs uppercase tracking-widest px-4 py-1.5 rounded-full mb-4 border border-sky-300/30">
             EXPLORE OCEAN & HERITAGE
        </span>
        <h1 class="text-3xl md:text-6xl font-black mb-4 leading-tight drop-shadow-md bg-clip-text text-transparent bg-gradient-to-r from-white via-sky-100 to-sky-300">
            Discover The Beauty of Sri Lanka
        </h1>
        <p class="text-sky-100/90 text-base md:text-xl max-w-2xl mx-auto mb-8 font-medium">
            Explore golden tropical beaches, serene highland waterfalls, and rich culture with our curated travel tours.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ url('/contact') }}" class="bg-gradient-to-r from-sky-400 to-blue-500 text-slate-950 font-black px-8 py-3.5 rounded-full shadow-xl hover:from-sky-300 hover:to-blue-400 transition-all transform hover:-translate-y-1">
                Book Your Tour Now 
            </a>
            <a href="{{ url('/about') }}" class="bg-white/10 backdrop-blur-md text-sky-100 font-bold px-8 py-3.5 rounded-full border border-sky-300/30 hover:bg-white/20 transition-all">
                Learn More 
            </a>
        </div>
    </div>

    
    <div class="grid md:grid-cols-3 gap-8">
        
        <div class="bg-slate-200/80 rounded-3xl p-6 shadow-md border border-slate-300/80 hover:shadow-xl transition-all transform hover:-translate-y-1">
            
            <span class="text-xs font-bold text-sky-900 bg-sky-200/90 px-3 py-1 rounded-full uppercase">Highlands</span>
            <h3 class="font-black text-xl text-slate-900 mt-3 mb-2">Central Highlands</h3>
            <p class="text-slate-600 text-sm leading-relaxed">Experience misty mountains, waterfalls, and tea gardens in Ella & Nuwara Eliya.</p>
        </div>

        
        <div class="bg-slate-200/80 rounded-3xl p-6 shadow-md border border-slate-300/80 hover:shadow-xl transition-all transform hover:-translate-y-1">
            
            <span class="text-xs font-bold text-blue-900 bg-blue-200/90 px-3 py-1 rounded-full uppercase">Coastline</span>
            <h3 class="font-black text-xl text-slate-900 mt-3 mb-2">Southern Coast</h3>
            <p class="text-slate-600 text-sm leading-relaxed">Relax on golden beaches, watch blue whales in Mirissa, and explore Galle Fort.</p>
        </div>

        
        <div class="bg-slate-200/80 rounded-3xl p-6 shadow-md border border-slate-300/80 hover:shadow-xl transition-all transform hover:-translate-y-1">
            
            <span class="text-xs font-bold text-slate-900 bg-slate-300 px-3 py-1 rounded-full uppercase">Wildlife</span>
            <h3 class="font-black text-xl text-slate-900 mt-3 mb-2">Wild Safaris</h3>
            <p class="text-slate-600 text-sm leading-relaxed">Witness wild elephants, leopards, and rich biodiversity at Yala National Park.</p>
        </div>
    </div>
@endsection