@extends('admin.master');
@section('content')
    <div class="container-fluid">
        <h3 class="mt-4">Collaborateur</h3>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Tableau De Bord</a></li>
            <li class="breadcrumb-item active">Infos Collaborateur</li>
        </ol>
        <div class="container pb-lg-5">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4 class="text-success">Details Collaborateur</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th class="w-25">Nom Collaborateur :</th>
                                        <td>{{$employee->first_name.' '.$employee->last_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>ID Collaborateur :</th>
                                        <td>{{$employee->employee_official_id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Nom Departement :</th>
                                        <td>{{$department->department_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Nom Team Leader:</th>
                                        <td>{{$manager->first_name.' '.$manager->last_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>ID Team Leader :</th>
                                        <td>{{$manager->manager_official_id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email:</th>
                                        <td>{{$employee->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Numero De Telephone:</th>
                                        <td>{{$employee->phone_number}}</td>
                                    </tr>
                                    <tr>
                                        <th>Date De Naissance :</th>
                                        <td>{{$employee->date_of_birth}}</td>
                                    </tr>
                                    <tr>
                                        <th>Sexe :</th>
                                        <td>{{$employee->gender}}</td>
                                    </tr>
                                    <tr>
                                        <th>Poste :</th>
                                        <td>{{3-$employee->employee_status}}</td>
                                    </tr>
                                                                       
                                    <tr>
                                        <th>Qualification :</th>
                                        <td>{{$employee->qualification}}</td>
                                    </tr>
                                    <tr>
                                        <th>Date d'effet :</th>
                                        <td>{{$employee->created_at}}</td>
                                    </tr>
                                    <tr>
                                        <th>User Name :</th>
                                        <td>{{$employee->user_name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Mot de Passe :</th>
                                        <td>{{$employee->password}}</td>
                                    </tr>
                                    <tr>
                                        <th>Address :</th>
                                        <td>{{$employee->address}}</td>
                                    </tr>
                                    <tr>
                                        <th>Photo Collaborateur :</th>
                                        <td>
                                            <img src="{{asset($employee->employee_image)}}" height="100px" width="100px" alt="">
                                        </td>
                                    </tr>
                                </table>
                                <div class="float-right col-sm-2">
                                    <a href="{{route('manage-employee')}}" class="btn btn-block btn-success">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
