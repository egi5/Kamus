@extends('master')

@section('konten')
<div class="container"><br>
    <div class="col-md-6 col-md-offset-3">
        <h2 class="text-center">Pencarian Kata</h3>
        <hr>
        <form action="{{route('maknaKata')}}" method="post">
            @csrf
            <div class="form-group">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="kata" id="input" placeholder="Masukkan Kata">
                    <button type="submit" class=" btn btn-primary" id="search_btn">Search</button>
                </div>
            </div>
            
            <div class="data-section form-group">
                <p class="noun" name="noun"></p>
                <p class="def" name="def"></p>
                <div class="not_found"></div>
            </div>
        </form>
    </div>
</div>

<script src="script.js"></script>
@endsection