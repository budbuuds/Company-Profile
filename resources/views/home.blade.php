@extends('layouts.app')

@section('content')

<div class="page-body-wrapper">
    <section id="home" class="home">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-banner">
                        <div class="d-sm-flex justify-content-between">
                            <div data-aos="zoom-in-up">
                                <div class="banner-title">
                                    <h3 class="font-weight-medium">
                                        PT.WELL WIN NUSANTARA
                                    </h3>
                                </div>
                                <p class="mt-3">adalah perusahaan berbentuk Perseroan Terbatas (PT) yang focus pada jasa pelatihan dan konsultasi bidang Keselamatan dan Kesehatan Kerja (K3) dengan berorientasi pada dunia kerja tanpa mengesampingkan kaidah akademis 

                                    <br>
                                    Sebagai Lembaga Pelatihan dan Konsultasi serta Lembaga Penempatan Tenaga Kerja Swasta 
                                </p>
                                <a href="#about" class="btn btn-secondary mt-3">Learn more</a>
                            </div>
                            <div class="mt-5 mt-lg-0">
                                <img src="{{ url('frontend/images/PNG WWN.png')}}" alt="marsmello" class="img-fluid" data-aos="zoom-in-up">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="font-weight-medium text-dark mb-5">LEGALITAS PERUSAHAAN</h3>
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-sm-4 text-center text-lg-left">
                    <div class="d-flex justify-content-start mb-3">
                        <img src="{{ url('frontend/images/tick.png')}}" alt="tick" class="mr-3 tick-icon"  >
                        <p class="mb-0">Nama : PT.WELL WIN NUSANTARA</p>
                    </div>
                    <div class="d-flex justify-content-start mb-3">
                        <img src="{{ url('frontend/images/tick.png')}}" alt="tick" class="mr-3 tick-icon"  >
                        <p class="mb-0">Akte pendirian nomor 234,- 
                        Tgl 19 Desember 2016
                        </p>
                    </div>
                    <div class="d-flex justify-content-start">
                        <img src="{{ url('frontend/images/tick.png')}}" alt="tick" class="mr-3 tick-icon"  >
                        <p class="mb-0">Notaris Ranti Fitria.,SH.M.Kn.
                        <br>
                        Keputusan Menteri Hukum dan <br> Hak Asasi Manusia <br> Republik Indonesia <br> Nomor AHU-0000590.AH.01.01 tahun 2017           
                        </p>
                    </div>
                    <div class="d-flex justify-content-start mb-3">
                        <img src="{{ url('frontend/images/tick.png')}}" alt="tick" class="mr-3 tick-icon"  >
                        <p class="mb-0">SIUPNomor:0015/03.07/MK/SIUP/I/2017</p>
                    </div>
                    <div class="d-flex justify-content-start mb-3">
                        <img src="{{ url('frontend/images/tick.png')}}" alt="tick" class="mr-3 tick-icon"  >
                        <p class="mb-0">TDP Nomor 03,07.3.70.05356.</p>
                    </div>
                    <div class="d-flex justify-content-start">
                        <img src="{{ url('frontend/images/tick.png')}}" alt="tick" class="mr-3 tick-icon"  >
                        <p class="mb-0">NIB Nomor : 9120307950445</p>
                    </div>
                    <div class="d-flex justify-content-start mb-3">
                        <img src="{{ url('frontend/images/tick.png')}}" alt="tick" class="mr-3 tick-icon"  >
                        <p class="mb-0">NPWP Nomor 81.175.882.0,-205.000</p>
                    </div>
                    <div class="d-flex justify-content-start mb-3">
                        <img src="{{ url('frontend/images/tick.png')}}" alt="tick" class="mr-3 tick-icon"  >
                        <p class="mb-0">PJK3 No.5/906/AS.02.04/VIII/2019</p>
                    </div>
                    <div class="d-flex justify-content-start mb-3">
                        <img src="{{ url('frontend/images/tick.png')}}" alt="tick" class="mr-3 tick-icon"  >
                        <p class="mb-0">Rekening Bank : 0177797740  BNI Ade Fitrio</p>
                    </div>
            </div>
                    <div class="col-sm-6 text-right" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <img src="{{ url('frontend/images/IMG-20170815-WA0017.jpg')}}" alt="idea" class="img-fluid">
                    </div>
        </div>
    </section>
    <section class="our-process" id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-6" data-aos="fade-up">
                    <h3 class="font-weight-medium text-dark">TENTANG KAMI</h3>
                    <h5 class="text-dark mb-3">PT.WELL WIN NUSANTARA adalah perusahaan berbentuk Perseroan Terbatas (PT) yang focus pada jasa pelatihan dan konsultasi bidang Keselamatan dan Kesehatan Kerja (K3) dengan berorientasi pada dunia kerja tanpa mengesampingkan kaidah akademis. 
                    <br>Sebagai Lembaga Pelatihan dan Konsultasi serta Lembaga Penempatan Tenaga Kerja Swasta </h5>
                    <p class="font-weight-medium mb-4">PT. Well Win Nusantara Komitmen dalam meningkat Kualitas Pendidikan Pelatihan dibidang Keselamatan dan Kesehatan Kerja dan selalu menjaga Integritas dalam jasa pelayanan.dibidang Pelatihan K3, merupakan salah satu syarat dasar dalam membangun sekaligus menjamin keselamatan dan kesehatan kerja seluruh personil  di bawah kendalinya sendiri dan pihak – pihak yang berhubungan dengan perusahaan. Serta meningkatkan budaya K3 yang baik di tempat kerja.
                     <br> 
                     Dalam pelaksanaan kegiatan pelatihan K3  tentu saja sesuai dengan peraturan perundang – undangan yang berlaku dan persyaratan lainnya yang berkaitan dengan penerapan K3 sebagai bentuk komitmen kami untuk menjadi mitra dan pendamping bagi klien sebagai upaya guna mengembangkan kerja sama dan ikut berpartisipasi efektif untuk melaksanakan tugas dan kewajiban bersama dibidang keselamatan dan kesehatan kerja (K3)
                     <br>
                     Hadirnya Well Win Nusantara untuk bersinergi dengan Perusahan yang ada di Indonesia untuk  mewujudkan dunia industri yang bebas dari kecelakaan kerja.
                    </p>
                </div>
                <div class="col-sm-6 text-right" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <img src="{{ url('frontend/images/Logo terbaruhhhhh.png')}}" alt="idea" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="our-projects" id="projects">
        <div class="container">
            <div class="row mb-5">
                <div class="col-sm-12">
                    <div class="d-sm-flex justify-content-between align-items-center mb-2">
                        <h3 class="font-weight-medium text-dark ">Let's See Our Latest Project</h3>
                        <div><a href="#" class="btn btn-outline-primary">View more</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-5" data-aos="fade-up">
            <div class="owl-carousel-projects owl-carousel owl-theme">
                <div class="item">
                    <img src="{{ url('frontend/images/20181015_100118.jpg')}}" alt="slider" height="200px" width="100%">
                </div>
                <div class="item">
                    <img src="{{ url('frontend/images/20181019_143838.jpg')}}" alt="slider" height="200px" width="100%">
                </div>
                <div class="item">
                    <img src="{{ url('frontend/images/20181024_083447.jpg')}}" alt="slider" height="200px" width="100%">
                </div>
                <div class="item">
                    <img src="{{ url('frontend/images/20181025_084538.jpg')}}" alt="slider" height="200px" width="100%">
                </div>
                <div class="item">
                    <img src="{{ url('frontend/images/20190223_084805.jpg')}}" alt="slider" height="200px" width="100%">
                </div>
                <div class="item">
                    <img src="{{ url('frontend/images/FB_IMG_1572362544019.jpg')}}" alt="slider" height="200px" width="100%">
                </div>
                <div class="item">
                    <img src="{{ url('frontend/images/73304575_2841042045906891_958441554333138944_n.jpg')}}" alt="slider" height="200px" width="100%">
                </div>
                <div class="item">
                    <img src="{{ url('frontend/images/74218588_2837939989550430_9076358063681699840_n.jpg')}}" alt="slider" height="200px" width="100%">
                </div>
                <div class="item">
                    <img src="{{ url('frontend/images/74218588_2837939989550430_9076358063681699840_n.jpg')}}" alt="slider" height="200px" width="100%">
                </div>
                <div class="item">
                    <img src="{{ url('frontend/images/74452278_2840496649294764_1695120976372563968_n.jpg')}}" alt="slider" height="200px" width="100%">
                </div>
                <div class="item">
                    <img src="{{ url('frontend/images/74667399_2837940159550413_4052846477557366784_n.jpg')}}" alt="slider" height="200px" width="100%">
                </div>
                <div class="item">
                    <img src="{{ url('frontend/images/IMG-20170815-WA0017.jpg')}}" alt="slider" height="200px" width="100%">
                </div>
                <div class="item">
                    <img src="{{ url('frontend/images/IMG-20170815-WA0031.jpg')}}" alt="slider" height="200px" width="100%">
                </div>
                <div class="item">
                    <img src="{{ url('frontend/images/IMG-20170815-WA0033.jpg')}}" alt="slider" height="200px" width="100%">
                </div>
                <div class="item">
                    <img src="{{ url('frontend/images/IMG-20170815-WA0035.jpg')}}" alt="slider" height="200px" width="100%">
                </div>
                <div class="item">
                    <img src="{{ url('frontend/images/IMG-20181024-WA0003.jpg')}}" alt="slider" height="200px" width="100%">
                </div>
                <div class="item">
                    <img src="{{ url('frontend/images/IMG-20181024-WA0009.jpg')}}" alt="slider" height="200px" width="100%">
                </div>
                
            </div>
        </div>
        {{-- <div class="container">
            <div class="row pt-5 mt-5 pb-5 mb-5">
                <div class="col-sm-3">
                    <div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-down">
                        <img src="{{ url('frontend/images/satisfied-client.svg')}}" alt="satisfied-client" class="mr-3">
                        <div>
                            <h4 class="font-weight-bold text-dark mb-0"><span class="scVal">0</span>%</h4>
                            <h5 class="text-dark mb-0">Satisfied clients</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-up">
                        <img src="{{ url('frontend/images/finished-project.svg')}}" alt="satisfied-client" class="mr-3">
                        <div>
                            <h4 class="font-weight-bold text-dark mb-0"><span class="fpVal">0</span></h4>
                            <h5 class="text-dark mb-0">Finished Project</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-down">
                        <img src="{{ url('frontend/images/team-members.svg')}}" alt="Team Members" class="mr-3">
                        <div>
                            <h4 class="font-weight-bold text-dark mb-0"><span class="tMVal">0</span></h4>
                            <h5 class="text-dark mb-0">Team Members</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-up">
                        <img src="{{ url('frontend/images/our-blog-posts.svg')}}" alt="Our Blog Posts" class="mr-3">
                        <div>
                            <h4 class="font-weight-bold text-dark mb-0"><span class="bPVal">0</span></h4>
                            <h5 class="text-dark mb-0">Our Blog Posts</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
    {{-- <section class="testimonial" id="testimonial">
        <div class="container">
            <div class="row  mt-md-0 mt-lg-4">
                <div class="col-sm-6 text-white" data-aos="fade-up">
                    <p class="font-weight-bold mb-3">Testimonials</p>
                    <h3 class="font-weight-medium">Our customers are our <br>biggest fans</h3>
                    <ul class="flipster-custom-nav">
                        <li class="flipster-custom-nav-item">
                            <a href="javascript:;" class="flipster-custom-nav-link" title="0"></a>
                        </li>
                        <li class="flipster-custom-nav-item">
                            <a href="javascript:;" class="flipster-custom-nav-link"  title="1"></a>
                        </li>
                        <li class="flipster-custom-nav-item">
                            <a href="javascript:;" class="flipster-custom-nav-link active" title="2"></a>
                        </li>
                        <li class="flipster-custom-nav-item">
                            <a href="javascript:;" class="flipster-custom-nav-link"  title="3"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6" data-aos="fade-up">
                    <div id="testimonial-flipster">
                        <ul>
                            <li>
                                <div class="testimonial-item">
                                    <img src="{{ url('frontend/images/testimonial/testimonial1.jpg')}}" alt="icon" class="testimonial-icons">
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        pretium pretium tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium
                                    </p>
                                    <h6 class="testimonial-author">Mark Spenser</h6>
                                    <p class="testimonial-destination">Accounts</p>
                                </div>
                            </li>
                            <li>
                                <div class="testimonial-item">
                                    <img src="{{ url('frontend/images/testimonial/testimonial2.jpg')}}" alt="icon" class="testimonial-icons">
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        pretium pretium tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium
                                    </p>
                                    <h6 class="testimonial-author">Tua Manuera</h6>
                                    <p class="testimonial-destination">Director,Dj market</p>
                                </div>
                            </li>
                            <li>
                                <div class="testimonial-item">
                                    <img src="{{ url('frontend/images/testimonial/testimonial3.jpg')}}" alt="icon" class="testimonial-icons">
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        pretium pretium tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium
                                    </p>
                                    <h6 class="testimonial-author">Sarah Philip</h6>
                                    <p class="testimonial-destination">Chief Accountant</p>
                                </div>
                            </li>
                            <li>
                                <div class="testimonial-item">
                                    <img src="{{ url('frontend/images/testimonial/testimonial4.jpg')}}" alt="icon" class="testimonial-icons">
                                    <p>Lorem ipsum dolor sit amet, consectetur
                                        pretium pretium tempor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium
                                    </p>
                                    <h6 class="testimonial-author">Mark Spenser</h6>
                                    <p class="testimonial-destination">Director,Dj market</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="clients pt-5 mt-5"  data-aos="fade-up" data-aos-offset="-400">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    {{-- <div class="d-sm-flex justify-content-between align-items-center">
                        <img src="{{ url('frontend/images/deloit.svg')}}" alt="deloit" class="p-2 p-lg-0" data-aos="fade-down"  data-aos-offset="-400">
                        <img src="{{ url('frontend/images/erricson.svg')}}" alt="erricson" class="p-2 p-lg-0" data-aos="fade-up"  data-aos-offset="-400">
                        <img src="{{ url('frontend/images/netflix.svg')}}" alt="netflix" class="p-2 p-lg-0" data-aos="fade-down"  data-aos-offset="-400">
                        <img src="{{ url('frontend/images/instagram.svg')}}" alt="instagram" class="p-2 p-lg-0" data-aos="fade-up"  data-aos-offset="-400">
                        <img src="{{ url('frontend/images/coinbase.svg')}}" alt="coinbase" class="p-2 p-lg-0" data-aos="fade-down"  data-aos-offset="-400">
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <section class="pricing-list" id="plans">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-offset="-500">
                <div class="col-sm-12">
                    <div class="d-sm-flex justify-content-between align-items-center mb-2">
                        <div>
                            <h3 class="font-weight-medium text-dark ">Struktur Organisasi</h3>
                        </div>
                        <div class="mb-5 mb-lg-0 mt-3 mt-lg-0">
                            {{-- <div class="d-flex align-items-center">
                                <p class="mr-2 font-weight-medium monthly text-active check-box-label">Monthly</p>
                                <label class="toggle-switch toggle-switch">
                                <input type="checkbox" checked  id="toggle-switch">
                                <span class="toggle-slider round"></span>
                                </label>
                                <p class="ml-2 font-weight-medium yearly check-box-label">Yearly</p>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row"  data-aos="fade-up" data-aos-offset="-300">
                <div>
                    <img src="{{ url('frontend/images/9. Struktur Organisasi-1.jpg')}}" alt="STRUKTUR" width="100%" height="auto">
                </div>
                {{-- <div class="col-sm-4">
                    <div class="pricing-box">
                        <img src="{{ url('frontend/images/starter.svg')}}" alt="starter">
                        <h6 class="font-weight-medium title-text">Starter Business</h6>
                        <h1 class="text-amount mb-4 mt-2">$23</h1>
                        <ul class="pricing-list">
                            <li>Create a free website</li>
                            <li>Connect Domain</li>
                            <li>Business and ecommerce</li>
                            <li>Idea for smaller professional websites</li>
                            <li>Web space</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary">Puchase Now</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="pricing-box selected">
                        <img src="{{ url('frontend/images/proffessional.svg')}}" alt="starter">
                        <h6 class="font-weight-medium title-text">Professional</h6>
                        <h1 class="text-amount mb-4 mt-2">$45</h1>
                        <ul class="pricing-list">
                            <li>Create a free website</li>
                            <li>Connect Domain</li>
                            <li>Business and ecommerce</li>
                            <li>Idea for smaller professional websites</li>
                            <li>Web space</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Puchase Now</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="pricing-box">
                        <img src="{{ url('frontend/images/premium.svg')}}" alt="starter">
                        <h6 class="font-weight-medium title-text">Premium</h6>
                        <h1 class="text-amount mb-4 mt-2">$87</h1>
                        <ul class="pricing-list">
                            <li>Create a free website</li>
                            <li>Connect Domain</li>
                            <li>Business and ecommerce</li>
                            <li>Idea for smaller professional websites</li>
                            <li>Web space</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary">Puchase Now</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <section class="contactus" id="contact">
        <div class="container">
            <div class="row mb-5 pb-5">
                <div class="col-sm-5" data-aos="fade-up" data-aos-offset="-500">
                    <img src="{{ url('frontend/images/contact.jpg')}}" alt="contact" class="img-fluid">
                </div>
                <div class="col-sm-7" data-aos="fade-up" data-aos-offset="-500">
                    <h3 class="font-weight-medium text-dark mt-5 mt-lg-0">Got A Problem</h3>
                    <h5 class="text-dark mb-5">Lorem ipsum dolor sit amet, consectetur pretium</h5>
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" placeholder="Name*">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="mail" placeholder="Email*">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" placeholder="Message*" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <a href="#" class="btn btn-secondary">SEND</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </div>
    
@endsection
