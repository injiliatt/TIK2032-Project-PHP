
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- css file -->
  <link rel="stylesheet" href="style.css">
  <title>Personal Portofolio Website</title>
</head>
<body>
  
<!-- == header start == -->
<header>

    <!-- profile -->
    <div class="profile">
      <img src="img/bg1.jpeg" alt="" width="150px">
      <h1>Injilia Ticoalu</h1>
    </div>

    <!-- nav bar -->
    <nav>
      <ul>
        <li><a href="#home" class="active"><i class="fa-solid fa-house"></i>Home</a></li>
        <li><a href="#about"><i class="fa-solid fa-user"></i>About Me</a></li>
        <li><a href="#blog"><i class="fa-solid fa-user"></i>Blog</a></li>
        <li><a href="#gallery"><i class="fa-solid fa-briefcase"></i>Gallery</a></li>
        <li><a href="#contact"><i class="fa-solid fa-envelop"></i>Contact</a></li>
      </ul>
    </nav>

    <!-- footer -->
    <div class="footer">
      <p>&copy; 2024 Injil's Portofolio Web. </p>
    </div>

</header>
<!-- == header end == -->

<!-- ==== all body content -->

<main>
<!-- mobile nav toggle -->
<div class="menu-toggle">
  <input type="checkbox" />
  <span></span>
  <span></span>
  <span></span>
</div>
  
<!-- home section start -->
  <section id="home">
      <div class="home-row">
          <h1>Hi, This is <br>Injilia Ticoalu<span>.</span></h1>
          <p>i'm a <span class="auto-input">Informatics Engineering Student</span></p>
      </div>
  </section>
  <br><br>
<!-- home section end -->

<!-- about section start -->
  <section id="about">
    <h1 class="sub-heading">About Me</h1>
    <br><br>

    <div class="about-img">
        <img src="img/bg1.jpeg" alt="My Photo"></div><br>
        <div class="content-text">
            <h2>Annyeonghaseo Yeorobun!</h2>
            <p> 
              I'm a undergraduate student majoring in Informatics Engineering, I was studying at Sam Ratulangi University. 
              I am passionate and interested in concept design and design software. I'm always learning new ways to build on what I already know. 
              I want to learn more and advance in this industry.<br><br>
                <span class="content-information">
                  Name    : Injilia Tirza Ticoalu<br><br>
                  Email   : injilticoalu0126@gmail.com<br><br>
                  Address : Minahasa Utara, Sulawesi Utara, Indonesia<br>
                </span>
            </p>
        </div>
    </div>
  </section>
 <!-- about section end -->

 <!-- blog section start -->
 <section id="blog">
  <h1 class="sub-heading">Blog</h1>
  <br><br>
  
  <div class="blog-container">
  <?php

  include 'koneksi.php';
            $sql = "SELECT * FROM blog_posts";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              
                while($row = $result->fetch_assoc()) {
                    echo '<article class="blog-box reveal">';
                    echo '    <div class="blog-img">';
                    echo '        <img src="' . $row["image_src"] . '" alt="' . $row["image_alt"] . '">';
                    echo '    </div>';
                    echo '    <br>';
                    echo '    <h2>' . $row["title"] . '</h2>';
                    echo '    <div class="blog-text">';
                    echo '        <p>' . nl2br($row["content"]) . '</p>';
                    echo '    </div>';
                    echo '</article><br>';
                }
            } else {
                echo "No blog posts found.";
            }
            // Close the database connection
            $conn->close();
            ?>
  </div>
</section>  

<br>
 
 <!-- blog section end -->

</section>

  <!-- gallery section start -->

  <section id="gallery">
  <h1 class="sub-heading">Gallery</h1>
  <br><br>

    <div class="responsive reveal">
        <div class="gallery">
            <img src="img/gambar1.jpeg" alt="Picture of AZARIAH">
                <div class="desc">
                    <div class="text">Picture of AZARIAH</div>
                </div>
        </div>
      </div>
      <div class="responsive reveal">
        <div class="gallery">
            <img src="img/gambar2.jpeg" alt="Picture of AZARIAH">
                <div class="desc">
                    <div class="text">Picture of AZARIAH</div>
                </div>
        </div>
      </div>
      <div class="responsive reveal">
        <div class="gallery">
            <img src="img/gambar3.jpeg" alt="Picture of AZARIAH">
                <div class="desc">
                    <div class="text">Picture of AZARIAH</div>
                </div>
        </div>
      </div>
      <div class="responsive reveal">
        <div class="gallery">
            <img src="img/gambar4.jpeg" alt="Picture of PARA CALON PROF">
                <div class="desc">
                    <div class="text">Picture of PARA CALON PROF</div>
                </div>
        </div>
        <br>
      </div>
      <div class="responsive reveal">
        <div class="gallery">
            <img src="img/gambar5.jpeg" alt="Picture of PARA CALON PROF">
                <div class="desc">
                    <div class="text">Picture of PARA CALON PROF</div>
                </div>
        </div>
      </div>
      <div class="responsive reveal">
        <div class="gallery">
            <img src="img/gambar6.jpeg" alt="Picture of PARA CALON PROF">
                <div class="desc">
                    <div class="text">Picture of PARA CALON PROF</div>
                </div>
        </div>
      </div>
      <div class="responsive reveal">
        <div class="gallery">
            <img src="img/gambar7.jpeg" alt="Picture of A'21">
                <div class="desc">
                    <div class="text">Picture of A'21</div>
                </div>
        </div>
      </div>
      <div class="responsive reveal">
        <div class="gallery">
            <img src="img/gambar8.jpeg" alt="Picture of A'21">
                <div class="desc">
                    <div class="text">Picture of A'21</div>
                </div>
        </div>
        <br>
      </div>

      <div class="clearfix"></div>
    </section>
    <br><br>
  <!-- gallery section end -->

  <!-- contact section start -->
  <br>
  <section id="contact">
  <h1 class="sub-heading">Contact</h1>
  <br><br>

    </div>
    <br>
    <div class="contact-info">
        <div class="card reveal">
            <div class="contact-icon">
                <img src="img/email.jpg" alt="Email" width="50" height="50">
            </div>
            <p>injilticoalu0126@gmail.com</p>
        </div>

        <div class="card reveal">
            <div class="contact-icon">
                <img src="img/instagram.jpg" alt="Instagram" width="50" height="50">
            </div>
            <p>@injiliatt_</p>
        </div>

        <div class="card reveal">
            <div class="contact-icon">
                <img src="img/lokasi.jpg" alt="Address" width="50" height="50">
            </div>
            <p>Minahasa Utara, Sulawesi Utara, Indonesia</p>
        </div>
    </div>
  </section>
<!-- contact section end -->

    <br><br>

</main>


<!-- typed.js file (for typing effect)-->

<!-- main js file -->
<script src="script.js"></script>

</body>
</html>