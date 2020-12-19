<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: pink;
  color: white;
}
</style>
</head>
<table id="customers">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>PhoneNo</th>
        <th>Profile</th>
      </tr>
    </thead>
    <tbody>
    @foreach($data as $d)
      <tr>
        <td>{{$d->Id}}</td>
        <td>{{$d->Name}}</td>
        <td>{{$d->Address}}</td>
        <td>{{$d->Phoneno}}</td>
        <td>
    <img class="card-img-top img" src="{{asset('storage/images/'.$d->Photo)}}"  height="100px" alt="Card image">
        </td>
      </tr>
    @endforeach
      </tbody>
      </table>