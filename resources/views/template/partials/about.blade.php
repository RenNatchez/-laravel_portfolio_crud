    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
  
          <div class="section-title">
            <h2>About</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
  
          <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
              <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
              <h3>{{$utilisateur->poste}}</h3>
              <p class="font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> {{$utilisateur->anniversaire}}</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> {{$utilisateur->site}}</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> {{$utilisateur->phone}}</li>
                    <li><i class="icofont-rounded-right"></i> <strong>City:</strong> {{$utilisateur->ville}}</li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li><i class="icofont-rounded-right"></i> <strong>Age:</strong>{{$utilisateur->age}}</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> {{$utilisateur->degree}}</li>
                    <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> {{$utilisateur->mail}}</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> {{$utilisateur->statut}}</li>
                  </ul>
                </div>
              </div>
                <p>{{$utilisateur->description}}</p>
            </div>
        </div>
    </div>
</section><!-- End About Section -->