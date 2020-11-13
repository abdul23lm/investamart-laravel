@extends('layouts.app')

@section('title')
Investamart | Quiz
@endsection

@section('content')
<x-quizheader></x-quizheader>
                <h1>
                    Berapa Lama Waktu yang Dibutuhkan untuk Mencapai Goal Kamu?
                </h1>
                <form action="" class="question align-items-center">
                    <input type="radio" id="q2a" name="q2" value="q2a">
                    <label for="q2a"> A 1 - 2 Tahun</label><hr>
                    <input type="radio" id="q2b" name="q2" value="q2b">
                    <label for="q2b"> B > 3 - 5 tahun</label><hr>
                </form>
                <div class="row submition">
                    <a href="/question2" type="button" class="btn btn-ulang">
                        < Ulang</a>
                            <span>Pertanyaan<br>2/10</span>
                            <a href="/question3" type="button" class="btn btn-lanjut">Lanjut ></a>
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection