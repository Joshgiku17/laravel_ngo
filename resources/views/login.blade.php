<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login here</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Manrope&family=Nunito&family=Signika+Negative&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap');
:root{
    --primary:#edf1d6;
    --text:#40513b;
    --teritiary:#9dc08b;
    --fourth:#609966;
    --placeholder:#FFFBEB;
    --placeholder_2:#d9d9d977;
    --primary_text:#20262E;
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    display: flex;
    height: 100vh;
}
.left{
    background-color: var(--primary);
    width: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.left .logo img{
    position: absolute;
    top: 12px;
    left: 32px;
    width: 130px;
    height: 120px;
}
.form-wrap{
  
    width: 410px;
    height: 403px;
}
.title{
    background-color: #fff;
    width: 100%;
    height: 68px;
    font-family: 'Signika Negative', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
    margin-bottom: 57px;
}

.amakuru{
    background-color: #ffffff;
    height: 280px;
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
    padding: 15px;
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
.amakuru .sub{
    cursor: pointer;
    font-family: 'Signika Negative', sans-serif;
    font-size: 20px;
    height: 5vh;
    color: white;
    width: 100%;
    background-color: var(--fourth);
}
.alternatives a{
    color: var(--primary_text);
    text-decoration: none;
    font-family: 'Manrope', sans-serif;
    font-size: 16px;
    margin-top: 10px;
    color: #2B3467;
}
.right{
    background-color: var(--teritiary);
    width: 50%;
    font-family: 'Manrope', sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    
}
.right img{
    position: absolute;
    max-width: 100%;
    opacity: 0.2;
    width: 50%;
    height: 100vh;
    object-fit:fill;
    pointer-events: none;
}
.right_text{
    background-color: #ffffff8a;
    font-size: 20px;
    height: 450px;
    width: 478.4px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 10px;
    border-radius: 10px;
    z-index: 1;
    font-family: 'Roboto Mono', monospace;
    
}
.right_text .first_p{
    margin-bottom: 20px;
}
.right_text .second_p{
    margin-bottom: 20px;
}
.right_text .third_p{
    justify-content: space-between;
}
</style>

<body>
@if (session('danger'))
    <script>
        alert("{{ session('danger') }}");
    </script>
@endif
<div class="left">
    <div class="logo">
        <a href="#">
            <img src="Group 3.svg" alt="">
        </a>
    </div>
    <div class="form-wrap">
        <div class="title">
            <h2>Sign in</h2>
        </div>
        <form action="/validate" class="amakuru" method="post">
                @csrf
                <input type="username" name="username" id="" placeholder="Enter username">
                <input type="password" name="pwd" id="" placeholder="Enter password">
                <input type="submit" value="login" class="sub" name="submit">
                <div class="alternatives">
                    <div class="alert" style="color:red;">
                    </div>
                    <a href="/index">
                        Don't have an account ? Register
                    </a>
                </div>
            </form>
        </div>
    </div>
    <div class="right">
        <img src="../img/konvetion.webp" alt="">
        <div class="right_text">
            <p class="first_p">Welcome to PORTAL
            </p>
            <p class="second_p">

                "By pooling their resources and working together, we ensure that partnering organizations can achieve
                their collective goals more quickly and with greater impact."
            </p>
        </div>
    </div>
   
</body>

</html>