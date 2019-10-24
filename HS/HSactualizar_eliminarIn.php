<?php include("HSheader.php") ?>


<main class="container p-4">

<div class="row">

        <div class="col-md-4 mx-auto">

            <div class="card card-body">
            <form action="HSactualizar_eliminarPos.php" method ="POST">   

            <br>

            <div class ="form-group">     
            <h3><p align="center" border="1" style=" width:1000px; height:50px ">Editar registro</p></h3>
            <div class="input-group mb-3" align="center" border="1" style=" width:1000px; height:50px "> 
            
            <input type="number" max="9999999999" maxlength=10 name ="cedula" size="10" class ="form-control" placeholder="Digite la cedula del estudiante *" aria-describedby="button-addon2" autofocus required > 
              
            </div>
            <div align="center" border="1" style=" width:1000px; height:300px ">
                <input type="submit" class="btn btn-success"
                name="start" value ="Continuar"> 
                
                <br>
                </div>    
    </form> 

</div>
</div>
</div>

</main>

<!--end-main-container-part-->


<?php include("HSfooter.php") ?>