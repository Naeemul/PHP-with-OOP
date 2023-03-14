
<section class=" py-5 bg-dark">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 offset-3">
                <form class="bg-info rounded-2 p-3" method="post" action="route.php?page=calculator2">
                    <h1 class="text-center">Calculator</h1>
                    <h1 class="text-center">
                        <?php
                        if(isset($_POST['operator'])){
                            echo "Result: ".$obj->calculate();
                        }
                        ?>
                    </h1>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">First Number</label>
                        <input type="number" name="num1" class="form-control" id="exampleInputEmail1" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Second Number</label>
                        <input type="number" name="num2" class="form-control" id="exampleInputPassword1" >
                    </div>
                    <button type="submit" name="operator" value="addition" class="btn btn-primary">Addition</button>
                    <button type="submit" name="operator" value="subtraction" class="btn btn-primary">Subtraction</button>
                    <button type="submit" name="operator" value="multiplication" class="btn btn-primary">Multiplication</button>
                    <button type="submit" name="operator" value="division" class="btn btn-primary">Division</button>
                </form>
            </div>
        </div>
    </div>

</section>

