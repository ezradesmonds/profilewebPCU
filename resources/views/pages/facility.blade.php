@extends('layouts.app')

@section('title', 'Fasilitas — Universitas Kristen Petra')

@section('content')

    {{-- Page Header --}}
    <section class="bg-petra-dark pt-36 pb-20 px-4">
        <div class="max-w-5xl mx-auto text-center">
            <span class="inline-block bg-petra-gold/20 text-petra-gold font-semibold text-xs px-4 py-1.5 rounded-full uppercase tracking-widest mb-4">
                Fasilitas Kampus
            </span>
            <h1 class="font-display text-4xl md:text-5xl font-bold text-white leading-tight">
                Fasilitas <span class="text-petra-gold">Unggulan</span><br>UK Petra
            </h1>
            <p class="text-gray-400 mt-4 max-w-xl mx-auto text-base">
                Nikmati berbagai fasilitas modern yang dirancang untuk mendukung pertumbuhan akademik,
                profesional, dan personal setiap civitas akademika.
            </p>
        </div>
    </section>

    {{-- Divider wave --}}
    <div class="bg-petra-dark">
        <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
            <path d="M0,60 C360,0 1080,0 1440,60 L1440,60 L0,60 Z" fill="white"/>
        </svg>
    </div>

{{-- Facilities List --}}
    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12 space-y-20">

        @forelse($fasilitas as $index => $item)

            @php 
                // Ganjil: Item ke-1, 3, 5, dst. Genap: Item ke-2, 4, 6, dst.
                $isOdd = ($index + 1) % 2 !== 0; 
            @endphp

            {{-- 
                REVISI: 
                Jika Ganjil ($isOdd), gunakan 'md:flex-row-reverse' agar gambar pindah ke KANAN.
                Jika Genap, gunakan 'md:flex-row' agar gambar di KIRI.
            --}}
            <div class="flex flex-col {{ $isOdd ? 'md:flex-row-reverse' : 'md:flex-row' }} gap-10 items-center efek-reveal">

                {{-- Image --}}
                <div class="w-full md:w-1/2 relative">
                    <div class="rounded-3xl overflow-hidden shadow-xl aspect-video bg-petra-light">
                        <img src="{{ asset('images/' . $item->foto) }}"
                             alt="{{ $item->nama }}"
                             class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                             onerror="this.onerror=null; this.src=''; this.parentElement.innerHTML='<div class=\'w-full h-full bg-gradient-to-br from-petra-blue/10 to-petra-gold/10 flex items-center justify-center\'><svg class=\'w-16 h-16 text-petra-blue/30\' fill=\'currentColor\' viewBox=\'0 0 24 24\'><path d=\'M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z\'/></svg></div>';">
                    </div>
                    {{-- REVISI: Aksen emas juga ditukar posisinya biar seimbang --}}
                    <div class="absolute -z-10 {{ $isOdd ? '-bottom-4 -left-4' : '-bottom-4 -right-4' }} w-32 h-32 rounded-3xl bg-petra-gold/20"></div>
                </div>

                {{-- Content --}}
                {{-- REVISI: Padding teks ditukar agar ada jarak yang pas dengan gambar --}}
                <div class="w-full md:w-1/2 {{ $isOdd ? 'md:pr-4' : 'md:pl-4' }}">
                    <div class="inline-flex items-center gap-2 bg-petra-blue/10 text-petra-blue text-xs font-semibold px-3 py-1 rounded-full mb-4">
                        <span class="w-1.5 h-1.5 rounded-full bg-petra-blue"></span>
                        Fasilitas #{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                    </div>

                    <h2 class="font-display text-2xl md:text-3xl font-bold text-petra-dark leading-tight mb-4">
                        {{ $item->nama }}
                    </h2>

                    <div class="w-12 h-1 bg-petra-gold rounded-full mb-5"></div>

                    <p class="text-gray-600 leading-relaxed text-base">
                        {{ $item->keterangan }}
                    </p>

                    @if($item->url)
                    <a href="{{ $item->url }}" target="_blank"
                       class="inline-flex items-center gap-2 mt-6 bg-petra-blue text-white px-5 py-2.5 rounded-full text-sm font-semibold hover:bg-blue-800 transition-colors shadow-md group">
                        Pelajari Lebih Lanjut
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    @endif
                </div>
            </div>

            {{-- Divider (except last) --}}
            @if(!$loop->last)
            <div class="border-t border-gray-100"></div>
            @endif

        @empty
            <div class="text-center py-20">
                <p class="text-gray-400 text-lg">Belum ada data fasilitas.</p>
            </div>
        @endforelse

    </section>

    {{-- CTA Banner --}}
    <section class="bg-petra-blue py-16 px-4 mt-12">
        <div class="max-w-3xl mx-auto text-center">
            <h3 class="font-display text-3xl font-bold text-white mb-4">
                Bergabunglah dengan UK Petra
            </h3>
            <p class="text-blue-200 mb-8 text-base">
                Rasakan langsung semua fasilitas unggulan kami. Daftar sekarang untuk tahun akademik 2026/2027.
            </p>
            <a href="https://registration.petra.ac.id" target="_blank"
               class="bg-petra-gold text-petra-dark font-bold px-8 py-3.5 rounded-full text-sm hover:bg-yellow-400 transition-colors shadow-lg">
                Daftar Sekarang →
            </a>
        </div>
    </section>

@endsection
