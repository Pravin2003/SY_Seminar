<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Openshot</title>
    <link rel="stylesheet" type="text/css" href="styles.css"/>
    <link rel="apple-touch-icon" href="images/openshot-arrow (1).png">
</head>

<body>
    <header class="main">
        <nav>
            <a href="#" class="logo">
                <img src="images/logo1.png" />
            </a>
            <ul class="menu">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="features.html">Features</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="admin.php">Admin Login</a></li>

            </ul>
        </nav>
        <div class="main-heading">
            <h1>OpenShot Video Editor</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint provident consectetur ducimus. Blanditiis,
                culpa!</p>
            <a href="#" class="main-btn">Download<img src="images/linux.svg" class="logo-but"></a>
            <a href="#" class="main-btn">Download<img src="images/laptop-outline.svg" class="logo-but"></a>
            <a href="#" class="main-btn">Download<img src="images/logo-windows.svg" class="logo-but"></a>

        </div>
    </header>
    <div class="video">
        <h1>Video Editor Tutorial</h1>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/k-JeXyvy7PA" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    </div>
    <section class="features">
        <div class="feature-container">
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon1.png"
                        style="width:50%; height:auto; display:block; margin:auto; margin-top:35%;" />
                </div>
                <div class="f-text">
                    <h4>Beginner Friendly UI</h4>
                    <p>Lorem ipsum dolor sit amet.</p>

                </div>
            </div>
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon2.png"
                        style="width:50%; height:auto; display:block; margin:auto; margin-top:35%;" />
                </div>
                <div class="f-text">
                    <h4>Cutomizable</h4>
                    <p>Lorem ipsum dolor sit amet.</p>

                </div>
            </div>
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon3.png" style="width:50%; height:auto; display:block; margin:auto;
                        margin-top:35%;" />
                </div>
                <div class="f-text">
                    <h4>Efficient Renders</h4>
                    <p>Lorem ipsum dolor sit amet.</p>

                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="about-img">
            <img src="images/about.png">
        </div>
        <div class="about-text">
            <h2>Why try OpenShot?</h2>
            <p>OpenShot Video Editor is an open-source video editor, available on Mac, and Windows. OpenShot can
                create stunning videos, films, and animations with an easy-to-use interface and rich set of features.
                OpenShot Video Editor is available on Mac and Windows. </p>
            <a href="https://www.openshot.org/about/#:~:text=About%20OpenShot,edit%20any%20video%20or%20film."><button
                    class="main-btn">Read More</button></a>
        </div>
    </section>
    <footer class="contact">
        <div class="contact-heading">
            <h1>Leave a feedback</h1>
            <p>Your Feedback helps us improve and make OpenShot even better.</p>
        </div>
        <form action="userinformation.php" method="post">

            <textarea name="message" placeholder="Type Your Message Here.........."></textarea>
            <button class="main-btn contact-btn" type="submit">Submit</button>
        </form>
    </footer>
</body>

</html>