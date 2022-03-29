<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Formulir Rekam Medis') }}
        </h2>
    </x-slot>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Rekam Medis</title>
 
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <!-- Styles -->
    <style>
        html {
            height: 100%;
            }
            body {
                
            margin:0;
            padding:0;
            font-family: sans-serif;
            background:#243b55;
            }

            .card-body {
                position:relative;
                padding: 40px;
                background: rgba(0, 0, 0, .5);
                box-sizing:border-box;
                
                box-shadow: 0 15px 25px rgba(0,0,0,.6);
                border-radius: 20px;
                }

            
    </style>

<style>
    body {
        font-family: 'Nunito', sans-serif;
    }
</style>

</head>
<body>
        <div>
            <div class="row justify-content-center py-4">
                <div class="col-lg-6">
                    <div>
                        <div class="card-body" >
                            <h2 class="text-center" style="color:whitesmoke">Formulir Rekam Medis</h2>

                            <!-- form validasi -->
                            <form action="/proses" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label class="@error('dokter') is-invalid @enderror" style="color:whitesmoke">Dokter</label>
                                    @error('dokter')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <select name="dokter" id="dokter">
                                        <option>---</option>
                                        @foreach($dokter as $dokter)
                                            <option value={{ $dokter->name }} style="color:#243b55">{{ $dokter->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="@error('pasien') is-invalid @enderror" style="color:whitesmoke">Pasien</label>
                                    @error('pasien')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <select name="pasien" id="pasien">
                                        <option>---</option>
                                        @foreach($pasien as $pasien)
                                            <option value={{ $pasien->name }} style="color:#243b55">{{ $pasien->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="form-group"style="text-align:left">
                                    <label for="kondisi" style="color:whitesmoke">kondisi : </label>
                                    <input class="form-control" type="text" name="kondisi" value="{{ old('kondisi') }}" class="@error('kondisi') is-invalid @enderror">
                                    @error('kondisi')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group"style="text-align:left">
                                    <label for="suhu" style="color:whitesmoke">Suhu Tubuh : </label>
                                    <input class="form-control" type="text" name="suhu" value="{{ old('suhu') }}" class="@error('suhu') is-invalid @enderror">
                                    @error('suhu')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="image" class="form-label" style="color:whitesmoke">Resep</label>
                                    <input class="form-control" type="file" id="image" name="image" value="{{ old('image') }}" class="@error('image') is-invalid @enderror">
                                    @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <br>

                                <div class="form-group">
                                    <input class="btn btn-dark" type="submit" value="Submit">
                                </div>
                            </form>
                            
                            
                            
                        </>
                    </p>
                </div>
            </div>
        </div>
   
</body>
</html>
</x-app-layout>