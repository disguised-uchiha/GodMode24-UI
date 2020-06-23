<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>

    <!-- css links  -->
    <link rel="stylesheet" href="../public/css/common.css">
    <link rel="stylesheet" href="../public/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/create_habit.css">

</head>
<body>
    <main>
        <div class="d-flex flex-column h-100 w-100 bg-info">
            <!-- 25 percent height wala section  -->
            <div class="h-25 bg-danger">
                <form action="#" method="get">
                    <div class="d-flex justify-content-between px-3 pt-1 bg-info">
                        <a href="./welcome.php" class="btn border-0 stretched-link"><</a>
                            <input type="submit" class="p-1 btn border-0" value="Save">
                    </div>
                    <div class="d-flex flex-column p-3">
                        <span>CUSTOM NAME</span>
                        <input type="text" class="form-control">
                    </div>
                </form>
            </div>
            <!-- 75% height wala section  -->
            <div class="h-75 bg-warning">
                    <div class="d-flex flex-column p-3">
                        <span class="pb-3">SUGGESTED NAMES</span>
                        <form action="#" method="get">
                            <ul class="list-group">
                                <li class="list-group-item">Stretch</li>
                                <li class="list-group-item">Drink Water</li>
                                <li class="list-group-item">Meditate</li>
                                <li class="list-group-item">Dance</li>
                                <li class="list-group-item">Take medication</li>
                                <li class="list-group-item">Eye Drop</li>
                            </ul>
                        </form>
                    </div>
            </div>
        </div>
    </main>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->
</body>
</html>
