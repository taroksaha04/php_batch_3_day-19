<?php include 'header.php'?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">Prime Number</div>
                    <div class="card-body">
<!--                        <h1>--><?php // session_start(); echo $_SESSION['name']; ?><!--</h1>-->
<!--                        --><?php //session_start(); echo $_SESSION['name'] ?>
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-md-3">Enter Number</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control"  name="given_number"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value ="<?php echo isset($result)? $result: '';?>" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success" name="btn" value="Submit" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</section>
<?php include 'footer.php'?>