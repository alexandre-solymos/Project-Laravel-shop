@extends('layouts.admin')

@section('content')

        <div class="content-header">
            <a href="{{route('admin.product.index')}}" class="btn-grad">Retour</a>

             <div class="form-admin">
                 <form method="POST" action="{{ route('admin.product.store') }}">
                     @csrf
                     <div class="form-group">
                     <label for="">Titre</label>
                     <input type="text" name="title" placeholder="Mon titre ici">
                     @error('title')
                     <strong>{{ $message }}</strong>
                     @enderror
                     </div>

                     <div class="form-group">
                     <label for="">Sous Titre</label>
                     <input type="text" name="subtitle" placeholder="Mon sous titre ">
                     @error('subtitle')
                     <strong>{{ $message }}</strong>
                     @enderror
                     </div>

                     <div class="form-group">
                     <label for="">Slug</label>
                     <input type="text" name="slugy" placeholder="Mon slug pour le seo">
                     @error('slugy')
                     <strong>{{ $message }}</strong>
                     @enderror
                     </div>


                     <div class="form-group">
                     <label for="">Description</label>
                     <textarea type="text" name="description" placeholder="Ma description"></textarea>
                     @error('description')
                     <strong>{{ $message }}</strong>
                     @enderror
                     </div>

                     <div class="form-group">
                     <label for="">Prix</label>
                     <input type="number" name="price" placeholder="Mon prix du service">
                     @error('price')
                     <strong>{{ $message }}</strong>
                     @enderror
                     </div>


                     <button class="btn-grad-product" type="submit">Valider</button>
                 </form>
             </div>

        </div>


@stop
