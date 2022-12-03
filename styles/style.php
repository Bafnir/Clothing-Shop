<?php header("Content-type: text/css");?>
{
    box-sizing: border-box;
    font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
    font-size: 16px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
body {
    background-color: #f7ca99;
    background-image: url(../images/background-image-index.jpeg);
    background-size: cover;
    background-repeat: no-repeat; 
    height: 100%;
    padding: 0px;
    margin: 0px;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}
html{
    height: 100%;
    padding: 0px;
    margin: 0px;
}
.loggedin {
    background-color: white;
    background-image: url();
    padding: 0px;
    margin: 0px;
}

.center-home{
  margin: 0 auto;
  margin-bottom: 50px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  font-family:Cambria, Times, "Times New Roman", serif;
}



.producto {
    background-color: blue;
}

.login{
    width: 400px;
    background-color: #ffffff;
    border-radius: 5px;
    box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
    margin: 100px auto;
}
.registerLogin {
    width: 300px;
    background-color: #ffffff;
    box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
    margin: 10px auto;
    border-radius: 10px;
}
.login h1{
    text-align: center;
    color: #00000;
    font-size: 24px;
    padding: 20px 0 20px 0;
    border-bottom: 1px solid #dee0e4;
}
.login form{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding-top: 20px;
}

.login form label{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    height: 50px;
    background-color: #14264c;
    color: #ffffff;
}
.login form input[type="password"], .login form input[type="text"]{
    width: 310px;
    height: 50px;
    border: 1px solid #dee0e4;
    margin-bottom: 20px;
    padding: 0 15px;
}

.login form input[type="submit"], .register form input[type="submit"]{
    width: 100%;
    padding: 15px;
    border-radius: 10px;
    margin-top: 20px;
    margin: 10px;
    background-color: #14264c;
    border: 0;
    cursor: pointer;
    font-weight: bold;
    color: #ffffff;
    transition: background-color 0.2s;
}
.user-table {
    border-collapse: collapse;
    margin: 25px 25px;
    font-size: 0.9em;
    border-radius: 1em;
    font-family: sans-serif;
    min-width: 400px;
    width: 75%;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    background-color: #ffffff
}

.user-table thead tr {
    background-color: #14264c;
    color: #ffffff;
    border-radius: 1em;
    text-align: left;
}

.user-table th,
.user-table td {
    padding: 12px 15px;
}

.user-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.user-table tbody tr:nth-of-type(even) {
    background-color: #ffffff;
}

.user-table tbody tr:last-of-type {
    border-bottom: 2px solid #14264c;
}

.user-table tbody tr.active-row {
    font-weight: bold;
    color: #14264c;
}

.title-home{
    background-color: white;
    border-radius: 10px;
    padding: 5px;
	margin: 0 0 10px 0;
}
.registerLogin form input[type="submit"] {
    width: 93%;
    padding: 15px;
    border-radius: 10px;
    margin: 10px;
    background-color: #14264c;
    border: 0;
    cursor: pointer;
    font-weight: bold;
    color: #ffffff;
    transition: background-color 0.2s;
}
.login form input[type="submit"]:hover, .registerLogin form input[type="submit"]:hover{
  background-color: #04702e;
    transition: background-color 0.2s;
}
.navtop {
	background-color: #ffffff;
	height: 60px;
	width: 100%;
	border: 0;
    padding: 0;
}
.navtop div {
	display: flex;
	margin: 0 auto;
	width: 1000px;
	height: 100%;
}
.navtop div h1, .navtop div a {
	display: inline-flex;
	align-items: center;
}
.navtop div h1 {
	flex: 1;
	font-size: 24px;
	padding: 0;
	margin: 0;
	color: black;
	font-weight: normal;
}
.navtop div a {
	padding: 0 20px;
	text-decoration: none;
	color: #c1c4c8;
	font-weight: bold;
}
.navtop div a i {
	padding: 2px 8px 0 0;
}
.navtop div a:hover {
	color: #eaebed;
}
body.loggedin {
	background-color: #f3f4f7;
}
.content {
	width: 1000px;
	margin: 0 auto;
    margin-top: 20px;
}
.content h2 {
	margin: 0;
	padding: 25px 0;
	font-size: 22px;
	border-bottom: 1px solid #e0e0e3;
	color: #4a536e;
}
.content > p, .content > div {
	box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
	margin: 25px 0;
	padding: 25px;
	background-color: #fff;
}
.content > p table td, .content > div table td {
	padding: 5px;
}
.content > p table td:first-child, .content > div table td:first-child {
	font-weight: bold;
	color: #4a536e;
	padding-right: 15px;
}
.content > div p {
	padding: 5px;
	margin: 0 0 10px 0;
}

.user-table form input[type="submit"]{
  width: 93%;
  padding: 15px;
  border-radius: 10px;
  margin: 10px;
  background-color: #14264c;
  border: 0;
  cursor: pointer;
  font-weight: bold;
  color: #ffffff;
  transition: background-color 0.2s;
}

.center-home form input[type="submit"]{
  width: 93%;
  padding: 15px;
  border-radius: 10px;
  margin: 10px;
  background-color: #14264c;
  border: 0;
  cursor: pointer;
  font-weight: bold;
  color: #ffffff;
  transition: background-color 0.2s;
}

.center-home form input[type="submit"]:hover{
    background-color: #04702e;
    transition: background-color 0.2s;
}

.user-table form input[type="submit"]:hover{
    background-color: #04702e;
    transition: background-color 0.2s;
}

.Producto{
    background-color: #c2ffd8;
    border-radius: 10px;
    display: inline;
    padding: 3%;
    width: 50%;
}

.Product{
    background-color: #14264c;
    border-radius: 10px;
    padding: 3%;
    width: 50%;
    display: flex;
    align-items: center;
    justify-content: center
}

.boton-solo{
    width: 93%;
    padding: 15px;
    border-color:white;
    border-radius: 10px;
    margin: 10px;
    background-color: #14264c;
    border: 0;
    cursor: pointer;
    font-weight: bold;
    color: #ffffff;
    transition: background-color 0.2s;
}
#btn-see-add{
    width: 93%;
    margin-:10px;
    padding: 15px;
    padding-left:15px
    border-radius: 10px;
    margin: 10px;
    border: 0;
    cursor: pointer;
    font-weight: bold;
    color: black;
    background-color:white;
    transition: background-color 0.2s;
    
}

#btn-see-add[type="submit"]:hover{
    width: 93%;
    padding: 15px;
    border-radius: 10px;
    margin: 10px;
    border: 0;
    cursor: pointer;
    font-weight: bold;
    color: black;
    background-color:green;
    transition: background-color 0.2s;
    
}
.image{
    flex-basis: 40%;
}

.text {
    font-size: 20px;
    padding-left: 20px;
}

footer{
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: #111;
    height: auto;
    width: 100vw;

    padding-top: 40px;
    color: #fff;
}
.footer-content{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}
.footer-content h3{
    font-size: 2.1rem;
    font-weight: 500;
    text-transform: capitalize;
    line-height: 3rem;
}
.footer-content p{
    max-width: 500px;
    margin: 10px auto;
    line-height: 28px;
    font-size: 14px;
    color: #cacdd2;
}
.socials{
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 3rem 0;
}
.socials li{
    margin: 0 10px;
}
.socials a{
    text-decoration: none;
    color: #fff;
    border: 1.1px solid white;
    padding: 5px;

    border-radius: 50%;

}
.socials a i{
    font-size: 1.1rem;
    width: 20px;


    transition: color .4s ease;

}
.socials a:hover i{
    color: aqua;
}

.footer-bottom{
    background: #000;
    width: 100vw;
    padding: 20px;
padding-bottom: 40px;
    text-align: center;
}
.footer-bottom p{
float: left;
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
}
.footer-bottom p a{
  color:#44bae8;
  font-size: 16px;
  text-decoration: none;
}
.footer-bottom span{
    text-transform: uppercase;
    opacity: .4;
    font-weight: 200;
}
.footer-menu{
  float: right;

}
.footer-menu ul{
  display: flex;
}
.footer-menu ul li{
padding-right: 10px;
display: block;
}
.footer-menu ul li a{
  color: #cfd2d6;
  text-decoration: none;
}
.footer-menu ul li a:hover{
  color: #27bcda;
}

.chat-list {
    padding: 0;
    font-size: .8rem;
}

.chat-list li {
    margin-bottom: 10px;
    overflow: auto;
    color: #ffffff;
}

.chat-list .chat-img {
    float: left;
    width: 48px;
}

.chat-list .chat-img img {
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
    width: 100%;
}

.chat-list .chat-message {
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
    background: #5a99ee;
    display: inline-block;
    padding: 10px 20px;
    position: relative;
}

.chat-list .chat-message:before {
    content: "";
    position: absolute;
    top: 15px;
    width: 0;
    height: 0;
}

.chat-list .chat-message h5 {
    margin: 0 0 5px 0;
    font-weight: 600;
    line-height: 100%;
    font-size: .9rem;
}

.chat-list .chat-message p {
    line-height: 18px;
    margin: 0;
    padding: 0;
}

.chat-list .chat-body {
    margin-left: 20px;
    float: left;
    width: 70%;
}

.chat-list .in .chat-message:before {
    left: -12px;
    border-bottom: 20px solid transparent;
    border-right: 20px solid #5a99ee;
}

.chat-list .out .chat-img {
    float: right;
}

.chat-list .out .chat-body {
    float: right;
    margin-right: 20px;
    text-align: right;
}

.chat-list .out .chat-message {
    background: #fc6d4c;
}

.chat-list .out .chat-message:before {
    right: -12px;
    border-bottom: 20px solid transparent;
    border-left: 20px solid #fc6d4c;
}

.card .card-header:first-child {
    -webkit-border-radius: 0.3rem 0.3rem 0 0;
    -moz-border-radius: 0.3rem 0.3rem 0 0;
    border-radius: 0.3rem 0.3rem 0 0;
}
.card .card-header {
    background: #17202b;
    border: 0;
    font-size: 1rem;
    padding: .65rem 1rem;
    position: relative;
    font-weight: 600;
    color: #ffffff;
}

.content{
    margin-top:40px;    
}