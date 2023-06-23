<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class=" login">
        <form action="{{route('login')}}" method="POST">
        @csrf
            <label for="name">User</label><br>
            <input type="text" id="name" name="name"><br><br>
            <label for="password">Password</label><br>
            <input type="password" id="password" name="password">
            <br><br><br>
            <div class="centrar">
                <button>Ingresar</button>
            </div>
        </form>
    </div>
<style>


    .centrar
{
    display: flex;
        justify-content: center;
        align-items: center;
}
.login {
        background-color: rgb(82, 9, 9);
    
    color: white;
    width: 400px;
    height: 200px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: 10% 40%;
}
</style>
</body>
</html>
