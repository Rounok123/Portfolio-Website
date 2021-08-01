<!-- Though HEROKU does not support html we have name this file as index.php
Link:   https://rounok-portfoil.herokuapp.com/ -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Website</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
  </head>
  <body>
      
    <div class="scroll-up-btn">
      <i class="fas fa-angle-up"></i>
    </div>

    <nav class="navbar">
      <div class="logo">
        <a href="#">Portfo<span>lio.</span></a>
      </div>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#teams">Team</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <div class="menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </nav>

    <section class="home">
      <div id="home-content">
        <div class="text-1">Hello, My name is</div>
        <div class="text-2">Rounok Das</div>
        <div class="text-3">And I'm a <span class="typing"></span></div>
        <button class="btn">
          <a
            href="https://www.linkedin.com/in/rounok-das-3a8b59206/"
            target="blank"
            >Hire Me</a
          >
        </button>
      </div>
    </section>

    <section class="about" id="about">
      <h2 class="title">About me</h2>
      <div class="about-content">
        <div class="left">
          <img src="./image/about.jpg" alt="" />
        </div>
        <div class="right">
          <div class="text">
            I'm Rounok and I'm a <span class="typing-2"></span>
          </div>
          <p>
            I am a pre-final year B. Tech (CSE) student at Dr. B. C. Roy
            Engineering College, Durgapur. I am proficient in programming
            languages like Java, Python, R, Javascript and currently learning
            software development as a part of my extra curriculum. I am
            extremely sincere and hardworking student who is willing to convert
            his academic excellence into industry level knowledge. I think I am
            very flexible, adaptive and quick learner to learning new things.I have
            Intermediate level knowledge for frontend development using HTML,
            CSS, JavaScript I used nodejs as my backend and for database I
            preferred Mongodb. I am having much knowledge on API also.
          </p>
          <a
            href="https://drive.google.com/file/d/10ZFh33Z6bGWlj5h374l7VN_zQHxVhYHo/view?usp=sharing"
            target="blank"
            >Download CV</a
          >
        </div>
      </div>
    </section>

    <section class="services" id="services">
      <h2 class="title">My Services</h2>
      <div class="serv-content">
        <div class="card">
          <i class="fas fa-paint-brush"></i>
          <div class="text">Web Design</div>
          <div class="card-text">
            I am a fullstack developer I created 2-4 dynamic adaptive websites on my own effort and skill and having work experience of 6-7 months.
          </div>
        </div>
        <div class="card">
          <i class="fas fa-chart-line"></i>
          <div class="text">Ml Expert</div>
          <div class="card-text">
            I'm also an machine learning and Deep Learning Algo expert. Currently doing internship from DRDO, one of the greatest organization in India.
          </div>
        </div>
        <div class="card">
          <i class="fas fa-code"></i>
          <div class="text">Apps Design</div>
          <div class="card-text">
            I'm not as best in App Development as the previous ones. But I am having a tremendous team who are developing varrios application for cross platform.
          </div>
        </div>
      </div>
    </section>

    <section class="skills" id="skills">
      <h2 class="title">My Skills</h2>
      <div class="skills-content">
        <div class="left">
          <div class="text">My creative skills & experiences.</div>
          <p>
            I am a Ml & Dl expert. While I also have create so many beautiful websites and application. I have create many websites for the clients and also for myself. I am having 7 months of experience in the field of web development and currently doing an internship from Defence Research And Development Organization of India. I have also created so many Ml and Neural Network model and embaded them with the help of API to the web server. If you want to have a look on my few crativities then click on the Read More button bellow. Thank You All...
          </p>
          <a href="https://github.com/Rounok123" target="blank">Read More</a>
        </div>
        <div class="right">
          <div class="bars">
            <div class="info">
              <span>Web Development</span>
              <span>90%</span>
            </div>
            <div class="line Web"></div>
          </div>
          <div class="bars">
            <div class="info">
              <span>Ds & Algo</span>
              <span>60%</span>
            </div>
            <div class="line Ds-Algo"></div>
          </div>
          <div class="bars">
            <div class="info">
              <span>Ml & Dl</span>
              <span>80%</span>
            </div>
            <div class="line Ml"></div>
          </div>
          <div class="bars">
            <div class="info">
              <span>DBMS</span>
              <span>50%</span>
            </div>
            <div class="line DBMS"></div>
          </div>
          <div class="bars">
            <div class="info">
              <span>JAVA</span>
              <span>75%</span>
            </div>
            <div class="line JAVA"></div>
          </div>
        </div>
      </div>
    </section>

    <section class="teams" id="teams">
      <div class="max-width">
        <h2 class="title">My Achivements</h2>
        <div class="carousel owl-carousel">
          <div class="card">
            <div class="box">
              <img src="./image/img-1.jpg" alt="" />
              <div class="text">Data Science</div>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
            </div>
          </div>
          <div class="card">
            <div class="box">
              <img src="./image/img-2.jpg" alt="" />
              <div class="text">Web Gis</div>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
            </div>
          </div>
          <div class="card">
            <div class="box">
              <img src="./image/img-3.jpg" alt="" />
              <div class="text">Web Development</div>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
            </div>
          </div>
          <div class="card">
            <div class="box">
              <img src="./image/img-4.jpg" alt="" />
              <div class="text">Virtual Reality</div>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
            </div>
          </div>
          <div class="card">
            <div class="box">
              <img src="./image/img-5.jpg" alt="" />
              <div class="text">Ml Project</div>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
            </div>
          </div>
          <div class="card">
            <div class="box">
              <img src="./image/img-6.jpg" alt="" />
              <div class="text">Core JAVA</div>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
            </div>
          </div>
          <div class="card">
            <div class="box">
              <img src="./image/img-7.jpg" alt="" />
              <div class="text">Digitak Marketing
              </div>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="contact" id="contact">
      <div class="max-width">
        <h2 class="title">Contact me</h2>
        <div class="contact-content">
          <div class="left">
            <div class="text">Get in Touch</div>
            <p>
              If you find anythig interesting don't forget to rerach us via the email id provided bellow. We are always wainting for the enthusiastic people like you.
            </p>
            <div class="icons">
              <div class="row">
                <i class="fas fa-user"></i>
                <div class="info">
                  <div class="head">Name</div>
                  <div class="sub-title">Rounok Das</div>
                </div>
              </div>
              <div class="row">
                <i class="fas fa-map-marker-alt"></i>
                <div class="info">
                  <div class="head">Address</div>
                  <div class="sub-title">R. K. Mission Vidyapith, Purulia</div>
                </div>
              </div>
              <div class="row">
                <i class="fas fa-envelope"></i>
                <div class="info">
                  <div class="head">Email</div>
                  <div class="sub-title">dasrounok2000@gmail.com</div>
                </div>
              </div>
            </div>
          </div>
          <div class="right">
            <div class="text">Message me</div>
            <form action="#">
              <div class="fields">
                <div class="field name">
                  <input type="text" placeholder="Name" required />
                </div>
                <div class="field email">
                  <input type="email" placeholder="Email" required />
                </div>
              </div>
              <div class="field">
                <input type="text" placeholder="Subject" required />
              </div>
              <div class="field textarea">
                <textarea
                  cols="30"
                  rows="10"
                  placeholder="Message.."
                  required
                ></textarea>
              </div>
              <div class="button-area">
                <button type="submit">Send message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <span
        >Created By
        <a
          href="https://www.instagram.com/u_n_s_a_t_u_r_a_t_e_d/"
          target="blank"
          >Rounok Das</a
        >
        | <span class="far fa-copyright"></span> 2021 All rights reserved.</span
      >
    </footer>

    <script src="index.js"></script>
  </body>
</html>
