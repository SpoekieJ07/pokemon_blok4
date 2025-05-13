<mens kleurogen="blauw" lengte="180"></mens>
<mens kleurogen="bruin" lengte="200"></mens>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="pokemon_create_process.php" method="post">
        <div class="form-group">
            <label for="name">Name*</label>
            <input type="text" name="name" id="name" class="form-control" >
        </div>
        <div class="form-group">
            <label for="type">Type*</label>
            <input type="text" name="type" id="type" class="form-control" >
        </div>
        <div class="form-group">
            <label for="type">Image*</label>
            <input type="text" name="image" id="type" class="form-control" >
        </div>
        <div class="form-group">
            <label for="type">height</label>
            <input type="text" name="height" id="type" class="form-control" >
        </div>
        <div class="form-group">
            <label for="type">weight</label>
            <input type="text" name="weight" id="type" class="form-control" >
        </div>
        <div class="form-group">
            <label for="type">description</label>
            <input type="text" name="description" id="type" class="form-control" >
        </div>
        <button type="submit">Create</button>
    </form>
</body>
</html>