@extends('dashboard::admin.layouts.master')
@section('title','نقش ها')
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
                        <h4 class="card-title">لیست نقش ها</h4>
                        <a class="btn-sm btn-primary" href="{{route('roles.create')}}">نقش جدید</a>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>نام نقش</th>
                                        <th>توضیحات نقش</th>
                                        <th>دسترسی ها</th>
                                        <th>اقدامات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(\Modules\Role\Entities\Role::all() as $role)
                                    <tr>
                                        <td>{{$role->name}}</td>
                                        <td>{{$role->label}}</td>
                                        <td>
                                            @can('role_permission')
                                            <a href="{{route('admin.role.permission',$role->id)}}"><i class="fa fa-eye"></i></a>
                                            @endcan
                                        </td>
                                        <td class="d-flex">
                                            @can('edit_role')
                                            <a href="{{route('roles.edit',$role->id)}}"><i class="fa fa-edit"></i></a>
                                            @endcan
                                            @can('delete_role')
                                                <form id="deleteForm" action="{{route('roles.destroy',$role->id)}}" method="post">
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
