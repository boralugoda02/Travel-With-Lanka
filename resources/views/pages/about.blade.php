@extends('layouts.app')

@section('title', 'About Us - Tourism Portal')

@section('content')
    <div class="max-w-4xl mx-auto bg-slate-200/90 p-8 md:p-12 rounded-3xl shadow-xl border border-slate-300">
        <span class="bg-sky-200 text-sky-900 font-bold text-xs px-3 py-1 rounded-full uppercase tracking-wider">Our Story</span>
        <h1 class="text-3xl md:text-4xl font-black text-slate-900 mt-2 mb-6">About Our Journey</h1>
        
        <p class="text-slate-700 leading-relaxed mb-8 text-base font-medium">
            We are dedicated to presenting Sri Lanka's finest destinations through a seamless, reliable, and modern travel platform.
        </p>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="p-6 bg-gradient-to-br from-slate-900 to-blue-900 text-white rounded-2xl shadow-lg">
                <div class="text-3xl mb-2"></div>
                <h3 class="font-extrabold text-xl mb-2 text-sky-200">Our Mission</h3>
                <p class="text-sky-100/90 text-sm">To provide eco-friendly, high-quality, and memorable travel experiences while supporting local communities.</p>
            </div>

            <div class="p-6 bg-gradient-to-br from-sky-500 to-blue-600 text-white rounded-2xl shadow-lg">
                <div class="text-3xl mb-2"></div>
                <h3 class="font-extrabold text-xl mb-2 text-white">Why Choose Us?</h3>
                <p class="text-sky-50 text-sm">Expert local guides, 24/7 travel support, customized tour packages, and seamless booking options.</p>
            </div>
        </div>
    </div>
@endsection