@extends('home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 mt-5">
                <form class="formHorisontal" action="{{ route('update', $applicant->id) }}" method="POST">
                    @csrf
                    @method("PATCH")
                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Enter Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $applicant->name }}" placeholder="Enter Name">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Enter Surname</label>
                        <input type="text" class="form-control" id="surname" name="surname" value="{{ $applicant->surname }}" placeholder="Enter Surname">
                        @if ($errors->has('surname'))
                            <span class="text-danger">{{ $errors->first('surname') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Enter Position</label>
                        <input type="text" class="form-control" id="position" name="position" value="{{ $applicant->position }}" placeholder="Enter Position">
                        @if ($errors->has('position'))
                            <span class="text-danger">{{ $errors->first('position') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Enter Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ $applicant->phone }}" placeholder="Enter Phone">
                        @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>
                    <div class="form-group  col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection