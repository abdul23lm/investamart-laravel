@extends('layouts.app')

@section('title')
Investamart | Quiz
@endsection

@section('content')
    <x-quizheader></x-quizheader>
                <h1>
                    Menurut Kamu dari Penghasilan Berapa Persen yang Harus Disisihkan?
                </h1>
                <form action="" class="question align-items-center">
                    <input type="radio" id="q5a" name="q5" value="q5a">
                    <label for="q5a"> A < 25%</label><hr>
                    <input type="radio" id="q5b" name="q5" value="q5b">
                    <label for="q5b"> B > 25%</label> <hr>
                </form>
                <div class="row submition">
                    <a href="/question4" type="button" class="btn btn-ulang">
                        < Ulang</a>
                            <span>Pertanyaan<br>5/10</span>
                            <a href="/question6" type="button" class="btn btn-lanjut">Lanjut ></a>
                </div>
            </div>
        </div>
    </section>    
@endsection