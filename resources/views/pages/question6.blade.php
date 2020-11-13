@extends('layouts.app')

@section('title')
Investamart | Quiz
@endsection

@section('content')
    <x-quizheader></x-quizheader>
                <h1>
                    Produk Investasi Apa Yang Kamu Ketahui?
                </h1>
                <form action="" class="question align-items-center">
                    <input type="radio" id="q6a" name="q6" value="q6a">
                    <label for="q6a"> A Tabungan</label><hr>
                    <input type="radio" id="q6b" name="q6" value="q6b">
                    <label for="q6b"> B Saham</label><hr>
                    <input type="radio" id="q6c" name="q6" value="q6c">
                    <label for="q6c"> C Reksadana</label><hr>
                    <input type="radio" id="q6d" name="q6" value="q6d">
                    <label for="q6d"> D Deposito</label><hr>
                    <input type="radio" id="q6e" name="q6" value="q6e">
                    <label for="q6e"> E Surat Berharga</label><hr>
                </form>
                <div class="row submition">
                    <a href="/question5" type="button" class="btn btn-ulang">
                        < Ulang</a>
                            <span>Pertanyaan<br>6/10</span>
                            <a href="/question7" type="button" class="btn btn-lanjut">Lanjut ></a>
                </div>
            </div>
        </div>
    </section>    
@endsection