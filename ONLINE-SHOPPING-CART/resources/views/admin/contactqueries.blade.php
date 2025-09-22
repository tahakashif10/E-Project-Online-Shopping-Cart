
@extends('admin.adminsidebar')
@section('admincontent')
<div
                    class="table-responsive"
                >
                    <table
                        class="table table-primary"
                    >
                        <thead>
                            <tr>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Message</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rec as $re)
                            <tr class="">
                                <td>{{$re->Firstname}}</td>
                                <td>{{$re->Lastname}}</td>
                                <td>{{$re->Email}}</td>
                                <td>{{$re->Subject}}</td>
                                <td>{{$re->Message}}</td>
                                <td>
                                     <form action="/delete/{{$re->id}}" method="post">
                                        @csrf
                                       <button class="btn btn-md bg-danger text-light" type="submit">Delete</button>
                                      </form>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>

@endsection