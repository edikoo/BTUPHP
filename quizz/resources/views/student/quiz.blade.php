@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <form enctype="multipart/form-data" action="{{ route('results') }}" method="POST">
                @csrf

                <div class="row">
                    @foreach($questions as $question)
                    <div class="col-md-12">
                        <div class="card mt-4">
                            <div class="card-body">
                                <p class="card-text">{{ $question->title }}</p>
                                Choose the answers:
                                @foreach ($question->answers as $answear)
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="{{ $question->id }}"
                                            id="optionsRadios2" value="{{ $answear->answear }}" required>
                                        {{ $answear->answear }}
                                    </label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    @endforeach
                    <br><br>
                    <div class="col-md-12">
                        <div class="form-group col-sm-12 mt-20" style="margin-top: 25px">
                            <button type="submit" class="btn btn-primary w-100">RESULT</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
