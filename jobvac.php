
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CAGAYAN DE ORO COLLEGE - PHINMA EDUCATION</title>
    <link rel="stylesheet" href="jobvac.css" />   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
 
    <style>
        
     header {
            height: 120px; /* Adjust the height as needed */
            width: 100%;
            background-color: #ffffff;
            box-shadow: 0 10px 12px 0px #e1e1e1; /* Bottom box-shadow */
            position: fixed;
            top: 0;
            left: 0;
            z-index: 999; /* Ensure navbar is on top */
        }

        .main {
            width: 90%;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

header img {
    margin-top: 100px;
    float: left;
    width: 320px;
    margin-left: -3%;
}

.page-title {
    font-size: 23px;
    float: center; 
    margin-left: 8%;
    margin-top: 80px;
    color: rgb(21, 104, 21);
    letter-spacing: 2px;
    text-shadow: 0px 11px 10px rgba(81,67,21,0.8);
    margin-bottom: 0%;
    margin-right: 10px;
    white-space: nowrap;
}

.menu {
    width: 400px;
    float: left; 
    margin-top: 180px;
    height: -1px;
    padding: 10pv;

}

ul {
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: -75%;
    
    
}

ul li {
    list-style: none;
    margin-left: 80px;
    margin-top: 27px;
    font-size: large;
    white-space: nowrap;
    z-index: 5;
}

ul li a {
    text-decoration: none;
    color: #000000;
    font-family: Andale Mono, monospace; 
    font-weight: lighter;
    transition: 0.5s ease-in-out;
    font-weight: bold; 
    
} 

.menu ul li a:hover {
   
    color: green /* Adjust the text color on hover */
}


.active {
    color: rgb(211, 211, 94); 
    text-shadow: 1px 1px 1px rgb(0, 0, 0);
    z-index: 5;
}

        body {
            margin: 0;
            padding-top: 100px; /* Adjust according to navbar height */
        }

        
    </style>


    <header>
        <div class="main">
            <img src="logo.jpg" alt="logo" class="logo"> 
            <h2 class="page-title">PHINMA COC SCHOOL JOB LISTINGS</h2>
            <div class="menu">
                <ul> 
                    <li><a href="index.html" class="active">HOME</a></li> 
                    <li><a href="about.html">ABOUT US</a></li>
                    <li><a href="jobvac.php">JOB VACANCIES</a></li> 
                    <li><a href="contact.html">CONTACT US</a></li>
                </ul>
            </div>
        </div>
    </header>
    <body>
  <main>
        <div class="job">Job Openings</div>
       
        <section class="section">


        <style>
        /* Add some custom styles for the icon button*/
    
        .job-title {
        border-radius: 0px;
        white-space: nowrap;
        letter-spacing: 1.5px;
        margin-left: -8%;
        background-color: green;
        padding:8px;
        width:116%;
        color: white;
        text-align: center;
        margin-bottom: 1px;
    margin-top: 2%;
        font-size: 20px;
        border-radius: 1px;
    }
    
        
header {
    background: #ffffff;
    padding: 2px 0; /* Adjusted padding */
    margin-bottom: 2px; /* Adjusted margin-bottom */
    margin: 0v;

}

.job {
    
    color: #035e26;;
    margin-left: 40%;
    width: 20%;
    text-align: center;
    white-space: nowrap;
    padding: 3px;
    font-size: 77px;
    color: black;
    margin-top: 2%;
    font-weight: light;
    z-index: 2;
    font-family: 'Brush Script MT', cursive;

}

.sign-in-button{
          width: 100%;
            padding: 2px 5px;
            margin-right: 10%;
            text-align: center;
            background-color: green;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
}

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        
    .job-image {
        max-width: 100%;
        height: 70%;
        position: relative;
    
    }

        .vaclist {
    border-radius: 2px;
    margin-top: 2%;
    width: calc(33.31% - 35px);
    height: 50%;
    box-sizing: border-box;
    padding: 30px;
    color: white;
    margin-left: auto;
    margin-left: auto;
    margin-bottom: 3%;
    display: inline-block;
    vertical-align: top;
    background-color: rgb(199, 206, 199);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
.vaclist:hover {
            transform: translateY(-10px);
        }

.job-title {
        border-radius: 2px;
        width: 116%;
        margin-left: -10;
        white-space: nowrap;
        color: white;
        margin-top: -9%; /* Adjusted margin top */
        margin-bottom: 2%;
        font-size: 20px;
        text-align; center;
      
    }

    .job-description {
        font-size: 14px;
        margin-bottom: 3px;
        letter-spacing: 0.5px;
        font-family: Arial, sans-serif;
        line-height: 1.8;
        color:rgb(0, 0, 0);
        font-family: Arial, sans-serif;
       white-space: pre-wrap;

    }

    
    body {
        font-size: 14px;
        background-color: rgb(247,247,247);

    }

    </style>
        <?php
            // Include the PHP file with backend operations
            include 'job_operations.php';

         // Fetch and display job vacancies
$jobVacancies = getJobVacancies();

foreach ($jobVacancies as $job) {
    echo '<div class="vaclist">';
    
    // Job title
    echo '<h2 class="job-title">' . $job['position'] . '</h2>';

    // Check if a photo exists for the job and display it above the description
    if (!empty($job['photo'])) {
        echo '<img src="uploads/' . $job['photo'] . '" alt="Job Photo" class="job-image">';
    }

    // Description
    echo '<p class="job-description">' . $job['description'] . '</p>';

    // Apply button
    echo '<a href="form.php" class="vac-listing-buttons">APPLY</a>';

    echo '</div>';
}


            ?>
        </section>
    </main>
</body>
</html>
