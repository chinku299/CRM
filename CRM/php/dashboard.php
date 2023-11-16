<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Dashboard</title>
    <style>
        /* Apply a basic reset to remove default margin and padding */
        body,
        html {
            margin: 0;
            padding: 0;
        }

        /* Style for the navigation panel */
        .navpanel {
            width: 20%;
            height: 100vh;
            /* 100% of the viewport height */
            background-color: #4CB5F5;
            /* Choose your desired background color */
            color: #fff;
            /* Choose your desired text color */
            float: left;
            /* Float the navigation panel to the left */
            transition: width 0.3s;
            border-radius: 15px;
            padding: 20px;
            /* Add padding to the navigation panel */
            box-sizing: border-box;
        }

        /* Style for the main content panel */
        .infopanel {
            width: 80%;
            height: 100vh;
            /* 100% of the viewport height */
            padding: 20px;
            /* Add padding to the main content for spacing */
            box-sizing: border-box;
            /* Include padding in the width calculation */
            float: left;
            /* Float the main content to the left */
            transition: width 0.3s;
        }

        /* Clear the float to prevent layout issues */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        .button-container {
            display: flex;
            flex-direction: column;
        }

        .button {
            width: 100%;
            padding: 8px;
            color: #4CB5F5;
            border: none;
            border-radius: 6px;
            font-size: 18px;
            cursor: pointer;
            margin-bottom: 12px;
        }
    </style>
</head>

<body>
    <div class="navpanel">
        <div class="button-container">
            <button class="button" type="button" value="Dashboard">Dashboard</button>
            <button class="button" type="button" value="Teams">Teams</button>
            <button class="button" type="button" value="Customers">Customers</button>
            <button class="button" type="button" value="Merchants">Merchants</button>
            <button class="button" type="button" value="Reports">Reports</button>
        </div>
    </div>
    <div class="infopanel">
        <div class="piechart">
        <canvas id="customersPieChart"></canvas>

        </div>
        <script>
        // JavaScript code for updating the pie chart
        // Assume you have sales data in the following format
        const CustomersData = {
            labels: ["Product A", "Product B", "Product C"],
            datasets: [{
                data: [300, 450, 200],
                backgroundColor: ["#FF6384", "#36A2EB", "#FFCE56"]
            }]
        };

        // Get the canvas element and create a pie chart
        const salesCanvas = document.getElementById('customersPieChart').getContext('2d');
        const salesPieChart = new Chart(customersCanvas, {
            type: 'pie',
            data: salesData
        });
    </script>
    </div>
</body>

</html>
