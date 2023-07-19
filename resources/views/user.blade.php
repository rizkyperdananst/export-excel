<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Export User</title>
</head>
<body>
     <a href="{{ route('user.export') }}" style="margin-bottom: 30px">Export</a>
     <table border="1px solid black" cellspacing="0" cellpadding="10">
          <thead>
               <tr>
                    <th>Name</th>
                    <th>Email</th>
               </tr>
          </thead>
          <tbody>
               @foreach ($users as $u)
               <tr>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
              </tr>
               @endforeach
          </tbody>
     </table>
</body>
</html>