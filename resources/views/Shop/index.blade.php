@extends('layouts.master')
@section('content')
   <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Liste des boutiques</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                     <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($shops as $shop)
                                    <tr>
                                        <td>{{$shop->id }}</td>
                                        <td>{{$shop->Name}}</td>

                                       <td>

                                            <a class="btn btn-outline-primary" href="{{ route('shops.show',$shop->id) }}">Monter</a>
                                            <a class="btn btn-outline-success" href="{{ route('shops.edit',$shop->id) }}">Modifier</a>
                                            <form action="{{ route('shops.destroy',$shop->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                                            </form>
                                           <a class="btn btn-outline-primary" href="{{ route('shops.showProduct',$shop->id) }}">Voir tous les produits</a>

                                       </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
