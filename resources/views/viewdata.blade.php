<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To view</title>
    <style>
      body {
  font-family: 'lato', sans-serif;
}

.container {
  max-width: 1000px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 10px;
  padding-right: 10px;
}

h2 {
  font-size: 26px;
  margin: 20px 0;
  text-align: center;
}

h2 small {
  font-size: 0.5em;
}

.responsive-table li {
  border-radius: 3px;
  padding: 25px 30px;
  display: flex;
  justify-content: space-between;
  margin-bottom: 25px;
}

.responsive-table .table-header {
  background-color: #95A5A6;
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 0.03em;
}

.responsive-table .table-row {
  background-color: #ffffff;
  box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1);
}

.responsive-table .col-1 {
  flex-basis: 10%;
}

.responsive-table .col-2 {
  flex-basis: 40%;
}

.responsive-table .col-3 {
  flex-basis: 25%;
}

.responsive-table .col-4 {
  flex-basis: 25%;
}
.responsive-table .col-5 {
  flex-basis: 16%;
}

@media all and (max-width: 767px) {
  .responsive-table .table-header {
    display: none;
  }
  
  .responsive-table .table-row {
    
  }
  
  .responsive-table li {
    display: block;
  }
  
  .responsive-table .col {
    flex-basis: 100%;
  }
  
  .responsive-table .col {
    display: flex;
    padding: 10px 0;
  }
  
  .responsive-table .col:before {
    color: #6C7A89;
    padding-right: 10px;
    content: attr(data-label);
    flex-basis: 50%;
    text-align: right;
  }
}

    </style>
</head>
<body>
<div class="container">
  <h2>Data Regarding Form</h2>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-1">Id</div>
      <div class="col col-2">Email</div>
      <div class="col col-3">Address</div>
      <div class="col col-4">Bio</div>
      <div class="col col-5">Modification</div>
    </li>
    @foreach ($test as $data)
    <li class="table-row">
      <div class="col col-1" data-label="ID">{{$data->id}}</div>
      <div class="col col-2" data-label="Email">{{$data->email}}</div>
      <div class="col col-3" data-label="Address">{{$data->address}}</div>
      <div class="col col-4" data-label="Bio">{{$data->bio}}</div>
      <div class="col col-5">
        <!-- <a href="{{route('annihilate.user', ['id'=>$data->id])}}">
          <button style="background-color:red;color:white;border-radius:12px;height:30px">Delete</button>
        </a>-->
        <form action="{{route('annihilate.user', $data->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
      </div> 
                     <!-- ALTERNATE FOR DELETE (we have to use Destroy method in controller and Delete in Routes) -->
        
            <!-- if we use this form function we have to pass the route of delete and
             use destroy($id) in the controller -->
      <!-- <div>
        <a href="{{route('annotate.user', ['id'=>$data->id])}}">
          <button style="background-color:blue;color:white;border-radius:12px;height:30px">Update</button>
        </a> 
    </div> -->
    </li>
    @endforeach
  </ul>
</div>
</body>
</html>



