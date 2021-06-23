<!DOCTYPE html>
<html>
<head>
<title>User list </title>
</head>
<body>
    <a href='/home'> Back</a>
    <a href='/logout'> Logout</a> 
    <h3> User List </h3>

  <table border="1">
        <tr>
          <td> ID </td>
          <td>Username </td>
          <td> Password </td>
          <td>Action</td>
        </tr>
 @foreach($userlist as $users)
    <tr>
    <td>{{$users['id']}}</td>
    <td>{{$users['username']}}</td>
    <td>{{$users['password']}}</td>
   
    <td>
      <a href="/user/details/{{$users['id']}} ">Details</a>
      <a href="/user/edit/{{$users['id']}}">Edit</a>
      <a href="/user/delete/{{$users['id']}} ">Delete</a>
    </td>
  </tr>
@endforeach
    
  </table>
</body>
</html>
