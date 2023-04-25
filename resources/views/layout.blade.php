<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title')</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Manrope&family=Nunito&family=Signika+Negative&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap');
:root{
    --primary:#edf1d6;
    --text:#40513b;
    --teritiary:#9dc08b;
    --fourth:#609966;
    --placeholder:#FFFBEB;
    --placeholder_2:#d9d9d977;
    --primary_text:#20262E;
    --hover:#B4E5BC;
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    list-style-type: none;
}
body{
    background-color: var(--primary);
    display: flex;
    width: 100%;
    position: relative;
}


body .abs_img{
    z-index: 1;
    position: fixed;
    max-width: 100%;
    width: 200.53px;
    height: 301.5px;
    left: 1596.2px;
    top: 652px;
}
.green_nav{
    background-color: var(--teritiary);
    width: 402px;
    height: 100vh;
    /* position: fixed; */
    display: flex;
    align-items:normal;
    justify-content: center;
    flex-direction: column;
}
.green_nav .links{
  height: 70vh;
  padding: 30px;
}


.links  li{
    height: 30px;
    margin-bottom: 20px;
    background-color:var(--primary);
    height:35px;
    display: flex;
    border-radius: 5px;
    position: relative;

}
.links li:hover{
    background-color: var(--hover);

}
.links li a{
    font-family: 'Signika Negative', sans-serif;
    line-height: 1cm;
    margin-left: 20px;
    color: #20262E;
    width: 70%;
}
.links i{
    width: 15%;
}
 .logo img{
    position: absolute;
    top: 12px;
    left: 120px;
    width: 120px;
    height: 90px;
    pointer-events: none;
 
}
.green_nav links{
    height: 60%;
}

</style>
<body>
    
    <div class="green_nav" >
        <div class="logo">
            <a href="#">
                <!-- <img src="Group 3.svg" alt=""> -->
                
            </a>
            
        </div>
        <div class="links">
            <ul>
                <li><a href="/admin"><i class="fa-solid fa-house"></i>Home</a></li>
                <li><a href="/bene"><i class="fa-solid fa-users-line"></i>Beneficiaries</a></li>
                <li><a href="employees"><i class="fa-solid fa-user-tie"></i>Employees</a></li>
                <li><a href="donors"><i class="fa-solid fa-handshake"></i>Donors</a></li>
                <li><a href="/login"><i class="fa-solid fa-arrow-right-from-bracket"></i>Signout</a></li>
            </ul>
        </div>
        <div class="copyw">
            
        </div>
    </div>
    <h2 class="info">@yield('heading')</h2>
    <div class="center">
        @yield('form')
    </div>
</body>
</html>