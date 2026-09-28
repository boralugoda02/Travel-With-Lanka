@extends('layouts.app')

@section('title', 'Contact Us - Tourism Portal')

@section('content')
    <div class="max-w-xl mx-auto bg-slate-200/90 p-8 md:p-10 rounded-3xl shadow-2xl border border-slate-300 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-3 bg-gradient-to-r from-slate-900 via-blue-700 to-sky-400"></div>

        <h1 class="text-3xl font-black text-slate-900 mb-2 text-center">Plan Your Trip </h1>
        <p class="text-slate-600 text-sm text-center mb-8 font-medium">Send us a message and our travel guides will get back to you shortly!</p>

        <form action="#" method="POST" class="space-y-5">
            <div>
                <label class="block text-xs font-bold text-slate-700 uppercase mb-1">Full Name</label>
                <input type="text" placeholder="John Doe" class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-sky-500 focus:outline-none bg-slate-100" required>
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-700 uppercase mb-1">Email Address</label>
                <input type="email" placeholder="john@example.com" class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-sky-500 focus:outline-none bg-slate-100" required>
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-700 uppercase mb-1">Travel Message</label>
                <textarea rows="4" placeholder="Tell us about your tour plans..." class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-sky-500 focus:outline-none bg-slate-100" required></textarea>
            </div>

            <button type="submit" class="w-full bg-gradient-to-r from-slate-900 via-blue-900 to-sky-700 text-white font-black py-3.5 rounded-xl hover:from-slate-950 hover:to-sky-800 transition shadow-lg transform hover:-translate-y-0.5">
                Send Inquiry 
            </button>
        </form>
    </div>
@endsection