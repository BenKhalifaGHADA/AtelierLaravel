@extends('layouts.master')
@section('content')
       <div class="container-fluid">
           <div class="row">
               <div class="col-md-12">
                   <div class="card">
                       <div class="card-header card-header-primary">
                           <h4 class="card-title ">Modifier une catégorie</h4>
                       </div>
                       <div class="card-body">
                           <form action="{{ route('categories.update',$category->id) }}" method="POST">
                               @csrf
                               @method('PATCH')
                               <div class="form-group">
                                   <label for="nomcat">Nom de catégorie</label>
                                   <input type="texte" class="form-control" id="nomcat" value="{{$category->Name}}" name="Name">

                               </div>
                                <button type="submit" class="btn btn-primary">Modifier</button>
                           </form>
                       </div>
                   </div>
               </div>

           </div>
       </div>
@endsection
