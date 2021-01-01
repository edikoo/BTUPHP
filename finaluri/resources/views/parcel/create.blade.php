@extends('includes.layout')

@push('css')
    <link href="{{ asset('admin/assets/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endpush

@section('content')

<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">მთავარი</a></li>
                <li class="breadcrumb-item active" aria-current="page">ამანათის დამატება</li>
            </ol>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">ამანათის დამატება</h3>
            </div>

            <div class="card-body">

                @if (\Session::has('Error'))
                    <div class="alert alert-danger">
                        {!! \Session::get('Error') !!}
                    </div>
                @endif

                @if (\Session::has('Success'))
                    <div class="alert alert-success">
                        {!! \Session::get('Success') !!}
                    </div>
                @endif

                <form action="{{ route('parcel.store') }}" method="POST">
                    @method("POST")
                    @csrf
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-md-12">
                            <div class="form-group">
                                <label class="form-label text-dark">თრექინგი (ჩაწერეთ სრულად)</label>
                                <input id="tracking" type="text" class="form-control @error('tracking') is-invalid @enderror" name="tracking" value="{{ old('tracking') }}" placeholder="თრექინგი (ჩაწერეთ სრულად)"  autocomplete="tracking" autofocus>
                                @error('tracking')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label text-dark">მომხმარებელი</label>
                                <select id="user_id" class="form-control @error('user_id') is-invalid @enderror"  name="user_id" data-live-search="true" >
                                    <option value="">აირჩიეთ</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                                @error('user_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xl-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label text-dark">კატეგორია</label>
                                <select id="categories" class="form-control @error('categories') is-invalid @enderror" name="categories[]" data-live-search="true" multiple required>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                                @error('categories')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-4">
                            <div class="form-group">
                                <label class="form-label text-dark">ვებგვერდი (სადაც შეიძინეთ)</label>
                                <input id="shop" type="text" class="form-control @error('shop') is-invalid @enderror" name="shop" placeholder="ვებგვერდი (სადაც შეიძინეთ)" value="{{ old('shop') }}"  autocomplete="shop" autofocus>
                                @error('shop')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="form-label text-dark">ფასი</label>
                                    <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="ფასი" value="{{ old('price') }}"  autocomplete="price" autofocus>
                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="form-label text-dark">წონა</label>
                                    <input type="number" class="form-control @error('weight') is-invalid @enderror" name="weight" placeholder="წონა" value="{{ old('weight') }}"  autocomplete="weight" autofocus>
                                    @error('weight')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">დამატება</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    
</div>

@endsection

@push('js')
    <script src="{{ asset('admin/assets/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <script>
        $(function () {
            $('select').selectpicker();
        });
    </script>

@endpush
