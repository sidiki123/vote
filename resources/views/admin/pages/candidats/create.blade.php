<div class="modal fade" id="addCandidatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cliquez sur la croix pour quitter...</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <h3 class="text-center mb-5 text-info">Enregistrer un candidat :</h3>
            <form action="{{ route('admin.candidat.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-12 mb-3 d-flex justify-content-center">
                    <div class="col-6">
                            <label>Concours:</label>
                            <select name="concours_id" class="form-control">
                                <option selected="">Choisissez un concours</option>
                                @forelse ($concours as $concour)
                                    <option value="{{ $concour->id }}">{{ $concour->title }}</option>
                                @empty
                                    <p>Pas de concours pour l'instant</p>
                                @endforelse
                            </select>
                        </div>
                </div>
                <div class="col-12 mb-3 d-flex justify-content-center">
                    <div class="col-6">
                        <label>image:</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="col-6">
                        <label>Nom du projet:</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                </div>

                <div class="col-12 mb-3 d-flex justify-content-center">
                    <div class="col-6">
                        <label>Nom:</label>
                        <input type="text" name="nom" class="form-control">
                    </div>

                    <div class="col-6">
                        <label>Prenom:</label>
                        <input type="text" name="prenom" class="form-control">
                    </div>
                </div>


                <div class="col-12 mb-3 d-flex justify-content-center">
                    <div class="col-6">
                        <label>Adresse mail:</label>
                        <input type="text" name="mail" class="form-control">
                    </div>

                    <div class="col-6">
                        <label>Télephone:</label>
                        <input type="text" name="telephone" class="form-control">
                    </div>
                </div>

                <div class="col-12 mb-3 d-flex justify-content-center">

                    <div class="col-12">
                        <label>Description du projet:</label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>

                <div class="col-12 mt-4 d-flex">
                    <div class="col-12">
                        <button wire:click="enregistrer" type="submit" class="btn btn-info mr-3">Enregistrer</button>
                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
</div>
