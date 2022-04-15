@extends('dashboard::admin.layouts.master')
@section('title','بخش تماس با من')
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
                        <h4 class="card-title">لیست پیام ها</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>نام نظر دهنده</th>
                                        <th>ایمیل</th>
                                        <th>موضوع</th>
                                        <th>متن نظر</th>
                                        <th>اقدامات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(\Modules\Contact\Entities\Contact::all() as $contact)
                                        <tr>
                                            <td>{{$contact->name}}</td>
                                            <td>
                                                @if($contact->email)
                                                    {{$contact->email}}
                                                @else
                                                    <span class="badge badge-danger">ندارد</span>
                                                @endif
                                            </td>
                                            <td>{{$contact->subject}}</td>
                                            <td>{{$contact->comment}}</td>
                                            <td class="d-flex">
                                                <form id="deleteForm" action="{{route('admin.contact.delete',$contact->id)}}" method="post">
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
