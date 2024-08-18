<?php
  $json = file_get_contents("data.json");
  $data = json_decode($json,true);
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booky Books</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg" style="background-color: #A1C6EA;">
<div class="container">
    <div class="mt-4 mb-7 d-flex justify-content-between align-items-center">
      <h1 class="text-dark" style="font-family: monospace;">LET'S READ BOOKS!</h1>
      <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #507DBC;">More options</button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Add books</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
  </ul>
</div>
      
    </div>
    <table class="table table-bordered" style="border-color: #A1C6EA;" >
      <thead>
        <tr style="font-family: monospace;">
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Genre</th>
          <th scope="col">Author</th>
          <th scope="col">Description</th>
          <th scope="col">Published Date</th>
          <th scope="col">Rating</th>
        </tr>
      </thead>
      <tbody>
      
          <?php foreach($data as $element):?>
            <tr>
            <td><?php echo $element["id"];?></td>
            <td><?php echo $element["name"];?></td>
            <td><?php echo $element["genre"];?></span></td>
            <td><?php echo $element["author"];?></td>
            <td><?php echo $element["description"];?></td>
            <td><?php echo $element["published date"];?></td>
            <td><?php echo $element["rating"];?></td>
            </tr>
          <?php endforeach;?>
       
      </tbody>
    </table>

  </div>
            
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>