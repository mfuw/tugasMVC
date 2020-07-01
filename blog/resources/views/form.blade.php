<!DOCKTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>form</title>
    </head>
    <body>
        <h2>Buat Account Baru!</h2>
        <h4>Sign Up Form</h4>
        <form action="{{action('AuthController@selamat_post')}}" method="POST">
            @csrf
            <label for="Nama_depan">First name:</label> <br>
            <input type="text" id="Nama_depan" name="namadpn"> <br><br>
            <label for="Nama_belakang">Last name:</label> <br>
            <input type="text" id="Nama_belakang" name="namablkg"> <br>
            <br>
            <label>Gender:</label><br>
            <input type="radio" name="gender" value="0">Male <br>
            <input type="radio" name="gender" value="1">Female <br>
            <input type="radio" name="gender" value="2">Other <br>
            <br>
            <label>Nationality:</label><br>
            <select>
                <option value="idn">Indonesia</option>
                <option value="mal">Malaysia</option>
                <option value="eng">England</option>
                <option value="sin">Singapore</option>
            </select> <br>
            <br>
            <label>Language Spoken:</label> <br>
            <input type="checkbox" name="bahasa" value="0">Bahasa Indonesia <br>
            <input type="checkbox" name="bahasa" value="1">English <br>
            <input type="checkbox" name="bahasa" value="2">Other <br>
            <br>
            <label for="biodata">Bio:</label> <br>
            <textarea cols="30" rows="8" id="biodata"></textarea> <br>
            <Input type="submit" value="Sign Up">
        </form>
    </body>
</html>