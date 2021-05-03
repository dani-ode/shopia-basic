<?php get_header(); ?>
<?php get_template_part('/template-parts/navbar/navbar-page');?>


<main class="is-home">

    <article class="home-container">
        <div class="main-article">
            
            <?php if(have_posts()):
                while(have_posts()): the_post();?>

                <div id="post-<?php the_id(); ?>" <?php post_class(); ?>>

                    <section class="home-jumbotron pt-5 pb-3 bg-primary text-white">
                        <div class="container py-5">
                            <div class="row">
                                <div class="col-12 col-md-6 mb-5 text-center text-sm-start">
                                    <?php the_title('<h1 class="entry-title home-title fs-6 fw-light lh-1">', '</h1>'); ?>
                                    <h2 class="display-5 fw-bold fade-in-left">Ini saatnya membangun toko online profesionalmu!</h2>
                                    <p class="col-md-8 fw-light an-delay-3 fade-in-left">Tak perlu ribet untuk miliki toko online dengan desain minimalis, elegant, reponsive, dan pastinya SEO Friendly. Shopia memang didesain untukmu.</p>
                                    <a  href="<?php echo home_url('/pricing'); ?>"><button class="btn bg-addition btn-lg text-white hover bulat mr-2 shadow" type="button">Lihat Harga</button></a>
                                    <a href="https://demo.shopiatheme.com/"><button class="btn btn-outline text-addition btn-lg over bulat" type="button">Lihat Demo</button></a>
                                </div>
                                <div class="col">
                                    <img class="fade-in" src="<?php echo get_template_directory_uri().'/assets/images/home-page/shopia-theme-responsive.png' ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </section>


                    <section class="short-feature container p-5 text-secondary fw-light">
                        <div class="text-center py-5">
                            <div class="row g-5 py-5">

                                <div class="feature col-md-4 an-delay-4">
                                    <div class="feature-icon mb-3 fade-in-up">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-palette2" viewBox="0 0 16 16">
                                        <path d="M0 .5A.5.5 0 0 1 .5 0h5a.5.5 0 0 1 .5.5v5.277l4.147-4.131a.5.5 0 0 1 .707 0l3.535 3.536a.5.5 0 0 1 0 .708L10.261 10H15.5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5H3a2.99 2.99 0 0 1-2.121-.879A2.99 2.99 0 0 1 0 13.044m6-.21 7.328-7.3-2.829-2.828L6 7.188v5.647zM4.5 13a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0zM15 15v-4H9.258l-4.015 4H15zM0 .5v12.495V.5z"/>
                                        <path d="M0 12.995V13a3.07 3.07 0 0 0 0-.005z"/>
                                        </svg>
                                    </div>
                                    <h3 class="fs-5">Fully Customize</h3>
                                    <p>Paragraph of text beneath the heading to explain the heading. </p>
                                </div>

                                <div class="feature col-md-4 an-delay-5">
                                    <div class="feature-icon mb-3 fade-in-up">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-lightning" viewBox="0 0 16 16">
                                        <path d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5zM6.374 1 4.168 8.5H7.5a.5.5 0 0 1 .478.647L6.78 13.04 11.478 7H8a.5.5 0 0 1-.474-.658L9.306 1H6.374z"/>
                                        </svg>
                                    </div>
                                    <h3 class="fs-5">Fast Loading</h3>
                                    <p>Paragraph of text beneath the heading to explain the heading. </p>
                                </div>

                                <div class="feature col-md-4 an-delay-6">
                                    <div class="feature-icon mb-3 fade-in-up">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                                        </svg>
                                    </div>
                                    <h3 class="fs-5">Many Features</h3>
                                    <p>Paragraph of text beneath the heading to explain the heading. </p>
                                </div>

                            </div>
                        </div>
                    </section>

                    <section class="fully-customize bg-light">
                        <div class="container py-5">
                            <div class="row py-5">
                                <div class="col-12 col-md-8">
                                    <img class=" fade-in-left" src="<?php echo get_template_directory_uri().'/assets/images/home-page/test.png' ?>" alt="">
                                </div>
                                <div class="col">
                                    <h2 class="fw-bold mt-5">Fully Custumize</h2>
                                    <p>Sesuaikan gaya bisnismu, kamu bisa memilih warna sesukamu, We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="fast-loading">
                        <div class="container py-5">
                            <div class="row py-5">
                                <div class="col">
                                    <h2 class="fw-bold mt-5">Fast Loading</h2>
                                    <p>Sesuaikan gaya bisnismu, kamu bisa memilih warna sesukamu, We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                                </div>
                                <div class="col-12 col-md-6">
                                    <img src="<?php echo get_template_directory_uri().'/assets/images/home-page/shopia-speed.png' ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </section>

                    
                    <section class="features">
                        <div class="container py-5" id="icon-grid">
                            <h2 class="pb-2 border-bottom fw-bold">Shopia & iMerce Features</h2>
    
                            <div class="row g-4 py-5 p-2">

                                <div class="feature-card col-6 col-md-3 d-flex align-items-start p-1">
                                    <div class="bg-white shadow rounded p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                        </svg>
                                        <div>
                                            <h4 class="fw-bold mb-0 fs-6">Wishlist</h4>
                                            <p class="fw-light">Paragraph of text beneath the heading to explain the heading.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="feature-card col-6 col-md-3 d-flex align-items-start p-1">
                                    <div class="bg-white shadow rounded p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-palette-fill" viewBox="0 0 16 16">
                                        <path d="M12.433 10.07C14.133 10.585 16 11.15 16 8a8 8 0 1 0-8 8c1.996 0 1.826-1.504 1.649-3.08-.124-1.101-.252-2.237.351-2.92.465-.527 1.42-.237 2.433.07zM8 5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm4.5 3a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zM5 6.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm.5 6.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                        </svg>
                                        <div>
                                            <h4 class="fw-bold mb-0 fs-6">Custom Color</h4>
                                            <p class="fw-light">Paragraph of text beneath the heading to explain the heading.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="feature-card col-6 col-md-3 d-flex align-items-start p-1">
                                    <div class="bg-white shadow rounded p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                        <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                                        </svg>
                                        <div>
                                            <h4 class="fw-bold mb-0 fs-6">SEO Friendly</h4>
                                            <p class="fw-light">Paragraph of text beneath the heading to explain the heading.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="feature-card col-6 col-md-3 d-flex align-items-start p-1">
                                    <div class="bg-white shadow rounded p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                        </svg>
                                        <div>
                                            <h4 class="fw-bold mb-0 fs-6">Chat Via WA</h4>
                                            <p class="fw-light">Paragraph of text beneath the heading to explain the heading.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="feature-card col-6 col-md-3 d-flex align-items-start p-1">
                                    <div class="bg-white shadow rounded p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                                        <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                        </svg>
                                        <div>
                                            <h4 class="fw-bold mb-0 fs-6">PWA</h4>
                                            <p class="fw-light">Paragraph of text beneath the heading to explain the heading.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="feature-card col-6 col-md-3 d-flex align-items-start p-1">
                                    <div class="bg-white shadow rounded p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                                        <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                        </svg>
                                        <div>
                                            <h4 class="fw-bold mb-0 fs-6">PWA</h4>
                                            <p class="fw-light">Paragraph of text beneath the heading to explain the heading.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="feature-card col-6 col-md-3 d-flex align-items-start p-1">
                                    <div class="bg-white shadow rounded p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                                        <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                        </svg>
                                        <div>
                                            <h4 class="fw-bold mb-0 fs-6">PWA</h4>
                                            <p class="fw-light">Paragraph of text beneath the heading to explain the heading.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="feature-card col-6 col-md-3 d-flex align-items-start p-1">
                                    <div class="bg-white shadow rounded p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm-fill" viewBox="0 0 16 16">
                                        <path d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z"/>
                                        </svg>
                                        <div>
                                            <h4 class="fw-bold mb-0 fs-6">Etc.</h4>
                                            <p class="fw-light">Fitur yang tersedia akan terus bertambah dan dikembangkan</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                    
                    <?php the_content(); ?>
                    
                </div>

                <?php endwhile;
            endif;?>
            
    </article>
</main>
<?php get_template_part('/template-parts/footer/footer-banner');?>
<?php get_template_part('/template-parts/footer/footer-nav');?>
<?php get_footer(); ?>