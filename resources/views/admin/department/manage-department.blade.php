@extends('admin.master');
@section('content')
    <div class="container-fluid">
        <h3>Departement</h3>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Tableau De Bord</a></li>
            <li class="breadcrumb-item active">Departement Infos</li>
        </ol>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="text-center text-success" id="message">{{Session::get('message')}}</h4>
                    <div class="card ">
                        <div class="card-header text-center">
                            <h4 class="text-info">Liste Des Departements</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive ">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>id Departement</th>
                                        <th>Localisation</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    
                                    </tfoot>
                                    <tbody>
                                    @php($i=1)
                                    @foreach($departments as $department)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$department->department_name}}</td>
                                            <td>
{{--                                                <a href="" class="btn btn-success btn-xs" title="View Details">--}}
{{--                                                    <span class="fa fa-search-plus"></span>--}}
{{--                                                </a>--}}
                                                <a  href="{{route('delete-department',['id'=>$department->id])}}" class="btn btn-danger btn-xs" title="Delete">
                                                    <span class="fa fa-trash"></span>
                                                </a>

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
    </div>
@endsection
