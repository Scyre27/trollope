<?php
if (isset($_POST['fname'])) {
  $firstname = htmlspecialchars($_POST['fname']);
  $lastname = htmlspecialchars($_POST['sname']);
  $email = htmlspecialchars($_POST['email']);
  $password = htmlspecialchars($_POST['password']);
  $pwdRepeat = htmlspecialchars($_POST['confirm_password']);


  // matchEmail
  function matchEmail()
  {
    global $email, $dbConnect;
    $sql = "SELECT email FROM users WHERE email = ?";
    $stmt = $dbConnect->prepare($sql);
    if ($stmt->execute([$email])) {
      if ($stmt->rowCount() == 0) {
        return true;
      }
      return false;
    };
  }

  function insertUser($firstname, $lastname, $email, $password)
  {
    global $dbConnect;
    $timestamp = date("Y-m-d H:i:s");
    $sql = "INSERT INTO users (firstname, lastname , email , password , timestamp) VALUES (?, ? , ? , ? , ?) ";
    $stmt = $dbConnect->prepare($sql);
    if ($stmt->execute([$firstname, $lastname, $email, md5($password), $timestamp])) {
      return true;
    }
    return false;
  }

  if (matchEmail()) {
    if (insertUser($firstname, $lastname, $email, $password)) {
      header("Location:./");
    };
  } else { ?>
    <script>
      window.addEventListener('load', () => {
        let errorMessage = document.querySelector(".err");
        errorMessage.textContent = "Email has already been used";
        errorMessage.style.display = "block";
      })
    </script>
<?php }
} ?>