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
            <h3 class="d-block m-4" style="color:#989da4">Overview</h3>
                <div class="d-flex ">
            <div class="d-flex flex-row m-3">

                <div class="d-flex pl-2 justify-content-center align-content-center" style="
                border-radius: 8px;
                width: 280px;
                height: 90px;
                box-shadow: 0 0 10px rgba(0,0,0,.06);
            ">
                        <div style="flex:1" class="d-flex align-items-center">
                            <i style="font-size: 28px;height:30px;cursor: pointer;" class="text-success fas fa-check-circle ml-2"></i>
                        </div>
                        <div style="flex:4" class="d-flex flex-column justify-content-center">
                            <span style="color:#a8b1be;font-size: 19px">Success tasks</span>
                        <span style="color:#989da4;font-size: 27px">{{ sizeof($success) }}</span>
                        </div>
                    </div>

            </div>

            <div class="d-flex flex-row m-3">

                <div class="d-flex pl-2 justify-content-center align-content-center" style="
                border-radius: 8px;
                width: 280px;
                height: 90px;
                box-shadow: 0 0 10px rgba(0,0,0,.06);
            ">
                        <div style="flex:1" class="d-flex align-items-center">
                            <i style="font-size: 28px;cursor: pointer;" class="text-danger fas fa-times-circle ml-2"></i>

                        </div>
                        <div style="flex:4" class="d-flex flex-column justify-content-center">
                            <span style="color:#a8b1be;font-size: 19px">Failed tasks</span>
                            <span style="color:#989da4;font-size: 27px">{{ sizeof($faileds) }}</span>
                        </div>
                    </div>

            </div>

            <div class="d-flex flex-row m-3">

                <div class="d-flex pl-2 justify-content-center align-content-center" style="
                border-radius: 8px;
                width: 280px;
                height: 90px;
                box-shadow: 0 0 10px rgba(0,0,0,.06);
            ">
                        <div style="flex:1" class="d-flex align-items-center">
                            <i style="font-size: 28px;cursor: pointer;" class="text-info fas fa-clock ml-2"></i>
                        </div>
                        <div style="flex:4" class="d-flex flex-column justify-content-center">
                            <span style="color:#a8b1be;font-size: 19px">Later tasks</span>
                            <span style="color:#989da4;font-size: 27px">{{ sizeof($laters) }}</span>
                        </div>
                    </div>

            </div>
            </div>
            <a href="./add" type="button" style=" border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,.06);" class="btn btn-lg btn-block w-75 m-3">Create task</a>

            <h3 class="d-block m-4" style="color:#989da4">Tasks</h3>
            <table  class="table w-75 " style="
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,.06);
        ">

                <thead style="background: #fbfdfe">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">state</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (array_merge($success, $faileds, $awaits) as $tasks)
                    <tr>
                    <th scope="row">{{$tasks->id}}</th>
                    <td>{{$tasks->title}}</td>
                    <td>{{$tasks->state}}</td>
                    <td>
                        <a href="/delete/{{$tasks->id}}"><i style="font-size: 19px;cursor: pointer;" class="text-warning fas fa-trash-alt ml-2"></i></a>
                        <a href="/edit/{{$tasks->id}}"><i style="font-size: 19px;cursor: pointer;" class="text-primary fas fa-edit ml-2"></i></a>
                        <a href="/success/{{$tasks->id}}"><i  style="font-size: 19px;cursor: pointer;" class="text-success fas fa-check-circle ml-2"></i></a>
                        <a href="/failed/{{$tasks->id}}"><i  style="font-size: 19px;cursor: pointer;" class="text-danger fas fa-times-circle ml-2"></i></a>
                        <a href="/later/{{$tasks->id}}"><i  style="font-size: 19px;cursor: pointer;" class="text-info fas fa-clock ml-2"></i></a>
                    </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            <h3 class="d-block m-4" style="color:#989da4">Later tasks</h3>
            <table  class="table w-75 " style="
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,.06);
        ">

                <thead style="background: #fbfdfe">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">state</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($laters as $tasks)

                    <tr>
                    <th scope="row">{{$tasks->id}}</th>
                    <td>{{$tasks->title}}</td>
                    <td>{{$tasks->state}}</td>
                    <td>
                        <a href="/delete/{{$tasks->id}}"><i style="font-size: 19px;cursor: pointer;" class="text-warning fas fa-trash-alt ml-2"></i></a>
                            <a href="/edit/{{$tasks->id}}"><i style="font-size: 19px;cursor: pointer;" class="text-primary fas fa-edit ml-2"></i></a>
                                <a href="/success/{{$tasks->id}}"><i style="font-size: 19px;cursor: pointer;" class="text-success fas fa-check-circle ml-2"></i></a>
                                    <a href="/failed/{{$tasks->id}}"><i style="font-size: 19px;cursor: pointer;" class="text-danger fas fa-times-circle ml-2"></i></a>
                                        <a href="/await/{{$tasks->id}}"><i style="font-size: 19px;cursor: pointer;" class="text-info fas fa-clock ml-2"></i></a>
                    </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>
</html>
