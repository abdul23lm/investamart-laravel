@extends('layouts.app')

@section('title')
Investamart | Quiz
@endsection

@section('content')
    <x-quizheader></x-quizheader>
                <h1>
                    Apakah Kamu Sudah Menyisihkan Uang Kamu Belum Setiap Bulan?
                </h1>
                <form action="" class="question align-items-center">
                    <input type="radio" id="q4a" name="q4" value="q4a">
                    <label for="q4a"> A Belom</label><hr>
                    <input type="radio" id="q4b" name="q4" value="q4b">
                    <label for="q4b"> B Udah Donk</label><hr>
                </form>
                <div class="row submition">
                    <a href="/question3" type="button" class="btn btn-ulang">
                        < Ulang</a>
                            <span>Pertanyaan<br>4/10</span>
                            <a href="/question5" type="button" class="btn btn-lanjut">Lanjut ></a>
                </div>
            </div>
        </div>
    </section>
@endsection