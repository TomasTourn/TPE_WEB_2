{include file= 'templates/header.tpl'}

<form method="post" action="verifyUser">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
    <input type="text" class="form-control" name="name" id="exampleInputtext1" aria-describedby="textHelp"  required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
{if $message!=null}
<p>{$message}</p>
{/if}

{include file= 'templates/footer.tpl'}