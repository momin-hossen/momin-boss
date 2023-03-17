<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1 class="text-center my-5">Creat Category</h1>
        <form>
            <div class="mb-3 my-5">
              <input type="Name" class="form-control my-2" id="exampleInputName" aria-describedby="NameHelp" placeholder="Name" action="{{  }}">
            </div>
            <div class="mb-3 my-5">
                <select class="form-control" name="" id="">
                    <option value="1">active</option>
                    <option value="0">deactive</option>
                </select>
            </div>
            <div class="mb-3 mt-5">
              <textarea name="decsprition" id="" class="form-control my-2" placeholder="Decsprition"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</body>
</html>
