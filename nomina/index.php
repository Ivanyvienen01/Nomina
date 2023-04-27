<?php include 'header.php'; ?>
  <body class="text-center">

  <div class="form-signin w-100 m-auto ">

  <section>
  <h1 id="time"></h1>
  <p id="date"></p>
</section>

    <script src="dist/js/clock.js"></script>

    <form>
      <div>
        <select class="form-select col-lg-4" id="country" required>
          <option>Hora de Entrada</option>
          <option>Hora de Salida</option>
        </select>
      </div> <hr>

      <div class="form-floating">
        <input type="label" class="form-control" id="floatingPassword" placeholder="ID">
        <label for="floatingPassword">ID</label>
      </div> <hr>

      <div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Ingresar</button>
      </div>
    </form>
  </div>


  </body>
</html>
