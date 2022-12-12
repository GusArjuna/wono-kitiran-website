@extends('layout')
@section('content')
<!-- Header -->
<header id="header" class="header">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h1>WISATA JATI WALONDO</h1>
                        <p class="p-heading p-large">Tempat wisata indah bernuansa alam yang kaya akan flora dan fauna dan yang pasti instagramable</p>
                        <a class="btn-solid-lg page-scroll" href="#intro">DISCOVER</a>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of header-content -->
</header> <!-- end of header -->
<!-- end of header -->


<!-- Intro -->
<div id="intro" class="basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="text-container">
                    <div class="section-title">INTRO</div>
                    <h2>Wisata Jati Walondo Wono Kitiran Blitar Jawa Timur</h2>
                    <p>Tempat wisata ini berlokasi di Blitar Jawa timur lebih tepatnya di jl. bla bla bla , disini kami menyediakan berbagai macam hiburan dan makanan mulai dari live music dan tahu campur</p>
                    <p class="testimonial-text">"kami membuat tempat ini sebagus mungkin agar menjadi tempat wisata baru di blitar dan bisa menarik banyak wisatawan lokal maupun international"</p>
                    <div class="testimonial-author">Sunarjo - Pengelola</div>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-7">
                <div class="image-container">
                    <img class="img-fluid" src="images/intro-office.jpg" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-1 -->
<!-- end of intro -->


<!-- Description -->
<div class="cards-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                
                <!-- Card -->
                <div class="card">
                    <span class="fa-stack">
                        <span class="hexagon"></span>
                        <i class="fas fa-binoculars fa-stack-1x"></i>
                    </span>
                    <div class="card-body">
                        <h4 class="card-title">LOCATION</h4>
                        <p>Jalan Jend. S. Parman Gang V no 59B, Waru Sidoarjo Jawa Timur</p>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <span class="fa-stack">
                        <span class="hexagon"></span>
                        <i class="fas fa-list-alt fa-stack-1x"></i>
                    </span>
                    <div class="card-body">
                        <h4 class="card-title">FAMILY FRIENDLY</h4>
                        <p>Wisata Jati Walondo memiliki penginapan dan area yang cocok untuk liburan keluarga</p>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <span class="fa-stack">
                        <span class="hexagon"></span>
                        <i class="fas fa-chart-pie fa-stack-1x"></i>
                    </span>
                    <div class="card-body">
                        <h4 class="card-title">TOUR AND TRIP</h4>
                        <p>Wisata Jati Walondo sangat cocok bagi anda yang suka menjelajahi dunia karena indahnya dan kayanya flora serta fauna</p>
                    </div>
                </div>
                <!-- end of card -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of description -->


<!-- Services -->
<div id="services" class="cards-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">SERVICES</div>
                <h2>The Wono Kitiran<br> Wisata Jati Walondo</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">
                
                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img class="img-fluid" src="images/services-1.jpg" alt="alternative">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"> Harga Tiket Masuk</h3>
                        <p>Harga sudah termasuk biaya pajak</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">anak - anak < 3 Tahun : Rp. {{ $harga->kecil }}</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Dewasa : Rp. {{ $harga->dewasa }}</div>
                            </li>
                        </ul>
                    </div>
                    <div class="button-container">
                        <a href="{{ url('/ticket') }}" class="btn-solid-reg" data-bs-toggle="modal" data-bs-target="#ticketing">PESAN</a>
                    </div> <!-- end of button-container -->
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img class="img-fluid" src="images/services-2.jpg" alt="alternative">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Makanan</h3>
                        <p>Disini Tersedia Berbagai Macam Makanan Yang Murah Namun Rasa Tetap Berkualitas</p>
                    </div>
                    <div class="button-container">
                        <a class="btn-solid-reg page-scroll" href="{{ url('/food') }}">DETAILS</a>
                    </div> <!-- end of button-container -->
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img class="img-fluid" src="images/services-3.jpg" alt="alternative">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Hiburan</h3>
                        <p>Kami Menyediakan Berbagai Macam Hiburan Yang Menghibur Pengunjung</p>
                    </div>
                    <div class="button-container">
                        <a class="btn-solid-reg page-scroll" href="{{ url('/entertain') }}">DETAILS</a>
                    </div> <!-- end of button-container -->
                </div>
                <!-- end of card -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-2 -->
<!-- end of services -->

<!-- Contact -->
<div id="contact" class="form-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-container">
                    <div class="section-title">CONTACT</div>
                    <h2>HUBUNGI KAMI</h2>
                    <p>Untuk menghubungi kami seputar pertanyaan, ataupun ada kritik dan saran bisa langsung ke alamat berikut atau menghubungi nomor dan media sosial di bawah ini</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address"><i class="fas fa-map-marker-alt"></i>Jalan Jend. S. parman V no 59B waru Sidoarjo</li>
                        <li><i class="fas fa-phone"></i><a href="tel:003024630820">ARJUNA +62 851 5686 5853</a></li>
                        <li><i class="fas fa-phone"></i><a href="tel:003024630820">BASUDEWA +62 851 5686 5853</a></li>
                        <li><i class="fas fa-envelope"></i><a href="mailto:office@aria.com">wisatawalondo@gmail.com</a></li>
                    </ul>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6">
                
                <!-- Contact Form -->
                <form id="contactForm" data-toggle="validator" data-focus="false">
                    <div class="form-group">
                        <input type="text" class="form-control-input" id="cname" required>
                        <label class="label-control" for="cname">Name</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control-input" id="cemail" required>
                        <label class="label-control" for="cemail">Email</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control-input" id="cphone" name="cphone" required>
                        <label class="label-control" for="cphone">Phone</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control-textarea" id="cmessage" required></textarea>
                        <label class="label-control" for="cmessage">Your message</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group checkbox">
                        <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>Saya Setuju dengan <a href="{{ url('privacy-policy') }}">Kebijakan</a> dan <a href="{{ url('terms-conditions') }}">Syarat Ketentuan</a>  Wisata Jati Walondo
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
                    </div>
                    <div class="form-message">
                        <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                    </div>
                </form>
                <!-- end of contact form -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of form-2 -->
<!-- end of contact -->
<!-- Modal -->
<div class="modal fade" id="ticketing" tabindex="-1" aria-labelledby="ticketinglabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="ticketinglabel">Pesan Tiket</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
</div>
@endsection
