<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio</title>
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
</head>

<body>
  <!-- header -->
  <header class="header">
    <a href="#" class="logo">Portfolio</a>

    <nav class="navbar">
      <a href="#home" style="--i: 1" class="active">Home</a>
      <a href="#about" style="--i: 2">About</a>
      <a href="#services" style="--i: 3">Skill</a>
      <a href="#skills" style="--i: 4">Portfolio</a>
      <a href="#contact" style="--i: 5">Contact</a>
      <a href="index.php" style="--i: 6"><i class="fa-solid fa-right-to-bracket"></i>log</a>
    </nav>
  </header>
  <section class="home">
    <div class="home-content">
      <h3>Hello,I'm</h3>
      <h1>Willy</h1>
      <h3>I'm a <span class="text">Junior Engineer</span></h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae
        <br />
        cumque sequi, vero minima maiores voluptatem. Iste non reiciendis
        <br />
        repellendus quasi. <br />
      </p>
      <div class="home-sci">
        <a href="#" style="--i: 7"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#" style="--i: 8"><i class="fa-brands fa-instagram"></i></a>
        <a href="#" style="--i: 9"><i class="fa-brands fa-whatsapp"></i></a>
        <a href="#" style="--i: 10"><i class="fa-brands fa-tiktok"></i></a>
      </div>
      <a href="#" class="btn-box">More About Me</a>
    </div>
    <div class="home-img">
      <img src="https://picsum.photos/id/1025/500/300" alt="" style="width: 100%;" />
    </div>
    <span class="home-imghover"></span>
  </section>

  <section class="about" id="about">
    <div class="about-img">
      <img src="https://picsum.photos/id/237/500/300" alt="" />
    </div>
    <div class="about-text">
      <h2>About<span>Me</span></h2>
      <h4>Want To Be A Full Stack Developer!</h4>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
        aspernatur cumque vero corporis totam laudantium quae aliquid ut
        recusandae, eaque itaque eum voluptatem rem facilis reiciendis a
        quaerat provident maiores nihil, dignissimos ex tenetur veniam modi
        sit! Asperiores optio sunt illum saepe voluptates repellendus
        molestiae enim, quos sed maxime iusto architecto facilis maiores totam
        ipsam, harum inventore dolores a in....
      </p>
      <a href="#" class="btn-box">More About Me</a>
    </div>
  </section>

  <section>
    <div class="services" id="services">
      <div class="container">
        <h1 class="sub-title">My <span>Services</span></h1>
        <div class="services-list">
          <div>
            <i class="fa-brands fa-php" style="color: #74c0fc"></i>
            <img src="./images/img07.jpg" alt="" style=" max-width: 100%;  height: auto;
            display: block; margin: 0 auto 10px;">
            <h2>Calendar</h2>
            <p>
              萬年曆作業
            </p>
            <a href="https://wda.mackliu.com/s1130103/landin-page/Calendar-03/index.php" class="read" target="_blank">On
              Click</a>
          </div>
          <div>
            <i class="fa-solid fa-code" style="color: #74c0fc"></i>
            <img src="./images/img08.jpg" alt="" style=" max-width: 100%;  height: auto;
            display: block; margin: 0 auto 10px;">
            <h2>SQL</h2>
            <p>
              簡易圖片、個人資料CRUD操作
            </p>
            <a href="https://wda.mackliu.com/s1130103/landin-page/test_crud/index.php" class="read" target="_blank">On
              Click
            </a>
          </div>
          <div>
            <i class="fa-brands fa-html5" style="color: #74c0fc"></i>
            <img src="./images/img03.jpg" alt="" style=" max-width: 100%;  height: auto;
            display: block; margin: 0 auto 10px;">
            <h2>HTML</h2>
            <p>
              丙級作業
            </p>
            <a href="./11301-PHP-LEVEL-C-willy36w/index.html" class="read" target="_blank">On Click</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <h1 class="sub-title" id="title02">My <span>Skills</span></h1>

  <section>
    <div class="container1" id="skills">
      <h1 class="heading1">Technical Skills</h1>
      <div class="Technical-bars">
        <div class="bar">
          <i style="color: #c95d2e" class="fa-brands fa-html5"></i>
          <div class="info">
            <span>HTML</span>
          </div>
          <div class="progress-line html">
            <span></span>
          </div>
        </div>
        <div class="bar">
          <i style="color: #147bbc" class="fa-brands fa-css3-alt"></i>
          <div class="info">
            <span>CSS</span>
          </div>
          <div class="progress-line css">
            <span></span>
          </div>
        </div>
        <div class="bar">
          <i style="color: #b0bc1e" class="fa-brands fa-js"></i>
          <div class="info">
            <span>Javascript</span>
          </div>
          <div class="progress-line Javascript">
            <span></span>
          </div>
        </div>
        <div class="bar">
          <i style="color: #c32ec9" class="fa-brands fa-php"></i>
          <div class="info">
            <span>PHP</span>
          </div>
          <div class="progress-line php">
            <span></span>
          </div>
        </div>
        <div class="bar">
          <i style="color: #69bcbc" class="fa-solid fa-code"></i>
          <div class="info">
            <span>SQL</span>
          </div>
          <div class="progress-line sql">
            <span></span>
          </div>
        </div>
      </div>
    </div>

    <div class="container1">
      <h1 class="heading1">Professional Skills</h1>
      <div class="radial-bars">
        <div class="radial-bar">
          <svg x="0px" y="0px" viewBox="0 0 200 200">
            <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
            <circle class="path path-1" cx="100" cy="100" r="80"></circle>
          </svg>
          <div class="percentage">90%</div>
          <div class="text">Creativity</div>
        </div>
        <div class="radial-bar">
          <svg x="0px" y="0px" viewBox="0 0 200 200">
            <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
            <circle class="path path-2" cx="100" cy="100" r="80"></circle>
          </svg>
          <div class="percentage">65%</div>
          <div class="text">Communication</div>
        </div>
        <div class="radial-bar">
          <svg x="0px" y="0px" viewBox="0 0 200 200">
            <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
            <circle class="path path-3" cx="100" cy="100" r="80"></circle>
          </svg>
          <div class="percentage">75%</div>
          <div class="text">Problem Solving</div>
        </div>
        <div class="radial-bar">
          <svg x="0px" y="0px" viewBox="0 0 200 200">
            <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
            <circle class="path path-4" cx="100" cy="100" r="80"></circle>
          </svg>
          <div class="percentage">85%</div>
          <div class="text">TeamWork</div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="portfolio" id="project">
      <div class="main-text" id="project">
        <h2>My <span>Portfolio</span></h2>

        <div class="portfolio-content">
          <div class="row">
            <div><img src="./images/img.jpg" alt="" /></div>

            <div class="layer">
              <h5>UI/UX Design</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
                corrupti deserunt ullam eaque eum minima amet voluptas placeat
                quasi! Repudiandae labore, esse, itaque voluptate asperiores
                possimus atque magnam, a pariatur quibusdam delectus quidem
                aliquid animi.
              </p>

              <a href="#"><i class="fa-solid fa-arrow-up-right-from-square" style="color: #147bbc"></i></a>
            </div>
          </div>
          <div class="row">
            <div><img src="./images/img01.jpg" alt="" /></div>

            <div class="layer">
              <h5>UI/UX Design</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
                corrupti deserunt ullam eaque eum minima amet voluptas placeat
                quasi! Repudiandae labore, esse, itaque voluptate asperiores
                possimus atque magnam, a pariatur quibusdam delectus quidem
                aliquid animi.
              </p>

              <a href="#"><i class="fa-solid fa-arrow-up-right-from-square" style="color: #147bbc"></i></a>
            </div>
          </div>
          <div class="row">
            <img src="./images/img02.jpg" alt="" />
            <div class="layer">
              <h5>UI/UX Design</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
                corrupti deserunt ullam eaque eum minima amet voluptas placeat
                quasi! Repudiandae labore, esse, itaque voluptate asperiores
                possimus atque magnam, a pariatur quibusdam delectus quidem
                aliquid animi.
              </p>

              <a href="#"><i class="fa-solid fa-arrow-up-right-from-square" style="color: #147bbc"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact" id="contact">
    <div class="contact-text">
      <h2>Contact <span>Me</span></h2>
      <h4>Work Together</h4>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea
        reprehenderit, asperiores eum vero nobis voluptatibus praesentium
        inventore, iste exercitationem at eius. Odio iste consequatur at
        expedita ipsa sapiente, asperiores itaque!
      </p>
      <div class="contact-list">
        <li>
          <i class="fa-solid fa-envelopes-bulk fa-bounce" style="color: #74c0fc"></i>contact@.gmail.com
        </li>
        <li>
          <i class="fa-solid fa-phone-volume fa-beat" style="color: #74c0fc"></i>01223456
        </li>
      </div>
      <div class="contact-icons">
        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
        <a href=""><i class="fa-brands fa-instagram"></i></a>
        <a href=""><i class="fa-brands fa-whatsapp"></i></a>
        <a href=""><i class="fa-brands fa-tiktok"></i></a>
      </div>
    </div>

    <div class="contact-form">
      <form action="">
        <input type="" placeholder="Enter Your Name" required />
        <input type="email" placeholder="Enter Your Email" required />

        <input type="" placeholder="Enter Your Subject" />
        <textarea name="" id="" cols="40" rows="10" placeholder="Enter Your Message" required></textarea>
        <input type="submit" value="submit" class="send" />
      </form>
    </div>
  </section>
  <div class="last-text">
    <p>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque, rem?
    </p>
  </div>
  <a href="#" class="top"><i class="fa-solid fa-arrow-up"></i></a>
</body>

</html>