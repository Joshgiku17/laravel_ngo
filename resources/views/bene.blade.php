@extends('layout')
@section('title','Beneficiary')
@section('form')
@section('heading','Beneficiaries Records')
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
        left:40vw;
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
@if (session('Success'))
    <script>
        alert("{{ session('Success') }}");
    </script>
@endif
<button class="cta"><a href="bene_add">Register new beneficiary</a></button>
<table class="output">
    <thead>
        <tr>
            <th>Full names</th>
            <th>Address</th>
            <th>phone</th>
            <th>Date of birth</th>
            <th>Occupation</th>
        </tr>
    </thead>
    @foreach($bene as $row)
            <tr>
                <td>{{$row->names}}</td>
                <td>{{$row->address}}</td>
                <td>{{$row->phone_num}}</td>
                <td>{{$row->dob}}</td>
                <td>{{$row->work}}</td>
            </tr>
    @endforeach
</table>

@endsection