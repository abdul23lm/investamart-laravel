@extends('layouts.app')

@section('title')
Investamart | Homepage
@endsection

@section('content')
<section class="investamart-quiz" data-aos="fade-up">
    <div class="container">
        <div class="row">
        <div class="card align-items-center">
            <div class="top-title mt-4 mb-4">
                <img src="{{ url('frontend/images/Quiz/top-title.png')}}" alt="Investamart Top Title">
            </div>
            <div class="hero-image">
                <img src="{{ url('frontend/images/Quiz/hero-image-quiz.png')}}" alt="Investamart Hero Image" class="mb-4">
            </div>
            <p>Penjelasan tentang apa itu Profil Resiko Gue dan iming2 hadiah. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
            <a href="{{ url('/question1') }}" type="button" class="btn btn-mulai">Mulai Sekarang ></a>
        </div>
        </div>
    </div>
</section>    
    
@endsection
