<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Contact</title>
</head>
<body>
    <!-- <div style="display:flex; flex-direction: column; align-items:center">
         <div style="width:50%">
         @if(session()->has("success"))
    <div class="alert alert-success">
        {{ session("success") }}
    </div>
@endif
         </div>
    </div> -->
    <div style="display:flex;justify-content:center;align-items:center ; height:90vh">
          <div style="width: 50%">
<p style="margin: 0 0 20px 0; font-size: 25px; font-weight:bold">Contact Us</p>
<form method="post" action="{{route('contact')}}">
    @csrf
    <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="name">
  </div>
  <div class="mb-3">
   
    <label for="email" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="email" >
    
  </div>

  <div class="mb-3">
    <label for="name" class="form-label">Message</label>
    <textarea  class="form-control" id="message" name="message"></textarea>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
          </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>