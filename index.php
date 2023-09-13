<!DOCTYPE html>
<html>
<head><title>Membuat Form Login dengan Javascript</title>
<link rel ="stylesheet" type ="text/css" href="style.css">
</head>
<body>
<br/>
<br/>
<center><h2>FORM LOGIN</h2></center>
<br/>
<div class = "login">
<br/>
<form action ="login.php" method ="post" onSubmit ="returt validasi()">
<div>
<label>Username: </label>
<input type="text" name = "username" id ="username" />
</div>
<div>
<label> Password: </label>
<input type="password: "name = "password" id ="password" />
</div>
<div>
<input type="submit" value ="login" class ="tombol" />
</div>
</form>
</div>
</body>
<script type="text/javascript">
function validasi(){
    var username = document.getElemenById("username").value;
    var password = document.getElemenById("password").value;
    if(username!=""&&password!=""){
        returt true;
    } else{
        alert('Username dan Password harus diisi');
        returt false;}}
        </script>




</html>