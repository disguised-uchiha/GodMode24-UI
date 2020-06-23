<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css links  -->
    <link rel="stylesheet" href="../public/css/common.css">
    <link rel="stylesheet" href="../public/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/welcome.css">
    <title>Welcome</title>
</head>
<body>
    <main class="d-flex flex-column">
        <!-- Divided the dashboard into two block of 50-50 height  -->
        <!-- section one with 50% height  -->
        <section class="h-50 bg-success">
            <!-- div for the + icon  -->
            <div class="bg-danger d-flex justify-content-end p-3">
                <a href="./create_habit.php">+</a>
            </div>
            <!-- div for the content  -->
            <div class="d-flex justify-content-center align-items-center h-50 bg-secondary">
                <!-- name and week-list in a block  -->
                <div class="d-flex flex-column">
                    <div class="bg-white p-2">Name of the Habit</div>
                    <div class="bg-primary p-2">
                        <ul class="d-flex justify-content-between">
                            <li>S</li>
                            <li>M</li>
                            <li>T</li>
                            <li>W</li>
                            <li>T</li>
                            <li>F</li>
                            <li>S</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- section two with 50% height -->
        <section class="h-50 bg-warning d-flex flex-column justify-content-end">
            <div class="d-flex justify-content-center bg-success m-0">
                <ul class="d-flex justify-content-around w-75 bg-warning">
                    <li><a href="./create_habit.php">Create_Habit</a></li>
                    <li><a href="./rpd.php">RPD</a></li>
                    <li>Icon3</li>
                </ul>
            </div>
        </section>
    </main>
</body>
</html>
