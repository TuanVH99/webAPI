<!DOCTYPE html>
<html>
<head>
    <title>Sociable</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uuid/8.3.1/uuid.min.js" integrity="sha512-4JH7nC4nSqPixxbhZCLETJ+DUfHa+Ggk90LETm25fi/SitneSvtxkcWAUujvYrgKgvrvwv4NDAsFgdwCS79Dcw==" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script>
        // function genUuid(){
        //     document.getElementById('qqq').value = uuid.v4();
        // }
    </script>
</head>
<!-- <body onload="genUuid()"> -->
<div class="headerMenu">
    <div id="wrapper">
        <div class="logo">

        </div>
        <div class="searchbox">
            <form action="search" method="GET" id="search">
                <input type="text" name="q" size="60" placeholder="Search"/>
            </form>
        </div>
        <div id="menu">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Sign Up</a>
            <a href="#">Sign In</a>
        </div>
    </div>
</div>
<div style="width :800px; margin: 0px auto 0px auto"></div>
<table>
    <tr>
        <td width="60%" valign="top">
            <h2>Join us!</h2>
        </td>
        <td width="40%" valign="top">
            <h2>đăng nhập</h2>
            <form action="/anh" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">phone</label>
                    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">

                    <input type="hidden" id="qqq" name="uuid" class="form-control" >


                    <input type="file" name="image" accept="image/*">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </td>
    </tr>
</table>
<img src="{{ asset('storage/user1/avatar/RKcS794qNW2M3IfVCwug5NgppVKot7fAgjB4ufHX.jpg') }}" alt="" srcset="" width="100px" height="100px">

</body>
</html>
