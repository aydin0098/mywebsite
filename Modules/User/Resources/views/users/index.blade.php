@extends('dashboard::admin.layouts.master')
@section('title','کاربران')
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
                        <h4 class="card-title">لیست کاربران</h4>
                        @can('add_user')
                        <a class="btn-sm btn-primary" href="{{route('users.create')}}">کاربر جدید</a>
                        @endcan
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>نام کاربر</th>
                                        <th>ایمیل کاربر</th>
                                        @if(config('permission.route'))
                                        <th>نقش کاربر</th>
                                        <th>دسترسی ها</th>
                                        @endif
                                        <th>اقدامات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(\Modules\User\Entities\User::all() as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>
                                            @if($user->email)
                                                {{$user->email}}
                                            @else
                                            <span class="badge badge-danger">ندارد</span>
                                            @endif
                                        </td>
                                        @if(config('permission.route'))
                                        <td>
                                            @if($user->role=='admin')
                                                <span class="badge badge-success">مدیر سایت</span>
                                            @elseif($user->role=='colleague')
                                                <span class="badge badge-warning">همکار سایت</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($user->role == 'colleague')
                                            @can('permission_user')
                                            <a href="{{route('admin.users.permission',$user->id)}}"><i class="fa fa-eye"></i></a>
                                            @endcan
                                            @elseif($user->role == 'admin')
                                            @else
                                                <span class="badge badge-primary">عدم دسترسی</span>
                                            @endif
                                        </td>
                                        @endif
                                        <td class="d-flex">
                                            @can('edit_user')
                                            <a href="{{route('users.edit',$user->id)}}"><i class="fa fa-edit"></i></a>
                                            @endcan
                                            @can('delete_user')
                                                <form id="deleteForm" action="{{route('users.destroy',$user->id)}}" method="post">
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
