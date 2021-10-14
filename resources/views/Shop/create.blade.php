@extends('layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Ajouter une boutique</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('shops.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="nomproduit">Nom de boutique</label>
                            <input type="texte" class="form-control" id="nomproduit" placeholder="Nom de boutique" name="Name">

                        </div>




                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
