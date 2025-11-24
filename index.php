<!doctype html>
<html lang="tr" class="tw-dark">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Lapland Ajans - 360° Dijital Reklam Ajansı</title>
        <meta name="description" content="Markanızı dijital dünyanın zirvesine taşıyan 360 derece reklam ajansı. Strateji, tasarım, yazılım ve pazarlama çözümleri." />
        <link
            rel="shortcut icon"
            href="./assets/logo/lapland-logo.svg"
            type="image/x-icon"
        />

        <meta property="og:title" content="Lapland Ajans - 360° Dijital Reklam Ajansı" />
        <meta property="og:description" content="Markanızı Aydınlatın | Strateji, Tasarım, Yazılım ve Pazarlama" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://laplandajans.com" />
        <meta property="og:image" content="" />

        <link rel="stylesheet" href="css/tailwind-build.css">
        <link rel="stylesheet" href="css/index.css" />

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"
            integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />

        <script async src="https://www.googletagmanager.com/gtag/js?id=G-"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-');
        </script>

    </head>
    <body class="tw-flex tw-min-h-[100vh] tw-flex-col tw-bg-[#fcfcfc] tw-text-black dark:tw-bg-black dark:tw-text-white">
        
        <div id="intro-loader">
            <video autoplay muted loop playsinline id="intro-loader-video">
                <source src="./assets/videos/intro_background.mp4" type="video/mp4">
            </video>
            <img src="./assets/logo/lapland-logo.svg" alt="Lapland Ajans Logo" id="intro-logo" />
        </div>

        <header
            class="lg:tw-px-4 tw-max-w-[100vw] tw-max-w-lg:tw-mr-auto max-lg:tw-top-0 tw-fixed tw-top-4 lg:tw-left-1/2 lg:tw--translate-x-1/2 tw-z-20 tw-flex tw-h-[60px] tw-w-full 
                    tw-text-gray-700 tw-bg-white dark:tw-text-gray-200 dark:tw-bg-[#17181b] tw-px-[3%] tw-rounded-md lg:tw-max-w-5xl tw-shadow-md dark:tw-shadow-gray-700
                    lg:tw-justify-around lg:!tw-backdrop-blur-lg lg:tw-opacity-[0.99]"
        >
            <a class="tw-flex tw-p-[4px] tw-gap-2 tw-place-items-center" href="#">
                <div class="tw-h-[40px] tw-max-w-[120px]">
                    <img
                        src="./assets/logo/lapland-logo.svg"
                        alt="logo"
                        class="tw-object-contain tw-h-full tw-w-full dark:tw-invert"
                    />
                </div>
            </a>
            
            <div class="collapsible-header animated-collapse max-lg:tw-shadow-md" id="collapsed-header-items">
                <nav class="tw-relative tw-flex tw-h-full max-lg:tw-h-max tw-w-max tw-gap-5 tw-text-base max-lg:tw-mt-[30px] max-lg:tw-flex-col max-lg:tw-gap-5 lg:tw-mx-auto tw-place-items-center">
                    
                    <a class="header-links" href="javascript:void(0)" onclick="openPanel('portfolio')"> Portföy </a>
                    <a class="header-links" href="javascript:void(0)" onclick="openPanel('blog')"> Blog </a>
                    <a class="header-links" href="javascript:void(0)" onclick="openPanel('about')"> Hakkımızda </a>
                   
                    <div class="tw-relative tw-flex tw-flex-col tw-place-items-center">
                        <div id="nav-dropdown-toggle-0" class="max-lg:tw-max-w-fit tw-flex header-links tw-gap-1 tw-place-items-center">
                            <span class=""> Hizmetler </span>
                            <i class="tw-text-sm bi bi-chevron-down"></i>
                        </div>
                        <nav id="nav-dropdown-list-0" 
                            data-open="false"
                            class="tw-scale-0 tw-opacity-0 lg:tw-fixed tw-flex lg:tw-top-[80px] lg:tw-left-1/2 lg:tw--translate-x-1/2 
                                    tw-w-[90%] tw-rounded-lg max-lg:tw-h-0 max-lg:tw-w-0
                                    lg:tw-h-[450px] tw-overflow-hidden
                                     tw-bg-white dark:tw-bg-[#17181B] tw-duration-300 
                                     tw-transition-opacity tw-transition-height tw-shadow-lg tw-p-4">
                            <div class="tw-grid max-xl:tw-flex max-xl:tw-flex-col tw-justify-around tw-grid-cols-2 tw-w-full">
                                
                                <a class="header-links tw-flex tw-text-left tw-gap-4 !tw-p-4" href="javascript:void(0)" onclick="openPanel('service_graphic')">
                                    <div class="tw-font-semibold tw-text-3xl"><i class="bi bi-palette"></i></div>
                                    <div class="tw-flex tw-flex-col tw-gap-2">
                                        <div class="tw-text-lg tw-text-black dark:tw-text-white tw-font-medium">Grafik Tasarım</div>
                                        <p>Logo, ambalaj, görsel kimlik tasarımları</p>
                                    </div> 
                                </a>

                                <a class="header-links tw-flex tw-text-left tw-gap-4 !tw-p-4" href="javascript:void(0)" onclick="openPanel('service_video')">
                                    <div class="tw-font-semibold tw-text-3xl"><i class="bi bi-camera-video"></i></div>
                                    <div class="tw-flex tw-flex-col tw-gap-2">
                                        <div class="tw-text-lg tw-text-black dark:tw-text-white tw-font-medium">Video Prodüksiyon</div>
                                        <p class="">Reklam videoları, kurumsal filmler, animasyonlar</p>
                                    </div> 
                                </a>

                                <a class="header-links tw-flex tw-text-left tw-gap-4 !tw-p-4" href="javascript:void(0)" onclick="openPanel('service_social')">
                                    <div class="tw-font-semibold tw-text-3xl"><i class="bi bi-globe"></i></div>
                                    <div class="tw-flex tw-flex-col tw-gap-2">
                                        <div class="tw-text-lg tw-text-black dark:tw-text-white tw-font-medium">Sosyal Medya</div>
                                        <p class="">İçerik yönetimi, kampanya yönetimi, topluluk yönetimi</p>
                                    </div> 
                                </a>

                                <a class="header-links tw-flex tw-text-left tw-gap-4 !tw-p-4" href="javascript:void(0)" onclick="openPanel('service_web')">
                                    <div class="tw-font-semibold tw-text-3xl"><i class="bi bi-display"></i></div>
                                    <div class="tw-flex tw-flex-col tw-gap-2">
                                        <div class="tw-text-lg tw-text-black dark:tw-text-white tw-font-medium">Web Tasarım & Yazılım</div>
                                        <p class="">Web sitesi tasarımı ve geliştirmesi, E-Ticaret</p>
                                    </div> 
                                </a>

                                <a class="header-links tw-flex tw-text-left tw-gap-4 !tw-p-4" href="javascript:void(0)" onclick="openPanel('service_marketing')">
                                    <div class="tw-font-semibold tw-text-3xl"><i class="bi bi-bar-chart-line"></i></div>
                                    <div class="tw-flex tw-flex-col tw-gap-2">
                                        <div class="tw-text-lg tw-text-black dark:tw-text-white tw-font-medium">Dijital Pazarlama</div>
                                        <p class="">SEO, SEM, sosyal medya reklamcılığı</p>
                                    </div> 
                                </a>

                                <a class="header-links tw-flex tw-text-left tw-gap-4 !tw-p-4" href="javascript:void(0)" onclick="openPanel('service_branding')">
                                    <div class="tw-font-semibold tw-text-3xl"><i class="bi bi-lightbulb"></i></div>
                                    <div class="tw-flex tw-flex-col tw-gap-2">
                                        <div class="tw-text-lg tw-text-black dark:tw-text-white tw-font-medium">Marka Stratejisi</div>
                                        <p class="">Marka konumlandırma, kurumsal kimlik danışmanlığı</p>
                                    </div> 
                                </a>
                            </div>           
                        </nav>
                    </div>
                </nav>

                <div class="lg:tw-mx-4 tw-flex tw-place-items-center tw-gap-[20px] tw-text-base max-md:tw-w-full max-md:tw-flex-col max-md:tw-place-content-center">
                    <button type="button" onclick="toggleMode()" class="header-links tw-text-gray-600 dark:tw-text-gray-300" title="toggle-theme" id="theme-toggle"> 
                        <i class="bi bi-sun" id="toggle-mode-icon"></i>
                    </button>
                    <a href="javascript:void(0)" aria-label="Teklif Alın" class="btn tw-flex tw-gap-3 tw-px-3 tw-py-2 tw-transition-transform tw-duration-[0.3s] hover:tw-translate-x-2" onclick="openPanel('offer')">
                        <span>Teklif Al</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <button class="bi bi-list tw-absolute tw-right-3 tw-top-3 tw-z-50 tw-text-3xl tw-text-gray-500 lg:tw-hidden" onclick="toggleHeader()" aria-label="menu" id="collapse-btn"></button>
        </header>

        <section class="hero-section tw-relative tw-mt-20 tw-flex tw-min-h-[100vh] tw-w-full tw-max-w-[100vw] tw-flex-col tw-overflow-hidden max-lg:tw-mt-[100px]" id="hero-section">

            <div class="tw-fixed tw-bg-[#000000af] dark:tw-bg-[#80808085] tw-top-0 tw-left-1/2 tw--translate-x-1/2 tw-z-20 tw-transition-opacity
                tw-duration-300 tw-scale-0 tw-opacity-0 tw-p-2
                tw-w-full tw-h-full tw-flex tw-place-content-center tw-place-items-center" id="video-container-bg">

                <div class="tw-max-w-[80vw] max-lg:tw-max-w-full max-lg:tw-w-full tw-scale-0 tw-transition-transform tw-duration-500 tw-p-6 tw-rounded-xl max-lg:tw-px-2 tw-w-full tw-gap-2 tw-shadow-md 
                            tw-h-[90vh] max-lg:tw-h-auto max-lg:tw-min-h-[400px] tw-bg-white dark:tw-bg-[#16171A] tw-max-h-full" id="video-container">
                    <div class="tw-w-full tw-flex">
                        <button type="button" onclick="closeVideo()" class="tw-ml-auto tw-text-xl" title="close">
                            <i class="bi bi-x-circle-fill"></i>
                        </button>
                    </div>
                    <div class="tw-flex tw-w-full tw-rounded-xl tw-px-[5%] max-md:tw-px-2 tw-min-h-[300px] tw-max-h-[90%] tw-h-full">
                        <div class="tw-relative tw-bg-black tw-min-w-full tw-min-h-full tw-overflow-clip tw-rounded-md">
                            <iframe class="tw-absolute tw-top-[50%] tw--translate-y-[50%] tw-left-[50%] tw--translate-x-[50%] tw-w-full tw-h-full" 
                                src="https://www.youtube.com/embed/6j4fPVkA3EA?si=llcTrXPRM-MRXDZB&amp;controls=0&rel=0&showinfo=0&autoplay=1&loop=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>  
            </div>

            <div class="hero-bg-gradient tw-relative tw-flex tw-h-full tw-min-h-[100vh] tw-w-full tw-flex-col tw-place-content-center tw-gap-6 tw-p-[5%] max-xl:tw-place-items-center max-lg:tw-p-4">

                <div class="purple-bg-grad reveal-up tw-absolute tw-left-1/2 tw--translate-1/2 tw-top-[10%] tw-h-[120px] tw-w-[120px]"></div> 

                <div class="tw-flex tw-flex-col tw-min-h-[60vh] tw-place-content-center tw-items-center">
                    <h2 class="reveal-up tw-text-center tw-text-7xl tw-font-semibold tw-uppercase tw-leading-[90px] max-lg:tw-text-4xl max-md:tw-leading-snug">
                        <span class=""> Kuzey Işıklarından İlham Aldık </span>
                        <br />
                        <span class="tw-font-thin tw-font-serif"> Markanızı Aydınlatıyoruz </span>
                    </h2>
                    <div class="reveal-up tw-mt-8 tw-max-w-[450px] tw-text-lg max-lg:tw-text-base tw-p-2 tw-text-center tw-text-gray-800 dark:tw-text-white max-lg:tw-max-w-full">
                        Lapland Ajans olarak, markanızın potansiyelini dijital dünyada parlatmak için buradayız. Yaratıcı çözümler, stratejik planlama ve yenilikçi fikirlerle hedeflerinize ulaşmanızı sağlıyoruz.
                    </div>
                </div>
                
                <div class="reveal-up tw-relative tw-mt-8 tw-flex tw-w-full tw-place-content-center tw-place-items-center" id="dashboard-container">
                    <div class="purple-bg-grad reveal-up tw-absolute tw-left-1/2 tw--translate-x-1/2 tw-top-[5%] tw-h-[200px] tw-w-[200px]"></div>    

                    <div class="tw-relative tw-max-w-[80%] tw-bg-white dark:tw-bg-black tw-border-[1px] dark:tw-border-[#36393c] lg:tw-w-[1024px]
                                lg:tw-h-[650px] tw-flex tw-shadow-xl max-lg:tw-h-[450px] max-lg:tw-w-full
                                tw-overflow-hidden
                                tw-min-w-[320px] md:tw-w-full tw-min-h-[450px] tw-rounded-xl tw-bg-transparent max-md:tw-max-w-full"
                        id="dashboard">  

                        <div class="purple-bg-grad tw-max-w-[80%] reveal-up tw-absolute tw-left-1/2 tw--translate-x-1/2 tw-top-[0%] lg:tw-max-w-[1000px] tw-h-full tw-w-full"></div> 
                        <div class="animated-border tw-w-full tw-h-full tw-p-[2px]">
                            <div class="tw-w-full tw-h-full tw-rounded-xl tw-overflow-hidden tw-flex">
                                
                                <div class="tw-absolute tw-rounded-xl tw-text-center tw-transition-transform tw-duration-300 tw-scale-0 tw-backdrop-blur-lg tw-flex tw-flex-col tw-p-10 tw-place-items-center 
                                        tw-gap-4 tw-w-full tw-h-full dark:tw-bg-[#000000b4] tw-bg-[#ffffff6a] firefox:tw-bg-white tw-top-0 tw-left-0 tw-z-20 tw-hidden"
                                        id="signup-prompt">
                                    </div>

                                <div class="tw-min-w-[250px] max-lg:tw-hidden tw-p-2 tw-gap-2 tw-flex tw-flex-col tw-bg-gray-100 dark:tw-bg-[#171717] tw-h-full">
                                    <div class="tw-h-[30px] tw-w-fit tw-max-w-[100px]">
                                        <img src="./assets/logo/lapland-logo.svg" alt="logo" class="tw-object-contain tw-opacity-80 tw-h-full tw-w-full dark:tw-invert"/>
                                    </div>

                                    <div class="tw-flex tw-mt-2 tw-gap-2 tw-flex-col">
                                        <a href="javascript:void(0)" class="tw-flex tw-rounded-sm tw-gap-2 tw-p-2 dark:hover:tw-bg-[#2d2d2ddb] hover:tw-bg-gray-200" onclick="openPanel('service_branding')">
                                            <i class="bi bi-lightbulb"></i>
                                            <span>Marka & Strateji</span>
                                        </a>
                                        <a href="javascript:void(0)" class="tw-flex tw-rounded-sm tw-gap-2 tw-p-2 dark:hover:tw-bg-[#2d2d2ddb] hover:tw-bg-gray-200" onclick="openPanel('service_web')">
                                            <i class="bi bi-display"></i>
                                            <span>Web & Tasarım</span>
                                        </a>
                                        <a href="javascript:void(0)" class="tw-flex tw-rounded-sm tw-gap-2 tw-p-2 dark:hover:tw-bg-[#2d2d2ddb] hover:tw-bg-gray-200" onclick="openPanel('service_marketing')">
                                            <i class="bi bi-bar-chart-line"></i>
                                            <span>Pazarlama & SEO</span>
                                        </a>
                                        <a href="javascript:void(0)" class="tw-flex tw-rounded-sm tw-group tw-gap-2 tw-p-2 dark:hover:tw-bg-[#2d2d2ddb] hover:tw-bg-gray-200" onclick="openPanel('services')">
                                            <span>Tüm Hizmetler</span>
                                            <i class="bi bi-arrow-right tw-transform tw-transition-transform tw-duration-300 group-hover:tw-translate-x-1"></i>
                                        </a>
                                    </div>

                                    <div class="tw-mt-auto tw-w-full tw-flex tw-px-6 tw-place-content-center">
                                        <a href="javascript:void(0)" class="btn !tw-w-full !tw-bg-transparent tw-duration-[0.3s] 
                                                                hover:!tw-bg-black hover:!tw-text-white
                                                                dark:hover:!tw-bg-white dark:hover!tw-text-black
                                                                !tw-border-[1px] !tw-border-black !tw-text-black
                                                                dark:!tw-border-white dark:!tw-text-white" 
                                            onclick="openPanel('offer')">
                                            Teklif Al
                                        </a>
                                    </div>
                                </div>

                                <div class="tw-flex tw-w-full tw-p-4 tw-bg-white dark:tw-bg-black tw-h-full tw-flex-col" id="lapland-playground">
                                    <div class="tw-relative tw-w-full tw-flex tw-place-content-center tw-h-full">
                                        <div class="tw-absolute tw-top-[20%] max-lg:tw-top-[30%] tw-left-1/2 tw--translate-x-1/2  tw-w-[150px] tw-h-[150px]">
                                            <img src="./assets/logo/lapland-logo.svg" class="tw-w-full tw-h-full dark:tw-invert tw-object-contain tw-opacity-20" alt="Lapland Logo">
                                        </div>
                                        <div class="prompt-container tw-overflow-y-auto tw-px-[5%] max-lg:tw-px-2 scrollbar max-lg:tw-max-h-[80%] tw-max-h-[550px] max-lg:tw-mt-12 tw-w-full tw-h-full tw-z-10 tw-flex tw-flex-col" id="prompt-container">
                                            <div class="tw-w-full tw-flex tw-text-center tw-flex-col tw-place-content-center">
                                                <h2 class="tw-text-4xl max-md:tw-text-2xl max-md:tw-mt-3 tw-opacity-80">
                                                    Size nasıl yardımcı olabiliriz?
                                                </h2>
                                                <div class="tw-inline tw-mt-6 max-md:tw-mt-3">
                                                    <span id="prompts-sample" ></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <form action="" id="prompt-form" onsubmit="return false;" class="tw-place-content-center tw-mt-auto tw-h-[50px] tw-p-1 tw-place-items-center tw-justify-around tw-flex tw-gap-1 tw-bottom-2 tw-w-full tw-rounded-md tw-bg-[#f3f4f6] dark:tw-bg-[#171717]">
                                        <input placeholder="Hizmetlerimiz hakkında bir şey sorun..." type="text" class="tw-p-2 !tw-outline-none tw-bg-transparent tw-border-none tw-w-full tw-placeholder-gray-500 dark:tw-placeholder-opacity-60 dark:tw-placeholder-gray-300 tw-max-w-[80%] tw-h-full" name="prompt" >
                                        <button type="submit" class="btn !tw-bg-[#6366f1] !tw-p-2 !tw-px-3 !tw-text-white" title="submit">
                                            <i class="bi bi-arrow-up"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

        <section class="tw-relative tw-flex tw-w-full tw-min-h-[80vh] max-lg:tw-min-h-[80vh] tw-flex-col tw-place-content-center tw-place-items-center tw-overflow-hidden">   
             <div class="tw-w-full tw-place-content-center tw-items-center tw-flex tw-flex-col tw-max-w-[900px] tw-gap-4 tw-p-4">
               <div class="purple-bg-grad reveal-up tw-absolute tw-right-[20%] tw-top-[20%] tw-h-[200px] tw-w-[200px]"></div>
                <h2 class="reveal-up tw-text-6xl max-lg:tw-text-4xl tw-text-center tw-leading-normal tw-uppercase">
                    <span class="tw-font-semibold">Fikirlerinizi Gerçeğe Dönüştüren</span>
                    <br>
                    <span class="tw-font-serif">360° Dijital Deneyim</span>
                </h2>
                <p class="reveal-up tw-mt-8 tw-max-w-[650px] tw-text-gray-900 dark:tw-text-gray-200 tw-text-center max-md:tw-text-sm">   
                    Lapland Ajans olarak markanızın tüm dijital ihtiyaçlarını tek bir çatı altında karşılıyoruz. Stratejiden tasarıma, yazılımdan pazarlamaya, projenizin her adımında yanınızdayız.
                </p>
                <div class="reveal-up tw-flex tw-mt-8">
                    <a href="javascript:void(0)" class="tw-shadow-md hover:tw-shadow-xl dark:tw-shadow-gray-800 tw-transition-all tw-duration-300 tw-border-[1px] tw-p-3 tw-px-4 tw-border-black dark:tw-border-white tw-rounded-md"
                        onclick="openPanel('process')">
                        Süreçlerimizi Keşfedin
                    </a>
                </div>
            </div>
        </section>

        <div class="slideshow">
            <div class="grid">
                <div class="tile"></div>
                <div class="tile"></div>
                <div class="tile"></div>
                <div class="tile"></div>
                <div class="tile"></div>
                <div class="tile"></div>
                <div class="tile"></div>
                <div class="tile"></div>
                <div class="tile"></div>
                <div class="tile"></div>
                <div class="tile"></div>
                <div class="tile"></div>
                <div class="tile"></div>
                <div class="tile"></div>
                <div class="tile"></div>
                <div class="tile"></div>
            </div>
        </div>

        <section class="tw-relative tw-flex tw-max-w-[100vw] tw-flex-col tw-place-content-center tw-place-items-center tw-overflow-hidden">   
            <div class="tw-mt-8 tw-flex tw-flex-col tw-w-full tw-h-full tw-place-items-center tw-gap-5">
                <div class="reveal-up tw-mt-5 tw-flex tw-flex-col tw-gap-3 tw-text-center">
                    <h2 class="tw-text-6xl tw-font-medium max-md:tw-text-3xl tw-p-2">
                        Ajansımızın Avantajlarını Keşfedin
                    </h2>
                </div>
                <div class="tw-mt-6 tw-flex tw-flex-col tw-max-w-[1150px] max-lg:tw-max-w-full tw-h-full tw-p-4 max-lg:tw-place-content-center tw-gap-8">   
                    <div class="max-xl:tw-flex max-xl:tw-flex-col tw-place-items-center tw-grid tw-grid-cols-3 tw-gap-8 tw-place-content-center tw-auto-rows-auto">
                        
                        <div class="reveal-up tw-w-[350px] tw-h-[540px] tw-flex max-md:tw-w-full">
                            <a href="javascript:void(0)" class="tw-relative tw-p-10 tw-transition-all tw-duration-300 tw-group/card tw-gap-5 tw-flex tw-flex-col tw-w-full tw-h-full tw-bg-[#f6f7fb] dark:tw-bg-[#171717] tw-rounded-3xl hover:tw-scale-[1.02]" 
                            onclick="openPanel('advantage_integrated')"> <div class="tw-overflow-hidden tw-w-full tw-min-h-[180px] tw-h-[180px]">
                                    <img src="./assets/images/home/api.png" class="tw-w-full tw-object-contain tw-h-auto" alt="Entegre Hizmet Arayüzü">
                                </div>
                                <h2 class="tw-text-3xl max-md:tw-text-2xl tw-font-medium">Entegre Hizmet Anlayışı</h2>
                                <p class="tw-text-base tw-leading-normal tw-text-gray-800 dark:tw-text-gray-200">
                                    Tüm dijital ihtiyaçlarınızı (Tasarım, Yazılım, Pazarlama) tek bir çatı altında sunuyoruz.
                                </p>
                                <div class="tw-flex tw-items-center tw-gap-2 tw-mt-auto">
                                    <span>Daha fazla bilgi</span>
                                    <i class="bi bi-arrow-right tw-transform tw-transition-transform tw-duration-300 group-hover/card:tw-translate-x-2"></i>
                                </div>
                            </a>
                        </div>

                        <div class="reveal-up tw-w-[350px] tw-h-[540px] tw-flex max-md:tw-w-full">
                            <a href="javascript:void(0)" class="tw-relative tw-p-10 tw-transition-all tw-duration-300 tw-group/card tw-gap-5 tw-flex tw-flex-col tw-w-full tw-h-full tw-bg-[#f6f7fb] dark:tw-bg-[#171717] tw-rounded-3xl hover:tw-scale-[1.02]" 
                            onclick="openPanel('advantage_strategic')"> <div class="tw-w-full tw-min-h-[180px] tw-h-[180px] tw-overflow-hidden">
                                    <img src="./assets/images/home/api.png" alt="Stratejik Yaklaşım" class="tw-w-full tw-h-auto tw-object-contain">
                                </div>
                                <h2 class="tw-text-3xl max-md:tw-text-2xl tw-font-medium">Stratejik Yaklaşım</h2>
                                <p class="tw-leading-normal tw-text-gray-800 dark:tw-text-gray-200">
                                    Lapland Ajans, markanızın DNA'sına uygun stratejiler geliştirir.
                                </p>
                                <div class="tw-flex tw-items-center tw-gap-2 tw-mt-auto">
                                    <span>Daha fazla bilgi</span>
                                    <i class="bi bi-arrow-right tw-transform tw-transition-transform tw-duration-300 group-hover/card:tw-translate-x-2"></i>
                                </div>
                            </a>
                        </div>
                        
                        <div class="reveal-up tw-w-[350px] tw-h-[540px] tw-flex max-md:tw-w-full">
                            <a href="javascript:void(0)" class="tw-relative tw-p-10 tw-transition-all tw-duration-300 tw-group/card tw-gap-5 tw-flex tw-flex-col tw-w-full tw-h-full tw-bg-[#f6f7fb] dark:tw-bg-[#171717] tw-rounded-3xl hover:tw-scale-[1.02]" 
                            onclick="openPanel('advantage_results')"> <div class="tw-w-full tw-flex tw-place-contet-center tw-min-h-[180px] tw-h-[180px] tw-rounded-xl tw-overflow-hidden">
                                    <img src="./assets/images/home/integrations1.png" class="tw-w-full tw-h-auto tw-object-contain" alt="Sonuç Odaklı Çözümler">
                                </div>
                                <h2 class="tw-text-3xl max-md:tw-text-2xl tw-font-medium">Sonuç Odaklı Çözümler</h2>
                                <p class="tw-leading-normal tw-text-gray-800 dark:tw-text-gray-200">
                                    Ölçülebilir ve sonuç odaklı çözümler sunarız.
                                </p>
                                <div class="tw-flex tw-items-center tw-gap-2 tw-mt-auto">
                                    <span>Daha fazla bilgi</span>
                                    <i class="bi bi-arrow-right tw-transform tw-transition-transform tw-duration-300 group-hover/card:tw-translate-x-2"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="reveal-up tw-w-full md:tw-h-[350px] max-md:tw-min-h-[350px] tw-flex">
                        <a href="javascript:void(0)" class="tw-relative tw-p-10 tw-transition-all tw-duration-300 tw-group/card tw-gap-5 tw-flex max-md:tw-flex-col tw-w-full tw-h-full tw-bg-[#f6f7fb] dark:tw-bg-[#171717] tw-rounded-3xl hover:tw-scale-[1.02]" 
                        onclick="openPanel('advantage_sector')"> <div class="tw-text-6xl tw-overflow-hidden tw-rounded-xl tw-w-full tw-h-full max-md:tw-h-[180px]">
                                <img src="./assets/images/home/ai-models.png" class="tw-w-full tw-object-contain tw-h-full" alt="Geniş Uzmanlık Alanı">
                            </div>
                            <div class="tw-flex tw-flex-col tw-gap-4">
                                <h2 class="tw-text-3xl max-md:tw-text-2xl tw-font-medium">Geniş Sektör Deneyimi</h2>
                                <p class="tw-leading-normal tw-text-gray-800 dark:tw-text-gray-200">
                                    Farklı sektörlerde geniş bir uzman ekibe sahibiz.
                                </p>
                                <div class="tw-flex tw-items-center tw-gap-2 tw-mt-auto">
                                    <span>Daha fazla bilgi</span>
                                    <i class="bi bi-arrow-right tw-transform tw-transition-transform tw-duration-300 group-hover/card:tw-translate-x-2"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="tw-relative tw-mt-10 tw-w-full tw-max-w-[100vw] tw-flex tw-flex-col tw-items-center tw-overflow-hidden">

            <!-- FULL WIDTH GRID -->
            <div class="tw-grid tw-grid-cols-3 max-lg:tw-grid-cols-2 max-md:tw-grid-cols-1 tw-gap-10 tw-w-full tw-px-[5%] tw-py-10">

                <!-- KART 1 -->
                <div class="reveal-animate parallax-item tw-w-full tw-h-[240px]">
                    <a href="javascript:void(0)" 
                    class="tw-flex tw-w-full tw-h-full tw-gap-8 tw-rounded-xl hover:tw-shadow-lg dark:tw-shadow-[#171717] tw-duration-300 tw-transition-all tw-p-8 tw-group/card" 
                    onclick="openPanel('service_web')">

                        <div class="tw-text-4xl max-md:tw-text-2xl">
                            <i class="bi bi-code-square"></i>
                        </div>

                        <div class="tw-flex tw-flex-col tw-gap-4">
                            <h3 class="tw-text-2xl max-md:tw-text-xl">Web Geliştirme & Yazılım</h3>
                            <p class="tw-text-gray-800 dark:tw-text-gray-100 max-md:tw-text-sm">
                                Markanıza özel yüksek performanslı web uygulamaları.
                            </p>

                            <div class="tw-mt-auto tw-flex tw-gap-2 tw-underline tw-underline-offset-4">
                                <span>Daha fazla bilgi</span>
                                <i class="bi bi-arrow-up-right group-hover/card:tw--translate-y-1 group-hover/card:tw-translate-x-1 tw-duration-300"></i>
                            </div>
                        </div>
                    </a>
                </div>


                <!-- KART 2 -->
                <div class="reveal-animate parallax-item tw-w-full tw-h-[240px]">
                    <a href="javascript:void(0)" 
                    class="tw-flex tw-w-full tw-h-full tw-gap-8 tw-rounded-xl hover:tw-shadow-lg dark:tw-shadow-[#171717] tw-duration-300 tw-transition-all tw-p-8 tw-group/card" 
                    onclick="openPanel('service_branding')">

                        <div class="tw-text-4xl max-md:tw-text-2xl">
                            <i class="bi bi-palette-fill"></i>
                        </div>

                        <div class="tw-flex tw-flex-col tw-gap-4">
                            <h3 class="tw-text-2xl max-md:tw-text-xl">Kurumsal Kimlik & Tasarım</h3>
                            <p class="tw-text-gray-800 dark:tw-text-gray-100 max-md:tw-text-sm">
                                Markanız için premium kimlik ve tasarım çözümleri.
                            </p>

                            <div class="tw-mt-auto tw-flex tw-gap-2 tw-underline tw-underline-offset-4">
                                <span>Daha fazla bilgi</span>
                                <i class="bi bi-arrow-up-right group-hover/card:tw--translate-y-1 group-hover/card:tw-translate-x-1 tw-duration-300"></i>
                            </div>
                        </div>
                    </a>
                </div>


                <!-- KART 3 -->
                <div class="reveal-animate parallax-item tw-w-full tw-h-[240px]">
                    <a href="javascript:void(0)" 
                    class="tw-flex tw-w-full tw-h-full tw-gap-8 tw-rounded-xl hover:tw-shadow-lg dark:tw-shadow-[#171717] tw-duration-300 tw-transition-all tw-p-8 tw-group/card" 
                    onclick="openPanel('service_graphic')">

                        <div class="tw-text-4xl max-md:tw-text-2xl">
                            <i class="bi bi-image-fill"></i>
                        </div>

                        <div class="tw-flex tw-flex-col tw-gap-4">
                            <h3 class="tw-text-2xl max-md:tw-text-xl">Grafik Tasarım</h3>
                            <p class="tw-text-gray-800 dark:tw-text-gray-100 max-md:tw-text-sm">
                                Logo, görsel setler ve yaratıcı çözümler.
                            </p>

                            <div class="tw-mt-auto tw-flex tw-gap-2 tw-underline tw-underline-offset-4">
                                <span>Daha fazla bilgi</span>
                                <i class="bi bi-arrow-up-right group-hover/card:tw--translate-y-1 group-hover/card:tw-translate-x-1 tw-duration-300"></i>
                            </div>
                        </div>
                    </a>
                </div>


                <!-- KART 4 -->
                <div class="reveal-animate parallax-item tw-w-full tw-h-[240px]">
                    <a href="javascript:void(0)" 
                    class="tw-flex tw-w-full tw-h-full tw-gap-8 tw-rounded-xl hover:tw-shadow-lg dark:tw-shadow-[#171717] tw-duration-300 tw-transition-all tw-p-8 tw-group/card" 
                    onclick="openPanel('service_marketing')">

                        <div class="tw-text-4xl max-md:tw-text-2xl">
                            <i class="bi bi-bar-chart-line-fill"></i>
                        </div>

                        <div class="tw-flex tw-flex-col tw-gap-4">
                            <h3 class="tw-text-2xl max-md:tw-text-xl">Dijital Pazarlama & SEO</h3>
                            <p class="tw-text-gray-800 dark:tw-text-gray-100 max-md:tw-text-sm">
                                Performans odaklı reklam ve SEO çözümleri.
                            </p>

                            <div class="tw-mt-auto tw-flex tw-gap-2 tw-underline tw-underline-offset-4">
                                <span>Daha fazla bilgi</span>
                                <i class="bi bi-arrow-up-right group-hover/card:tw--translate-y-1 group-hover/card:tw-translate-x-1 tw-duration-300"></i>
                            </div>
                        </div>
                    </a>
                </div>


                <!-- KART 5 -->
                <div class="reveal-animate parallax-item tw-w-full tw-h-[240px]">
                    <a href="javascript:void(0)" 
                    class="tw-flex tw-w-full tw-h-full tw-gap-8 tw-rounded-xl hover:tw-shadow-lg dark:tw-shadow-[#171717] tw-duration-300 tw-transition-all tw-p-8 tw-group/card" 
                    onclick="openPanel('service_video')">

                        <div class="tw-text-4xl max-md:tw-text-2xl">
                            <i class="bi bi-camera-reels-fill"></i>
                        </div>

                        <div class="tw-flex tw-flex-col tw-gap-4">
                            <h3 class="tw-text-2xl max-md:tw-text-xl">Video & Prodüksiyon</h3>
                            <p class="tw-text-gray-800 dark:tw-text-gray-100 max-md:tw-text-sm">
                                Reklam, tanıtım ve profesyonel prodüksiyon hizmetleri.
                            </p>

                            <div class="tw-mt-auto tw-flex tw-gap-2 tw-underline tw-underline-offset-4">
                                <span>Daha fazla bilgi</span>
                                <i class="bi bi-arrow-up-right group-hover/card:tw--translate-y-1 group-hover/card:tw-translate-x-1 tw-duration-300"></i>
                            </div>
                        </div>
                    </a>
                </div>


                <!-- KART 6 -->
                <div class="reveal-animate parallax-item tw-w-full tw-h-[240px]">
                    <a href="javascript:void(0)" 
                    class="tw-flex tw-w-full tw-h-full tw-gap-8 tw-rounded-xl hover:tw-shadow-lg dark:tw-shadow-[#171717] tw-duration-300 tw-transition-all tw-p-8 tw-group/card" 
                    onclick="openPanel('service_social')">

                        <div class="tw-text-4xl max-md:tw-text-2xl">
                            <i class="bi bi-megaphone-fill"></i>
                        </div>

                        <div class="tw-flex tw-flex-col tw-gap-4">
                            <h3 class="tw-text-2xl max-md:tw-text-xl">Sosyal Medya Yönetimi</h3>
                            <p class="tw-text-gray-800 dark:tw-text-gray-100 max-md:tw-text-sm">
                                Profesyonel içerik üretimi ve sosyal medya stratejisi.
                            </p>

                            <div class="tw-mt-auto tw-flex tw-gap-2 tw-underline tw-underline-offset-4">
                                <span>Daha fazla bilgi</span>
                                <i class="bi bi-arrow-up-right group-hover/card:tw--translate-y-1 group-hover/card:tw-translate-x-1 tw-duration-300"></i>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </section>


        <section id="skills-section">
            
            <div class="skills-track">
                
                <div class="tw-flex tw-flex-col tw-justify-center tw-w-[400px] tw-shrink-0 tw-px-4">
                    <h3 class="tw-text-6xl tw-font-medium tw-leading-tight">
                        Ajans<br>
                        <span class="tw-text-gray-400">Yeteneklerimiz</span>
                    </h3>

                </div>

                <div class="skill-card">
                    <div class="tw-w-full tw-h-[200px] tw-p-4 tw-rounded-xl tw-backdrop-blur-2xl tw-overflow-hidden tw-flex tw-place-content-center">
                        <img src="./assets/images/home/prompts2.png" alt="Strateji" class="tw-w-auto tw-h-full tw-object-contain">
                    </div>
                    <h3 class="tw-text-2xl tw-font-bold">Veriye Dayalı Strateji</h3>
                    <p class="tw-text-center tw-text-sm tw-text-gray-600 dark:tw-text-gray-400">
                        Sektörünüze özel, verilerle desteklenmiş büyüme planları.
                    </p>
                </div>

                <div class="skill-card">
                    <div class="tw-w-full tw-h-[200px] tw-p-4 tw-rounded-xl tw-backdrop-blur-2xl tw-overflow-hidden tw-flex tw-place-content-center">
                        <img src="./assets/images/home/search.png" alt="Analiz" class="tw-w-auto tw-h-full tw-object-contain">
                    </div>
                    <h3 class="tw-text-2xl tw-font-bold">Pazar Analizi</h3>
                    <p class="tw-text-center tw-text-sm tw-text-gray-600 dark:tw-text-gray-400">
                        Rakiplerinizi analiz ediyor, fırsatları ortaya çıkarıyoruz.
                    </p>
                </div>

                <div class="skill-card">
                    <div class="tw-w-full tw-h-[200px] tw-p-4 tw-rounded-xl tw-backdrop-blur-2xl tw-overflow-hidden tw-flex tw-place-content-center">
                        <img src="./assets/images/home/image.png" alt="Tasarım" class="tw-w-auto tw-h-full tw-object-contain">
                    </div>
                    <h3 class="tw-text-2xl tw-font-bold">Kreatif Tasarım</h3>
                    <p class="tw-text-center tw-text-sm tw-text-gray-600 dark:tw-text-gray-400">
                        Sizi yansıtan logo ve kurumsal kimlik çalışmaları.
                    </p>
                </div>

                <div class="skill-card">
                    <div class="tw-w-full tw-h-[200px] tw-p-4 tw-rounded-xl tw-backdrop-blur-2xl tw-overflow-hidden tw-flex tw-place-content-center">
                        <img src="./assets/images/home/history.png" alt="Yönetim" class="tw-w-auto tw-h-full tw-object-contain">
                    </div>
                    <h3 class="tw-text-2xl tw-font-bold">Şeffaf Yönetim</h3>
                    <p class="tw-text-center tw-text-sm tw-text-gray-600 dark:tw-text-gray-400">
                        Her adımda bilgilendirme ve anlık revizyon imkanı.
                    </p>
                </div>

                <div class="skill-card">
                    <div class="tw-w-full tw-h-[200px] tw-p-4 tw-rounded-xl tw-backdrop-blur-2xl tw-overflow-hidden tw-flex tw-place-content-center">
                        <img src="./assets/images/home/import.png" alt="İçerik" class="tw-w-auto tw-h-full tw-object-contain">
                    </div>
                    <h3 class="tw-text-2xl tw-font-bold">360° İçerik</h3>
                    <p class="tw-text-center tw-text-sm tw-text-gray-600 dark:tw-text-gray-400">
                        Web ve sosyal medya için etkili içerik üretimi.
                    </p>
                </div>

                <div class="skill-card">
                    <div class="tw-w-full tw-h-[200px] tw-p-4 tw-rounded-xl tw-backdrop-blur-2xl tw-overflow-hidden tw-flex tw-place-content-center">
                        <img src="./assets/images/home/multilingual.png" alt="Global" class="tw-w-auto tw-h-full tw-object-contain">
                    </div>
                    <h3 class="tw-text-2xl tw-font-bold">Global Erişim</h3>
                    <p class="tw-text-center tw-text-sm tw-text-gray-600 dark:tw-text-gray-400">
                        Çok dilli kampanyalarla dünyaya açılın.
                    </p>
                </div>

            </div>
        </section>

        <section class="tw-flex tw-min-h-[100vh] tw-w-full tw-flex-col tw-place-content-center tw-place-items-center tw-p-[2%]">
            <h3 class="reveal-up tw-text-4xl tw-font-medium tw-text-center max-md:tw-text-2xl">
                Lapland Ajans İle Çalışan Profesyoneller
            </h3>
            <div class="tw-mt-20 tw-gap-10 tw-space-y-8  max-md:tw-columns-1 lg:tw-columns-2 xl:tw-columns-3">
                <div class="reveal-up tw-flex tw-h-fit tw-w-[350px] tw-break-inside-avoid tw-flex-col tw-gap-4 tw-rounded-lg tw-border-[1px] tw-bg-[#f6f7fb] dark:tw-bg-[#080808] dark:tw-border-[#1f2123] tw-p-4 max-lg:tw-w-[320px]">   
                    <div class="tw-flex tw-place-items-center tw-gap-3">
                        <div class="tw-h-[50px] tw-w-[50px] tw-overflow-hidden tw-rounded-full">
                            <img src="./assets/images/people/man2.jpg" class="tw-h-full tw-w-full tw-object-cover" alt="erkek" />
                        </div>
                        <div class="tw-flex tw-flex-col tw-gap-1">
                            <div class="tw-font-semibold">Ahmet Y.</div>
                            <div class="tw-text-gray-700 dark:tw-text-gray-300">XYZ Teknoloji, CEO</div>
                        </div>
                    </div>
                    <p class="tw-mt-4 tw-text-gray-800 dark:tw-text-gray-200">"Stratejik yaklaşımları ve yaratıcı ekibi sayesinde hedeflerimizin çok ötesine geçtik."</p>
                </div>

                 <div class="reveal-up tw-flex tw-h-fit tw-w-[350px] tw-break-inside-avoid tw-flex-col tw-gap-4 tw-rounded-lg tw-border-[1px] tw-bg-[#f6f7fb] dark:tw-bg-[#080808] dark:tw-border-[#1f2123] tw-p-4 max-lg:tw-w-[320px]">   
                    <div class="tw-flex tw-place-items-center tw-gap-3">
                        <div class="tw-h-[50px] tw-w-[50px] tw-overflow-hidden tw-rounded-full">
                            <img src="./assets/images/people/women.jpg" class="tw-h-full tw-w-full tw-object-cover" alt="kadın" />
                        </div>
                        <div class="tw-flex tw-flex-col tw-gap-1">
                            <div class="tw-font-semibold">Elif K.</div>
                            <div class="tw-text-gray-700 dark:tw-text-gray-300">Moda Markası, Kurucu</div>
                        </div>
                    </div>
                    <p class="tw-mt-4 tw-text-gray-800 dark:tw-text-gray-200">"Tüm süreci tek bir ekiple yönetmek harikaydı."</p>
                </div>

                 <div class="reveal-up tw-flex tw-h-fit tw-w-[350px] tw-break-inside-avoid tw-flex-col tw-gap-4 tw-rounded-lg tw-border-[1px] tw-bg-[#f6f7fb] dark:tw-bg-[#080808] dark:tw-border-[#1f2123] tw-p-4 max-lg:tw-w-[320px]">   
                    <div class="tw-flex tw-place-items-center tw-gap-3">
                        <div class="tw-h-[50px] tw-w-[50px] tw-overflow-hidden tw-rounded-full">
                            <img src="./assets/images/people/man.jpg" class="tw-h-full tw-w-full tw-object-cover" alt="erkek" />
                        </div>
                        <div class="tw-flex tw-flex-col tw-gap-1">
                            <div class="tw-font-semibold">Mehmet Ö.</div>
                            <div class="tw-text-gray-700 dark:tw-text-gray-300">E-Ticaret Direktörü</div>
                        </div>
                    </div>
                    <p class="tw-mt-4 tw-text-gray-800 dark:tw-text-gray-200">"Satışlarımızda gözle görülür bir artış yaşadık."</p>
                </div>
            </div>
        </section>

        <section class="tw-mt-5 tw-flex tw-min-h-[80vh] tw-w-full tw-flex-col tw-place-content-center tw-place-items-center tw-p-[2%] max-lg:tw-p-3">
            <h3 class="reveal-up tw-text-4xl tw-font-medium max-md:tw-text-2xl">
                Blogumuzdan Son Yazılar
            </h3>
            <div class="reveal-up tw-mt-10 tw-flex tw-flex-wrap tw-place-content-center tw-gap-10 max-lg:tw-flex-col">
                <a href="javascript:void(0)" class="tw-flex tw-h-[500px] tw-w-[400px] tw-flex-col tw-gap-2 tw-overflow-clip tw-rounded-lg tw-p-4 max-lg:tw-w-[350px]" onclick="openPanel('blog')">
                    <div class="tw-h-[350px] tw-min-h-[350px] tw-w-full tw-overflow-hidden tw-rounded-2xl">
                        <img src="./assets/images/home/article1.png" alt="article image" class="tw-h-full tw-w-full tw-object-cover tw-transition-transform tw-duration-700 hover:tw-scale-[1.3]" />
                    </div>
                    <div class="tw-text-gray-600 dark:tw-text-gray-300 tw-justify-between tw-flex tw-gap-2">
                        <div class="tw-text-gray-800 dark:tw-text-gray-200">Dijital Pazarlama</div>
                        <div class="tw-text-gray-600 dark:tw-text-gray-400">Tem, 17, 2024</div>
                    </div>
                    <h3 class="tw-mt-1 tw-font-medium tw-text-xl max-md:tw-text-xl">2025'in Yükselen Dijital Pazarlama Trendleri</h3>
                </a>
                
                <a href="javascript:void(0)" class="tw-flex tw-h-[500px] tw-w-[400px] tw-flex-col tw-gap-2 tw-overflow-clip tw-rounded-lg tw-p-4 max-lg:tw-w-[350px]" onclick="openPanel('blog')">
                    <div class="tw-h-[350px] tw-min-h-[350px] tw-w-full tw-overflow-hidden tw-rounded-2xl">
                        <img src="./assets/images/home/article2.jpg" alt="article image" class="tw-h-full tw-w-full tw-object-cover tw-transition-transform tw-duration-700 hover:tw-scale-[1.3]" />
                    </div>
                    <div class="tw-text-gray-600 dark:tw-text-gray-300 tw-justify-between tw-flex tw-gap-2">
                        <div class="tw-text-gray-800 dark:tw-text-gray-200">Marka Stratejisi</div>
                        <div class="tw-text-gray-600 dark:tw-text-gray-400">Haz, 22, 2024</div>
                    </div>
                    <h3 class="tw-mt-1 tw-font-medium tw-text-xl max-md:tw-text-xl">Güçlü Bir Marka Kimliği Nasıl Oluşturulur?</h3>
                </a>

                <a href="javascript:void(0)" class="tw-flex tw-h-[500px] tw-w-[400px] tw-flex-col tw-gap-2 tw-overflow-clip tw-rounded-lg tw-p-4 max-lg:tw-w-[350px]" onclick="openPanel('blog')">
                    <div class="tw-h-[350px] tw-min-h-[350px] tw-w-full tw-overflow-hidden tw-rounded-2xl">
                        <img src="./assets/images/home/article3.png" alt="article image" class="tw-h-full tw-w-full tw-object-cover tw-transition-transform tw-duration-700 hover:tw-scale-[1.3]" />
                    </div>
                    <div class="tw-text-gray-600 dark:tw-text-gray-300 tw-justify-between tw-flex tw-gap-2">
                        <div class="tw-text-gray-800 dark:tw-text-gray-200">Duyuru</div>
                        <div class="tw-text-gray-600 dark:tw-text-gray-400">Nis, 27, 2024</div>
                    </div>
                    <h3 class="tw-mt-1 tw-font-medium tw-text-xl max-md:tw-text-xl">Lapland Ajans Yeni Ofisini Açtı!</h3>
                </a>
            </div>
        </section>

        <section class="tw-relative tw-flex tw-w-full tw-flex-col tw-place-content-center tw-place-items-center tw-gap-[10%] tw-p-[5%] tw-px-[10%]">   
            <h3 class="tw-text-4xl tw-font-medium max-md:tw-text-2xl">Sıkça Sorulan Sorular</h3>
            <div class="tw-mt-5 tw-flex tw-min-h-[300px] tw-w-full tw-max-w-[850px] tw-flex-col tw-gap-4">
                <div class="faq tw-w-full">
                    <h4 class="faq-accordion tw-flex tw-w-full tw-select-none tw-text-xl max-md:tw-text-lg">
                        <span>Lapland Ajans nedir?</span>
                        <i class="bi bi-plus tw-text-xl tw-origin-center tw-duration-300 tw-transition-transform tw-ml-auto tw-font-semibold"></i>
                    </h4>
                    <div class="content max-lg:tw-text-sm">
                        Lapland Ajans, markanızın dijital dünyadaki tüm ihtiyaçlarını (web sitesi, sosyal medya, reklam, strateji) tek bir çatı altında karşılayan tam hizmetli bir 360 derece reklam ajansıdır.
                    </div>
                </div>
                <hr>
                <div class="faq tw-w-full">
                    <h4 class="faq-accordion tw-flex tw-w-full tw-select-none tw-text-xl max-md:tw-text-lg">
                        <span>360 derece ajans ne demektir?</span>
                        <i class="bi bi-plus tw-text-xl tw-origin-center tw-duration-300 tw-transition-transform tw-ml-auto tw-font-semibold"></i>
                    </h4>
                    <div class="content max-lg:tw-text-sm">
                        360 derece hizmet, bir markanın ihtiyacı olan tüm dijital ve yaratıcı hizmetlerin (Marka Stratejisi, Web Tasarım, Sosyal Medya Yönetimi, Dijital Pazarlama, SEO, Prodüksiyon vb.) tek bir ajans tarafından entegre bir şekilde yönetilmesidir.
                    </div>
                </div>
                <hr>
                <div class="faq tw-w-full">
                    <h4 class="faq-accordion tw-flex tw-w-full tw-select-none tw-text-xl max-md:tw-text-lg">
                        <span>Sadece web sitesi tasarımına ihtiyacım var, yardımcı olabilir misiniz?</span>
                        <i class="bi bi-plus tw-text-xl tw-origin-center tw-duration-300 tw-transition-transform tw-ml-auto tw-font-semibold"></i>
                    </h4>
                    <div class="content max-lg:tw-text-sm">
                        Elbette. 360 derece hizmet vermemizin yanı sıra, ihtiyacınız olan spesifik hizmetler (sadece web tasarım, sadece sosyal medya yönetimi vb.) için de özel çözümler sunuyoruz.
                    </div>
                </div>
                <hr>
                <div class="faq tw-w-full">
                    <h4 class="faq-accordion tw-flex tw-w-full tw-select-none tw-text-xl max-md:tw-text-lg">
                        <span>Bir projeye nasıl başlayabiliriz?</span>
                        <i class="bi bi-plus tw-text-xl tw-origin-center tw-duration-300 tw-transition-transform tw-ml-auto tw-font-semibold"></i>
                    </h4>
                    <div class="content max-lg:tw-text-sm">
                        Sitedeki "Teklif Al" butonuna tıklayarak veya iletişim sayfamızdan bize ulaşarak süreci başlatabilirsiniz. Ekibimiz sizinle bir tanışma toplantısı planlayacak ve ihtiyaçlarınızı analiz edecektir.
                    </div>
                </div>
                <hr>
            </div>
            <div class="purple-bg-grad max-md:tw-hidden reveal-up tw-absolute tw-bottom-14 tw-right-[20%] tw-h-[150px] tw-w-[150px] tw-rounded-full"></div>
        </section>

        <section class="tw-relative tw-flex tw-p-2 tw-w-full tw-min-h-[60vh] tw-flex-col tw-place-content-center tw-place-items-center tw-overflow-hidden">   
            <div class="reveal-up tw-w-full tw-h-full tw-min-h-[450px] max-lg:tw-max-w-full tw-rounded-md lg:tw-py-[5%] tw-bg-[#f6f7fb] dark:tw-bg-[#171717] tw-place-content-center tw-items-center tw-flex tw-flex-col tw-max-w-[80%] tw-gap-4 tw-p-4">
                <h3 class="reveal-up tw-text-5xl tw-font-medium max-md:tw-text-3xl tw-text-center tw-leading-normal">
                    Markanızı Kuzey Işıkları Gibi Parlatmaya Hazır mısınız?
                </h3>
                <div class="tw-mt-8 tw-relative tw-flex max-lg:tw-flex-col tw-gap-5">
                    <a href="javascript:void(0)" class="btn reveal-up !tw-rounded-full !tw-p-4 tw-font-medium" onclick="openPanel('offer')">
                        Hemen Teklif Alın
                    </a>
                </div>
            </div>
        </section>

        <section class="tw-flex tw-w-full tw-flex-col tw-place-content-center tw-place-items-center tw-gap-[10%] tw-p-[5%] tw-px-[10%] max-md:tw-px-2">
            <div class="tw-flex tw-w-full tw-max-w-[80%] tw-place-content-center tw-place-items-center tw-justify-between tw-gap-3 tw-rounded-lg tw-bg-[#F6F7FB] dark:tw-bg-[#171717] tw-p-6 max-md:tw-max-w-full max-md:tw-flex-col">
                <div class="tw-flex tw-flex-col max-lg:tw-text-center tw-gap-1">
                    <h2 class="tw-text-2xl tw-text-gray-800 dark:tw-text-gray-200 max-md:tw-text-xl">Bültenimize katılın</h2>
                    <div class="tw-text-gray-700 dark:tw-text-gray-300">Hizmetlerimizle ilgili bilgileri ve güncellemeleri alın.</div>
                </div>
                <div class="tw-flex tw-h-[60px] tw-place-items-center tw-gap-2 tw-overflow-hidden tw-p-2">
                    <input type="email" class="input tw-h-full tw-w-full !tw-border-gray-600 tw-p-2 tw-outline-none" placeholder="email" />
                    <a class="btn !tw-rounded-full !tw-border-[1px] !tw-text-black !tw-border-solid !tw-border-black dark:!tw-text-white dark:!tw-border-gray-300 !tw-bg-transparent tw-transition-colors tw-duration-[0.3s]" href="javascript:void(0)" onclick="openPanel('newsletter')">Kayıt Ol</a>
                </div>
            </div>
        </section>

        <footer class="tw-mt-auto tw-flex tw-flex-col tw-w-full tw-gap-4 tw-text-sm tw-pt-[5%] tw-pb-10 tw-px-[10%] tw-text-black dark:tw-text-white max-md:tw-flex-col">
            <div class="tw-flex max-md:tw-flex-col max-md:tw-gap-6 tw-gap-3 tw-w-full tw-place-content-around">
                <div class="tw-flex tw-h-full tw-w-[250px] tw-flex-col tw-place-items-center tw-gap-6 max-md:tw-w-full">   
                    <a href="#" class="tw-w-full tw-place-items-center tw-flex tw-flex-col tw-gap-6">
                        <img src="./assets/logo/lapland-logo.svg" alt="logo" class="tw-max-w-[120px] dark:tw-invert" />
                        <div class="tw-max-w-[120px] tw-text-center tw-text-3xl tw-h-fit">LAPLAND</div>
                    </a>
                    <div class="tw-flex tw-gap-4 tw-text-lg">
                        <a href="https://github.com/PaulleDemon/" aria-label="Github"><i class="bi bi-github"></i></a>
                        <a href="https://twitter.com/pauls_freeman" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                        <a href="https://www.linkedin.com/" aria-label="Linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="tw-flex max-md:tw-flex-col tw-flex-wrap tw-gap-6 tw-h-full tw-w-full tw-justify-around">
                    <div class="tw-flex tw-h-full tw-w-[200px] tw-flex-col tw-gap-4">
                        <h2 class="tw-text-xl">Hizmetler</h2>
                        <div class="tw-flex tw-flex-col tw-gap-3">
                            <a href="javascript:void(0)" class="footer-link" onclick="openPanel('service_branding')">Marka Stratejisi</a>
                            <a href="javascript:void(0)" class="footer-link" onclick="openPanel('service_web')">Web Tasarım & Yazılım</a>
                            <a href="javascript:void(0)" class="footer-link" onclick="openPanel('service_marketing')">Dijital Pazarlama & SEO</a>
                            <a href="javascript:void(0)" class="footer-link" onclick="openPanel('service_social')">Sosyal Medya Yönetimi</a>
                            <a href="javascript:void(0)" class="footer-link" onclick="openPanel('service_video')">Prodüksiyon</a>
                        </div>
                    </div>

                    <div class="tw-flex tw-h-full tw-w-[200px] tw-flex-col tw-gap-4">
                        <h2 class="tw-text-xl">Şirket</h2>
                        <div class="tw-flex tw-flex-col tw-gap-3">
                            <a href="javascript:void(0)" class="footer-link" onclick="openPanel('about')">Hakkımızda</a>
                            <a href="javascript:void(0)" class="footer-link" onclick="openPanel('portfolio')">Portföy</a>
                            <a href="javascript:void(0)" class="footer-link" onclick="openPanel('blog')">Blog</a>
                            <a href="javascript:void(0)" class="footer-link" onclick="openPanel('contact')">İletişim</a>
                            <a href="javascript:void(0)" class="footer-link" onclick="openPanel('career')">Kariyer</a>
                        </div>
                    </div>

                    <div class="tw-flex tw-h-full tw-w-[200px] tw-flex-col tw-gap-4">
                        <h2 class="tw-text-xl">Yasal</h2>
                        <div class="tw-flex tw-flex-col tw-gap-3">
                            <a href="javascript:void(0)" class="footer-link" onclick="openPanel('legal')">Hizmet Şartları</a>
                            <a href="javascript:void(0)" class="footer-link" onclick="openPanel('legal')">Gizlilik Politikası</a>
                            <a href="javascript:void(0)" class="footer-link" onclick="openPanel('legal')">KVKK</a>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="tw-mt-8">
            <div class="tw-mt-2 tw-flex tw-gap-2 tw-flex-col tw-text-gray-700 dark:tw-text-gray-300 tw-place-items-center tw-text-[12px] tw-w-full tw-text-center tw-place-content-around">
                <span>Copyright &#169; 2023-2025 Lapland Ajans</span>
                <span>Tüm ticari markalar ve telif hakları ilgili sahiplerine aittir.</span>
            </div>
        </footer>

        <a id="floating-cta" onclick="openPanel('offer')" class="floating-cta" aria-label="Teklif Al - Lapland Ajans">
            <div class="floating-cta-inner">
                <span class="bi bi-stars"></span>
                <span class="floating-cta-text">Teklif Al</span>
            </div>
        </a>

        <div id="global-panel-overlay" class="global-panel-overlay"></div>
        <aside id="global-panel" class="global-panel">
            <div class="global-panel-header">
                <h2 id="panel-title">Başlık</h2>
                <button id="global-panel-close" class="global-panel-close">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
            <div id="panel-content" class="global-panel-content">
                </div>
        </aside>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/gsap.min.js" integrity="sha512-B1lby8cGcAUU3GR+Fd809/ZxgHbfwJMp0jLTVfHiArTuUt++VqSlJpaJvhNtRf3NERaxDNmmxkdx2o+aHd4bvw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/ScrollTrigger.min.js" integrity="sha512-AY2+JxnBETJ0wcXnLPCcZJIJx0eimyhz3OJ55k2Jx4RtYC+XdIi2VtJQ+tP3BaTst4otlGG1TtPJ9fKrAUnRdQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.min.js" integrity="sha512-hIlMpy2enepx9maXZF1gn0hsvPLerXoLHdb095CmRY5HG3bZfN7XPBZ14g+TUDH1aGgfLyPHmY9/zuU53smuMw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="./scripts/components.js"></script>
        <script src="./index.js"></script>

    </body>
</html>