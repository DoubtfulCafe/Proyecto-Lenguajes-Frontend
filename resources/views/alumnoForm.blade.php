   @extends('master')
   <!-- FORMULARIO ALUMNO-->
   <div class="form-block container">
       <form action="" method="post" class="row justify-content-center">
           <div class="col-md-6">
               <h1>Alumno</h1>
               <div class="mb-3">
                   <label for="nombre">Nombre</label>
                   <input type="text" class="form-control shadow-none" id="nombre">
               </div>
               <div class="mb-3">
                   <label for="apellido">Apellido</label>
                   <input type="text" class="form-control shadow-none" id="apellido">
               </div>
               <div class="my-3">
                   <button class="btn btn-form" type="submit">Crear!</button>
               </div>
           </div>
       </form>
   </div>
