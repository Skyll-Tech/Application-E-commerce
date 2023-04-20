@extends('layouts.appadmin')
@section('contenu')
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Catégories</h4>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                        <th>Ordre #</th>
                        <th>Nom de la catégorie</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>

                        @foreach ($categories as $categorie)
                        <tr>
                            <td>1</td>
                            <td>{{$categorie->nom_categorie}}</td>


                        {{--<td>
                              <label class="badge badge-info">On hold</label>
                            </td>--}}


                            <td>
                              <button class="btn btn-outline-primary" onclick="window.location = '{{url('/editer_categorie/'.$categorie->id)}}'">Editer</button>
                              <button class="btn btn-outline-danger">Supprimer</button>
                            </td>
                        </tr>
                        @endforeach

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection
@section('scripts')
        <script src="{{asset('backend/js/data-table.js')}}"></script>
@endsection
