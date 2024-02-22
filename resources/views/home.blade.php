@extends('master')

@section('konten')
  <h4>Selamat Datang <b>{{Auth::user()->name}}</b> di aplikasi Kamus Makna Kata.</h4>

  <div class="row mt-4">
    <div class="col-md-4">
        <a class="text-decoration-none" href="/word">
            <div class="card mb-3 shadow" style="border: 1px solid #1762A5; background-color: #1762A5;">
                <h5 class="card-header text-center" style="color: #fff;">Telusuri Kata</h5>
            </div>
        </a>
    </div>
    <div class="col-md-4">
        <a class="text-decoration-none" href="/history">
            <div class="card mb-3 shadow" style="border: 1px solid #1762A5; background-color: #1762A5;">
                <h5 class="card-header text-center" style="color: #fff;">Histori Pencarian Kata</h5>
                <div class="card-body text-secondary">
                    <i class="fa-3x fa-solid fa-money-bill-trend-up"></i>
                </div>
            </div>
        </a>
    </div>
@endsection