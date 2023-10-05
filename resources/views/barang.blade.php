@extends('master')

@section('content')
    <h2>Data Barang</h2>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stock</th>
                <th>ID Supplier</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $barang)
                <tr>
                    <td>{{ $barang->id }}</td>
                    <td>{{ $barang->nama }}</td>
                    <td>{{ $barang->harga }}</td>
                    <td>{{ $barang->stock }}</td>
                    <td>{{ $barang->id_supplier}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
