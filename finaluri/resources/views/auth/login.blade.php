@extends('auth.includes.layout')
@section('content')

	<!--Page-->
    <div class="page  h-100">
        <div class="page-content z-index-10">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-12 col-md-12 d-block mx-auto">
                        <div class="card mb-0">
                            <div class="card-header">
                                <h3 class="card-title">ავტორიზაცია</h3>
                            </div>


                            <form  method="POST" action="{{ route('login') }}" class="mt-4">
                                @csrf
                                <div class="card-body">


                                    <span  role="alert">
                                        <strong>ავტორიზაციისთვის შეიყვანე შემდეგი <br> php artisan db:seed --class=UserSeeder</strong>
                                        <br><br>
                                        <strong>ადმინისტრატორის მონაცემები <br>
                                            ელ. ფოსტა: admin@admin.ge <br>
                                            პაროლი: admin <br><br>
                                        </strong>
                                        <strong>მოდერატორის მონაცემები <br>
                                            ელ. ფოსტა: moderator@moderator.ge <br>
                                            პაროლი: moderator
                                        </strong><br><br>
                                    </span>

                                    <div class="form-group">
                                        <label class="form-label text-dark">თქვენი ელექტორნული ფოსტა</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="თქვენი ელექტორნული ფოსტა" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label text-dark">თქვენი პაროლი</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="ჩაწერეთ პაროლი" required autocomplete="ჩაწერეთ პაროლი">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-footer mt-2">
                                        <button class="btn btn-primary btn-block" type="submit">შესვლა</button>
                                    </div>


                                    <div class="col text-center mt-2">
                                        <p>არ გაქვთ ანგარიში? <a href="{{ route('register') }}" class="text-danger">რეგისტრაცია</a></p>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection