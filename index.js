// ==================================================
// 1. AYARLAR VE DEĞİŞKENLER
// ==================================================

const RESPONSIVE_WIDTH = 1024;
let isHeaderCollapsed = window.innerWidth < RESPONSIVE_WIDTH;
const collapseBtn = document.getElementById("collapse-btn");
const collapseHeaderItems = document.getElementById("collapsed-header-items");
const navToggle = document.querySelector("#nav-dropdown-toggle-0");
const navDropdown = document.querySelector("#nav-dropdown-list-0");

// ==================================================
// 2. HEADER VE NAVİGASYON İŞLEMLERİ
// ==================================================

function onHeaderClickOutside(e) {
    if (!collapseHeaderItems.contains(e.target) && !collapseBtn.contains(e.target)) {
        toggleHeader();
    }
}

function toggleHeader() {
    if (isHeaderCollapsed) {
        collapseHeaderItems.classList.add("max-lg:!tw-opacity-100", "tw-min-h-[90vh]");
        collapseHeaderItems.style.height = "90vh";
        collapseBtn.classList.remove("bi-list");
        collapseBtn.classList.add("bi-x", "max-lg:tw-fixed");
        isHeaderCollapsed = false;
        document.body.classList.add("modal-open");
        setTimeout(() => window.addEventListener("click", onHeaderClickOutside), 10);
    } else {
        collapseHeaderItems.classList.remove("max-lg:!tw-opacity-100", "tw-min-h-[90vh]");
        collapseHeaderItems.style.height = "0vh";
        collapseBtn.classList.remove("bi-x", "max-lg:tw-fixed");  
        collapseBtn.classList.add("bi-list");
        document.body.classList.remove("modal-open");
        isHeaderCollapsed = true;
        window.removeEventListener("click", onHeaderClickOutside);
    }
}

function responsive() {
    if (!isHeaderCollapsed){
        toggleHeader();
    }
    if (window.innerWidth > RESPONSIVE_WIDTH) {
        collapseHeaderItems.style.height = "";
        navToggle.addEventListener("mouseenter", openNavDropdown);
        navToggle.addEventListener("mouseleave", navMouseLeave);
    } else {
        isHeaderCollapsed = true;
        navToggle.removeEventListener("mouseenter", openNavDropdown);
        navToggle.removeEventListener("mouseleave", navMouseLeave);
    }
}
responsive();
window.addEventListener("resize", responsive);

// ==================================================
// 3. TEMA (DARK/LIGHT) AYARLARI
// ==================================================

if (localStorage.getItem('color-mode') === 'dark' || (!('color-mode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('tw-dark');
    updateToggleModeBtn();
} else {
    document.documentElement.classList.remove('tw-dark');
    updateToggleModeBtn();
}

function toggleMode(){
    document.documentElement.classList.toggle("tw-dark");
    updateToggleModeBtn();
}

function updateToggleModeBtn(){
    const toggleIcon = document.querySelector("#toggle-mode-icon");
    if (document.documentElement.classList.contains("tw-dark")){
        toggleIcon.classList.remove("bi-sun");
        toggleIcon.classList.add("bi-moon");
        localStorage.setItem("color-mode", "dark");
    } else {
        toggleIcon.classList.add("bi-sun");
        toggleIcon.classList.remove("bi-moon");
        localStorage.setItem("color-mode", "light");
    }
}

// ==================================================
// 4. DROPDOWN MENÜ İŞLEMLERİ
// ==================================================

navToggle.addEventListener("click", toggleNavDropdown);
navDropdown.addEventListener("mouseleave", closeNavDropdown);

function toggleNavDropdown(){
    if (navDropdown.getAttribute("data-open") === "true"){
        closeNavDropdown();
    } else {
        openNavDropdown();
    }
}

function navMouseLeave(){
    setTimeout(closeNavDropdown, 100);
}

function openNavDropdown(event){
    navDropdown.classList.add("tw-opacity-100", "tw-scale-100", "max-lg:tw-min-h-[450px]", "max-lg:!tw-h-fit", "tw-min-w-[320px]");
    navDropdown.setAttribute("data-open", true);
}

function closeNavDropdown(event){
    if (navDropdown.matches(":hover")){
        return;
    }
    navDropdown.classList.remove("tw-opacity-100", "tw-scale-100", "max-lg:tw-min-h-[450px]", "tw-min-w-[320px]", "max-lg:!tw-h-fit");
    navDropdown.setAttribute("data-open", false);
}

// ==================================================
// 5. VİDEO MODAL İŞLEMLERİ
// ==================================================

const videoBg = document.querySelector("#video-container-bg");
const videoContainer = document.querySelector("#video-container");

function openVideo(){
    videoBg.classList.remove("tw-scale-0", "tw-opacity-0");
    videoBg.classList.add("tw-scale-100", "tw-opacity-100");
    videoContainer.classList.remove("tw-scale-0");
    videoContainer.classList.add("tw-scale-100");
    document.body.classList.add("modal-open");
}

function closeVideo(){
    videoContainer.classList.add("tw-scale-0");
    videoContainer.classList.remove("tw-scale-100");
    setTimeout(() => {
        videoBg.classList.remove("tw-scale-100", "tw-opacity-100");
        videoBg.classList.add("tw-scale-0", "tw-opacity-0");
    }, 400);
    document.body.classList.remove("modal-open");
}

// ==================================================
// 6. ANİMASYONLAR (GSAP & TYPED.JS)
// ==================================================

const typed = new Typed('#prompts-sample', {
    strings: [
        "Lapland Ajans nedir?",
        "Hizmetleriniz nelerdir?",
        "360 derece hizmet ne demek?",
        "Proje süreci nasıl işliyor?",
        "Nasıl teklif alabilirim?"
    ],
    typeSpeed: 60,
    smartBackspace: true, 
    loop: true,
    backDelay: 2000,
});

gsap.registerPlugin(ScrollTrigger);
gsap.config({ nullTargetWarn: false, trialWarn: false });

gsap.to(".reveal-up", {
    opacity: 0,
    y: "100%",
});

// Dashboard eğilme animasyonu
gsap.to("#dashboard", {
    scale: 1,
    translateY: 0,
    rotateX: "0deg",
    scrollTrigger: {
        trigger: "#hero-section",
        start: window.innerWidth > RESPONSIVE_WIDTH ? "top 95%" : "top 70%",
        end: "bottom bottom",
        scrub: 1,
    }
});

// SSS Akordiyon
const faqAccordion = document.querySelectorAll('.faq-accordion');
faqAccordion.forEach(function (btn) {
    btn.addEventListener('click', function () {
        this.classList.toggle('active');
        let content = this.nextElementSibling;
        let icon = this.querySelector(".bi-plus");
        if (content.style.maxHeight === '240px') {
            content.style.maxHeight = '0px';
            content.style.padding = '0px 18px';
            icon.style.transform = "rotate(0deg)";
        } else {
            content.style.maxHeight = '240px';
            content.style.padding = '20px 18px';
            icon.style.transform = "rotate(45deg)";
        }
    });
});

// Reveal Up Animasyonu (Sectionlar için)
const sections = gsap.utils.toArray("section");
sections.forEach((sec) => {
    const revealUptimeline = gsap.timeline({
        paused: true, 
        scrollTrigger: {
            trigger: sec,
            start: "10% 80%", 
            end: "20% 90%",
        }
    });
    revealUptimeline.to(sec.querySelectorAll(".reveal-up"), {
        opacity: 1,
        duration: 0.8,
        y: "0%",
        stagger: 0.2,
    });
});

// ==================================================
// 7. GİRİŞ YÜKLEYİCİ (INTRO) ANİMASYONU
// ==================================================

document.addEventListener('DOMContentLoaded', function() {
    const loader = document.getElementById('intro-loader');
    const logo = document.getElementById('intro-logo');

    if (!loader || !logo) {
        if (loader) loader.style.display = 'none';
        return; 
    }

    setTimeout(function() { logo.classList.add('is-visible'); }, 200);
    setTimeout(function() { loader.classList.add('is-hidden'); }, 2200);
    setTimeout(function() { 
        if (loader) loader.remove(); 
    }, 3200); 
});

// ==================================================
// 8. CHATBOT İŞLEMLERİ
// ==================================================

const botForm = document.getElementById("prompt-form");
const botInput = botForm ? botForm.querySelector("input[name='prompt']") : null;
const chatContainer = document.getElementById("prompt-container");

if(botForm) {
    botForm.addEventListener("submit", function(e) {
        e.preventDefault();
        const userQuestion = botInput.value.trim();
        if (!userQuestion) return;

        appendMessage(userQuestion, "user");
        botInput.value = "";
        const thinkingMessage = appendMessage("...", "bot");

        fetch('./api/chat_api.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ question: userQuestion })
        })
        .then(response => {
            if (!response.ok) throw new Error(`HTTP hatası! Durum: ${response.status}`);
            return response.text();
        })
        .then(text => {
            try {
                const jsonMatch = text.match(/\{.*\}/s);
                if (!jsonMatch) throw new Error("Geçersiz yanıt.");
                const data = JSON.parse(jsonMatch[0]);
                typeMessage(thinkingMessage, data.answer || "Bir hata oluştu.");
            } catch (e) {
                console.error("JSON Hatası:", e);
                typeMessage(thinkingMessage, "Bir hata oluştu.");
            }
        })
        .catch(error => {
            console.error('Bağlantı Hatası:', error);
            thinkingMessage.textContent = "Bağlantı hatası. Lütfen tekrar deneyin.";
        });
    });
}

function appendMessage(message, sender) {
    const messageDiv = document.createElement("div");
    if (sender === "user") {
        messageDiv.className = "tw-ml-auto tw-p-3 tw-rounded-lg tw-bg-blue-600 tw-text-white tw-max-w-[80%]";
    } else {
        messageDiv.className = "tw-p-3 tw-rounded-lg tw-bg-gray-200 dark:tw-bg-[#2d2d2d] tw-max-w-[80%]";
    }
    messageDiv.textContent = message;
    chatContainer.appendChild(messageDiv);
    chatContainer.scrollTop = chatContainer.scrollHeight;
    return messageDiv;
}

function typeMessage(element, text, speed = 15) {
    const formattedText = text.replace(/\n/g, '<br>');
    let i = 0;
    element.innerHTML = "";
    function typing() {
        if (i < formattedText.length) {
            if (formattedText.substring(i, i + 4) === '<br>') {
                element.innerHTML += '<br>';
                i += 4;
            } else {
                element.innerHTML += formattedText.charAt(i);
                i++;
            }
            chatContainer.scrollTop = chatContainer.scrollHeight;
            setTimeout(typing, speed);
        }
    }
    typing();
}

// ==================================================
// 9. UNIVERSAL SLIDE PANEL (İÇERİK YÖNETİMİ)
// ==================================================

function openPanel(key) {
    const overlay  = document.getElementById("global-panel-overlay");
    const panel    = document.getElementById("global-panel");
    const titleEl  = document.getElementById("panel-title");
    const contentEl= document.getElementById("panel-content");
    const body     = document.body;

    // HTML Linklerinde "sosyal" yazılmışsa bunu "service_social" ile eşleştir
    if (key === 'sosyal') key = 'service_social';

    const PANEL_CONTENT = {

        /* ==================== HİZMETLER (TAM LİSTE) ==================== */
        
        // 1. Grafik Tasarım (Önceki sürümde eksikti, şimdi EKLENDİ)
        service_graphic: {
            title: "Grafik Tasarım",
            content: `
            <div class="panel-media-player">
                <img src="./assets/images/home/article1.png" alt="Grafik Tasarım" style="width:100%; height:100%; object-fit:cover;">
            </div>
            <h3 class="tw-text-2xl tw-font-bold tw-mb-2">Görsel Dünyanızı İnşa Ediyoruz</h3>
            <p class="tw-text-gray-600 dark:tw-text-gray-400 tw-mb-6">
                Markanızın ilk izlenimi saniyeler içinde oluşur. Akılda kalıcı, estetik ve stratejik tasarımlarla bu izlenimi mükemmele çeviriyoruz.
            </p>
            <div class="panel-grid">
                <div class="panel-card">
                    <h4><i class="bi bi-palette text-purple-500"></i> Logo & Kimlik</h4>
                    <p>Sizi rakiplerinizden ayıran, hikayenizi anlatan özgün logo tasarımları.</p>
                </div>
                <div class="panel-card">
                    <h4><i class="bi bi-box-seam text-purple-500"></i> Ambalaj</h4>
                    <p>Rafta dikkat çeken, satın alma kararını etkileyen ürün ambalajları.</p>
                </div>
            </div>
            <a href="javascript:void(0)" onclick="openPanel('offer')" class="panel-btn">Tasarım Projesi Başlat <i class="bi bi-brush tw-ml-2"></i></a>
            `
        },

        service_branding: {
            title: "Marka Stratejisi & Kimlik",
            content: `
            <div class="panel-media-player">
                <img src="./assets/images/home/article2.jpg" alt="Marka Stratejisi" style="width:100%; height:100%; object-fit:cover;">
            </div>
            <h3 class="tw-text-2xl tw-font-bold tw-mb-2">Markanızın Hikayesini Yazıyoruz</h3>
            <p class="tw-text-gray-600 dark:tw-text-gray-400 tw-mb-6">Güçlü bir marka, tüketicide bıraktığınız izdir.</p>
            <div class="panel-grid">
                <div class="panel-card">
                    <h4><i class="bi bi-compass text-purple-500"></i> Konumlandırma</h4>
                    <p>Pazardaki yerinizi ve hedef kitlenizi analiz ederek size özel bir rota çiziyoruz.</p>
                </div>
                <div class="panel-card">
                    <h4><i class="bi bi-book text-purple-500"></i> Brandbook</h4>
                    <p>Markanızın anayasasını (renk, font, dil) oluşturuyoruz.</p>
                </div>
            </div>
            <a href="javascript:void(0)" onclick="openPanel('offer')" class="panel-btn">Markanızı Yaratın <i class="bi bi-arrow-right tw-ml-2"></i></a>
            `
        },

        service_web: {
            title: "Web Tasarım & Yazılım",
            content: `
            <div class="panel-media-player">
                <img src="./assets/images/home/api.png" alt="Web Tasarım" style="width:100%; height:100%; object-fit:cover;">
            </div>
            <h3 class="tw-text-2xl tw-font-bold tw-mb-2">Dijital Karargahınız</h3>
            <p class="tw-text-gray-600 dark:tw-text-gray-400 tw-mb-4">
                Hızlı, güvenli ve mobil uyumlu web siteleri.
            </p>
            <div class="panel-tags tw-mb-6">
                <span class="panel-tag">UI/UX</span>
                <span class="panel-tag">E-Ticaret</span>
                <span class="panel-tag">SEO</span>
                <span class="panel-tag">Mobil</span>
            </div>
            <a href="javascript:void(0)" onclick="openPanel('offer')" class="panel-btn">Web Projesi Başlat <i class="bi bi-code-slash tw-ml-2"></i></a>
            `
        },

        service_marketing: {
            title: "Dijital Pazarlama & SEO",
            content: `
            <div class="panel-media-player">
                <img src="./assets/images/home/integrations1.png" alt="Dijital Pazarlama" style="width:100%; height:100%; object-fit:cover;">
            </div>
            <h3 class="tw-text-2xl tw-font-bold tw-mb-2">Büyüme Odaklı Pazarlama</h3>
            <p class="tw-text-gray-600 dark:tw-text-gray-400 tw-mb-6">
                Doğru kişiye, doğru zamanda ulaşın. Veri odaklı reklam yönetimi.
            </p>
            <div class="panel-card tw-mb-4">
                <h4><i class="bi bi-google"></i> Google Ads & SEO</h4>
                <p>Arama motorlarında görünürlüğünüzü artırın.</p>
            </div>
            <a href="javascript:void(0)" onclick="openPanel('offer')" class="panel-btn">Trafiği Artır <i class="bi bi-graph-up tw-ml-2"></i></a>
            `
        },

        service_social: {
            title: "Sosyal Medya Yönetimi",
            content: `
            <div class="panel-media-player">
                <img src="./assets/images/home/article1.png" alt="Sosyal Medya" style="width:100%; height:100%; object-fit:cover;">
            </div>
            <h3 class="tw-text-2xl tw-font-bold tw-mb-2">Sosyal Medyada Ses Getirin</h3>
            <p class="tw-text-gray-600 dark:tw-text-gray-400 tw-mb-6">
                Takipçilerinizi müşteriye dönüştüren içerik stratejileri.
            </p>
            <div class="panel-grid">
                <div class="panel-card">
                    <h4><i class="bi bi-camera-reels"></i> Reels & TikTok</h4>
                    <p>Viral potansiyeli yüksek video içerikleri.</p>
                </div>
                <div class="panel-card">
                    <h4><i class="bi bi-calendar-check"></i> Planlama</h4>
                    <p>Düzenli içerik takvimi ve paylaşım.</p>
                </div>
            </div>
            <a href="javascript:void(0)" onclick="openPanel('offer')" class="panel-btn">Hesap Yönetimi <i class="bi bi-instagram tw-ml-2"></i></a>
            `
        },

        service_video: {
            title: "Video Prodüksiyon",
            content: `
            <div class="panel-media-player">
                <img src="./assets/images/home/article3.png" alt="Prodüksiyon" style="width:100%; height:100%; object-fit:cover;">
            </div>
            <h3 class="tw-text-2xl tw-font-bold tw-mb-2">Hikayenizi Görüntüleyin</h3>
            <p class="tw-text-gray-600 dark:tw-text-gray-400 tw-mb-6">
                Tanıtım filmleri ve ürün çekimleri.
            </p>
            <a href="javascript:void(0)" onclick="openPanel('offer')" class="panel-btn">Çekime Başla <i class="bi bi-camera-video tw-ml-2"></i></a>
            `
        },

        services: {
            title: "Tüm Hizmetlerimiz",
            content: `
            <h3 class="tw-text-2xl tw-font-bold tw-mb-4">360° Ajans Hizmetleri</h3>
            <p class="tw-mb-6">İhtiyacınız olan tüm çözümler tek çatı altında.</p>
            <div class="tw-flex tw-flex-col tw-gap-3">
                <button onclick="openPanel('service_branding')" class="panel-card tw-text-left !tw-p-3 hover:!border-blue-500">Marka Stratejisi</button>
                <button onclick="openPanel('service_web')" class="panel-card tw-text-left !tw-p-3 hover:!border-blue-500">Web Tasarım & Yazılım</button>
                <button onclick="openPanel('service_marketing')" class="panel-card tw-text-left !tw-p-3 hover:!border-blue-500">Dijital Pazarlama</button>
                <button onclick="openPanel('service_social')" class="panel-card tw-text-left !tw-p-3 hover:!border-blue-500">Sosyal Medya</button>
                <button onclick="openPanel('service_video')" class="panel-card tw-text-left !tw-p-3 hover:!border-blue-500">Video Prodüksiyon</button>
                <button onclick="openPanel('service_graphic')" class="panel-card tw-text-left !tw-p-3 hover:!border-blue-500">Grafik Tasarım</button>
            </div>
            `
        },

        /* ---------------- KURUMSAL & DİĞER ---------------- */

        about: {
            title: "Hakkımızda",
            content: `
            <div class="panel-media-player">
                <img src="./assets/images/home/ai-models.png" alt="Ofis" style="width:100%; height:100%; object-fit:cover;">
            </div>
            <h3 class="tw-text-2xl tw-font-bold tw-mb-2">Lapland Ajans</h3>
            <p class="tw-text-gray-600 dark:tw-text-gray-400 tw-mb-6">
                Samsun merkezli, dünyaya açılan yaratıcı bir reklam ajansıyız. Markanızı Kuzey Işıkları gibi parlatmayı hedefliyoruz.
            </p>
            <div class="tw-bg-gray-100 dark:tw-bg-[#1f1f1f] tw-p-6 tw-rounded-xl tw-text-center">
                <div class="tw-flex tw-justify-around">
                    <div><div class="tw-text-2xl tw-font-bold tw-text-blue-600">50+</div><div class="tw-text-xs">Müşteri</div></div>
                    <div><div class="tw-text-2xl tw-font-bold tw-text-blue-600">120+</div><div class="tw-text-xs">Proje</div></div>
                </div>
            </div>
            `
        },

        portfolio: {
            title: "Portföy",
            content: `
            <h3 class="tw-text-2xl tw-font-bold tw-mb-4">Seçkin İşlerimiz</h3>
            <div class="tw-flex tw-flex-col tw-gap-6">
                <div class="panel-card !tw-p-0 tw-overflow-hidden">
                    <img src="./assets/images/home/article1.png" class="tw-w-full tw-h-40 tw-object-cover">
                    <div class="tw-p-4"><h4 class="tw-mb-1">XYZ Teknoloji</h4><p class="tw-text-sm">Kurumsal Kimlik</p></div>
                </div>
                <div class="panel-card !tw-p-0 tw-overflow-hidden">
                    <img src="./assets/images/home/article2.jpg" class="tw-w-full tw-h-40 tw-object-cover">
                    <div class="tw-p-4"><h4 class="tw-mb-1">Luna Cafe</h4><p class="tw-text-sm">Sosyal Medya</p></div>
                </div>
            </div>
            `
        },

        blog: {
            title: "Blog",
            content: `
            <h3 class="tw-text-2xl tw-font-bold tw-mb-4">Son Yazılar</h3>
            <div class="tw-flex tw-flex-col tw-gap-4">
                <a href="#" class="panel-card tw-flex tw-gap-4 tw-items-center !tw-p-3 hover:bg-gray-50">
                    <div class="tw-w-16 tw-h-16 tw-rounded-lg tw-overflow-hidden tw-flex-shrink-0"><img src="./assets/images/home/article1.png" class="tw-w-full tw-h-full tw-object-cover"></div>
                    <div><h4 class="!tw-text-sm !tw-mb-1">2025 Trendleri</h4><p class="!tw-text-xs">Pazarlama nereye gidiyor?</p></div>
                </a>
            </div>
            `
        },

        contact: {
            title: "İletişim",
            content: `
            <h3 class="tw-text-2xl tw-font-bold tw-mb-2">Bize Ulaşın</h3>
            <p class="tw-mb-6 text-gray-500">Projeleriniz için heyecanlıyız.</p>
            <div class="panel-grid">
                <a href="mailto:info@laplandajans.com" class="panel-card tw-text-center"><i class="bi bi-envelope tw-text-2xl tw-text-blue-600"></i><p class="tw-mt-2 tw-text-sm">E-Posta</p></a>
                <a href="tel:+905555555555" class="panel-card tw-text-center"><i class="bi bi-telephone tw-text-2xl tw-text-green-600"></i><p class="tw-mt-2 tw-text-sm">Telefon</p></a>
            </div>
            `
        },

        offer: {
            title: "Teklif Alın",
            content: `
            <div class="tw-bg-blue-600 tw-text-white tw-p-6 tw-rounded-2xl tw-mb-8 tw-text-center">
                <h3 class="tw-text-2xl tw-font-bold tw-mb-2">Projenizi Başlatalım</h3>
                <p class="tw-opacity-90">Formu doldurun, 24 saat içinde dönüş yapalım.</p>
            </div>
            <form onsubmit="return false;" class="tw-flex tw-flex-col tw-gap-4">
                <input type="text" placeholder="Ad Soyad" class="tw-p-3 tw-rounded-lg tw-bg-gray-100 dark:tw-bg-[#2d2d2d] tw-outline-none">
                <input type="email" placeholder="E-posta" class="tw-p-3 tw-rounded-lg tw-bg-gray-100 dark:tw-bg-[#2d2d2d] tw-outline-none">
                <textarea placeholder="Proje detayları..." rows="4" class="tw-p-3 tw-rounded-lg tw-bg-gray-100 dark:tw-bg-[#2d2d2d] tw-outline-none"></textarea>
                <button class="panel-btn !tw-bg-blue-600 !tw-text-white">Teklifi Gönder</button>
            </form>
            `
        },

        advantage_integrated: {
            title: "Entegre Hizmet Anlayışı",
            content: `
            <div class="panel-media-player">
                <img src="./assets/images/home/api.png" alt="Entegre Hizmet" style="width:100%; height:100%; object-fit:cover;">
            </div>
            <h3 class="tw-text-2xl tw-font-bold tw-mb-2">Neden Tek Çatı?</h3>
            <p class="tw-text-gray-600 dark:tw-text-gray-400 tw-mb-6">
                Web sitenizi yapan ajans başka, sosyal medyanızı yöneten başka olduğunda marka diliniz bozulur. Biz, markanızın tüm dijital varlıklarını birbiriyle konuşan, senkronize bir ekosistem olarak yönetiyoruz.
            </p>

            <div class="panel-grid">
                <div class="panel-card">
                    <h4><i class="bi bi-clock-history text-blue-500"></i> Zaman Tasarrufu</h4>
                    <p>Tek bir toplantı ile tasarım, yazılım ve pazarlama süreçlerinizi başlatın.</p>
                </div>
                <div class="panel-card">
                    <h4><i class="bi bi-patch-check text-blue-500"></i> Tutarlılık</h4>
                    <p>Web sitenizden Instagram postunuza kadar aynı tasarım dili ve ses tonu.</p>
                </div>
            </div>
            
            <a href="javascript:void(0)" onclick="openPanel('offer')" class="panel-btn">Ekibimizle Tanışın <i class="bi bi-people tw-ml-2"></i></a>
            `
        },

        advantage_strategic: {
            title: "Stratejik Yaklaşım",
            content: `
            <div class="panel-media-player">
                <img src="./assets/images/home/article2.jpg" alt="Strateji" style="width:100%; height:100%; object-fit:cover;">
            </div>
            <h3 class="tw-text-2xl tw-font-bold tw-mb-2">Veri Olmadan Hareket Etmeyiz</h3>
            <p class="tw-text-gray-600 dark:tw-text-gray-400 tw-mb-6">
                "Güzel görünen" işler yapmak yetmez, "çalışan" işler yapıyoruz. Her projemiz derinlemesine bir analizle başlar.
            </p>

            <ul class="panel-list">
                <li><i class="bi bi-search"></i> <strong>Pazar Analizi:</strong> Rakipleriniz ne yapıyor, fırsatlar nerede?</li>
                <li><i class="bi bi-person-lines-fill"></i> <strong>Hedef Kitle:</strong> Müşterileriniz kim ve dijitalde nerede vakit geçiriyorlar?</li>
                <li><i class="bi bi-map"></i> <strong>Yol Haritası:</strong> 3, 6 ve 12 aylık büyüme planları.</li>
            </ul>

            <div class="panel-card tw-mt-4">
                <h4>Sonuç</h4>
                <p>Boşa harcanan bütçe yok, nokta atışı hamleler var.</p>
            </div>
            `
        },

        advantage_results: {
            title: "Sonuç Odaklı Çözümler",
            content: `
            <div class="panel-media-player">
                <img src="./assets/images/home/integrations1.png" alt="Sonuç Odaklı" style="width:100%; height:100%; object-fit:cover;">
            </div>
            <h3 class="tw-text-2xl tw-font-bold tw-mb-2">Ölçülebilir Başarı</h3>
            <p class="tw-text-gray-600 dark:tw-text-gray-400 tw-mb-6">
                Dijital dünyada her tıklama, her görüntülenme izlenebilir. Sizin için şeffaf raporlar ve net KPI'lar (Anahtar Performans Göstergeleri) belirliyoruz.
            </p>

            <div class="panel-grid">
                <div class="panel-card">
                    <h4><i class="bi bi-graph-up-arrow text-green-500"></i> ROI Odaklı</h4>
                    <p>Yatırımınızın geri dönüşünü (Return on Investment) maksimize etmeye odaklanıyoruz.</p>
                </div>
                <div class="panel-card">
                    <h4><i class="bi bi-file-earmark-bar-graph text-green-500"></i> Şeffaf Rapor</h4>
                    <p>Ay sonunda sürpriz yok; anlaşılır, detaylı performans raporları sunuyoruz.</p>
                </div>
            </div>
            
            <a href="javascript:void(0)" onclick="openPanel('offer')" class="panel-btn">Başarı Hikayenizi Yazalım <i class="bi bi-stars tw-ml-2"></i></a>
            `
        },

        advantage_sector: {
            title: "Geniş Sektör Deneyimi",
            content: `
            <div class="panel-media-player">
                <img src="./assets/images/home/ai-models.png" alt="Sektör Deneyimi" style="width:100%; height:100%; object-fit:cover;">
            </div>
            <h3 class="tw-text-2xl tw-font-bold tw-mb-2">Her Sektörün Dili Farklıdır</h3>
            <p class="tw-text-gray-600 dark:tw-text-gray-400 tw-mb-6">
                Tek bir alana sıkışıp kalmadık. Yıllar içinde farklı dinamiklere sahip birçok sektörde başarı hikayeleri biriktirdik.
            </p>

            <h4 class="tw-font-bold tw-mb-3">Uzmanlık Alanlarımız</h4>
            <div class="panel-tags tw-mb-6">
                <span class="panel-tag">E-Ticaret & Perakende</span>
                <span class="panel-tag">Sağlık & Medikal</span>
                <span class="panel-tag">İnşaat & Gayrimenkul</span>
                <span class="panel-tag">Eğitim & Akademi</span>
                <span class="panel-tag">Turizm & Otelcilik</span>
                <span class="panel-tag">Teknoloji & SaaS</span>
                <span class="panel-tag">Hukuk & Danışmanlık</span>
            </div>

            <div class="panel-card">
                <h4>Neden Önemli?</h4>
                <p>Sektörünüzün dinamiklerini, mevzuatlarını ve müşteri beklentilerini sıfırdan öğrenmekle vakit kaybetmiyoruz. Masaya tecrübeyle oturuyoruz.</p>
            </div>
            `
        },

        process: {
            title: "Çalışma Sürecimiz",
            content: `
            <h3 class="tw-text-xl tw-font-bold tw-mb-4">5 Adımda Başarı</h3>
            <ul class="panel-list">
                <li><i class="bi bi-1-circle-fill"></i> Keşif & Brief</li>
                <li><i class="bi bi-2-circle-fill"></i> Strateji & Planlama</li>
                <li><i class="bi bi-3-circle-fill"></i> Tasarım & Yaratıcılık</li>
                <li><i class="bi bi-4-circle-fill"></i> Uygulama & Geliştirme</li>
                <li><i class="bi bi-5-circle-fill"></i> Test & Teslim</li>
            </ul>
            `
        },

        newsletter: {
            title: "Bülten",
            content: `
            <div class="tw-text-center tw-py-10">
                <div class="tw-text-green-600 tw-text-5xl tw-mb-4"><i class="bi bi-check-circle"></i></div>
                <h3 class="tw-text-2xl tw-font-bold">Kaydınız Alındı!</h3>
                <p class="tw-text-gray-500 tw-mt-2">Aramıza hoşgeldiniz.</p>
            </div>
            `
        },

        legal: { title: "Yasal", content: "<p>Gizlilik Politikası ve KVKK metinleri yakında eklenecektir.</p>" },
        career: { title: "Kariyer", content: "<p>Açık pozisyonlar yakında burada listelenecektir.</p>" }
    };

    const data = PANEL_CONTENT[key] || { title: "Bilgi", content: "<p>123123123123123...</p>" };
    titleEl.innerHTML = data.title;
    contentEl.innerHTML = data.content;
    document.body.classList.add('panel-open');
}

// ==================================================
// 10. PANEL KAPATMA İŞLEMLERİ
// ==================================================

document.getElementById("global-panel-close").addEventListener("click", () => {
    document.body.classList.remove('panel-open');
});
document.getElementById("global-panel-overlay").addEventListener("click", () => {
    document.body.classList.remove('panel-open');
});

// ==================================================
// YATAY SCROLL ANİMASYONU (GSAP)
// ==================================================

// Tüm resimlerin yüklendiğinden emin olalım ki genişlik doğru hesaplansın
window.addEventListener("load", () => {
    
    const skillsSection = document.getElementById("skills-section");
    const skillsTrack = document.querySelector(".skills-track");

    if (skillsSection && skillsTrack) {
        
        // Ne kadar kaydırılacağını hesapla (Toplam genişlik - Ekran genişliği)
        let scrollAmount = skillsTrack.offsetWidth - window.innerWidth;

        gsap.to(skillsTrack, {
            x: -scrollAmount, // Sola doğru kaydır
            ease: "none", // Sabit hız
            scrollTrigger: {
                trigger: skillsSection,
                pin: true, // Ekranı kilitle
                scrub: 1, // Scroll hızına göre yumuşak hareket et
                start: "top top", // Bölümün tepesi ekranın tepesine gelince başla
                end: () => "+=" + scrollAmount, // Kaydırma miktarı kadar süre tanı
                // markers: true // Hata ayıklamak isterseniz bunu açın
            }
        });
    }
});

const codeChars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789(){}[]<>;:,._-+=!@#$%^&*|\\/\"'`~?";
const scannerLeft = window.innerWidth / 2 - 2;
const scannerRight = window.innerWidth / 2 + 2;

class CardStreamController {
  constructor() {
    this.container = document.getElementById("cardStream");
    this.cardLine = document.getElementById("cardLine");
    
    // Buton ve hız göstergesi referansları silindi
    this.position = 0;
    this.velocity = 200; // Varsayılan hız
    this.direction = 1;
    this.isAnimating = true;
    this.isDragging = false;

    this.lastTime = 0;
    this.lastMouseX = 0;
    this.mouseVelocity = 0;
    this.friction = 0.95;
    this.minVelocity = 30;

    this.containerWidth = 0;
    this.cardLineWidth = 0;

    this.init();
  }

  init() {
    this.populateCardLine();
    this.calculateDimensions();
    this.setupEventListeners();
    this.updateCardPosition();
    this.animate();
    this.startPeriodicUpdates();
  }

    calculateDimensions() {
    if(!this.container) return;
    this.containerWidth = this.container.offsetWidth;
    
    const cardWidth = 400;
    const cardGap = 60;
    
    // Tüm kartların toplam sayısı (Orijinal + Kopyalar)
    const totalCards = this.cardLine.children.length;
    
    // Tüm şeridin toplam genişliği
    this.totalLineWidth = (cardWidth + cardGap) * totalCards;
    
    // Döngünün sıfırlanacağı nokta (Toplam genişliğin yarısı)
    this.loopPoint = this.totalLineWidth / 2;
  }

  setupEventListeners() {
    // Mouse olayları
    this.cardLine.addEventListener("mousedown", (e) => this.startDrag(e));
    document.addEventListener("mousemove", (e) => this.onDrag(e));
    document.addEventListener("mouseup", () => this.endDrag());

    // Dokunmatik ekran olayları
    this.cardLine.addEventListener("touchstart", (e) => this.startDrag(e.touches[0]), { passive: false });
    document.addEventListener("touchmove", (e) => this.onDrag(e.touches[0]), { passive: false });
    document.addEventListener("touchend", () => this.endDrag());

    // Tekerlek ve diğer olaylar
    this.cardLine.addEventListener("wheel", (e) => this.onWheel(e));
    this.cardLine.addEventListener("selectstart", (e) => e.preventDefault());
    this.cardLine.addEventListener("dragstart", (e) => e.preventDefault());

    window.addEventListener("resize", () => this.calculateDimensions());
  }

  startDrag(e) {
    e.preventDefault();
    this.isDragging = true;
    this.isAnimating = false;
    this.lastMouseX = e.clientX;
    this.mouseVelocity = 0;

    const transform = window.getComputedStyle(this.cardLine).transform;
    if (transform !== "none") {
      const matrix = new DOMMatrix(transform);
      this.position = matrix.m41;
    }

    this.cardLine.style.animation = "none";
    this.cardLine.classList.add("dragging");
    // Sadece kapsayıcı içinde stil değişikliği yapılabilir ama global de kalabilir
    document.body.style.userSelect = "none"; 
    document.body.style.cursor = "grabbing";
  }

  onDrag(e) {
    if (!this.isDragging) return;
    e.preventDefault();
    const deltaX = e.clientX - this.lastMouseX;
    this.position += deltaX;
    this.mouseVelocity = deltaX * 60;
    this.lastMouseX = e.clientX;
    this.cardLine.style.transform = `translateX(${this.position}px)`;
    this.updateCardClipping();
  }

  endDrag() {
    if (!this.isDragging) return;
    this.isDragging = false;
    this.cardLine.classList.remove("dragging");

    if (Math.abs(this.mouseVelocity) > this.minVelocity) {
      this.velocity = Math.abs(this.mouseVelocity);
      this.direction = this.mouseVelocity > 0 ? 1 : -1;
    } else {
      this.velocity = 120;
    }
    this.isAnimating = true;
    
    document.body.style.userSelect = "";
    document.body.style.cursor = "";
  }

  animate() {
    const currentTime = performance.now();
    const deltaTime = (currentTime - this.lastTime) / 1000;
    this.lastTime = currentTime;

    if (this.isAnimating && !this.isDragging) {
      if (this.velocity > this.minVelocity) {
        this.velocity *= this.friction;
      } else {
        this.velocity = Math.max(this.minVelocity, this.velocity);
      }
      this.position += this.velocity * this.direction * deltaTime;
      this.updateCardPosition();
    }
    requestAnimationFrame(() => this.animate());
  }

    updateCardPosition() {
    // Eğer sola gidiyorsak ve ilk seti bitirdiysek -> Başa sar
    if (this.position <= -this.loopPoint) {
      this.position += this.loopPoint;
    } 
    
    // Eğer sağa gidiyorsak ve başa geldiysek -> Sona (kopyalara) sar
    else if (this.position > 0) {
      this.position -= this.loopPoint;
    }

    this.cardLine.style.transform = `translateX(${this.position}px)`;
    this.updateCardClipping();
  }

  onWheel(e) {
    e.preventDefault();
    const scrollSpeed = 40;
    const delta = e.deltaY > 0 ? scrollSpeed : -scrollSpeed;
    this.position += delta;
    this.updateCardPosition();
    this.updateCardClipping();
  }

  generateCode(width, height) {
    const randInt = (min, max) => Math.floor(Math.random() * (max - min + 1)) + min;
    const pick = (arr) => arr[randInt(0, arr.length - 1)];
    const header = ["// scanner", "/* processing */", "const DATA = 1;", "const MAX = 99;"];
    const library = [...header];
    
    for (let i = 0; i < 40; i++) {
        library.push(`const v${i} = (${randInt(1,99)}) * 0.${randInt(1,9)};`);
    }

    let flow = library.join(" ");
    flow = flow.replace(/\s+/g, " ").trim();
    const totalChars = width * height;
    
    while (flow.length < totalChars + width) {
      const extra = pick(library).replace(/\s+/g, " ").trim();
      flow += " " + extra;
    }

    let out = "";
    let offset = 0;
    for (let row = 0; row < height; row++) {
      let line = flow.slice(offset, offset + width);
      if (line.length < width) line = line + " ".repeat(width - line.length);
      out += line + (row < height - 1 ? "\n" : "");
      offset += width;
    }
    return out;
  }

  calculateCodeDimensions(cardWidth, cardHeight) {
    const fontSize = 11;
    const lineHeight = 13;
    const charWidth = 6;
    const width = Math.floor(cardWidth / charWidth);
    const height = Math.floor(cardHeight / lineHeight);
    return { width, height, fontSize, lineHeight };
  }

  createCardWrapper(index) {
    const wrapper = document.createElement("div");
    wrapper.className = "card-wrapper";
    const normalCard = document.createElement("div");
    normalCard.className = "card card-normal";

    // Resim Linkleri - Burayı kendi resimlerinle değiştirebilirsin
    const cardImages = [
      "https://cdn.prod.website-files.com/68789c86c8bc802d61932544/689f20b55e654d1341fb06f8_4.1.png",
      "https://cdn.prod.website-files.com/68789c86c8bc802d61932544/689f20b5a080a31ee7154b19_1.png",
      "https://cdn.prod.website-files.com/68789c86c8bc802d61932544/689f20b5c1e4919fd69672b8_3.png",
      "https://cdn.prod.website-files.com/68789c86c8bc802d61932544/689f20b5f6a5e232e7beb4be_2.png"
    ];

    const cardImage = document.createElement("img");
    cardImage.className = "card-image";
    cardImage.src = cardImages[index % cardImages.length];
    cardImage.onerror = () => {
        const canvas = document.createElement("canvas");
        canvas.width = 400; canvas.height = 250;
        const ctx = canvas.getContext("2d");
        ctx.fillStyle = "#222"; ctx.fillRect(0,0,400,250);
        cardImage.src = canvas.toDataURL();
    };

    normalCard.appendChild(cardImage);

    const asciiCard = document.createElement("div");
    asciiCard.className = "card card-ascii";
    const asciiContent = document.createElement("div");
    asciiContent.className = "ascii-content";
    const { width, height, fontSize, lineHeight } = this.calculateCodeDimensions(400, 250);
    asciiContent.style.fontSize = fontSize + "px";
    asciiContent.style.lineHeight = lineHeight + "px";
    asciiContent.textContent = this.generateCode(width, height);

    asciiCard.appendChild(asciiContent);
    wrapper.appendChild(normalCard);
    wrapper.appendChild(asciiCard);
    return wrapper;
  }

  updateCardClipping() {
    // Tarayıcı her zaman ekranın ortasındadır, ancak kapsayıcı içindeyse hesaplama değişebilir
    // Şimdilik global ekran ortası mantığını koruyoruz
    const scannerX = window.innerWidth / 2;
    const scannerWidth = 8;
    const scannerLeft = scannerX - scannerWidth / 2;
    const scannerRight = scannerX + scannerWidth / 2;
    let anyScanningActive = false;

    document.querySelectorAll(".card-wrapper").forEach((wrapper) => {
      const rect = wrapper.getBoundingClientRect();
      const cardLeft = rect.left;
      const cardRight = rect.right;
      const cardWidth = rect.width;
      const normalCard = wrapper.querySelector(".card-normal");
      const asciiCard = wrapper.querySelector(".card-ascii");

      if (cardLeft < scannerRight && cardRight > scannerLeft) {
        anyScanningActive = true;
        const scannerIntersectLeft = Math.max(scannerLeft - cardLeft, 0);
        const scannerIntersectRight = Math.min(scannerRight - cardLeft, cardWidth);
        const normalClipRight = (scannerIntersectLeft / cardWidth) * 100;
        const asciiClipLeft = (scannerIntersectRight / cardWidth) * 100;

        normalCard.style.setProperty("--clip-right", `${normalClipRight}%`);
        asciiCard.style.setProperty("--clip-left", `${asciiClipLeft}%`);

        if (!wrapper.hasAttribute("data-scanned") && scannerIntersectLeft > 0) {
          wrapper.setAttribute("data-scanned", "true");
          const scanEffect = document.createElement("div");
          scanEffect.className = "scan-effect";
          wrapper.appendChild(scanEffect);
          setTimeout(() => { if(scanEffect.parentNode) scanEffect.parentNode.removeChild(scanEffect); }, 600);
        }
      } else {
        if (cardRight < scannerLeft) {
          normalCard.style.setProperty("--clip-right", "100%");
          asciiCard.style.setProperty("--clip-left", "100%");
        } else if (cardLeft > scannerRight) {
          normalCard.style.setProperty("--clip-right", "0%");
          asciiCard.style.setProperty("--clip-left", "0%");
        }
        wrapper.removeAttribute("data-scanned");
      }
    });

    if (window.setScannerScanning) window.setScannerScanning(anyScanningActive);
  }

  updateAsciiContent() {
    document.querySelectorAll(".ascii-content").forEach((content) => {
      if (Math.random() < 0.15) {
        const { width, height } = this.calculateCodeDimensions(400, 250);
        content.textContent = this.generateCode(width, height);
      }
    });
  }

    populateCardLine() {
    this.cardLine.innerHTML = "";
    const cardsCount = 10; // Kart sayısını azalttım, çünkü kopyalayacağız (Toplam 20 olacak)
    
    // 1. Seti oluştur
    for (let i = 0; i < cardsCount; i++) {
      this.cardLine.appendChild(this.createCardWrapper(i));
    }

    // 2. Seti oluştur (Sonsuz döngü için kopyalama)
    // Mevcut içeriği alıp tekrar ekliyoruz
    const originalCards = Array.from(this.cardLine.children);
    originalCards.forEach(card => {
      const clone = card.cloneNode(true);
      this.cardLine.appendChild(clone);
    });
  }

  startPeriodicUpdates() {
    setInterval(() => this.updateAsciiContent(), 200);
    const updateClipping = () => {
      this.updateCardClipping();
      requestAnimationFrame(updateClipping);
    };
    updateClipping();
  }
}

/* Particle System (Three.js) - Arka Plan Parçacıkları */
class ParticleSystem {
  constructor() {
    this.canvas = document.getElementById("particleCanvas");
    if(!this.canvas) return; // Canvas yoksa dur
    this.scene = null;
    this.camera = null;
    this.renderer = null;
    this.particles = null;
    this.particleCount = 400;
    this.init();
  }

  init() {
    this.scene = new THREE.Scene();
    this.camera = new THREE.OrthographicCamera(-window.innerWidth / 2, window.innerWidth / 2, 125, -125, 1, 1000);
    this.camera.position.z = 100;
    this.renderer = new THREE.WebGLRenderer({ canvas: this.canvas, alpha: true, antialias: true });
    
    // Canvas boyutunu kapsayıcıya göre değil pencereye göre ayarlıyoruz (daha iyi performans için)
    this.renderer.setSize(window.innerWidth, 250);
    this.renderer.setClearColor(0x000000, 0);
    this.createParticles();
    this.animate();
    window.addEventListener("resize", () => this.onWindowResize());
  }

  createParticles() {
    const geometry = new THREE.BufferGeometry();
    const positions = new Float32Array(this.particleCount * 3);
    const colors = new Float32Array(this.particleCount * 3);
    const sizes = new Float32Array(this.particleCount);
    const velocities = new Float32Array(this.particleCount);
    
    const canvas = document.createElement("canvas");
    canvas.width = 100; canvas.height = 100;
    const ctx = canvas.getContext("2d");
    const gradient = ctx.createRadialGradient(50, 50, 0, 50, 50, 50);
    gradient.addColorStop(0.025, "#fff");
    gradient.addColorStop(0.1, `hsl(217, 61%, 33%)`);
    gradient.addColorStop(1, "transparent");
    ctx.fillStyle = gradient;
    ctx.beginPath(); ctx.arc(50, 50, 50, 0, Math.PI * 2); ctx.fill();
    const texture = new THREE.CanvasTexture(canvas);

    for (let i = 0; i < this.particleCount; i++) {
      positions[i * 3] = (Math.random() - 0.5) * window.innerWidth * 2;
      positions[i * 3 + 1] = (Math.random() - 0.5) * 250;
      positions[i * 3 + 2] = 0;
      colors[i * 3] = 1; colors[i * 3 + 1] = 1; colors[i * 3 + 2] = 1;
      sizes[i] = (Math.random() * 150 + 60) / 8;
      velocities[i] = Math.random() * 60 + 30;
    }

    geometry.setAttribute("position", new THREE.BufferAttribute(positions, 3));
    geometry.setAttribute("color", new THREE.BufferAttribute(colors, 3));
    geometry.setAttribute("size", new THREE.BufferAttribute(sizes, 1));
    this.velocities = velocities;
    const alphas = new Float32Array(this.particleCount);
    for (let i = 0; i < this.particleCount; i++) alphas[i] = (Math.random() * 8 + 2) / 10;
    geometry.setAttribute("alpha", new THREE.BufferAttribute(alphas, 1));
    this.alphas = alphas;

    const material = new THREE.ShaderMaterial({
      uniforms: { pointTexture: { value: texture }, size: { value: 15.0 } },
      vertexShader: `attribute float alpha; varying float vAlpha; varying vec3 vColor; uniform float size; void main() { vAlpha = alpha; vColor = color; vec4 mvPosition = modelViewMatrix * vec4(position, 1.0); gl_PointSize = size; gl_Position = projectionMatrix * mvPosition; }`,
      fragmentShader: `uniform sampler2D pointTexture; varying float vAlpha; varying vec3 vColor; void main() { gl_FragColor = vec4(vColor, vAlpha) * texture2D(pointTexture, gl_PointCoord); }`,
      transparent: true, blending: THREE.AdditiveBlending, depthWrite: false, vertexColors: true
    });

    this.particles = new THREE.Points(geometry, material);
    this.scene.add(this.particles);
  }

  animate() {
    requestAnimationFrame(() => this.animate());
    if (this.particles) {
      const positions = this.particles.geometry.attributes.position.array;
      for (let i = 0; i < this.particleCount; i++) {
        positions[i * 3] += this.velocities[i] * 0.016;
        if (positions[i * 3] > window.innerWidth / 2 + 100) {
          positions[i * 3] = -window.innerWidth / 2 - 100;
        }
      }
      this.particles.geometry.attributes.position.needsUpdate = true;
    }
    this.renderer.render(this.scene, this.camera);
  }

  onWindowResize() {
    this.camera.left = -window.innerWidth / 2;
    this.camera.right = window.innerWidth / 2;
    this.camera.updateProjectionMatrix();
    this.renderer.setSize(window.innerWidth, 250);
  }
}

/* Particle Scanner (Orta Işık Efekti) */
class ParticleScanner {
  constructor() {
    this.canvas = document.getElementById("scannerCanvas");
    if(!this.canvas) return;
    this.ctx = this.canvas.getContext("2d");
    this.w = window.innerWidth;
    this.h = 300;
    this.setupCanvas();
    this.animate();
    window.addEventListener("resize", () => this.onResize());
  }

  setupCanvas() {
    this.canvas.width = this.w;
    this.canvas.height = this.h;
  }

  onResize() {
    this.w = window.innerWidth;
    this.setupCanvas();
  }

  animate() {
    this.ctx.clearRect(0,0,this.w, this.h);
    // Çok basit bir ışık efekti (optimizasyon için)
    this.ctx.fillStyle = "rgba(255,255,255,0.05)";
    this.ctx.fillRect(this.w/2 - 1, 0, 2, this.h);
    requestAnimationFrame(() => this.animate());
  }

  setScanningActive(active) { /* Tarama durumunu burada işleyebilirsiniz */ }
}

let cardStream, particleSystem, particleScanner;

document.addEventListener("DOMContentLoaded", () => {
  cardStream = new CardStreamController();
  particleSystem = new ParticleSystem();
  particleScanner = new ParticleScanner();
  window.setScannerScanning = (active) => { if (particleScanner) particleScanner.setScanningActive(active); };
});

/* mozaik */

const images = Array.from(
  { length: 24 },
  (_, i) => `https://picsum.photos/600/600?random=${i + 1}`
);

const tiles = document.querySelectorAll(".tile");
let index = 0;

function shuffleArray(array) {
  let arr = array.slice();
  for (let i = arr.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [arr[i], arr[j]] = [arr[j], arr[i]];
  }
  return arr;
}

function animateTile(tile, imgIndex, delay) {
  setTimeout(() => {
    tile.style.backgroundImage = `url(${images[imgIndex % images.length]})`;
    tile.classList.add("show");
    
    // Daha uzun süre ekranda kalsın
    setTimeout(() => tile.classList.remove("show"), 9000);

  }, delay);
}

function animateGridContinuously() {
  const order = shuffleArray([...Array(tiles.length).keys()]);
  
  // Kartların geçişi daha yavaş sırayla olsun (1.2 saniye aralık)
  order.forEach((i, idx) => {
    animateTile(tiles[i], index + idx, idx * 1200);
  });

  index = (index + tiles.length) % images.length;
}

// grid değişim süresi 12 saniye
setInterval(animateGridContinuously, 10000);
animateGridContinuously();

/* === SERVICE CARD REVEAL === */
const revealServiceCards = document.querySelectorAll(
    ".reveal-left, .reveal-right, .reveal-fade"
);

const serviceObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            setTimeout(() => {
                entry.target.classList.add("visible");
            }, entry.target.dataset.delay || 0);
        }
    });
}, {
    threshold: 0.2
});

revealServiceCards.forEach(el => serviceObserver.observe(el));


