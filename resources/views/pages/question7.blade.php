@extends('layouts.app')

@section('title')
Investamart | Quiz
@endsection

@section('content')
    <x-quizheader></x-quizheader>
                <h1>
                    Apakah Kamu Memahami Investasi di Reksadana?
                </h1>
                <form action="" class="question align-items-center">
                    <input type="radio" id="q7a" name="q7" value="q7a">
                    <label for="q7a"> A Ya</label>
                            <hr>
                            <input type="radio" id="q7b" name="q7" value="q7b">
                            <label for="q7b"> B Tidak</label>
                            <hr>
                </form>
                <div class="row submition">
                    <a href="/question6" type="button" class="btn btn-ulang">
                        < Ulang</a>
                            <span>Pertanyaan<br>7/10</span>
                    <a href="/question8" type="button" class="btn btn-lanjut">Lanjut ></a>
                </div>
                </div>                
            </div>
        </div>
    </section>    
@endsection