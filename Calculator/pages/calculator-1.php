
<section class=" py-5 bg-dark">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 offset-3">
                <form class="bg-info rounded-2 p-3" method="post" action="route.php?page=calculator1">
                    <h1 class="text-center">Calculator</h1>
                    <h1 class="text-center">
                        <?php
                        if(isset($_POST['submit'])){
                            echo "Result: ".$obj->calculate();
                        }
                        ?>
                    </h1>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">First Number</label>
                        <input type="number" name="num1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Second Number</label>
                        <input type="number" name="num2" class="form-control" id="exampleInputPassword1" required>
                    </div>
                    <select class="form-select" name="operator">
                        <option value="select" selected>Select Operation</option>
                        <option value="addition">Addition</option>
                        <option value="subtraction">subtraction</option>
                        <option value="multiplication">Multiplication</option>
                        <option value="division">Division</option>
                    </select> <br>
                    <button type="submit" name="submit" class="btn btn-primary">Result</button>
                </form>
            </div>
        </div>
    </div>

</section>

