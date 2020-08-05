<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>

    <form action="/welcome" method="POST">
      @csrf
        <!-- Nama -->
        <label for="first_name">First name:</label> <br><br>
        <input type="text" id="first_name" name="first_name">

        <br><br>

        <label for="last_name">Last name:</label> <br><br>
        <input type="text" id="last_name" name="last_name">

        <br><br>

        <!-- jenis kelamin -->
        <label for="gender">Gender:</label> <br><br>

        <input type="radio" id="male" name="gender">
        <label for="male">Male</label> <br>

        <input type="radio" id="female" name="gender">
        <label for="female">Female</label> <br>

        <input type="radio" id="other" name="gender">
        <label for="other">Other</label> <br>

        <br>

        <!-- kebangsaan -->
        <label for="nationality">Nationality:</label> <br><br>

        <select name="nationality" id="nationality">
            <option value="indonesian">Indonesian</option>
            <option value="malaysian">Malaysian</option>
            <option value="chinese">Chinese</option>
        </select> <br><br>

        <!-- bahasa -->
        <label for="language">Language Spoken:</label> <br><br>

        <input type="checkbox" name="language" id="bahasa">
        <label for="bahasa">Bahasa Indonesia</label> <br>

        <input type="checkbox" name="language" id="english">
        <label for="english">English</label> <br>

        <input type="checkbox" name="language" id="other">
        <label for="other">Other</label> <br>

        <br>

        <!-- bio -->
        <label for="bio">Bio:</label> <br><br>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea> <br>

        <form action="/welcome" method="post">
          @csrf
          <input type="submit" name="sign up" value="Sign Up">
        </form>

    </form>
  </body>
</html>
