<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h1>Signin Here</h1>

        <form method="post">
            <fieldset>
            @csrf
                <legend>Log In</legend>
                    <table>

                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email"></td>
                        </tr>

                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password"></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td><input type="submit" name="submit" value="Login"></td>
                        </tr>

                    </table>
            </fieldset>
        </form>

        @foreach($errors->all() as $err)
            {{ $err }} <br>
        @endforeach
        
    </body>
</html>