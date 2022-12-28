<!DOCTYPE html>
<html>
 
<head>
    <title> Import and Export Excel data to database Using Laravel 5.8 </title>
    <link rel="stylesheet"
        href=
"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
 
<body>
    <h6> All Files </h6>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($taskFileRecords as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>
        <a href="{{ $data->file_path }}">Open File
            
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    
 
</body>
 
</html>