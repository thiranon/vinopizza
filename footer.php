</div> <!-- end max-screen-1080p -->

<footer class="bg-black py-8 text-center text-zinc-600 text-sm">
    <p>&copy;
        <?php echo date('Y'); ?>
        <?php bloginfo('name'); ?> - All Rights Reserved.
    </p>
</footer>

<?php wp_footer(); ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (document.querySelector('.main-slider')) {
            const swiper = new Swiper('.main-slider', {
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
            });
        }
    });
</script>
</body>

</html>