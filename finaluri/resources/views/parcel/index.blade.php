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
                    <li class="breadcrumb-item active" aria-current="page">ამანათები</li>
                </ol>
            </div>
        </div>

        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">ამანათები</div>
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
                                    @can('Admin')
                                        @if(in_array($id, [1, 2]))
                                            <th>
                                                <button class="btn btn-purple btn-xs" id="send_parcel">
                                                    @if ($id == 1)
                                                        გაგზავნა
                                                    @else
                                                        ჩამოსვლა
                                                    @endif
                                                </button>
                                            </th>
                                        @endif
                                    @endcan

                                    <th>#</th>
                                    <th>თრექინგი</th>
                                    <th>მფლობელი</th>
                                    <th>კატეგორიები</th>
                                    @can('Admin')
                                        <th>რედაქტირება</th>
                                        <th>წაშლა</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($parcels as $parcel)
                                    <tr>
                                        @can('Admin')
                                            @if(in_array($id, [1, 2]))
                                                <td class="td-center">						            	
                                                    <input type="checkbox" class="send_parcel" value="{{ $parcel->id }}">
                                                </td>
                                            @endif
                                        @endcan
                                        <td>{{ $parcel->id }}</td>
                                        <td>{{ $parcel->tracking }}</td>
                                        <td>{{ $parcel->user->name ?? '' }}</td>
                                        <td>
                                            @foreach ($parcel->categories as $category)
                                                <small>{{ $category->title }}</small><br>
                                            @endforeach
                                        </td>
                                        @can('Admin')
                                            <td>
                                                <a href="{{ route('parcel.edit', $parcel->id) }}" class="btn btn-warning btn-sm mb-1">რედაქტირება</a>
                                            </td>
                                            <td>
                                                <form method="POST" action="{{ route('parcel.destroy', $parcel->id) }}">
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

    @can('Admin')
        @if(in_array($id, [1, 2]))
            <script>
                $('.send_parcel').click(function(){
                        if($(this).is(':checked'))
                        {
                            $(this).closest('tr').addClass('selectParcel');
                            $(this).closest('td').css("background-color","#604dd8");
                        }
                        else
                        {
                            $(this).closest('tr').removeClass('selectParcel');
                            $(this).closest('td').css("background-color","white");
                        }
                });

                $('#send_parcel').click(function(){
                    
                    var checkbox = $('.send_parcel:checked');
                    
                    if(checkbox.length > 0)
                    {
                        var c = confirm("ნამდვილად გსურთ განახორციელოთ აღნიშნული მოქმედება?!");
                        if (c == true) {
                        
                            var checkbox_list = [];

                            $(checkbox).each(function(){
                                checkbox_list.push($(this).val());
                            });

                            $.ajax({
                                url:"{{ route('parcel.move') }}",
                                method:"POST",
                                data:{checkboxes:checkbox_list, status:'{{ $id }}', _token:$('input[name="_token"]').val()},
                                success:function(data)
                                {
                                    $('.selectParcel').fadeOut(500);
                                }
                            });
                      
                        }

                    }
                    else
                    {
                        alert("აირჩიეთ ამანათი");
                    }

                });

                
            </script> 
        @endif   
    @endcan

@endpush
