@extends('dashboard::admin.layouts.master')
@section('title','تجربیات')
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
                        <h4 class="card-title">لیست سوابق کاری</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>عنوان </th>

                                        <th>
                                            تاریخ
                                        </th>
                                        <th>شرکت</th>
                                        <th>اقدامات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($jobs as $job)
                                    <tr>
                                        <td>{{$job->title}}</td>
                                        <td>
                                           تاریخ شروع :  {{$job->start_date}}
                                            <br>
                                             تاریخ پایان :{{$job->end_date}}


                                        </td>
                                        <td>{{$job->office}}</td>
                                        <td class="d-flex">
                                            @can('edit_job')
                                            <a href="{{route('jobs.edit',$job->id)}}"><i class="fa fa-edit"></i></a>
                                            @endcan
                                            @can('delete_job')
                                                <form id="deleteForm" action="{{route('jobs.destroy',$job->id)}}" method="post">
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
