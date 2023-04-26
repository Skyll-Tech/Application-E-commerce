@extends('layouts.appadmin')

@section('contenu')
        <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Modifier le slider</h4>

                    @if (Session::has('statut'))
                        <div class="alert alert-success">
                            {{Session::get('statut')}}
                        </div>

                    @endif

                    @if (count($errors)> 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>
                                    {{$error}}
                                </li>
                                @endforeach
                            </ul>
                        </div>

                    @endif


                    {!!Form::open(['action' => 'App\Http\Controllers\SliderController@modifierslider', 'method' => 'POST','class' => 'cmxform', 'id' => 'commentForm','enctype'=>'multipart/form-data'])!!}
                    {{ csrf_field() }}
                      <div class="form-group">
                        {{Form::hidden('id',$slider->id)}}
                        {{Form::label('', 'Description  one', ['for' => 'cname'])}}
                        {{Form::text('description1', $slider->description1, ['class' => 'form-control', 'id' => 'cname' ])}}
                      </div>

                      <div class="form-group">
                        {{Form::label('', 'Description two', ['for' => 'cname'])}}
                        {{Form::text('description2', $slider->description2, ['class' => 'form-control', 'id' => 'cname' ])}}
                      </div>

                      <div class="form-group">
                        {{Form::label('', 'Image', ['for' => 'cname'])}}
                        {{Form::file('slider_image', ['class' => 'form-control', 'id' => 'cname' ])}}
                      </div>
                      {!!Form::submit('Modifier',['class' => 'btn btn-primary'])!!}
                     {!!Form::close()!!}

                </div>
              </div>
            </div>
          </div>

@endsection

@section('scripts')

  <!-- Custom js for this page-->
    {{-- <script src="backend/js/form-validation.js"></script>
    <script src="backend/js/bt-maxLength.js"></script> --}}
  <!-- End custom js for this page-->

@endsection
