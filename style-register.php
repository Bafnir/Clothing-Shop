<?php header("Content-type: text/css");?>
body {
    background-color: #f7ca99;
    background-image: url(background-image-index.jpeg);
    background-size: cover;
    background-repeat: no-repeat; 
}


.register{
    width: 400px;
    background-color: #ffffff;
    border-radius: 5px;
    box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
    margin: 100px auto;
}

.register h1{
    margin: 40px;
    padding-top: 30px;
    text-align: center;

}

.prueba{
    display: flex;
}
.register form label{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    height: 50px;
    background-color: #c21a04;
    color: #ffffff;
}


.register form{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding-top: 20px;
}

.register form input[type="password"], .register form input[type="text"], .register form input[type="email"] {
    width: 310px;
    height: 50px;
    display: inline-block;
    border: 1px solid #dee0e4;
    margin-bottom: 20px;
    padding: 0 15px;
}

.register form input[type="submit"]{
    width: 100%;
    padding: 20px;
    border-radius: 10px;
    margin-top: 20px;
    margin-bottom: 10px;
    margin: 20px;
    background-color: #c21a04;
    border: 0;
    cursor: pointer;
    font-weight: bold;
    color: #ffffff;
    transition: background-color 0.2s;
}
