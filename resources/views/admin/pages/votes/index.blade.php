@extends('admin.layouts.master')

@section('content')
<h3 class="text-center mb-5 text-info">Liste des concours :</h3>
<button  type="button" class="btn btn-primary mx-auto d-block" data-toggle="modal" data-target="#addClientModal">
    Ajouter un nouveau concours
    </button>
<div class="col-12">
    <table class="table table-bordered table-striped table-hover table-light" aria-hidden="true">
        <thead>
            <th>Nº</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Téléphone</th>
            <th>Detail</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </thead>
        <tbody>
            <tr>
                <td>lorem</td>
                <td>lorem</td>
                <td>lorem</td>
                <td>lorem</td>
                <td class="text-center"><a href="#"><i class="fa fa-eye text-success" aria-hidden="true"></i></a></td>
                <td class="text-center"><a href="#"><i class="fa fa-edit text-warning" aria-hidden="true"></i></a></td>
                <td class="text-center"><a href="#"><i class="fa fa-window-close text-danger" aria-hidden="true"></i></a></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
