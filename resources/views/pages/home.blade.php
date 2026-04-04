@extends('layouts.app')

@section('title', 'Home — Universitas Kristen Petra')

@section('content')

    {{-- Custom CSS untuk Efek Stabilo, Typewriter, dan Circle Animations --}}
    <style>
        /* --- 1. Efek Stabilo pada teks --- */
        .efek-stabilo {
            background-image: linear-gradient(transparent 60%, rgba(245, 166, 35, 0.6) 60%);
            background-size: 0% 100%;
            background-repeat: no-repeat;
            animation: highlight 1.2s ease-out forwards;
            animation-delay: 0.5s; 
        }
        @keyframes highlight {
            to { background-size: 100% 100%; }
        }

        /* --- 2. Efek Kursor Berkedip (Typewriter) --- */
        .kursor-ketik {
            display: inline-block;
            width: 2px;
            height: 1.1em;
            background-color: #003DA5; 
            vertical-align: middle;
            margin-left: 3px;
            animation: blink 1s step-end infinite;
        }
        @keyframes blink {
            50% { opacity: 0; }
        }

        /* --- 3. Animasi Lingkaran Dekoratif --- */
        @keyframes floatAccentGroup {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-12px); }
        }
        .efek-floating {
            animation: floatAccentGroup 5s ease-in-out infinite;
        }

        @keyframes rotateGoldRing {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        .efek-border-rotate {
            animation: rotateGoldRing 12s linear infinite;
        }
    </style>

{{-- Hero Image — full width --}}
    <div class="bg-[#0a1628] pt-20">
        <img src="{{ asset('images/home.jpg') }}"
            id="hero-img"
             alt="Universitas Kristen Petra"
             class="w-full block">
    </div>

    {{-- About Section --}}
    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="grid md:grid-cols-5 gap-12 items-center">

            {{-- Decorative side accent — DIPERBAIKI --}}
            <div class="hidden md:flex md:col-span-2 flex-col items-center justify-center">
                {{-- Seluruh cluster mengambang bersama --}}
                <div class="relative efek-floating"> 
                    
                    {{-- Wadah utama lingkaran --}}
                    <div class="relative w-56 h-56 flex items-center justify-center">
                        {{-- HANYA cincin luar yang berputar (menggunakan absolute agar teks di dalam tidak ikut berputar) --}}
                        <div class="absolute w-full h-full rounded-full border-4 border-petra-gold/20 border-t-petra-gold efek-border-rotate"></div>
                        
                        {{-- Wadah teks statis di dalam --}}
                        <div class="w-44 h-44 rounded-full bg-petra-blue/10 flex items-center justify-center relative z-10">
                            <div class="text-center">
                                <p class="font-display font-bold text-petra-blue text-4xl">1961</p>
                                <p class="text-xs text-gray-500 tracking-widest uppercase mt-1">Didirikan</p>
                            </div>
                        </div>
                    </div>

                    {{-- Stats badges --}}
                    <div class="absolute -top-2 -right-6 bg-petra-blue text-white px-3 py-1.5 rounded-full text-xs font-semibold shadow-lg z-20">
                        #20 Indonesia
                    </div>
                    <div class="absolute -bottom-2 -left-6 bg-petra-gold text-petra-dark px-3 py-1.5 rounded-full text-xs font-semibold shadow-lg z-20">
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
                    Membentuk <span class="text-petra-blue efek-stabilo px-1">Pemimpin</span><br>Global Masa Depan
                </h2>
                
                <p class="text-gray-600 leading-relaxed text-base md:text-lg min-h-[160px]">
                    <span id="teks-typewriter"></span><span id="kursor" class="kursor-ketik"></span>
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
    <section id="stats-section" class="bg-petra-dark py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-center text-petra-gold font-semibold text-xs uppercase tracking-widest mb-10">Petra dalam Angka</p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                @foreach([
                    [7000, '+', 'Mahasiswa Aktif'],
                    [150, '+', 'Mitra Internasional'],
                    [430, '+', 'Mitra Nasional'],
                    [52860, '', 'Alumni Global'],
                ] as $stat)
                <div>
                    <p class="font-display font-bold text-3xl md:text-4xl text-white counter-angka" 
                       data-target="{{ $stat[0] }}" 
                       data-suffix="{{ $stat[1] }}">
                        0{{ $stat[1] }}
                    </p>
                    <p class="text-gray-400 text-sm mt-1">{{ $stat[2] }}</p>
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

    {{-- Script untuk menjalankan efek Typewriter & Counter --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            
            // --- EFEK TYPEWRITER ---
            const teksTujuan = "Universitas Kristen Petra adalah tempat di mana pemimpin-pemimpin sosial global dibentuk dan ditempa berlandaskan nilai-nilai kristiani. Kami mengundangmu untuk menimba ilmu di universitas yang peduli dan global, untuk belajar di bawah staf pengajar yang teruji dan bergabung dengan para mahasiswa dengan visi yang sama—membawa dampak bagi dunia.";
            
            const wadahTeks = document.getElementById("teks-typewriter");
            const kursor = document.getElementById("kursor");
            
            let i = 0;
            const kecepatan = 12; 

            function ketikTeks() {
                // BUG FIXED: wadahTeks sekarang pakai 'w' kecil
                if (wadahTeks && i < teksTujuan.length) {
                    wadahTeks.innerHTML += teksTujuan.charAt(i);
                    i++;
                    setTimeout(ketikTeks, kecepatan);
                } else if (kursor) {
                    setTimeout(() => kursor.style.opacity = '0', 2000);
                }
            }
            setTimeout(ketikTeks, 1000);

            // --- EFEK COUNT-UP STATISTIK ---
            const counters = document.querySelectorAll('.counter-angka');
            const statsSection = document.getElementById('stats-section');
            let animasiBerjalan = false;

            function mulaiAnimasiAngka() {
                counters.forEach(counter => {
                    const target = +counter.getAttribute('data-target');
                    const suffix = counter.getAttribute('data-suffix');
                    
                    const increment = target / 300; 
                    let current = 0;
                    
                    const updateCounter = () => {
                        current += increment;
                        if (current < target) {
                            counter.innerText = Math.ceil(current).toLocaleString('id-ID') + suffix;
                            requestAnimationFrame(updateCounter); 
                        } else {
                            counter.innerText = target.toLocaleString('id-ID') + suffix;
                        }
                    };
                    updateCounter();
                });
            }

            const observer = new IntersectionObserver((entries) => {
                if (entries[0].isIntersecting && !animasiBerjalan) {
                    mulaiAnimasiAngka();
                    animasiBerjalan = true; 
                }
            }, { threshold: 0.5 }); 

            if (statsSection) {
                observer.observe(statsSection);
            }

        });
    </script>

@endsection