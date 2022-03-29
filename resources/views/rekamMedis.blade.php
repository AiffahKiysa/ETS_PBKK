<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('rekamMedis') }}
        </h2>
    </x-slot>

    @if ($rekamMedis->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $rekamMedis[0]->penyakit }}" class="card-img-top" alt="{{ $rekamMedis[0]->dokter->name }}">
            <div class="card-body text-center">
                <h3 class="card-title">
                    <a href="/rekamMedis/{{ $rekamMedis[0]->slug }}" class="text-decoration-none text-dark">
                    {{ $rekamMedis[0]->title }}
                    </a>
                <p>
                    <small class="text-muted">
                        <h6>Pasien:  <a href="/pasien/{{ $rekamMedis[0]->pasien->slug }}" class="text-decoration-none"> {{ $rekamMedis[0]->pasien->name }} </a></h6> 
                        <h6>Dokter: <a href="/dokter/{{ $rekamMedis[0]->dokter->slug }}" class="text-decoration-none"> {{ $rekamMedis[0]->dokter->name  }} </a></h6>
                        <h6>    {{ $rekamMedis[0]->created_at->diffForHumans() }}
                        </h6>
                    </small>
                </p>
                <p class="card-text">{{ $rekamMedis[0]->penyakit }}</p>

                <a href="/rekamMedis/{{ $rekamMedis[0]->slug }}" class="text-decoration-none btn btn-dark">Read more..</a>
            </div>
        </div>
    
    <div class="container">
        <div class="row">
            @foreach($rekamMedis->skip(1) as $rekamMedis)
            <div class="col-md-4 mb-3">
                <div class="card">
                <div class="position-absolute px-3 py-2" style="background-color: rgba(29, 20, 150, 0.8)">
                    <a href="/dokter/{{ $rekamMedis->dokter->slug }}"class="text-decoration-none text-white">{{ $rekamMedis->dokter->name  }}</a>
                </div>
                    <img src="https://source.unsplash.com/500x400?{{ $rekamMedis->penyakit }}" class="card-img-top" alt="{{ $rekamMedis->dokter->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $rekamMedis->title }}</h5>
                        <p>
                            <small class="text-muted">
                            <h6>Pasien: <a href="/pasien/{{ $rekamMedis->pasien->slug }}" class="text-decoration-none"> {{ $rekamMedis->pasien->name }} </a> 
                                {{ $rekamMedis->created_at->diffForHumans() }}
                            </h6>
                            </small>
                        </p>
                      <p class="card-text">{{ $rekamMedis->penyakit }}</p>
                      <a href="/rekamMedis/{{ $rekamMedis->slug }}" class="btn btn-dark">Read more</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>

    @else
        <p class="text-center fs-4">No post found.</p>
    @endif
</x-app-layout>