<!DOCTYPE html>
<html>
<head>
<title>Create user </title>
</head>
<body>
    <a href='/home'> Back</a>
    <a href='/logout'> Logout</a>
    <h3> Create New User </h3> 
<form method="post" > <!--enctype="multipart/form.date-->
  <table>
        <tr>
          <td>Username </td>
          <td><input type="text" name="uname"></td>
        </tr>
        <tr>
          <td> Password </td>
          <td><input type="password" name="password"></td>
          </tr>
          <tr>
            <td> Re.Pass </td>
            <td><input type="password" name="repass"></td>
            </tr>
            <tr>
                <td> Email </td>
                <td><input type="email" name="email"></td>
                </tr>
               <!-- <td>Image</td>
                <td><input type="file" name="image"></td>
                </tr>  -->
          <tr>
          <td></td>
          <td><input type="submit" name="create" value="create"></td>
          </tr>
  </table>
  </form>
</body>
</html>
