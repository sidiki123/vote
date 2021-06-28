<section id="campaign" class="campaigns-section ptb-100">
    <div class="container">
        <div class="section-title">
            <span>Welcome to Gouba</span>
            <h2>Latest Campaigns</h2>
            <p>Experinces started sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et
                dolore magnat dipiscing liqua amet consectetur started consectetur adipiscing.</p>
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
                {{-- <ul class="campaigns-list">
                    <li>
                        Goal
                        <span>$5600</span>
                    </li>
                    <li>
                        Rised
                        <span>$4678</span>
                    </li>
                    <li>
                        Left
                        <span>3 Days</span>
                    </li>
                </ul> --}}
                <div class="campaigns-donate d-flex" style="justify-content: space-between">
                    <form method="post" action="{{route('vote.candidat',$candidat->id) }}" >
                        @csrf
                        <button class="btn btn-success" type="submit">Voter pour
                    </button>
                    </form>
                        <button class="btn btn-warning" type="submit">Détails</button>

                </div>
            </div>
            @empty
                <h1 class="text-center">Aucune candidature disponible</h1>
            @endforelse



        </div>

    </div>
</section>
