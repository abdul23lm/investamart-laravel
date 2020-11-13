@extends('layouts.app')

@section('title')
Investamart | Quiz
@endsection

@section('content')
    <x-quizheader></x-quizheader>
                <h1>
                   Apakah Kamu Sudah Berinvestasi di Reksadana?
                </h1>
                <form action="" class="question align-items-center">
                    <input type="radio" id="q8a" name="q8" value="q8a">
                    <label for="q8a"> A Belom</label>
                    <hr>
                    <input type="radio" id="q8b" name="q8" value="q8b">
                    <label for="q8b"> B Udah Donk</label>
                    <hr>
                </form>
                <div class="row submition">
                    <a href="/question7" type="button" class="btn btn-ulang">
                        < Ulang</a>
                            <span>Pertanyaan<br>8/10</span>
                            <a href="/question9" type="button" class="btn btn-lanjut">Lanjut ></a>
                </div>
            </div>
        </div>
    </section>    
@endsection