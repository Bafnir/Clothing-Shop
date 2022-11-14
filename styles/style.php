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
}
html{
    height: 100%;
    padding: 0px;
    margin: 0px;
}
.loggedin {
    background-color: white;
    background-image: url(background-image-indx.jpeg);
    padding: 0px;
    margin: 0px;
}

.center-home{
    margin: 0 auto;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
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
    background-color: #009879;
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
    background-color: #009879;
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
}

.user-table thead tr {
    background-color: #009879;
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
    background-color: #f3f3f3;
}

.user-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.user-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
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
    background-color: #009879;
    border: 0;
    cursor: pointer;
    font-weight: bold;
    color: #ffffff;
    transition: background-color 0.2s;
}
.login form input[type="submit"]:hover, .registerLogin form input[type="submit"]:hover{
  background-color: #eb7a34;
    transition: background-color 0.2s;
}
.navtop {
	background-color: #009879;
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
	color: #eaebed;
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
  background-color: #B695C0;
  border: 0;
  cursor: pointer;
  font-weight: bold;
  color: #ffffff;
  transition: background-color 0.2s;
}

.Producto{
    background-color: #c2ffd8;
    border-radius: 10px;
    padding: 3%;
}