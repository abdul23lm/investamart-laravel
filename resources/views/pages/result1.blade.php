@extends('layouts.app')

@section('title')
Investamart | Result of Quiz
@endsection

@section('content')
<x-result1header></x-result1header>
                <div class="hero-image-result">
                    <img src="{{ url('frontend/images/Quiz/hero-image-result1.png') }}" alt="Investamart Hero Image">
                </div>
                <div class="conclusion align-items-center">
                <h4>
                Kamu adalah
                </h4>
                <h1>
                The Opportunist
                </h1>
                <h4>
                A.K.A Konservatif
                </h4>

                <p>
                    Kamu memiliki toleransi terhadap resiko yang cenderung rendah dimana return yang diharapkan minimal setara dengan suku
                    bunga deposito dengan fluktuasi nilai pasar yang minimal untuk mencapai tujuan investasi kamu.
                </p>
                <h4>Potensi Keuangan Kamu 10 Tahun Mendatang</h4>
            <img src="{{ url('frontend/images/Quiz/chart.png') }}" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
            occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href=""   onclick="
                window.open(
                'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
                'facebook-share-dialog', 
                'width=626,height=436'); 
                return false;" type="button" class="btn btn-share">Share ></a>

<x-resultfooter></x-resultfooter>
@endsection