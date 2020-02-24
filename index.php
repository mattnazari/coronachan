<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <div class='wrapper'>

        <!---------------------------- Header !----------------------------------->

        <header class='header'>
            <h1 class=logo><a href='#'>Corona-chan</a></h1>
            <ul class='headerItemContainer'>
                <li class='headerItems'><a href='#causes'>Causes</a></li>
                <li class='headerItems'><a href='#prevention'>Prevention</a></li>
                <li class='headerItems'><a href='#symptoms'>Symptoms</a></li>
                <li class='headerItems'><a href='#contact'>Contact</a></li>
                <li class='headerItems'><a href='#'>Sign In</a></li>
            </ul>
        </header>

        <!---------------------------- Post Section !----------------------------------->

        <div class='spacer'></div>
        <section class='postSection sections'>
            <div class='row'>
                <h1 id='back'>-</h1>
                <img height='600' class='postImg'></img>
                <h1 id='next'>+</h1>
            </div>
            <div>
                <h2 class='postTitle'></h2>
                <p class='postContent'></p>
                <p class='author'></p>
            </div>
        </section>

        <!---------------------------- Causes Section !----------------------------------->

        <div class='spacer' id='causes'></div>
        <section class='causes sections'>
            <div class='sectionCont'>
                <div class='causesImg sectionImg'></div>
                <div class='leftTxtCont'>
                    <p class='sectionTitle'>CAUSES</p>
                    <h2 class='sectionHeading'>How does<br />it spread?</h2>
                    <ul class='list'>
                        <div class='listRow'>
                            <img src='./assets/graphics/num1.svg' class='nums'>
                            <span class='bold'>Direct</span>
                            <li class='listTxt'>person-to-person contact.</li>
                        </div>
                        <div class='listRow'>
                            <img src='./assets/graphics/num2.svg' class='nums'>
                            <span class='bold'>Contact</span>
                            <li class='listTxt'>with infected surfaces or objects.</li>
                        </div>
                        <div class='listRow'>
                            <img src='./assets/graphics/num3.svg' class='nums'>
                            <span class='bold'>Respiratory </span>
                            <li class='listTxt'>droplets from sneezing or coughing.</li>
                        </div>
                    </ul>
                </div>
            </div>
        </section>

        <!---------------------------- Prevention Section !----------------------------------->

        <div class='spacer' id='prevention'></div>
        <section class='prevention sections'>
            <div class='sectionCont sectionContRight'>
                <div class='rightTxtCont'>
                    <p class='sectionTitle'>PREVENTION</p>
                    <h2 class='sectionHeading'>Stay clean,<br />be safe.</h2>
                    <ul class='list'>
                        <div class='listRow'>
                            <img src='./assets/graphics/num1.svg' class='nums'>
                            <span class='bold'>Avoid</span>
                            <li class='listTxt'>close contact with sick individuals.</li>
                        </div>
                        <div class='listRow'>
                            <img src='./assets/graphics/num2.svg' class='nums'>
                            <span class='bold'>Avoid</span>
                            <li class='listTxt'>touching your eyes, nose, and mouth.</li>
                        </div>
                        <div class='listRow'>
                            <img src='./assets/graphics/num3.svg' class='nums'>
                            <span class='bold'>Stay </span>
                            <li class='listTxt'>home when you are sick.</li>
                        </div>
                        <div class='listRow'>
                            <img src='./assets/graphics/num4.svg' class='nums'>
                            <span class='bold'>Wash </span>
                            <li class='listTxt'>your hands regularly.</li>
                        </div>
                    </ul>
                </div>
                <div class='preventionImg sectionImg'></div>
            </div>
        </section>

        <!---------------------------- Symptoms Section !----------------------------------->

        <div class='spacer' id='symptoms'></div>
        <section class='symptoms sections'>
            <div class='sectionCont'>
                <div class='symptomsImg sectionImg'></div>
                <div class='leftTxtCont'>
                    <p class='sectionTitle'>SYMPTOMS</p>
                    <h2 class='sectionHeading'>How to know<br />if you have it.</h2>
                    <ul class='list'>
                        <div class='listRow'>
                            <img src='./assets/graphics/num1.svg' class='nums'>
                            <span class='bold'>Fever</span>
                            <li class='listTxt'>and cold-like symptoms.</li>
                        </div>
                        <div class='listRow'>
                            <img src='./assets/graphics/num2.svg' class='nums'>
                            <span class='bold'>Cough,</span>
                            <li class='listTxt'>typically a dry type.</li>
                        </div>
                        <div class='listRow'>
                            <img src='./assets/graphics/num3.svg' class='nums'>
                            <span class='bold'>Shortness</span>
                            <li class='listTxt'>of breath.</li>
                        </div>
                    </ul>
                </div>
            </div>
        </section>

        <!---------------------------- Awareness Section !----------------------------------->

        <div class='spacer'></div>
        <section class='awareness sections'>
            <div class='awarenessTxtColumn'>
                <h2 class='awarenessTitle'>Spread awareness</h2>
                <p class='awarenessDesc'>We work with local communities to promote <br />
                    awareness and the dangers of the novel coronavirus.</p>
            </div>
            <div class='foundersRow'>
                <div class='foundersColumn'>
                    <img src='./assets/graphics/viet.png'>
                    <p class='foundersName'>Viet Nam</p>
                    <p class='foundersTitle'>Co-Founder</p>
                </div>
                <div class='foundersColumn mLeft'>
                    <img src='./assets/graphics/bustin.png'>
                    <p class='foundersName'>Bustin Jieber</p>
                    <p class='foundersTitle'>Co-Founder</p>
                </div>
            </div>
        </section>

        <!---------------------------- Footer Section !----------------------------------->

        <div class='spacer' id='contact'></div>
        <section class='footer sections'>
            <div class='footerTextCont'>
                <h2 class='footerHeader'>Want to talk to us?</h2>
                <p class='footerDesc'>Send us your email and we’ll get back to you.</p>
            </div>
            <div class='footerRow'>
                <input type='text' placeholder='lebronjames@gmail.com' class='footerInput'>
                <input type='submit' class='footerSubmit'>
            </div>
            <h1 class='footerTitle'>Corona-chan</h1>
        </section>
    </div>
</body>
<script src="app.js" async defer></script>
<script src="script.js"></script>

</html>