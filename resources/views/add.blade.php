<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <script src="https://kit.fontawesome.com/c978711e1f.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    </head>
    <body style="height: 100vh;">
        <div class="w-100 h-100 flex-column d-flex justify-content-center align-items-center">
            <h3>Add new movie</h3>
            <form class="w-50" method="GET" action="/pushNewTask/">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input name="title" type="text" class="form-control" id="exampleInputTitle1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Body</label>
                    <input name="body" type="text" class="form-control" id="exampleInputTitle1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Author</label>
                    <input name="author" type="text" class="form-control" id="exampleInputTitle1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Likes</label>
                    <input name="likes" type="int" class="form-control" id="exampleInputTitle1" aria-describedby="emailHelp">
                </div>
                <div class="form-group ">
                    <label for="exampleFormControlSelect1">Is_Published</label>
                    <select name="state" class="form-control" id="exampleFormControlSelect1">
                      <option>True</option>
                      <option>False</option>
                    </select>
                  </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>
</html>
