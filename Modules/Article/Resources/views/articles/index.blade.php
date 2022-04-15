@extends('dashboard::admin.layouts.master')
@section('title','مقالات')
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
                        <h4 class="card-title">لیست مقالات</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>تصویر مقاله</th>
                                        <th>عنوان مقاله</th>
                                        <th>دسته بندی</th>
                                        <th>وضعیت</th>
                                        <th>اقدامات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(\Modules\Article\Entities\Article::all() as $article)
                                    <tr>
                                        <td style="width: 30%"><img src="{{asset('storage')}}/{{$article->image}}" style="width: 100px;height: 100px" ></td>
                                        <td>{{$article->title}}</td>
                                        <td>
                                            @foreach($article->categories()->pluck('title') as $category)
                                                <span class="badge badge-primary">{{$category}}</span>
                                                <br>
                                            @endforeach
                                        </td>
                                        <td>
                                            @if($article->status==0)
                                                <span class="badge badge-warning">پیش نویس</span>
                                            @else
                                                <span class="badge badge-success">منتشر شده</span>
                                            @endif
                                        </td>
                                        <td class="d-flex">
                                            @can('edit_article')
                                            <a href="{{route('articles.edit',$article->id)}}"><i class="fa fa-edit"></i></a>
                                            @endcan
                                            @can('delete_article')
                                            <form id="deleteForm" action="{{route('articles.destroy',$article->id)}}" method="post">
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
