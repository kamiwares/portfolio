<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waresiak.pl</title>
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
</head>
<body onload="document.getElementById('loading').style.display = 'none'; document.getElementById('content').style.display = 'block'; ">
    <div id="loading">
        <img src="Loading_icon.gif">
    </div>
    <content id="content">
    <a href="#">
    <div id="go-top">
        Go top
    </div>
    </a>
    <div id="fist-section">
        <div id="left-side">
            <div class="desc">
                <a href="#projects"><h1>Projects</h1></a>
            </div>
        </div>
        <div id="center-side">
            <div id="header">
                
                <h1>Kamil Waresiak</h1>
                <div id="nav">
                    <p><a href="#projects">Portfolio</a></p>
                    <p onclick="document.getElementById('cv').style.display='flex'">CV</p>
                    <p><a href="#about-me">About me</a></p>
                    <p onclick="document.getElementById('contact').style.display = 'flex' ">Contact</p>
                </div>
            </div>
        </div>
        <div id="right-side">
            <div class="desc">
                <a href="#about-me"><h1>About me</h1></a>
            </div>
        </div>
    </div>

    <div id="about-me"onload="document.getElementById('skills').style.display = 'flex';">
            <div id="information">
                <h1>Hello, my name is <span style="color: red;">Kamil.</span></h1>
                <p style="padding: 10px">I am a graduate of an IT school. I am fascinated with new technology and science. My hobbies are playing the guitar and motorization. I have been working in the telecommunications industry for over a year, but my main interest is programming. </p>
            </div>
            <div id="skills">
                <h1>My Skills</h1>
                <p>HTML+CSS</p><div class="progress-bar"><div class="progress" style="--width: 97"></div></div>
                <p>JS</p><div class="progress-bar"><div class="progress" style="--width: 70"></div></div>
                <p>PHP</p><div class="progress-bar"><div class="progress" style="--width: 70" ></div></div>
                <p>SQL</p><div class="progress-bar"><div class="progress" style="--width: 80" ></div></div>
                <p>MYSQL</p><div class="progress-bar"><div class="progress" style="--width: 70" ></div></div>
                <p>PHOTOSHOP</p><div class="progress-bar"><div class="progress" style="--width: 60" ></div></div>
                <p>NETWORKING</p><div class="progress-bar"><div class="progress" style="--width: 90" ></div></div>

        
            </div>
    </div>
    <div id="projects">
        <div class="container">
            <h1>Projects</h1>
            <div id="app">
                <iframe src="https://waresiak.pl/company/" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" id="project-app" allowfullscreen></iframe>
                
            </div>
            <button id="next-app" onclick="app()">Next</button>
            <button id="btn-next-page"><a id="next-page" target="_blank" href="https://waresiak.pl/company">View website</a></button>
            </div>
            
    </div>
    
    <div id="contact">
        <div id="contact-form">
            <h1>Contact me :)</h1>
            <form id="form" method="post" action="<?=$_SERVER['PHP_SELF'];?>">
                <input name="name" type="text" placeholder="Name">
                <input name="subject" type="text" placeholder="Subject">
                <input name="email" type="text" placeholder="Email">
                <input name="message" type="text" placeholder="Message" style="padding: 40px;">
                <input name="submit" type="submit" value="Send">
                <p style="text-align: center">Or just kamil@waresiak.pl</p>
            </form>
                <?php
                        
                        $message=$email=$subject=$name = '';
                        $visibleContent = 'none';
                        if(isset($_POST['submit'])){
                            $name = $_POST['name'];
                            $email = $_POST["email"];
                            $subject = $_POST["subject"];

                            $message = $_POST['message'];
                            $email_moj = "kamilwaresiak@gmail.com";

                            if(empty($name && $email && $message && $subject)){
                                echo '<div style="color: red;">';
                                echo "Please complete the empty fields!";
                                echo '</div>';
                                echo '<style>
                                    #contact{
                                    display: flex;
                                    }
                                    </style>';
                            }
                            else{
                                $mail = mail($email_moj, $subject, $message, $email);
                                if($mail){
                                    echo '<div style="color: green; text-algin: center;">';
                                    echo "Succesful sent!";
                                    echo '</div>';
                                    echo '<style>
                                    #contact{
                                    display: flex;
                                    }
                                    </style>';
                                }
                                else{
                                echo '<div style="color: red;"';
                                echo "Something goes wrong :(";
                                echo '</div>';
                                echo '<style>
                                    #contact{
                                    display: flex;
                                    }
                                    </style>';
                                }
                            };


                        };


                            
                        
                        
                ?>

        </div>
        <div id="form-overlay" onclick="document.getElementById('contact').style.display= 'none'"></div>
    </div>
    <div id="cv" onclick="document.getElementById('cv').style.display='none'">
        <embed src="cv.pdf#toolbar=0&view=fit" type="application/pdf"/>
    </div>



        </div>
    </div>
    <script src="script.js"></script>
    <footer id="footer">Created by waresiak.pl // Kamil Waresiak</footer>
</content>
</body>
</html>