<html>
    <head>
        <title>
        VroomCar
        </title>
                <?php  
            if (isset($_POST['micro'])) 
                { 
                   $micro = array("Indica", "Alto", "Maruti800");
                    // Printing array structure
                    print_r($micro);
                } 
            if (isset($_POST['mini'])) 
                { 
                    // Define an associative array
                    $mini = array("Polo"=>0, "i20"=>1, "Celario"=>2);
                    print_r($mini);
                } 
            if (isset($_POST['sedan'])) 
                { 
                    $sedan = array(
                        array(
                            "Index" => "0",
                            "Name" => "City",
                        ),
                        array(
                            "Index" => "1",
                            "Name" => "Corolla",
                        ),
                        array(
                            "Index" => "2",
                            "Name" => "Lamborghini",
                        )
                    );
                    print_r($sedan);
                } 
        ?>
    </head>
    <body bgcolor="beige" link="darkorange">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <hr>
        <form method="POST" action="<?php $_PHP_SELF ?>">
            <h3>
                <ol>
                <li>
                   <a href="cars1.html">Car Inputting System</a>
                </li>
                <li>
                    <a href="cars2.html">Car Registration Number Validation</a>
                </li>
                <li>
                    <a href="cars3.html">Car Serial Number Inputting System</a>
                </li>
                <li>
                    <a>Click to see micro cars. <input type="submit" name="micro" value="Micro"></a>
                </li>
                <li>
                    <a>Click to see mini cars. <input type="submit" name="mini" value="Mini"></a>
                </li>
                <li>
                    <a>Click to see sedan cars. <input type="submit" name="sedan" value="Sedan"></a>
                </li>
                </ol>
            </h3>
        </form>
            <h3>
            <ol start="7">
                <li>
                Click the button to see the categories of the cars that we have.
                <button onclick="numbers.forEach(myFunction)">Try it</button>
                <br>
                <a id="sample"></a>
                <script>
                sample2 = document.getElementById("sample");
                var numbers = ["Mini","Micro","Sedan","SUV"];
                function myFunction(item) {
                    sample2.innerHTML = sample2.innerHTML + item + "<br>"; 
                }
                </script>
                </li>
            </ol>
            </h3>
        <hr>
    </body>
</html>