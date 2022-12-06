

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Registration Form</title>
  <link rel="stylesheet" href="../css/inf.css" />

</head>

<body>
  <h1>Profile</h1>
  <center>
    <?php ?>
    <img width="200px" src="../images/1.png" alt="">
  </center>
  <form method="post" action='https://register-demo.freecodecamp.org'>
    <fieldset>
      <label for="first-name">Enter Your First Name: <input id="first-name" values="A" name="first-name" type="text"
          required /></label>
      <label for="last-name">Enter Your Last Name: <input id="last-name" name="last-name" type="text"
          required /></label>
    </fieldset>
    <fieldset>
      <label for="personal-account"><input id="personal-account" type="radio" name="account-type"
          class="inline" />M</label>
      <label for="business-account"><input id="business-account" type="radio" name="account-type"
          class="inline" />F</label>
      <label for="terms-and-conditions" name="terms-and-conditions">
        <input id="terms-and-conditions" type="checkbox" required name="terms-and-conditions" class="inline" /> I accept
        the
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          terms and conditions
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
          aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Terms and conditions</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                By registering and/or using the Services, enabling push notifications, accessing, browsing and/or using
                the Platform, the User accepts the delivery of advertising and promotions, and constitutes unequivocal
                and immediate, tacit consent regarding the use of the Platform, under the use of these Terms and
                Conditions and Mexican law.
                <br> <br>
                Likewise, the User acknowledges having read and accepted the Privacy Notice applicable to the processing
                of personal data, located within the Platform.
                <br> <br>
                SafeMe does not and will not offer medical or clinical advice and is not designed to be used in crisis
                situations.
                <br><br>
                In the event of a crisis, please call your local crisis hotline or 911.
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                
              </div>
            </div>
          </div>
        </div>
      </label>
    </fieldset>
    <fieldset>
      <label for="profile-picture">Upload a profile picture: <input id="profile-picture" type="file"
          name="file" /></label>
      <label for="age">Input your age (years): <input id="age" type="number" name="age" min="13" max="120" /></label>
      <label for="referrer">How did you hear about us?
        <select id="referrer" name="referrer">
          <option value="">(select one)</option>
          <option value="1">freeCodeCamp News</option>
          <option value="2">freeCodeCamp YouTube Channel</option>
          <option value="3">freeCodeCamp Forum</option>
          <option value="4">Other</option>
        </select>
      </label>
      <label for="bio">Provide a bio:
        <textarea id="bio" name="bio" rows="3" cols="30" placeholder="I like coding on the beach..."></textarea>
      </label>
    </fieldset>
  </form>

</body>

</html>