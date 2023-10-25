@extends('dashAdmin')

@section('content')

<!-- Main content -->
<style>
     @media screen and (max-width: 768px) {
        table {
            width: 100%;
        }
        th, td {
            display: table-cell;
            text-align: center;
        }
        .action-button {
            width: 100px; 
            height: 40px;
            
        }
    }
</style>

<div class="content" style="background-color: white;">
    <div class="container-fluid">
        <h1>Mobil</h1>
        <table class="table table-striped text-center">
            <tr>
                <td style="background-color: black; color: white;">No</td>
                <td style="background-color: black; color: white;">Nama</td>
                <td style="background-color: black; color: white;">Tipe</td>
                <td style="background-color: black; color: white;">Tahun</td>
                <td style="background-color: black; color: white;">Warna</td>
                <td style="background-color: black; color: white;">Stock</td>
                <td style="background-color: black; color: white;">Deskripsi</td>
                <td style="background-color: black; color: white;">Harga</td>
                <td style="background-color: black; color: white;">Manage</td>
            </tr>
            @forelse ($mobil as $item)
            <tr>
                <td>{{ $item['no'] }}</td>
                <td>{{ $item['nama'] }}</td>
                <td>{{ $item['tipe'] }}</td>
                <td>{{ $item['tahun'] }}</td>
                <td>{{ $item['warna'] }}</td>
                <td>{{ $item['stock'] }}</td>
                <td>{{ $item['deskripsi'] }}</td>
                <td>{{ $item['harga'] }}</td>
                <td>
                    <button type="button" class="btn btn-primary" style="width: 70px;">Edit</button>
                    <button type="submit" class="btn btn-danger" style="width: 70px;">Hapus</button>
                </td>
            </tr>
            @empty
            <div class="alert alert-danger">
                Data Kelas Masih Kosong
            </div>
            @endforelse
        </table>
    </div>
    
</div>
@endsection