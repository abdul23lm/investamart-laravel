@extends('layouts.app')

@section('title')
Investamart | Quiz
@endsection

@section('content')
    <x-quizheader></x-quizheader>
                <h1>
                    Apa yang Lakukan Jika Investasimu Turun Lebih dari 20% Sebulan ketika Pasar Investasi Sedang Naik Turun?
                </h1>
                <form action="" class="question align-items-center">
                    <input type="radio" id="q10a" name="q10" value="q10a">
                    <label for="q10a"> A Diemin Aja</label>
                    <hr>
                    <input type="radio" id="q10b" name="q10" value="q10b">
                    <label for="q10b"> B Waktunya Beli</label>
                    <hr>
                </form>
                <div class="row submition">
                    <a href="/question9" type="button" class="btn btn-ulang">
                        < Ulang</a>
                            <span>Pertanyaan<br>10/10</span>
                            <a href="/result1" type="button" class="btn btn-lanjut">Lanjut ></a>
                </div>
            </div>
        </div>
    </section>    
@endsection