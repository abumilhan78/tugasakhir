@extends('adminlte.master')

@section('content')
    <table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Pertanyaan</th>
        <th>Jawaban</th>
      </tr>
    </thead>
    <tbody>
      @foreach($items as $key => $item)
        <tr>
            <td> {{ $key + 1}} </td>
            <td> {{ $item -> nama }} </td>
            <td> {{ $key -> pertanyaan}} </td>
            <td> {{ $key -> jawaban}} </td>
        </tr>
    </tbody>
  </table>
@endsection