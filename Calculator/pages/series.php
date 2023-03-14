
<section class=" py-5 bg-dark">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 offset-3">
                <form class="bg-info rounded-2 p-3" method="post" action="route.php?page=series">
                    <h1 class="text-center">Series Print 1st num to 2nd num</h1>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">First Number</label>
                        <input type="number" name="num1" class="form-control" id="exampleInputEmail1" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Second Number</label>
                        <input type="number" name="num2" class="form-control" id="exampleInputPassword1" >
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Series Print</button>
                    <h1 class="text-center">
                        <?php
                        if(isset($_POST['submit'])){
                            $seriesArray = $obj->series(); //echo $seriesArray;
                            foreach($seriesArray as $value){
                                echo $value;
                            }
                        }
                        ?>
                    </h1>
                </form>
            </div>
        </div>
    </div>

</section>

