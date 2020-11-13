@extends('layouts.app')

@section('title')
Investamart | Quiz
@endsection

@section('content')
    <x-quizheader></x-quizheader>
                <h1>
                    Pentingkah Investasi Menurut Kamu?
                </h1>
                <form action="" class="question align-items-center">
                    <input type="radio" id="q3a" name="q3" value="q3a">
                    <label for="q3a"> A Tidak Penting</label><hr>
                    <input type="radio" id="q3b" name="q3" value="q3b">
                    <label for="q3b"> B Penting</label><hr>
                </form>
                <div class="row submition">
                    <a href="/question2" type="button" class="btn btn-ulang">
                        < Ulang</a>
                            <span>Pertanyaan<br>3/10</span>
                            <a href="/question4" type="button" class="btn btn-lanjut">Lanjut ></a>
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection