@extends('layouts.app')

@section('title')
Investamart | Goal Gue
@endsection

@section('content')
    <section class="goal-gue" data-aos="fade-up">
        <div class="container">
            <div class="card align-items-center">
                <h1>
                    Ini Goal Gue
                </h1>
            <form action="" class="form-goal-gue">
                <label for="gadget">Pengen Punya Gadget:</label><br>
                <input type="text" id="gadget" name="gadget" value=""><br><br>
                <label for="traveling">Pengen Traveling Ke:</label><br>
                <input type="text" id="traveling" name="traveling" value="" ><br><br>
                <label for="pensiun">Pengen Pensiun di Usia:</label><br>
                <input type="number" id="pensiun" name="pensiun"><br><br>
                <label for="penghasilan">Pengen Punya Penghasilan Setiap Bulannya Sebesar:</label><br>
                <input type="number" id="penghasilan" name="penghasilan"><br>
            </form>
                <h1>
                    Kalo Loe?
                </h1>
                <br>
                <br>
                <br>
                <div class="row gue-loe-footer">
                <div class="column">
                <img src="{{ url('frontend/images/Quiz/title.png') }}" alt="Investamart Title">
                </div>
                <div class="column">
                <p>Pengen wujudin itu semua kamu harus berinvestasi yang baik dan benar sesuai dengan profil resiko kamu.
                Udah tau belum apa Profil Resiko kamu?</p>
                <p style="color: #ED1E79;;">Ikutan <b>quiz.invesnow.id</b>
                dan dapatkan Hadiah Investasi Reksadana?</p>
                </div>
                </div>
            </div>
        </div>
    </section>    
@endsection