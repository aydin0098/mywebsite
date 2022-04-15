@extends('dashboard::admin.layouts.master')
@section('title','نمونه کارها')
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
                        <h4 class="card-title">لیست نمونه کارها</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>تصویر نمونه کار</th>
                                        <th>عنوان نمونه کار</th>
                                        <th>دسته بندی</th>
                                        <th>اقدامات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(\Modules\Portfolio\Entities\Portfolio::all() as $portfolio)
                                    <tr>
                                        <td style="width: 30%"><img src="{{asset('storage')}}/{{$portfolio->image}}" style="width: 100px;height: 100px" ></td>
                                        <td>{{$portfolio->title}}</td>
                                        <td>
                                            @foreach($portfolio->categories()->pluck('title') as $category)
                                                <span class="badge badge-primary">{{$category}}</span>
                                                <br>
                                            @endforeach
                                        </td>
                                        <td class="d-flex">
                                            @can('edit_portfolio')
                                            <a href="{{route('portfolios.edit',$portfolio->id)}}"><i class="fa fa-edit"></i></a>
                                            @endcan
                                            @can('delete_portfolio')
                                                <form id="deleteForm" action="{{route('portfolios.destroy',$portfolio->id)}}" method="post">
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
