<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Section</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .team-section {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .team-card {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            cursor: pointer;
            transition: all 0.3s ease;
            height: 300px;
            background: #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }

        .card-image {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .name-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
            color: white;
            padding: 30px 20px 20px;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .team-card:hover .name-overlay {
            transform: translateY(0);
        }

        .section-title {
            color: white;
            font-weight: 700;
            margin-bottom: 40px;
            text-align: center;
        }

        .modal-content {
            border-radius: 15px;
            border: none;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .modal-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 15px 15px 0 0;
        }

        .profile-img-modal {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            border-radius: 50%;
            margin: 0 5px;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-links .linkedin {
            background: #0077b5;
        }

        .social-links .twitter {
            background: #1da1f2;
        }

        .social-links .github {
            background: #333;
        }

        .social-links a:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>

<body>
    <section class="bg-img1 txt-center p-lr-15 p-tb-92">
        <h2 class="ltext-105 cl0 txt-center text-dark">
            About Us
        </h2>
    </section>


    <!-- Content page -->
    <section class="bg0 p-t-75 p-b-120">
        <div class="container">
            <div class="row p-b-148">
                <div class="col-md-7 col-lg-8">
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            Our Story
                        </h3>

                        <p class="stext-113 cl6 p-b-26">
                            At Jenny’s Beauty, our journey began with a simple dream—to help people feel beautiful, confident, and empowered every day.

                            Founded by Jenny, a passionate creator with an eye for elegance and a heart for natural beauty, the brand was born from her love for handmade jewelry and clean, skin-loving cosmetics. What started as a small collection of lip balms and handcrafted earrings soon blossomed into a growing brand trusted by women who value quality, care, and self-expression.
                        </p>

                        <p class="stext-113 cl6 p-b-26">
                            From day one, Jenny was committed to creating products that are both luxurious and kind—to your skin, and to the planet. Every item is made with responsibly sourced materials, cruelty-free formulas, and a deep attention to detail.

                            Today, Jenny’s Beauty stands as a symbol of authenticity, creativity, and modern femininity. We believe that beauty is personal, and every woman deserves to glow in her own unique way..
                        </p>

                        <p class="stext-113 cl6 p-b-26">
                            Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
                        </p>
                    </div>
                </div>

                <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
                    <div class="how-bor1 ">
                        <div class="hov-img0">
                            <img src="images/jewllery.jpeg" alt="IMG">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="order-md-2 col-md-7 col-lg-8 p-b-30">
                    <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            Our Mission
                        </h3>

                        <p class="stext-113 cl6 p-b-26">
                            At Jenny’s Beauty, our mission is simple yet powerful:
                            To inspire confidence through beauty that’s real, ethical, and empowering.

                            We believe that every person deserves to feel seen, valued, and radiant—just as they are. That’s why we create clean, cruelty-free cosmetics and handcrafted jewelry that not only enhance your natural beauty but also reflect your individuality.
                        </p>

                        <div class="bor16 p-l-29 p-b-9 m-t-22">
                            <p class="stext-114 cl6 p-r-40 p-b-11">
                                Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn't really do it, they just saw something. It seemed obvious to them after a while.
                            </p>

                            <span class="stext-111 cl8">
                                - Steve Job’s
                            </span>
                        </div>
                    </div>
                </div>

                <div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
                    <div class="how-bor2">
                        <div class="hov-img0">
                            <img src="images/cosmtetics.jpeg" alt="IMG">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="team-section">
            <h2 class="section-title text-dark">Meet Our Team</h2>
            <div class="row g-4">
                <!-- Team Member 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="team-card" data-bs-toggle="modal" data-bs-target="#modal1">
                        <div class="card-image" style="background-image: url('images/muhib.png');">
                            <div class="name-overlay">
                                <h5 class="mb-1">Muhib Hussain Khan</h5>
                                <p class="mb-0">Full Stack Developer</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="team-card" data-bs-toggle="modal" data-bs-target="#modal2">
                        <div class="card-image" style=" background-size: cover; background-position: center; background-image: url('images/mustafa.png'); ">
                            <div class="name-overlay">
                                <h5 class="mb-1">Ghulam Mustafa</h5>
                                <p class="mb-0">Web Developer</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="team-card" data-bs-toggle="modal" data-bs-target="#modal3">
                        <div class="card-image" style="background-image: url('images/muzammil.png');">
                            <div class="name-overlay">
                                <h5 class="mb-1">Muzammil Khan</h5>
                                <p class="mb-0">Web Developer</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="team-card" data-bs-toggle="modal" data-bs-target="#modal4">
                        <div class="card-image" style="background-image: url('images/ayesha.png');">
                            <div class="name-overlay">
                                <h5 class="mb-1">Ayesha Abideen</h5>
                                <p class="mb-0">Web Developer</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Member 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="team-card" data-bs-toggle="modal" data-bs-target="#modal5">
                        <div class="card-image" style="background-image: url('images/Malaika.jpeg');">
                            <div class="name-overlay">
                                <h5 class="mb-1">Malaika Naz</h5>
                                <p class="mb-0">Web Developer</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Member 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="team-card" data-bs-toggle="modal" data-bs-target="#modal6">
                        <div class="card-image" style="background-image: url('images/Nisha.png');">
                            <div class="name-overlay">
                                <h5 class="mb-1">Nisha</h5>
                                <p class="mb-0">Web Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals -->
    <!-- Modal 1 - Alex Johnson -->
    <div class="modal fade" id="modal1" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Meet Muhib Hussain Khan</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="images/muhib.png" alt="Alex Johnson" class="profile-img-modal mb-3">
                    <h4>Web Developer</h4>
                    <p class="text-muted">Full Stack Developer</p>
                    <p>Hey! I'm Muhib Hussain Khan, a first-year BSCS student at Karachi University. I'm deeply interested in AI, blockchain, and the Web3 space, and I'm excited to build innovative solutions that shape the future of tech.</p>
                    <div class="social-links mt-3">
                        <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="github"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 - Sarah Wilson -->
    <div class="modal fade" id="modal2" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Meet Ghulam Mustafa</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="images/mustafa.png" alt="Ghulam Mustafa" class="profile-img-modal mb-3">
                    <h4>Ghulam Mustafa</h4>
                    <p class="text-muted">Web Developer</p>
                    <p>Hi, I'm Ghulam Mustafa. I'm currently pursuing my A Levels and have a keen interest in Artificial Intelligence and Data Science. I'm passionate about using technology to solve real-world problems and aspire to contribute to the future of intelligent systems.</p>
                    <div class="social-links mt-3">
                        <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="github"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 - Michael Chen -->
    <div class="modal fade" id="modal3" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Meet Muzammil </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="images/muzammil.png" alt="Michael Chen" class="profile-img-modal mb-3">
                    <h4>Muzammil Khan</h4>
                    <p class="text-muted">Website Developer</p>
                    <p>Hey there! I'm Michael, a results-driven project manager with expertise in Agile methodologies. I love bringing teams together and turning complex ideas into successful products. My goal is to ensure every project runs smoothly while maintaining team morale and client satisfaction.</p>
                    <div class="social-links mt-3">
                        <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="github"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 4 - Emily Rodriguez -->
    <div class="modal fade" id="modal4" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Meet Ayesha Abideen</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="images/ayesha.png" alt="Emily Rodriguez" class="profile-img-modal mb-3">
                    <h4>Ayesha Batool</h4>
                    <p class="text-muted">Data Scientist</p>
                    <p>Hello! Ayesha Batool, a DevOps engineer passionate about automation and infrastructure. I specialize in cloud platforms, CI/CD pipelines, and container orchestration. My mission is to make deployment processes seamless and reliable. In my free time, I contribute to open-source projects</p>
                    <div class="social-links mt-3">
                        <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="github"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 5 - David Thompson -->
    <div class="modal fade" id="modal5" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Meet Malaika Naz</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="images/Malaika.jpeg" alt="David Thompson" class="profile-img-modal mb-3">
                    <h4>Malaika Naz</h4>
                    <p class="text-muted">Web Developer</p>
                    <p>Hello! Malaika Naz, a DevOps engineer passionate about automation and infrastructure. I specialize in cloud platforms, CI/CD pipelines, and container orchestration. My mission is to make deployment processes seamless and reliable. In my free time, I contribute to open-source projects.</p>
                    <div class="social-links mt-3">
                        <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="github"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 6 - Lisa Anderson -->
    <div class="modal fade" id="modal6" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Meet Nisha</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="images/Nisha.png" alt="Lisa Anderson" class="profile-img-modal mb-3">
                    <h4>Nisha </h4>
                    <p class="text-muted">Web Developer</p>
                    <p>Hi there! I'm Nisha, a strategic marketing director with a passion for storytelling and brand building. I specialize in digital marketing, content strategy, and customer engagement. My approach combines creativity with data-driven insights to create campaigns that resonate with audiences.</p>
                    <div class="social-links mt-3">
                        <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="github"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
include('footer.php');
?>