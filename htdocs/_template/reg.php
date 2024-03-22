<?php
// Enable error reporting

use function Laravel\Prompts\alert;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Call phpinfo() function to display PHP configuration information
//phpinfo();
?>

<?php
  $register = false;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['username']) and isset($_POST['email']) and isset($_POST['phone']) and isset($_POST['date'])){//2 and isset($_POST['course']) and isset($_POST['gender'])) {
  $user = $_POST['username'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $date = $_POST['date'];
  // $course = $_POST['course'];
  // $gender = $_POST['gender']; 

   // Handle file uploads
   if (isset($_FILES['12th']) && isset($_FILES['10th'])) {
    // Check if files are uploaded successfully
    if ($_FILES['12th']['error'] === UPLOAD_ERR_OK && $_FILES['10th']['error'] === UPLOAD_ERR_OK) {
        // Check if files are PDFs
        $file1_extension = pathinfo($_FILES['12th']['name'], PATHINFO_EXTENSION);
        $file2_extension = pathinfo($_FILES['10th']['name'], PATHINFO_EXTENSION);

        if ($file1_extension == 'pdf' && $file2_extension == 'pdf') {
            // Move files to desired directory
            $upload_dir = '../files/';
            move_uploaded_file($_FILES['12th']['tmp_name'], $upload_dir . '12th_marksheet.pdf');
            move_uploaded_file($_FILES['10th']['tmp_name'], $upload_dir . '10th_marksheet.pdf');
        } else {
            echo "Only PDF files are allowed.";
        }
    } else {
        echo "File upload failed.";
    }
}
  //Use try-catch block to handle exception
  try {
    $result = User::register($user, $email, $phone, $date);// $course, $gender);
    $register = true;
  } catch (mysqli_sql_exception $error) {
    // Display error message
    echo "Error: " . $error->getMessage();
    $register = false;
  }
}}
  if ($register) {
    if ($result) { 
     header("Location: /");?>
     <script>alert("We Will reach out Shortly!")</script>
     <?} else { ?>
      <main class="container" style="padding-top: 100px;">
        <div class="bg-light p-5 rounder nt-3">
          <h1>Register Success</h1>
          <p class="lead">We will reach you Shortly!</p>
          <!-- <p> Again: <a href="/login.php">LOG IN</a></p> echo "Error: " . $error->getMessage(); -->
          <div style="padding-top: 15px;">
            <button>
              <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024">
                <path d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z"></path>
              </svg>
              <span><a href="?apply=true" style="text-decoration:none;">Register</a></span>
            </button>
          </div>
        </div>
      </main>
    <? }
    }else{
 ?>
 <style>/* Import Google font - Poppins */
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
  * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
  }
   body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  background: rgb(130, 106, 251);
  }
  .container {
  position: relative;
  max-width: 700px;
  width: 100%;
  background: #fff;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
  }
  .container header {
  font-size: 1.5rem;
  color: #333;
  font-weight: 500;
  text-align: center;
  }
  .container .form {
  margin-top: 30px;
  }
  .form .input-box {
  width: 100%;
  margin-top: 20px;
   }
  .input-box label {
  color: #333;
  }
  .form :where(.input-box input, .select-box) {
  position: relative;
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #707070;
  margin-top: 8px;
  border: 1px solid #ddd;
  border-radius: 6px;
  padding: 0 15px;
   }
    .input-box input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
   }
   .form .column {
  display: flex;
  column-gap: 15px;
  }
  .form .gender-box {
  margin-top: 20px;
  }
  .gender-box h3 {
  color: #333;
  font-size: 1rem;
  font-weight: 400;
  margin-bottom: 8px;
  }
   .form :where(.gender-option, .gender) {
  display: flex;
  align-items: center;
  column-gap: 50px;
  flex-wrap: wrap;
  }
  .form .gender {
  column-gap: 5px;
  }
  .gender input {
  accent-color: rgb(130, 106, 251);
  }
  .form :where(.gender input, .gender label) {
  cursor: pointer;
  }
  .gender label {
  color: #707070;
  }
  .address :where(input, .select-box) {
  margin-top: 15px;
  }
   .select-box select {
  height: 100%;
  width: 100%;
   outline: none;
  border: none;
  color: #707070;
  font-size: 1rem;
  }
  .form button {
  height: 55px;
  width: 100%;
  color: #fff;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 30px;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease;
  background: rgb(130, 106, 251);
  }
  .form button:hover {
    background: rgb(88, 56, 250);
  }
  /*Responsive*/
  @media screen and (max-width: 500px) {
  .form .column {
    flex-wrap: wrap;
  }
  .form :where(.gender-option, .gender) {
    row-gap: 15px;
  }
  }
</style>
    <section class="container">
      <!-- <link rel="stylesheet" href="reg.css"> -->
      <header>Application Form</header>
      <form action="<? $_SERVER['PHP_SELF'] ?>" class="form" method="post">
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" name="username" placeholder="Enter full name" required />
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="email" name="email" placeholder="Enter email address" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" name="phone" placeholder="Enter phone number" required />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" name="date" placeholder="Enter birth date" required />
          </div>
        </div>

        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" checked />
              <label for="check-male">male</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" />
              <label for="check-female">Female</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-other" name="gender" />
              <label for="check-other">prefer not to say</label>
            </div>
          </div>
        </div>
        <br>
        <div class="select-box" name="course">
              <select>
                <option hidden>Prefered Course</option>
                <option name="course">Agri Culture</option>
                <option name="course">MBBS</option>
                <option name="course">Educational Science</option>
                <option name="course">Information Technology</option>
                <option name="course">Artificial Intelligence</option>
                <option name="course">Cyber Security</option>
                <option name="course">Law Enforcement</option>
                <option name="course">Chemistry</option>
                <option name="course">Physics</option>
                <option name="course">Business Management</option>
                <option name="course">Hotel Management</option>
              </select>
            </div>
        <br>
        <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0" style="font-size: -1.0rem;">Upload 12th Marksheet</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input class="form-control form-control-lg" id="formFileLg" type="file" accept=".pdf" name="12th"/>
                <div class="small text-muted mt-2" style="font-size: 0.8rem;">Only PDF accept</div>
                <!-- <div class="small text-muted mt-2">Upload your CV/Resume or any other relevant file. Max file
                  size 50 MB</div> -->

              </div>
        </div>
        <br>
        <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0" style="font-size: 1.0rem;">Upload 10th Marksheet</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input class="form-control form-control-lg" id="formFileLg" type="file" accept=".pdf" name="10th"/>
                <div class="small text-muted mt-2" style="font-size: 0.8rem;">Only PDF accept</div>
                <!-- <div class="small text-muted mt-2">Upload your CV/Resume or any other relevant file. Max file
                  size 50 MB</div> -->

              </div>
        </div>
        <div class="input-box address">
          <label>Address</label>
          <input type="text" placeholder="Enter street address" required />
        </div>
        <button>Submit</button>
        
      </form>
    </section>

<?}?>