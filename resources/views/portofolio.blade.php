<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" type="text/css" href="/css/portofolio.css">
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Portofoli Me</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light  bg-dark">
    <div class="container">
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="/">Biodata</a>
                <a class="nav-item nav-link" href="/experience">Experience</a>
                <a class="nav-item nav-link" href="/portofolio">Portofolio</a>
            </div>
        </div>
    </div>
</nav>
<div class="container">
<br>
    <!--jumbotron  -->
    <div class="jumbotron text-center bg-danger">
        <img src="{{ ('img/bimo.jpg') }}" class="img-thumbnail" width="150px">
        <h1>Bimo Amanta Hidayat</h1>
        <p>Pelajar</p>
    </div>
    <!-- akhir jumbroton -->

    <!-- about -->
    <section class="about" id="about" height="400px">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2>About</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor pariatur sed porro, voluptas accusamus sin
              t in, alias, dolore iure inventore tenetur totam dolorem vel. Repudiandae dolorem ipsa architecto tempore deserunt?</p>
          </div>
          <div class="col-sm-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis reiciendis, rerum, ad excepturi minima consequuntur e
              t laborum blanditiis vel, saepe repellendus voluptas. Dicta perspiciatis numquam iure aspernatur labore suscipit quia!</p>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir about -->

    <!-- portofolio -->
    <section class="portofolio" id="portofolio" height="300px">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2>Portofolio</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
            <a href="">
            <img class="img-thumbnail" src="{{ ('img/me2.jpeg') }} ">
            </a>
          </div>

          <div class="col-sm-4">
            <a href="">
            <img class="img-thumbnail" src="{{ ('img/me2.jpeg') }} ">
            </a>
          </div>

          <div class="col-sm-4">
            <a href="">
            <img class="img-thumbnail" src="{{ ('img/me2.jpeg') }} ">
            </a>
          </div>
        </div>

      </div>
    </section>
    <!-- akhir portofolio -->


    <!-- contact -->

    <section class="contact" id="about" >
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2>Contact</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
          <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id='nama' class="form-control" placeholder="Masukkan  nama anda"> 
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id='email' class="form-control" placeholder="Masukkan  email anda"> 
              </div>

              <div class="form-group">
                <label for="telepon">No Telpn</label>
                <input type="tel" id='telepon' class="form-control" placeholder="Masukkan  no telpn anda"> 
              </div>
              <select class="from-control">
                <option>-- Pilih Kategori --</option>
                <option>Web Desain</option>
                <option>Web Development</option>
              </select> 
               
              <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea class="form-control" rows="10" placeholder="masukan pesan"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim Pesan</button>

            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir contact -->
</div>

    <!-- footer -->
    <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>Copyright 2020 | build by. <a href="https://www.instagram.com/bimoamnthdyt/?hl=id">@bimoamnthdyt</a></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- akhir footer -->


    
    
    
    
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>