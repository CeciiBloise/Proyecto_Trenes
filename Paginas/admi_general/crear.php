<style>
  .container{
    display: flex;
    flex: 1 1 auto;
    align-items: stretch;
    align-content: center;
    height: 85%;
    padding: 0;
    width: 100%;
    font-size: 16px;
  }
  .form{
        color:black;
        background-color: white;
        padding: 30px 0;
        box-shadow: 0 0 6px rgba(0, 0, 0, 0.8);
        border-radius: 10px;

        width: 30%;
        margin: auto;
    }
    .row{
      align-items: center;
    }  
</style>


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Carga de usuario</h2>
      <hr>
      <form method="post">
      <div class="form-group">
          <label for="edad">Imagen del usuario</label>
          <td colspan="2"><input type="file" name="archivo"></td>
        </div>
        <br>
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <label for="apellido">Apellido</label>
          <input type="text" name="apellido" id="apellido" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <label for="edad">Legajo</label>
          <input type="text" name="edad" id="edad" class="form-control">
        </div>
        <br>
        
        <div class="form-group">
          <label for="edad">Puesto</label>
          <input type="text" name="edad" id="edad" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <label for="email">Domicilio</label>
          <input type="email" name="email" id="email" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <label for="edad">Edad</label>
          <input type="text" name="edad" id="edad" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <label for="edad">Celular</label>
          <input type="text" name="edad" id="edad" class="form-control">
        </div>
        <br>

        <div class="form-group">
          <input type="submit" name="submit" class="btn btn-primary" value="Enviar">
          <a href="../../Index.html">Regresar al inicio</a>
        </div>
      </form>
    </div>
  </div>
</div>