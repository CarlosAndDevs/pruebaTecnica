<?php  include("db.php"); ?>
<?php  include("includes/header.php"); ?>


<div class="container p-4">
    <div class= "row">
        <div class= "col-md-4">
            <div class="card card-body">
                <form action="save.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder= "nombre" autofocus>
                    </div>

                    <div class="form-group">
                        <input type="number" name="telefono" class="form-control" placeholder= "telefono" autofocus>
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder= "email" autofocus>
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="file" name="archivo">
                    </div>

                    <div class="d-grid gap-2">
                        <input type="submit" class="btn btn-success btn-block"
                               name="save" value="Save">
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>



<?php  include("includes/footer.php"); ?>