@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Détails d'un boutique</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{$shop->id}}</td>
                                    <td>{{$shop->Name}}</td>

                                </tr>

                                </tbody>
                            </table>
                            <form action="{{ route('shops.destroy',$shop->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection

