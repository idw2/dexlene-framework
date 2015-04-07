<form method="post" name="rForm" style="width: 80%">
  <h1>SEM CONEXÃO COM O BANCO DE DADOS</h1>
  <div class="inset">
  <p>
    <ol>
        <li>Ao testar a conexão verificamos que ocorreu uma alteração de nome ou senha do banco de dados.<br/><br/></li>
        <li>Verifique o arquivo: `Application/Config/database.php` e tente novamente.<br/><br/></li>
        <li>Caso venha optar por `Reconfigurar` certifique-se que fazer antes um backup da sua `Dase de Dados` .<br/><br/></li>
    </ol>
  </p>
  </div>
  <p class="p-container">
    <input type="hidden" name="request_uri" id="request_uri" value="{$request_uri}" required="true">
    <span id="error" style="color: #f0c040"></span>
    <input type="submit" name="go" id="go" value="Reconfigurar">
  </p>
</form>