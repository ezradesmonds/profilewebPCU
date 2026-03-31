@extends('layouts.app')

@section('title', 'Home — Universitas Kristen Petra')

@section('content')

    {{-- Hero Image — full width --}}
    <div class="w-full relative overflow-hidden" style="max-height: 600px;">
        <img src="{{ asset('images/home.jpg') }}"
             alt="Universitas Kristen Petra"
             class="w-full object-cover object-center"
             style="height: 600px;">
        {{-- Overlay gradient --}}
        <div class="absolute inset-0 bg-gradient-to-t from-petra-dark/60 via-transparent to-transparent"></div>
        {{-- Hero text on image --}}
        <div class="absolute bottom-10 left-0 right-0 text-center px-4">
            <span class="inline-block bg-petra-gold text-petra-dark font-semibold text-xs px-4 py-1.5 rounded-full uppercase tracking-widest mb-3">
                #1 Best Private University in East Java
            </span>
            <h1 class="font-display text-3xl md:text-5xl font-bold text-white drop-shadow-lg">
                Stand with <em>The Bright</em>
            </h1>
        </div>
    </div>

    {{-- About Section --}}
    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="grid md:grid-cols-5 gap-12 items-center">

            {{-- Decorative side accent --}}
            <div class="hidden md:flex md:col-span-2 flex-col items-center justify-center">
                <div class="relative">
                    <div class="w-56 h-56 rounded-full border-4 border-petra-gold/30 flex items-center justify-center">
                        <div class="w-44 h-44 rounded-full bg-petra-blue/10 flex items-center justify-center">
                            <div class="text-center">
                                <p class="font-display font-bold text-petra-blue text-4xl">1961</p>
                                <p class="text-xs text-gray-500 tracking-widest uppercase mt-1">Didirikan</p>
                            </div>
                        </div>
                    </div>
                    {{-- Stats badges --}}
                    <div class="absolute -top-2 -right-6 bg-petra-blue text-white px-3 py-1.5 rounded-full text-xs font-semibold shadow-lg">
                        #20 Indonesia
                    </div>
                    <div class="absolute -bottom-2 -left-6 bg-petra-gold text-petra-dark px-3 py-1.5 rounded-full text-xs font-semibold shadow-lg">
                        7.000+ Mahasiswa
                    </div>
                </div>
            </div>

            {{-- Text content --}}
            <div class="md:col-span-3">
                <div class="inline-block bg-petra-gold/20 text-petra-blue font-semibold text-xs px-3 py-1 rounded-full uppercase tracking-widest mb-4">
                    Tentang Kami
                </div>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-petra-dark leading-tight mb-6">
                    Membentuk <span class="text-petra-blue">Pemimpin</span><br>Global Masa Depan
                </h2>
                <p class="text-gray-600 leading-relaxed text-base md:text-lg">
                    Universitas Kristen Petra adalah tempat di mana pemimpin-pemimpin sosial global dibentuk dan ditempa berlandaskan nilai-nilai kristiani. Kami mengundangmu untuk menimba ilmu di universitas yang peduli dan global, untuk belajar di bawah staf pengajar yang teruji dan bergabung dengan para mahasiswa dengan visi yang sama—membawa dampak bagi dunia.
                </p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{ route('facility') }}"
                       class="bg-petra-blue text-white px-6 py-3 rounded-full font-semibold text-sm hover:bg-blue-800 transition-colors shadow-md hover:shadow-lg">
                        Lihat Fasilitas
                    </a>
                    <a href="https://petra.ac.id" target="_blank"
                       class="border-2 border-petra-blue text-petra-blue px-6 py-3 rounded-full font-semibold text-sm hover:bg-petra-blue hover:text-white transition-colors">
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Stats Section --}}
    <section class="bg-petra-dark py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-center text-petra-gold font-semibold text-xs uppercase tracking-widest mb-10">Petra dalam Angka</p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                @foreach([
                    ['7.000+', 'Mahasiswa Aktif'],
                    ['150+', 'Mitra Internasional'],
                    ['430+', 'Mitra Nasional'],
                    ['52.860', 'Alumni Global'],
                ] as $stat)
                <div>
                    <p class="font-display font-bold text-3xl md:text-4xl text-white">{{ $stat[0] }}</p>
                    <p class="text-gray-400 text-sm mt-1">{{ $stat[1] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Rankings Section --}}
    <section class="py-16 bg-petra-light">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-block bg-petra-blue/10 text-petra-blue font-semibold text-xs px-3 py-1 rounded-full uppercase tracking-widest mb-4">
                Pengakuan Global
            </div>
            <h3 class="font-display text-2xl md:text-3xl font-bold text-petra-dark mb-10">
                Diakui oleh QS World University Rankings 2026
            </h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach([
                    ['#1', 'Best Private University in East Java'],
                    ['#20', 'Indonesia'],
                    ['#99', 'South East Asia'],
                    ['#526', 'Asia'],
                ] as $rank)
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <p class="font-display font-bold text-4xl text-petra-blue">{{ $rank[0] }}</p>
                    <p class="text-gray-500 text-xs mt-2 leading-snug">{{ $rank[1] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
