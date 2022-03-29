<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $rekamMedis->title }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                <h6>Pasien: <a href="/pasien/{{ $rekamMedis->pasien->slug }}" class="text-decoration-none ml-1" style="color: black"> {{ $rekamMedis->pasien->name  }} </a></h6>
                <h6>Dokter: <a href="/dokter/{{ $rekamMedis->dokter->slug }}" class="text-decoration-none ml-1" style="color: black"> {{ $rekamMedis->dokter->name  }} </a></h6>
                <h6>Penyakit: {{ $rekamMedis->penyakit  }} </a></h6>
                <h6>Kondisi: {{ $rekamMedis->kondisi  }} </a></h6>
                <h6>Suhu Badan: {{ $rekamMedis->suhu  }} </a></h6>
                <h6>Riwayat: {{ $rekamMedis->riwayat  }} </a></h6>
                <h6>Resep: {{ $rekamMedis->resep }} </a></h6>

        {!! $rekamMedis->body !!}

        <a href="/rekamMedis" class="d-block mt-3">Back</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
