@extends('layouts.app')

@section('title')
Investamart | Quiz
@endsection

@section('content')
<x-quizheader></x-quizheader>
                <h1>
                Apa goal Kamu di Masa Depan?
                </h1>
                <form action="" class="question align-items-center">
                <input type="radio" id="q1a" name="q1" value="q1a">
                <label for="q1a"> A Traveling Keliling Dunia</label><hr>
                <input type="radio" id="q1b" name="q1" value="q1b">
                <label for="q1b"> B Tabungan Masa Depan (Dana Pendidikan, Dana Pensiun)</label><hr>
                <input type="radio" id="q1c" name="q1" value="q1c">
                <label for="q1c"> C Punya Gadget Terbaru</label><hr>
                <input type="radio" id="q1d" name="q1" value="q1d">
                <label for="q1d"> D Belum Tau</label><hr>
                </form>
                <div class="row submition">
                <a href="/" type="button" class="btn btn-ulang">< Ulang</a>
                <span>Pertanyaan<br>1/10</span>
                <a href="/question2" type="button" class="btn btn-lanjut">Lanjut ></a>
                </div>
              </div>
            </div>
        </div>
    </section>
@endsection