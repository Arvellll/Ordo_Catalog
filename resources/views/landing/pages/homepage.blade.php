@extends('base.app')
@section('title','Homepage')
@section('content')
<div class="p-homepage">
    @include('landing.layouts.navbar')
    @include('landing.component.hero')
    <section class="fitur">
        <div class="container">
            <div class="fitur-inner">
                <div class="fitur1">
                <img src="{{asset('assets/svg/icon-1-fitur.svg')}}" alt="">
                <h3>Product Detail</h3>
                <p>Jelajahi Semua Varian Produk Lengkap dengan Gambardan Deskripsi</p>
                </div>
                <div class="fitur2">
                <img src="{{asset('assets/svg/icon-2-fitur.svg')}}" alt="">
                <h3>Search Kategory</h3>
                <p>Temukan Produk Favorit Anda dengan Mudah Menggunakan Search dan Filter!</p>
                </div>
                <div class="fitur3">
                <img src="{{asset('assets/svg/icon-3-fitur.svg')}}" alt="">
                <h3>Check Out</h3>
                <p>Tentukan Bagaimana Cara Check Out Produk Sesuai dengan Pilihan Anda!</p>
                </div>
            </div>
        </div>
    </section>

    <section class="sponsor">
        <div class="container">
            <div class="content-sponsor">
                <div class="sponsor-inner">
                    <div class="sponsor-atas">
                        <div class="wrapper">
                        <img src="{{asset('assets/svg/sponsortop-1.svg')}}" alt="">
                        </div>
                        <div class="wrapper">
                        <img src="{{asset('assets/svg/sponsortop-2.svg')}}" alt="">
                        </div>
                        <div class="wrapper">
                        <img src="{{asset('assets/svg/sponsortop-3.svg')}}" alt="">
                        </div>
                        <div class="wrapper">
                        <img src="{{asset('assets/svg/sponsortop-4.svg')}}" alt="">
                        </div>
                        <div class="wrapper">
                        <img src="{{asset('assets/svg/sponsortop-5.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="sponsor-bawah">
                        <div class="wrapper">
                        <img src="{{asset('assets/svg/sponsorbawah-1.svg')}}" alt="">
                        </div>
                        <div class="wrapper">
                        <img src="{{asset('assets/svg/sponsorbawah-2.svg')}}" alt="">
                        </div>
                        <div class="wrapper">
                            <div class="wrapper-mb">
                        <img src="{{asset('assets/svg/sponsorbawah-3.svg')}}" alt="">
                        </div>
                        </div>
                        <div class="wrapper">
                        <img src="{{asset('assets/svg/sponsorbawah-4.svg')}}" alt="">
                        </div>
                        <div class="wrapper">
                        <img src="{{asset('assets/svg/sponsorbawah-5.svg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('landing.component.founder',[
        'img' => asset('assets/svg/founder.svg'),
        'keterangan' => 'Setelah bekerja dengan tim ORDO dan hasilnya sangat baik. Etos kerja dan Kualitas dan kecepatan kerja yang luar biasa. Sangat recommended ORDO!',
        'name' => 'Louis Tjong',
        'subtitle' => 'Co-Founder & Creative Director Daybrand Studio'
        ])

<section class="contact">
    <div class="container">
            <div class="text">
                <p>Tingkatkan Penjualan Anda?<br>Buat Katalog Produk Anda Sekarang!</p>
            </div>
            <button class="button">
                    <div class="founderr"><img src="{{asset('assets/svg/wa-logo.svg')}}" alt="">
                        <p>Analyst Ordo <span>0852-5756-5964</span></p>
                    </div><img src="{{asset('assets/svg/hero-button.svg')}}" alt=""> 
            </button>
    </div>
</section>
</div>
@endsection