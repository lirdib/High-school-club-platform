

<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>   
<table class="table">
  <thead>
    <tr>
      <th scope="col">Statusi</th>
      <th scope="col">Emri i nxenesit</th>
      <th scope="col">Emri i projektit</th>
      <th scope="col">klubi</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($data as $dt)
    <tr>
      <th scope="row">{{$dt->statusi}}</th>
      <td>{{$dt->emri_I_nxenesit}}</td>
      <td>{{$dt->emri_I_projektit}}</td>
      <td>{{$dt->klubi}}</td>
      <td><img src="img/edit.png"></td>
    </tr>
    @endforeach
  </tbody>
</table>

</body>