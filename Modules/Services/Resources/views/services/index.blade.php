@extends('dashboard::admin.layouts.master')
@section('title','سرویس ها')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/vendors/css/vendors-rtl.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
@endsection
@section('content')
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">لیست خدمات</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>ایکون</th>
                                        <th>نام سرویس</th>
                                        <th>اقدامات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($services as $service)
                                    <tr>
                                        <td><i class="{{$service->icon}}"></i></td>
                                        <td>{{$service->title}}</td>
                                        <td class="d-flex">
                                            @can('edit_service')
                                            <a href="{{route('services.edit',$service->id)}}"><i class="fa fa-edit"></i></a>
                                            @endcan
                                            @can('delete_service')
                                                <form id="deleteForm" action="{{route('services.destroy',$service->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a style="margin-right: 12px" onclick="deleteForm()"><i class="fa fa-remove"></i></a>
                                            </form>
                                                @endcan
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="{{asset('back/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{asset('back/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('back/app-assets/js/scripts/datatables/datatable.min.js')}}"></script>
    <script>
        function deleteForm(){
            $('#deleteForm').submit();
        }
    </script>

@endsection
