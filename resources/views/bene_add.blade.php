@extends('layout')
@section('heading','Register a beneficiary')
@section ('title','insert new record')
<style>
    .center{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    position: relative;
}
.amakuru{
    height: 70vh;
    width: 50%;
    padding: 25px;
    font-family: 'Manrope', sans-serif;
    display: flex;
    flex-direction: column;
    position: relative;
    border-radius: 5px;
}
.amakuru input{
    height: 38.64px;
    margin-bottom: 20px;
    border-radius: 5px;
    padding: 10px;
    outline: none;
    border: 0px;
    background-color: var(--placeholder_2);
    color: var(--primary_text);
    font-family: 'Manrope', sans-serif;
}
.smalls{
    width: 100%;
    display: flex;
    justify-content: space-between;
}
.amakuru .smalls input{
    width: 173.94px;
    
}
.amakuru .sub,.view, .view a{
    cursor: pointer;
    font-family: 'Signika Negative', sans-serif;
    font-size: 16px;
    height: 5vh;
    color: white;
    width: 100%;
    background-color: var(--fourth);
    outline: none;
    border: none;
    border-radius: 5px;
    
    
}
.alternatives a{
    color: var(--primary_text);
    text-decoration: none;
    font-family: 'Manrope', sans-serif;
    font-size: 16px;
    margin-top: 10px;
    color: #2B3467;
}.center{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 70%;
    position: relative;
}
.info{
        width:20%;
        padding:5px;
        position:absolute;
        left:30vw;
        top:20px;
        background-color:var(--fourth);
        color:white;
        /* font-size:18px; */
        font-family: 'Signika Negative', sans-serif;
    }
    .amakuru .smalls label{
        margin-top:10px;
        width:1vw;
        font-family: 'Manrope', sans-serif;
    }
</style>

@section('form')
<form action="/register_bene" method="POST" class="amakuru">
            @csrf
                <input type="text" name="names" id="" placeholder="Enter beneficiary names" required>
                <input type="text" name="address" id="" placeholder="Enter District" required>
                <div class="smalls">
                    <input type="text" name="dob" id=""Placeholder="Enter date of birth" required>
                    <input type="text" name="phone_num" id="" placeholder="Tel: +250" required>
                </div>
                <input type="text" name="work" id="" placeholder="Enter occupation" required>
                    <input type="submit" value="Register" class="sub" name="submit">
               <button class="view"><a href="bene">View Records</a></button>
</form>
@endsection