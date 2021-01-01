@extends('includes.layout')
@section('content')

    <div class="app-content  my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">მთავარი გვერდი</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">მთავარი</a></li>
                    <li class="breadcrumb-item active" aria-current="page">მთავარი</li>
                </ol>
            </div>
        </div>
        
        <div class="col-md-12 col-lg-12 col-xl-12">

            
            <div class="row item-all-cat">
                <div class="col-xl-4 col-md-6">
                    <div class="item-all-card bg-yellow text-center">
                        <a href="{{ route('parcel.index', 1) }}"></a>
                        <div class="iteam-all-icon">
                            <i class="fa fa-archive" aria-hidden="true"></i>
                        </div>
                        <div class="item-all-text mt-3">
                            <p>ამანათები საწყობში</p>
                            <h1 class="mb-0 counter">{{ $sawyobshi }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="item-all-card bg-pink text-center">
                        <a href="{{ route('parcel.index', 2) }}"></a>
                        <div class="iteam-all-icon">
                            <i class="fa fa-road" aria-hidden="true"></i>
                        </div>
                        <div class="item-all-text mt-3">
                            <p>ამანათები გზაში</p>
                            <h1 class="mb-0 counter">{{ $gzashi }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="item-all-card bg-orange text-center">
                        <a href="{{ route('parcel.index', 2) }}"></a>
                        <div class="iteam-all-icon">
                            <i class="fa fa-arrow-down" aria-hidden="true"></i>
                        </div>
                        <div class="item-all-text mt-3">
                            <p>ჩამოსული ამანათები</p>
                            <h1 class="mb-0 counter">{{ $chamosuli }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
