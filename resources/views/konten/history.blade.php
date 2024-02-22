@extends('master')

@section('konten')
  
<div class="table-responsive">
    <table class="table table-hover table-striped table-bordered" width="100%" id="tabel">
        <thead>
            <tr>
                <th class="text-center" width="30%">Kata</th>
                <th class="text-center" width="70%">Deskripsi</th>
            </tr>
        </thead>
        @foreach ($data as $data)
        <tbody>
            <td>{{$data->kata}}</td>
            <td>{{$data->arti}}</td>
        </tbody>
        @endforeach
    </table> 
</div>
  
@endsection