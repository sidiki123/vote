@extends('admin.layouts.master')

@section('content')
<h3 class="text-center mb-5 text-info">Liste des candidats :</h3>
<button  type="button" class="btn btn-primary mx-auto d-block" data-toggle="modal" data-target="#addCandidatModal">
    Ajouter un candidat
    </button>
<div class="col-12">
    <table class="table table-bordered table-striped table-hover table-light" aria-hidden="true">
        <thead>
            <th>Nº</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Téléphone</th>
            <th>Mail</th>
            <th>Concours</th>
            <th>Titre du projet</th>
            <th>Image</th>
            <th>Description</th>
            {{-- <th>Detail</th> --}}
            <th>Modifier</th>
            <th>Supprimer</th>
        </thead>
        <tbody>
            @foreach ($candidats as $candidat)
            <tr>
                <td>{{ $candidat->id }}</td>
                <td>{{ $candidat->nom }}</td>
                <td>{{ $candidat->prenom }}</td>
                <td>{{ $candidat->telephone }}</td>
                <td>{{ $candidat->mail }}</td>
                <td>{{ $candidat->concour->title }}</td>
                <td>{{ $candidat->title }}</td>
                <td> <img src="{{ asset('storage/'.$candidat->image) }}" width="50px" alt=""></td>
                <td>{{ $candidat->description }}</td>

                <td class="text-center"><a href="#" data-toggle="modal" data-target="#detailCandidatModal{{$candidat->id}}"><i class="fa fa-eye text-success" aria-hidden="true"></i></a></td>
                <td class="text-center"><a href="#"><i class="fa fa-edit text-warning" aria-hidden="true"></i></a></td>
                <td class="text-center"><a href="#"><i class="fa fa-window-close text-danger" aria-hidden="true"></i></a></td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

@include('admin.pages.candidats.create')
@include('admin.pages.candidats.detail')

@endsection
