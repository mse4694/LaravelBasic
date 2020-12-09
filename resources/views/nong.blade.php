<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <label>LOGIN</label>
    <form action="/login" method="post">
    <! -- 
        การใช้ method ต่างๆที่ไม่ใช้ get เราจำเป็นต้องใส่ @csrf เพื่อให้ Laravel ทำการ generate token เพื่อใช้ในกระบวนการทำ http request
    -->
        @csrf
        <p>USERNAME:</p><input type="text" name="username" id="">
        <p>PASSWORD:</p><input type="password" name="password" id="">
        <button type="submit" >LOGIN</button>
    </form>
</body>
</html>