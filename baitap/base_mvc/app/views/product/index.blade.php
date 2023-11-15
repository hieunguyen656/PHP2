@extends('layout.main')
@section('content')
    <h1>{{ $header }}</h1>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Tên</td>
            <td>Giá</td>
        </tr>
        @foreach ($products as $pr)
            <tr>
                <td>{{ $pr->id }}</td>
                <td>{{ $pr->ten_sp }}</td>
                <td>{{ $pr->gia }}</td>
            </tr>
        @endforeach
    </table>
    <button ></button>
@endsection
