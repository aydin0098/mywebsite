@extends('dashboard::admin.layouts.master')
@section('title','شبکه های اجتماعی')
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
                        <h4 class="card-title">لیست شبکه های اجتماعی</h4>
                        <a class="btn-sm btn-primary" href="{{route('socials.create')}}">ایتم جدید</a>

                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>ایکون</th>
                                        <th>نام </th>
                                        <th>لینک </th>
                                        <th>اقدامات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(\Modules\Social\Entities\Social::all() as $social)
                                    <tr>
                                        <td><i class="{{$social->icon}}"></i></td>
                                        <td>{{$social->name}}</td>
                                        <td>{{$social->link}}</td>
                                        <td class="d-flex">
                                            <a href="{{route('socials.edit',$social->id)}}"><i class="fa fa-edit"></i></a>
                                            <form id="deleteForm" action="{{route('socials.destroy',$social->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a style="margin-right: 12px" onclick="deleteForm()"><i class="fa fa-remove"></i></a>
                                            </form>
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
