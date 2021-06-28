<div class="modal fade" id="detailCandidatModal{{ $candidat->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cliquez sur la croix pour quitter...</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body text-center">
            <h3 class="text-center mb-5 text-info">Détail d'un candidat :</h3>
            <hr class="sidebar-divider d-none d-md-block">
            <h5>Nom: <span style="color: red">{{ $candidat->nom }}</span></span></h5>
            <h5>Nom: <span style="color: red">{{ $candidat->prenom }}</span></h5>
            <h5>Nom: <span style="color: red">{{ $candidat->telephone }}</span></h5>
            <h5>Nom: <span style="color: red">{{ $candidat->mail }}</span></h5>
            <h5>Nom: <span style="color: red">{{ $candidat->concour->title }}</span></h5>
            <img class="d-center" src="{{ asset('storage/'.$candidat->image) }}" alt="">
            <h5>Nom: <span style="color: red">{{ $candidat->title }}</span></h5>
            <h5>Nom: <span style="color: red">{{ $candidat->description }}</span></h5>

        </div>
    </div>
</div>
</div>
