
    <section class="campaigns-section ptb-100">
        <div class="container">
            <div class="section-title">

                <h2>Liste des différents participants</h2>
                <p>
                    Voter et permettez à votre candidat de remporter la compétition
                </p>
                <span style="color: red">NB: Inscription requise pour voter</span>
            </div>
            <div class="campaigns-slider owl-carousel d-block">
                @forelse ($candidats as $candidat)
                <div class="campaigns-item">
                    <div class="image">
                        <img src="{{ asset('storage/'.$candidat->image) }}" alt="image">
                        <span style="width: 100%">{{ $candidat->title }}</span>
                    </div>
                    <div class="content">
                        <h3>{{ $candidat->nom }} {{ $candidat->prenom }}</h3>
                        <p>{{ $candidat->description }}</p>
                    </div>
                    <ul class="campaigns-list">
                        <li>Compteur
                        <span>500 votes</span>
                        </li>

                    </ul>
                    <div class="campaigns-donate " style="justify-content: space-between">
                        <form method="post" action="{{route('vote.candidat',$candidat->id) }}" >
                            @csrf
                            <button  class="btn btn-success align-center" type="submit">Voter pour
                        </button>
                        </form>
                        {{-- <button class="btn btn-warning" pd-popup-open="popupNew{{$candidat->id}}">Détails</button> --}}
                    </div>
                </div>
                @empty
                    <h1 class="text-center">Aucune candidature disponible</h1>
                @endforelse
            </div>
        </div>
    </section>



