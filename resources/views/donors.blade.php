@extends('layout')
@section('title','Donors')
@section('form')
@section('heading','Donors Records')
<style>
    .info{
        width:20%;padding:5px;position:absolute;left:30vw;top:20px;background-color:var(--fourth);color:white;font-family: 'Signika Negative', sans-serif;
    }
    .center{
        background:teal;
        width:71%;
    }
    .output{
        margin-top:10vh;
    }
    .output{
        position:absolute;
        top:50px;
        left:40vw;
    }
</style>
@if (session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif
<button><a href="don_add">insert user</a></button>
<table class="output">
    <thead>
        <tr>
            <th>Full names</th>
            <th>Email</th>
            <th>phone</th>
            <th>Date of birth</th>
            <th>role id</th>
            <th>Username</th>
        </tr>
    </thead>
    @foreach($employee as $row)
            <tr>
                <td>{{$row->name}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->phone}}</td>
                <td>{{$row->dob}}</td>
                <td>{{$row->roleid}}</td>
                <td>{{$row->username}}</td>
            </tr>
    @endforeach
</table>

@endsection