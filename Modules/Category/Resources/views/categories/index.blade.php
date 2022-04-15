@extends('dashboard::admin.layouts.master')
@section('title','دسته بندی ها')
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
                        <h4 class="card-title">لیست دسته بندی ها</h4>
                        @can('create_category')
                        <a class="btn-sm btn-primary" href="{{route('categories.create')}}">دسته جدید</a>
                        @endcan
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>نام دسته</th>
                                        <th>اقدامات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(\Modules\Category\Entities\Category::all() as $cat)
                                    <tr>
                                        <td>{{$cat->title}}</td>
                                        <td class="d-flex">
                                            @can('edit_category')
                                            <a href="{{route('categories.edit',$cat->id)}}"><i class="fa fa-edit"></i></a>
                                            @endcan
                                            @can('delete_category')
                                                <form id="deleteForm" action="{{route('categories.destroy',$cat->id)}}" method="post">
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
