@extends('layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Ajouter une catégorie</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('categories.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="nomcat">Nom de catégorie</label>
                            <input type="texte" class="form-control" id="nomcat" name="Name">

                        </div>





                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
