<!-- Navbar JS -->
<script src="assets/js/navbar.js"></script>
<!-- Bootstrap 5.3.3 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        startEvent: 'DOMContentLoaded',
        once: false,
        anchorPlacement: 'bottom-bottom',
    });
    setTimeout(function() {
        AOS.refresh();
    }, 2500); // 1500 milliseconds = 1.5 seconds

    $('.owl-carousel').owlCarousel({
        loop: true, // Enables infinite looping
        margin: 1, // Space between items
        autoplay: true, // Enables auto-play
        autoWidth: false,
        autoplayTimeout: 1500, // Time in milliseconds between auto-play transitions
        autoplayHoverPause: true, // Pauses on mouse hover
        dots: false,
        responsive: {
            0: {
                items: 2 // Items visible at widths >= 0px
            },
            600: {
                items: 4 // Items visible at widths >= 600px
            },
            1000: {
                items: 6 // Items visible at widths >= 1000px
            }
        }
    });
</script>
</body>

</html>