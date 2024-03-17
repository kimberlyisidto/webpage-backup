
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formstyle.css" />
    <title>Form</title>
</head>
<style>

h3 {
    border-radius: 2px;
    color: #fbfcff;;
    text-shadow: 2px 2px 5px rgb(65, 64, 64);
    border: 1px solid green;
    background-color: green;
    width: min-content;
    font-size: 25px;
    white-space: nowrap;
    margin-bottom: 4%;
    margin-left: 1%;
    margin-right: 7%;
    margin-top: 7%;
    padding: 0.5%;

}
.apply-box{
    max-width: 600px;
    padding: 20px;
    margin: 0px auto;
    margin-top: 50px;
    box-shadow: rgb(0, 0, 0, 0.1) ;
    background: rgba(15, 15, 15, 0.2) ;
    border: transparent;
    border-radius: 40px;
}

input,select,textarea{
    padding: 6px 10px;
    border: 0.5px solid white;
    border-radius: 4px;
    font-size: 15px;
    margin-bottom:2% ;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; 

}

.submit-btn {
    display: inline-block;
    padding: 10px;
    color: #fff;
    text-decoration: none;
    background-color: green;
    width: 120px;
    margin-top: 20px;
    margin-left: 46%;
    text-align: center;
    height: 3%;
     border-radius: 5px;
}
    </style>

<body>
    <main>
        <header>
            <img src="lag.png" alt="logo">
        </header>

        <div class="container">
            <div class="apply box">
                <h2>APPLICATION FORM</h2>
                <form method="post" action="form.php" class="application-form" enctype="multipart/form-data">

                    <div class="column">
                        <h3>Personal information</h3>

                        <div class="form-control">
                            <label for="fullName">Full Name:</label>
                            <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required>
                        </div>

                        <div class="form-control">
                            <label for="email">Email Address:</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="form-control">
                            <label for="jobRole">Job Role:</label>
                            <select name="jobRole" id="jobRole" required>
                                <option value="">Select Job role</option>
                                <option value="crim">CRIM FACULTY</option>
                                <option value="nur">NURSING FACULTY</option>
                                <option value="iclean">ICLEAN STAFF</option>
                                <option value="medtech">MEDICAL TECHNICIAN</option>
                                <option value="secu">SECURITY GUARD</option>
                                <option value="IT">IT FACULTY</option>
                                <option value="ceinstruc">CE INSTRUCTOR</option>
                                <option value="reg">REGISTRAR</option>
                                <option value="accountancy">ACCOUNTANT FACULTY</option>
                            </select>
                        </div>

                        <div class="form-control">
                            <label for="phoneNumber">Phone Number:</label>
                            <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number" required>
                        </div>

                        <div class="form-control">
                            <label for="uploadTOR">Upload Your TOR:</label>
                            <input type="file" id="uploadTOR" name="uploadTOR" accept=".jpeg, .jpg, .png, .pdf">
                        </div>

                        <div class="form-control">
                            <label for="uploadResume">Upload Your Resume:</label>
                            <input type="file" id="uploadResume" name="uploadResume" accept=".pdf">
                        </div>
                    </div>

                    <button type="submit" name="submit" class="submit-btn">Submit</button>

                    <div class="goback-buttons">
                        <a href="jobvac.php" class="goback-button">&#x2190</a>
                    </div>
                </form>

                <?php if (!empty($message)) : ?>
                    <div class="message">
                        <p><?php echo $message; ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </main>
</body>

</html>