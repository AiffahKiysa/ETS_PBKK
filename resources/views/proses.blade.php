<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ 'Hasil Input Rekam Medis' }}
        </h2>
    </x-slot>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validation</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3>Daftar Ulang</h3>
                        <h3 class="my-4">Data Yang Di Input : </h3>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Dokter</td>
                                <td>{{ $data->dokter }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Pasien</td>
                                <td>{{ $data->pasien }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Kondisi</td>
                                <td>{{ $data->kondisi }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Suhu</td>
                                <td>{{ $data->suhu }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Resep</td>
                                <td>
                                    <img src="{{ asset('storage/'.$data->image) }}" alt="" width="200px">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
@include('sweetalert::alert')
</html> 
</x-app-layout>