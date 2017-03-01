<?php include_once "common/header.php"; ?>

<div id="main">
  <h2>Your Account</h2>

  <form action="">
     <div>
        <input type="text" name="username" id="username" />
        <label for="username">Change Email Address</label>

        <input type="submit" name="change-email-submit" id="change-email-submit" value="Change Email" class="button" />
     </div>
  </form>

  <hr />

  <h2>Change Password</h2>

  <form action="#">
     <div>
        <label for="password">New Password</label>
        <input type="password" name="r" id="repeat-new-password" />

        <label for="password">Repeat New Password</label>
        <input type="submit" name="change-password-submit" id="change-password-submit" value="Change Password" class="button" />
     </div>
  </form>

  <hr />

  <form action="" id="delete-account-form">
      <div>
          <input type="submit" name="delete-account-submit" id="delete-account-submit" value="Delete Account?" class="button" />
      </div>
  </form>
   <!-- IF LOGGED IN -->

          <!-- Content here -->

   <!-- IF LOGGED OUT -->

          <!-- Alternate content here -->

</div>

<?php

    include_once "common/sidebar.php";

    include_once "common/footer.php";

?>
