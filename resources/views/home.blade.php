<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlliedHome - CRM</title>
</head>
<body>
    @auth
    <p> Congrats you logged in </p>
    <form action="/logout" method="POST">
        @csrf
        <button> LogOut </button>
    </form>
    <table border="1">
        <tr>
           <td>ID</td>
           <td>Name</td>
           <td>Email</td>
           <td>Phone Number</td>
           <td>Home or Commerce</td>
           <td>postcode</td>
        </tr>
        @foreach ($clients as $clients)
        <tr>
            <td>{{ $clients->id }}</td>
            <td>{{ $clients->name }}</td>
            <td>{{ $clients->email }}</td>
            <td>{{ $clients->phoneNumber }}</td>
            <td>{{ $clients->homeOrCom }}</td>
            <td>{{ $clients->postcode }}</td>
            <td><form action="/update" value="<? $clients->id ?>"><button>Edit</button></form></td>
        </tr>
        @endforeach
     </table>
    @else
    <div style="border: 3px solid black;">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input type="text" name="name" placeholder="name" />
            <input type="text" name="email" placeholder="email" />
            <input type="password" name="password" placeholder="password" />
            <button>Register</button>
        </form>
        </div>
        <div style="border: 3px solid black;">
            <h2>Login</h2>
            <form action="/login" method="POST">
                @csrf
                <input type="text" name="loginname" placeholder="loginname" />
                <input type="password" name="loginpassword" placeholder="password" />
                <button>Login</button>
            </form>
            </div>
    @endauth



</body>
</html>
