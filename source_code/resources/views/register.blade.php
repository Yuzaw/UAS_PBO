<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Sign Up</title>
  <link rel="stylesheet" href="css/register.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <a href="/" class="close-btn">&times;</a>
    <header>Signup Form</header>
    <div class="progress-bar">
      <div class="step">
        <p>Name</p>
        <div class="bullet">
          <span>1</span>
        </div>
        <div class="check fas fa-check"></div>
      </div>
      <div class="step">
        <p>Contact</p>
        <div class="bullet">
          <span>2</span>
        </div>
        <div class="check fas fa-check"></div>
      </div>
      <div class="step">
        <p>Birth</p>
        <div class="bullet">
          <span>3</span>
        </div>
        <div class="check fas fa-check"></div>
      </div>
      <div class="step">
        <p>Submit</p>
        <div class="bullet">
          <span>4</span>
        </div>
        <div class="check fas fa-check"></div>
      </div>
    </div>
    <div class="form-outer">
      <form action="#">
        <div class="page slide-page">
          <div class="title">Basic Info:</div>
          <div class="field">
            <div class="label">First Name</div>
            <input type="text">
          </div>
          <div class="field">
            <div class="label">Last Name</div>
            <input type="text">
          </div>
          <div class="field btns">
            <button class="firstNext next">Next</button>
          </div>
          Already have an account?
          <a href="/login" class="btn btn-secondary">Login</a>
          </div>
        <div class="page">
          <div class="title">Contact Info:</div>
          <div class="field">
            <div class="label">Email Address</div>
            <input type="text">
          </div>
          <div class="field">
            <div class="label">Phone Number</div>
            <input type="number">
          </div>
          <div class="field btns">
            <button class="prev-1 prev">Previous</button>
            <button class="next-1 next">Next</button>
          </div>
        </div>
        <div class="page">
          <div class="title">Date of Birth:</div>
          <div class="field">
            <div class="label">Date</div>
            <input type="text">
          </div>
          <div class="field">
            <div class="label">Gender</div>
            <select>
              <option>Male</option>
              <option>Female</option>
              <option>Other</option>
            </select>
          </div>
          <div class="field btns">
            <button class="prev-2 prev">Previous</button>
            <button class="next-2 next">Next</button>
          </div>
        </div>
        <div class="page">
          <div class="title">Login Details:</div>
          <div class="field">
            <div class="label">Email</div>
            <input type="text">
          </div>
          <div class="field">
            <div class="label">Password</div>
            <input type="password">
          </div>
          <div class="field btns">
            <button class="prev-3 prev">Previous</button>
            <button type="submit" formaction="/">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <script src="js/register.js"></script>
</body>
</html>
