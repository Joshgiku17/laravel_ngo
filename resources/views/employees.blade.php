@extends('layout')
@section('title','Employees')
@section('form')
@section('heading','Employees Records')
<style>
    .info{
        width:20%;padding:5px;position:absolute;left:30vw;top:20px;background-color:var(--fourth);color:white;font-family: 'Signika Negative', sans-serif;
    }
    .center{
        /* background:teal; */
        width:71%;
    }
    .output{
        margin-top:10vh;
    }
    .output{
        position:absolute;
        top:50px;
        left:32vw;
        font-family:'Signika Negative', sans-serif;
        text-align:left;
    }
    .output th,td{
        border-bottom:1px solid #ddd;
    }
    .output td{
        width:10vw;
    }
    .output tr:nth-child(even){
        
        background-color: #f2f2f2;
        
        
    }
    .cta{
        padding:10px;
        border-radius:10px;
        outline:none;
        background-color: var(--teritiary);
        border:0px;
        position:absolute;
        top:64.5vh;
        left:31vw;
        font-family:'Signika Negative', sans-serif;
    }
    .cta a{
        color:white;
        font-size:18px;
    }
</style>
@if (session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif
<button class="cta"><a href="emp_create">insert user</a></button>
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