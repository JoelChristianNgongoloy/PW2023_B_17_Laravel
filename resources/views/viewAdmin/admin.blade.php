@extends('dashAdmin')

@section('title')
    Welcome - {{ Auth::user()->name }}
@endsection

@section('content')
    <!-- Main content -->
    <style>
        @media screen and (max-width: 768px) {
            table {
                width: 100%;
            }

            th,
            td {
                display: table-cell;
                text-align: center;
            }

            .action-button {
                width: 100px;
                height: 30px;

            }
        }
    </style>

    <div class="content" style="background-color: white;">
        <div class="container-fluid">
            <h1><strong>Halo {{ Auth::user()->name }}</strong></h1>
            {{-- <table class="table table-striped text-center">
                <tr>
                    <td style="background-color: black; color: white;">No</td>
                    <td style="background-color: black; color: white;">Nama</td>
                    <td style="background-color: black; color: white;">Email</td>
                    <td style="background-color: black; color: white;">Alamat</td>
                    <td style="background-color: black; color: white;">Tanggal Lahir</td>
                    <td style="background-color: black; color: white;">Telepon</td>
                    <td style="background-color: black; color: white;">Manage</td>
                </tr>
                @forelse ($user as $item)
                    <tr>
                        <td>{{ $item['no'] }}</td>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['email'] }}</td>
                        <td>{{ $item['alamat'] }}</td>
                        <td>{{ $item['Telepon'] }}</td>
                        <td>
                            <button type="button" class="btn btn-primary"style="width: 70px;">Edit</button>
                            <button type="submit" class="btn btn-danger" style="width: 70px;">Hapus</button>
                        </td>
                    </tr>
                @empty
                    <div class="alert alert-danger">
                        Data Kelas Masih Kosong
                    </div>
                @endforelse --}}
            </table>
        </div>
        {{-- {{ $user->links() }} --}}
    </div>
@endsection
