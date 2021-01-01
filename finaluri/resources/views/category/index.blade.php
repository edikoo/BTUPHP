@extends('includes.layout')

@push('css')
    <!-- Data table css -->
    <link href="{{ asset('admin/assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/plugins/datatable/jquery.dataTables.min.css') }}" rel="stylesheet" />
@endpush

@section('content')

    <div class="app-content  my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">მთავარი</a></li>
                    <li class="breadcrumb-item active" aria-current="page">კატეგორიები</li>
                </ol>
            </div>
        </div>

        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">კატეგორიები</div>
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

                    <div class="table-responsive">
                        <table id="example2" class="hover table-bordered border-top-0 border-bottom-0" >
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>სათაური</th>
                                    @can('Admin')
                                        <th>რედაქტირება</th>
                                        <th>წაშლა</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->title }}</td>
                                        @can('Admin')
                                            <td>
                                                <a href="{{ route('category.edit', $category->id) }}" class="btn btn-warning btn-sm mb-1">რედაქტირება</a>
                                            </td>
                                            <td>
                                                <form method="POST" action="{{ route('category.destroy', $category->id) }}">
                                                    @csrf
                                                    @method("DELETE")
                                                    <input type="submit" class="btn btn-danger btn-sm mb-1" value="წაშლა">
                                                </form>
                                            </td>
                                        @endcan
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection

@push('js')
    <script src="{{ asset('admin/assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/datatable.js') }}"></script>
@endpush
