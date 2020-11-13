@extends('layouts.app')

@section('title')
Investamart | Quiz
@endsection

@section('content')
    <x-quizheader></x-quizheader>
                <h1>
                    Dalam Berinvestasi, Apa yang Kamu Harapkan?
                </h1>
                <form action="" class="question align-items-center">
                    <input type="radio" id="q9a" name="q9" value="q9a">
                    <label for="q9a"> A Cuan Donk</label>
                    <hr>
                    <input type="radio" id="q9b" name="q9" value="q9b">
                    <label for="q9b"> B Cari Aman Aja Deh</label>
                    <hr>
                </form>
                <div class="row submition">
                    <a href="/question8" type="button" class="btn btn-ulang">
                        < Ulang</a>
                            <span>Pertanyaan<br>9/10</span>
                            <a href="/question10" type="button" class="btn btn-lanjut">Lanjut ></a>
                </div>
                </div>                
            </div>
        </div>
    </section>    
@endsection