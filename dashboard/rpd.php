<!-- rpd stands for repetatation per day  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css links  -->
    <link rel="stylesheet" href="../public/css/common.css">
    <link rel="stylesheet" href="../public/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/rpd.css">
    <title>add repeated habit</title>
</head>
<body>
    <main class="bg-danger">
        <form action="#" class="d-flex flex-column h-100 badge-dark">
            <div class="h-50 bg-secondary d-flex flex-column overflow-hidden">
                <div class="d-flex justify-content-between bg-success p-2 px-2">
                    <a href="./welcome.php" class="p-2 px-2">Cancel</a>
                    <input type="submit" value="Add" class="btn border-0">
                </div>
                <div class="text-center bg-danger pt-4 mt-5 pb-2">
                    NUMBER OF TIME PER DAY
                </div>
                <ul class="row text-center flex-nowrap m-0 overflow-auto">
                    <li class="p-3 col-4 badge-dark">1</li>
                    <li class="p-3 col-4 badge-dark">2</li>
                    <li class="p-3 col-4 badge-dark">3</li>
                    <li class="p-3 col-4 badge-dark">4</li>
                    <li class="p-3 col-4 badge-dark">5</li>
                    <li class="p-3 col-4 badge-dark">6</li>
                    <li class="p-3 col-4 badge-dark">7</li>
                    <li class="p-3 col-4 badge-dark">8</li>
                    <li class="p-3 col-4 badge-dark">9</li>
                    <li class="p-3 col-4 badge-dark">10</li>
                </ul>
                <div class="text-center bg-info">
                    ^
                </div>
            </div>
            <div class="h-50 bg-danger">
                <ul class="h-100 d-flex flex-column justify-content-center">
                    <li class="d-flex justify-content-between p-2">
                        <span>Name</span>
                        <input type="text" placeholder=" Name of the Habit">
                    </li>
                    <li class="d-flex justify-content-between p-2">
                        <span>Repeat</span>
                        <select name="repetation" id="repetation">
                            <option value="everyday">EveryDay</option>
                            <option value="OneDay">One Day</option>
                            <option value="FiveDay">Five Day</option>
                            <option value="TenDay">Ten Day</option>
                        </select>
                    </li>
                    <li class="d-flex justify-content-between p-2">
                        <span>Start Time</span>
                        <input type="time" name="start_time" id="startTime">
                    </li>
                </ul>
            </div>
        </form>
    </main>
</body>
</html>
