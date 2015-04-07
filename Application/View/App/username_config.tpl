<form method="post" name="uForm">
  <h1>USERNAME SYSTEM</h1>
  <div class="inset">
  <p>
    <label for="password">YOUR NAME</label>
    <input type="text" name="name" id="name" required="true">
  </p>
  <p>
    <label for="password">E-MAIL</label>
    <input type="email" name="email" id="name" required="true">
  </p>
  <p>
    <label for="password">USERNAME</label>
    <input type="text" name="username" id="username" required="true">
  </p>
  <p>
    <label for="password">PASSWORD</label>
    <input type="password" name="password" id="password">
    <input type="hidden" name="request_uri" id="request_uri" value="{$request_uri}" required="true">
  </p>
  <p>
    <label for="password">REPEAT PASSWORD</label>
    <input type="password" name="repeat_password" id="repeat_password">
    <input type="hidden" name="request_uri" id="request_uri" value="{$request_uri}" required="true">
  </p>
  </div>
  <p class="p-container">
    <span id="error" style="color: #f0c040"></span>
    <input type="submit" name="go" id="go" value="Save">
  </p>
</form>