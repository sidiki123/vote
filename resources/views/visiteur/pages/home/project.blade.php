
<section class="projects-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>We Provide to Poor</span>
            <h2>We’ve Funded 120,00 Charity Projects</h2>
            <p>Experinces started sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et
                dolore magnat dipiscing liqua amet consectetur started consectetur adipiscing.</p>
        </div>
        <div class="row">
            @forelse ($candidats as $candidat)
                <div class="col-lg-4 col-sm-6">
                    <div class="projects-content">
                        <div class="image">
                            <img src="{{ asset('storage/'.$candidat->image) }}" width="50px" alt="image">
                        </div>
                        <h3>{{ $candidat->title }}</h3>
                        <p>{{ $candidat->description }}</p>
                        <div class="d-flex">
                            <form method="post" action="{{ route('vote.candidat',$candidat->id) }}" >
                                @csrf
                                <button class="btn btn-primary" type="submit">Voter pour

                            </button>

                            </form>
                            {{-- <a href="#" class="btn btn-primary">Voter pour</a> --}}
                             &nbsp;&nbsp;
                            <a href="#" class="btn btn-warning">Détails</a>

                        </div>
                    </div>
                </div>
            @empty
                <h2 class="text-center">Aucune candidature enregistrée</h2>
            @endforelse

            {{-- <div class="col-lg-4 col-sm-6">
                <div class="projects-content">
                    <div class="image">
                        <img src="assets/img/projects-icon.png" alt="image">
                    </div>
                    <h3>Food Build Home</h3>
                    <p>Client you have to is develop ambile this is appropriate develop ambile app</p>
                    <a href="#" class="learn-btn">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="projects-content">
                    <div class="image">
                        <img src="assets/img/projects-icon.png" alt="image">
                    </div>
                    <h3>Fresh Water</h3>
                    <p>Client you have to is develop ambile this is appropriate develop ambile app</p>
                    <a href="#" class="learn-btn">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="projects-content">
                    <div class="image">
                        <img src="assets/img/projects-icon.png" alt="image">
                    </div>
                    <h3>Hope Make Donation</h3>
                    <p>Client you have to is develop ambile this is appropriate develop ambile app</p>
                    <a href="#" class="learn-btn">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="projects-content">
                    <div class="image">
                        <img src="assets/img/projects-icon.png" alt="image">
                    </div>
                    <h3>Food Build Services</h3>
                    <p>Client you have to is develop ambile this is appropriate develop ambile app</p>
                    <a href="#" class="learn-btn">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="projects-content">
                    <div class="image">
                        <img src="assets/img/projects-icon.png" alt="image">
                    </div>
                    <h3>Fresh Food</h3>
                    <p>Client you have to is develop ambile this is appropriate develop ambile app</p>
                    <a href="#" class="learn-btn">Learn More</a>
                </div>
            </div> --}}
        </div>
    </div>
</section>
