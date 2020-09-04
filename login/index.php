<?php 
include '../header.php';
?>
<div class="container">
<form class="form-signin" method='post' action='autenticacion.php'>
      <h1 class="h3 mb-3 font-weight-normal">Por favor, identifiquese</h1>
      <label for="email" class="sr-only">Dirección email</label>
      <input
        type="email"
        id="email"
        class="form-control"
        placeholder="Dirección de email"
        required
        autofocus
        name="email"
      />
      <label for="password" class="sr-only">Password</label>
      <input
        type="password"
        id="password"
        class="form-control"
        placeholder="Password"
        required
        name="password"
      />
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">
        Acceder
      </button>
     
    </form>

    </div>

<?php 
include '../footer.php';
?>