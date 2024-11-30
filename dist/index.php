<?php include("includes/header.php") ?>
<!-- HOME -->
<div class="home md:h-screen h-full max-md:mb-10">
    <div class="container mx-auto grid grid-cols-2 h-full max-lg:mt-5">
        <div class="flex items-center text-5xl font-bold lg:col-span-1 col-span-2 max-sm:mb-10">
            <div>
                <div data-aos="fade-down" data-aos-duration="1000">Hello,</div>
                <div data-aos="fade-right" data-aos-duration="1000">I am <span style="color: #d268cc;">Christian Andrew,</span></div>
                <div data-aos="fade-up" data-aos-duration="1500">An Inspiring <span style="color: #d268cc;">Website</span></div>
                <div data-aos="fade-up" data-aos-duration="1500"><span style="color: #d268cc;">Developer</span>.</div>
                <div class="mt-6 text-4xl" data-aos="fade-up" data-aos-duration="2000">
                    <a href="https:/facebook.com/chazpascual09" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/christian-andrew-pascual-0b2092264/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://github.com/Achetious" target="_blank"><i class="fa-brands fa-github"></i></a>
                </div>
                <div class="mt-6" data-aos="fade-up" data-aos-duration="2000">
                    <a href="assets/file/Christian_Andrew_Pascual-CV.pdf" download="Pascual,_Christian_Andrew-CV.pdf">
                        <button
                            class="bg-black border border-[#d268cc] text-center w-[211px] rounded-2xl h-14 relative text-white text-xl font-semibold group"
                            type="button">
                            <div
                                class="bg-[#d268cc] rounded-xl h-12 w-1/4 flex items-center justify-center absolute left-1 top-[4px] group-hover:w-[200px] z-10 duration-500">
                                <i class="fa-solid fa-download"></i>
                            </div>
                            <p class="translate-x-6">GET RESUME</p>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center lg:col-span-1 col-span-2" data-aos="fade-left" data-aos-duration="1500">
            <div class="card">
                <div class="titlebar flex justify-between align-middle">
                    <div class="inline-block text-white px-2"><i class="fa-solid fa-earth-americas"></i>&nbsp;Portfolio</div>
                    <span class="buttons">
                        <button class="minimize">
                            <div class="flex justify-center">
                                <svg x="0px" y="0px" viewBox="0 0 10.2 1">
                                    <rect x="0" y="50%" width="10.2" height="1"></rect>
                                </svg>
                            </div>
                        </button>
                        <button class="maximize">
                            <div class="flex justify-center">
                                <svg viewBox="0 0 10 10">
                                    <path d="M0,0v10h10V0H0z M9,9H1V1h8V9z"></path>
                                </svg>
                            </div>
                        </button>
                        <button class="close">
                            <div class="flex justify-center">
                                <svg viewBox="0 0 10 10">
                                    <polygon points="10.2,0.7 9.5,0 5.1,4.4 0.7,0 0,0.7 4.4,5.1 0,9.5 0.7,10.2 5.1,5.8 9.5,10.2 10.2,9.5 5.8,5.1"></polygon>
                                </svg>
                            </div>
                        </button>
                    </span>
                </div>
                <div class="cppcode">
                    <pre id="pre">
      <code>
    <span class="s1">&lt;!DOCTYPE html&gt;</span>
    <span class="s2">&lt;html&gt;</span>
    <span class="s3">&lt;head&gt;</span>
        <span class="s2">&lt;meta</span> charset=<span class="s7">"UTF-8"</span><span class="s2">&gt;</span>
        <span class="s2">&lt;meta</span> name=<span class="s7">"viewport"</span> content=<span class="s7">"width=device-width, initial-scale=1.0"</span><span class="s2">&gt;</span>
        <span class="s2">&lt;title&gt;</span><span class="s5">Portfolio</span><span class="s2">&lt;/title&gt;</span>
        <span class="s4">&lt;style&gt;</span>
            <span class="s6">body</span> <span class="curlies">{</span>
                <span class="s6">background-color</span><span class="operator">:</span> <span class="s5">#f0f0f0</span><span class="sc">;</span>
            <span class="curlies">}</span>
        <span class="s4">&lt;/style&gt;</span>
    <span class="s3">&lt;/head&gt;</span>
    <span class="s2">&lt;body&gt;</span>
        <span class="s6">&lt;h1&gt;</span><span class="s1">Hello, World!</span><span class="s6">&lt;/h1&gt;</span>
        <span class="s6">&lt;h1&gt;</span><span class="s1">This is my Portfolio!</span>
        <span class="s6">&lt;h1&gt;</span><span class="s1">Enjoy!</span><span class="s6">&lt;/h1&gt;</span>
    <span class="s2">&lt;/body&gt;</span>
    <span class="s2">&lt;/html&gt;</span>
      </code>
    </pre>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SKILLS -->
<div class="skills section bg-[#161616]">
    <div id="skills"></div>
    <div class="h-20 clear-both block"></div>
    <hr class="gradient-hr w-3/4 mx-auto">
    <div class="mx-auto text-center text-4xl font-bold mt-16 mb-16 text-[#d268cc]" data-aos="fade-up" data-aos-duration="1000">
        <span class="rounded-xl px-3 py-1 bg-gradient-to-br from-[#6b3268] to-[#311930]">SKILLS</span>
    </div>
    <div class="owl-carousel owl-theme mx-auto flex justify-center mt-10 pb-14 text-9xl" data-aos="fade-up" data-aos-duration="1000">
        <div class="item flex justify-center items-center flex-col">
            <img src="assets/img/1.png" alt="HTML">
            <span class="text-xl font-bold mt-3">HTML 5</span>
        </div>
        <div class="item flex justify-center items-center flex-col">
            <img src="assets/img/2.png" alt="HTML">
            <span class="text-xl font-bold mt-3">CSS 3</span>
        </div>
        <div class="item flex justify-center items-center flex-col">
            <img src="assets/img/3.png" alt="HTML">
            <span class="text-xl font-bold mt-3">JAVASCRIPT</span>
        </div>
        <div class="item flex justify-center items-center flex-col">
            <img src="assets/img/4.png" alt="HTML">
            <span class="text-xl font-bold mt-3">BOOTSTRAP</span>
        </div>
        <div class="item flex justify-center items-center flex-col">
            <img src="assets/img/6.png" alt="HTML">
            <span class="text-xl font-bold mt-3">PHP</span>
        </div>
        <div class="item flex justify-center items-center flex-col">
            <img src="assets/img/5.png" alt="HTML">
            <span class="text-xl font-bold mt-3">FIGMA</span>
        </div>
        <div class="item flex justify-center items-center flex-col">
            <img src="assets/img/7.png" alt="HTML">
            <span class="text-xl font-bold mt-3">MYSQL</span>
        </div>
        <div class="item flex justify-center items-center flex-col">
            <img src="assets/img/8.png" alt="HTML">
            <span class="text-xl font-bold mt-3">GIT</span>
        </div>
    </div>
    <div class="pb-20">
        <hr class="gradient-hr w-3/4 mx-auto">
    </div>
</div>
<div class="clear-both">
</div>
<!-- PROJECTS -->
<div id="projects" class="projects section">
    <div class="mx-auto text-center text-4xl font-bold pt-24 mb-10 text-[#d268cc]" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center">
        PROJECTS
    </div>
    <div class="container mx-auto">
        <div class="grid grid-cols-2 mb-24 items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center">
            <div class="col-span-2 lg:col-span-1 text-justify px-10 text-lg">
                <div class="text-3xl text-[#d268cc] font-bold pb-1">
                    PUP - Medical Services Department System
                </div>
                <span class="text-[#d268cc]">Co-developed</span> a Medical Services Department System using PHP, HTML, CSS, JavaScript, and MySQL to streamline clinic operations. The system allows nurses to perform triage assessments, administer medicines linked to inventory, and manage patient follow-ups. Doctors can issue prescriptions, referrals, and lab requests, with patient records and medical histories accessible for viewing and downloading. It includes features for categorizing patient statuses, generating reports, and automating low-stock medicine notifications. The system enhances efficiency in managing patient care, appointments, and medical documentation.
            </div>
            <div class="col-span-2 lg:col-span-1 flex items-center px-10">
                <img src="assets/img/home.png" class="w-3/4 h-auto" alt="">
            </div>
        </div>
        <div class="grid grid-cols-2 mb-24 items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center">
            <div class="col-span-2 lg:col-span-1 flex items-center">
                <img src="assets/img/home.png" class="w-3/4 h-auto" alt="">
            </div>
            <div class="col-span-2 lg:col-span-1 text-justify px-10 text-lg">
                <div class="text-3xl text-[#d268cc] font-bold pb-1">
                    Piper Warrior II - Aircraft Information Website with QR Code and Press to Talk Functionality (Mobile Website)
                </div>
                <span class="text-[#d268cc]">Co-developed</span> a website using PHP, HTML, CSS, JavaScript, and MySQL that provides detailed information about the Piper Warrior II PA-28 airplane. The website displays the aircraft's introduction, description, and specifications, addressing the need for an interactive platform to share aviation knowledge. It features viewable and downloadable content for enhanced user convenience, integrates a scannable QR code for easy access and sharing, and includes a press-to-talk functionality that allows users to navigate the site and listen to its content through voice commands.
            </div>
        </div>
        <div class="grid grid-cols-2 mb-24 items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center">
            <div class="col-span-2 lg:col-span-1 text-justify px-10 text-lg">
                <div class="text-3xl text-[#d268cc] font-bold pb-1">
                    Physical Plant and Facilities System
                </div>
                <span class="text-[#d268cc]">Co-developed</span> a website using PHP, HTML, CSS, JS, and MySQL that aims to address the challenges associated with the management and maintenance of the college's physical infrastructure. With the increasing complexity of facility operations and the need for enhanced safety and security measures, there is a growing demand for an integrated web-based system that can streamline processes, improve resource allocation, and ensure a secure environment for students, staff, and visitors.
            </div>
            <div class="col-span-2 lg:col-span-1 flex items-center">
                <img src="assets/img/home.png" class="w-3/4 h-auto" alt="">
            </div>
        </div>
        <div class="grid grid-cols-2 mb-24 items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center">
            <div class="col-span-2 lg:col-span-1 flex items-center">
                <img src="assets/img/home.png" class="w-3/4 h-auto" alt="">
            </div>
            <div class="col-span-2 lg:col-span-1 text-justify px-10 text-lg">
                <div class="text-3xl text-[#d268cc] font-bold pb-1">
                    Vehicle Repair and Maintenance Management System
                </div>
                <span class="text-[#d268cc]">Co-developed</span> a website using PHP, HTML, CSS, JS, and MySQL where it lets clients easily request services, permits admins to approve requests, and assigns tasks to mechanics for quick completion.
            </div>
        </div>
        <div class="grid grid-cols-2 mb-24 items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center">
            <div class="col-span-2 lg:col-span-1 text-justify px-10 text-lg">
                <div class="text-3xl text-[#d268cc] font-bold pb-1">
                    Social Networking Platform
                </div>
                <span class="text-[#d268cc]">Developed</span> a website using PHP, HTML, CSS, JS, and MySQL. A website for moms, chefs, students, and food enthusiasts devoted to exploring the culinary arts. Dedicated to advancing the foodservice field through education and training. It seeks to provide exceptional information on culinary career planning, industry trends, and culinary techniques for moms, students, novice cooks, as well as experienced chefs.
            </div>
            <div class="col-span-2 lg:col-span-1 flex items-center">
                <img src="assets/img/home.png" class="w-3/4 h-auto" alt="">
            </div>
        </div>
        <div class="grid grid-cols-2 mb-24 items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center">
            <div class="col-span-2 lg:col-span-1 flex items-center">
                <img src="assets/img/home.png" class="w-3/4 h-auto" alt="">
            </div>
            <div class="col-span-2 lg:col-span-1 text-justify px-10 text-lg">
                <div class="text-3xl text-[#d268cc] font-bold pb-1">
                    Thrift Shop E-commerce System
                </div>
                <span class="text-[#d268cc]">Developed</span> an online e-commerce website using PHP, HTML, CSS, JS, and MySQL that aims to provide a thrilling and enjoyable platform for thrift shoppers, enhancing the experience for users.
            </div>
        </div>
    </div>
</div>
<div id="services" class="services section">
    <div class="mx-auto text-center text-4xl font-bold pt-24 mb-10 text-[#d268cc]" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center">
        SERVICES
    </div>
    <div class="container mx-auto">
        <div class="grid grid-cols-2 mb-24 items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center">
            <div class="col-span-2 lg:col-span-1 text-justify px-10 text-lg">
                <div class="text-3xl text-[#d268cc] font-bold pb-1">
                    Social Networking Platform
                </div>
                <span class="text-[#d268cc]">Developed</span> a website using PHP, HTML, CSS, JS, and MySQL. A website for moms, chefs, students, and food enthusiasts devoted to exploring the culinary arts. Dedicated to advancing the foodservice field through education and training. It seeks to provide exceptional information on culinary career planning, industry trends, and culinary techniques for moms, students, novice cooks, as well as experienced chefs.
            </div>
            <div class="col-span-2 lg:col-span-1 flex items-center">
                <img src="assets/img/home.png" class="w-3/4 h-auto" alt="">
            </div>
        </div>
        <div class="grid grid-cols-2 mb-24 items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center">
            <div class="col-span-2 lg:col-span-1 flex items-center">
                <img src="assets/img/home.png" class="w-3/4 h-auto" alt="">
            </div>
            <div class="col-span-2 lg:col-span-1 text-justify px-10 text-lg">
                <div class="text-3xl text-[#d268cc] font-bold pb-1">
                    Thrift Shop E-commerce System
                </div>
                <span class="text-[#d268cc]">Developed</span> an online e-commerce website using PHP, HTML, CSS, JS, and MySQL that aims to provide a thrilling and enjoyable platform for thrift shoppers, enhancing the experience for users.
            </div>
        </div>
    </div>
</div>
<div id="about" class="about section">
    <div class="mx-auto text-center text-4xl font-bold pt-24 mb-10 text-[#d268cc]" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center">
        ABOUT
    </div>
    <div class="container mx-auto">
        <div class="grid grid-cols-2 mb-24 items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center">
            <div class="col-span-2 lg:col-span-1 text-justify px-10 text-lg">
                <div class="text-3xl text-[#d268cc] font-bold pb-1">
                    Social Networking Platform
                </div>
                <span class="text-[#d268cc]">Developed</span> a website using PHP, HTML, CSS, JS, and MySQL. A website for moms, chefs, students, and food enthusiasts devoted to exploring the culinary arts. Dedicated to advancing the foodservice field through education and training. It seeks to provide exceptional information on culinary career planning, industry trends, and culinary techniques for moms, students, novice cooks, as well as experienced chefs.
            </div>
            <div class="col-span-2 lg:col-span-1 flex items-center">
                <img src="assets/img/home.png" class="w-3/4 h-auto" alt="">
            </div>
        </div>
        <div class="grid grid-cols-2 mb-24 items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center">
            <div class="col-span-2 lg:col-span-1 flex items-center">
                <img src="assets/img/home.png" class="w-3/4 h-auto" alt="">
            </div>
            <div class="col-span-2 lg:col-span-1 text-justify px-10 text-lg">
                <div class="text-3xl text-[#d268cc] font-bold pb-1">
                    Thrift Shop E-commerce System
                </div>
                <span class="text-[#d268cc]">Developed</span> an online e-commerce website using PHP, HTML, CSS, JS, and MySQL that aims to provide a thrilling and enjoyable platform for thrift shoppers, enhancing the experience for users.
            </div>
        </div>
    </div>
</div>
<div id="contact" class="contact section">
    <div class="mx-auto text-center text-4xl font-bold pt-24 mb-10 text-[#d268cc]" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center">
        CONTACT
    </div>
    <div class="container mx-auto">
        <div class="grid grid-cols-2 mb-24 items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center">
            <div class="col-span-2 lg:col-span-1 text-justify px-10 text-lg">
                <div class="text-3xl text-[#d268cc] font-bold pb-1">
                    Social Networking Platform
                </div>
                <span class="text-[#d268cc]">Developed</span> a website using PHP, HTML, CSS, JS, and MySQL. A website for moms, chefs, students, and food enthusiasts devoted to exploring the culinary arts. Dedicated to advancing the foodservice field through education and training. It seeks to provide exceptional information on culinary career planning, industry trends, and culinary techniques for moms, students, novice cooks, as well as experienced chefs.
            </div>
            <div class="col-span-2 lg:col-span-1 flex items-center">
                <img src="assets/img/home.png" class="w-3/4 h-auto" alt="">
            </div>
        </div>
        <div class="grid grid-cols-2 mb-24 items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center">
            <div class="col-span-2 lg:col-span-1 flex items-center">
                <img src="assets/img/home.png" class="w-3/4 h-auto" alt="">
            </div>
            <div class="col-span-2 lg:col-span-1 text-justify px-10 text-lg">
                <div class="text-3xl text-[#d268cc] font-bold pb-1">
                    Thrift Shop E-commerce System
                </div>
                <span class="text-[#d268cc]">Developed</span> an online e-commerce website using PHP, HTML, CSS, JS, and MySQL that aims to provide a thrilling and enjoyable platform for thrift shoppers, enhancing the experience for users.
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php") ?>