@extends('admin.layouts.master')
@section('content')
<h3 class="text-center mb-5 text-info">Liste des concours :</h3>
<button  type="button" class="btn btn-primary mx-auto d-block" data-toggle="modal" data-target="#addConcoursModal">
    Ajouter un nouveau concours
    </button>
<div class="col-12">
    <table class="table table-bordered table-striped table-hover table-light" aria-hidden="true">
        <thead>
            <th>Nº</th>
            <th>Intitulé</th>
            <th>Sous-titre</th>
            <th>Description</th>
            <th>image</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </thead>
        <tbody>
            @forelse ($concours as $concour)
                <tr>
                    <td>{{ $concour->id }}</td>
                    <td>{{ $concour->title }}</td>
                    <td>{{ $concour->sub_title }}</td>
                    <td>{{ $concour->description }}</td>
                    <td> <img src="{{ asset('storage/' . $concour->image)}}" alt=""></td>
                    <td class="text-center"><a href="#"><i class="fa fa-edit text-warning" aria-hidden="true"></i></a></td>

                    <td class="text-center">
                        <form method="post" action="{{ route('admin.concours.delete',$concour) }}" >
                            @csrf
                           @method('DELETE')
                           <button class="btn btn-danger" type="submit">

                                <i class="fa fa-window-close text-danger" aria-hidden="true"></i>

                        </button>
                        </form>

                    </td>
                </tr>
            @empty
                ras
            @endforelse

        </tbody>
    </table>
</div>

@include('admin.pages.concours.create')
@endsection
