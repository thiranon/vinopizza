<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        
        <?php if (is_front_page()) : ?>
            <!-- Hero Slider -->
            <header class="relative max-screen-1080p overflow-hidden">
                <div class="swiper main-slider h-[60vh] md:h-[80vh]">
                    <div class="swiper-wrapper">
                        <!-- We'll make this dynamic with ACF later -->
                        <div class="swiper-slide relative">
                            <img src="https://images.unsplash.com/photo-1510626176961-4b57d4fbad03?auto=format&fit=crop&q=80&w=1920" class="w-full h-full object-cover">
                            <div class="absolute inset-0 flex items-center justify-center text-center">
                                <div class="px-4">
                                    <h2 class="text-4xl md:text-6xl text-white mb-4">Welcome to Vino Pizza</h2>
                                    <p class="text-lg md:text-xl gold-text italic">The finest wine selection in Bangkok</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide relative">
                            <img src="https://images.unsplash.com/photo-1541745537411-b8046dc6d66c?auto=format&fit=crop&q=80&w=1920" class="w-full h-full object-cover">
                            <div class="absolute inset-0 flex items-center justify-center text-center">
                                <div class="px-4">
                                    <h2 class="text-4xl md:text-6xl text-white mb-4">Authentic Wood-Fired Pizza</h2>
                                    <p class="text-lg md:text-xl gold-text italic">Crafted with passion and premium ingredients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </header>

            <section id="wine" class="py-20 px-6">
                <div class="text-center mb-16">
                    <h2 class="text-4xl gold-text mb-2">Our Wine Selection</h2>
                    <div class="w-20 h-1 bg-gold mx-auto"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <?php if (have_rows('wine_list')): ?>
                        <?php while (have_rows('wine_list')): the_row();
                            $name = get_sub_field('name');
                            $desc = get_sub_field('description');
                            $price = get_sub_field('price');
                            $image = get_sub_field('image');
                            ?>
                            <div class="bg-zinc-900 border border-white/5 p-6 rounded-lg text-center hover:border-gold/50 transition">
                                <div class="h-64 bg-neutral-800 mb-4 rounded overflow-hidden flex items-center justify-center text-zinc-500">
                                    <?php if ($image): ?>
                                        <img src="<?php echo esc_url($image); ?>" class="w-full h-full object-cover" alt="<?php echo esc_attr($name); ?>">
                                    <?php else: ?>
                                        Wine Image
                                    <?php endif; ?>
                                </div>
                                <h3 class="text-xl mb-2"><?php echo esc_html($name); ?></h3>
                                <p class="text-zinc-400 text-sm mb-4"><?php echo esc_html($desc); ?></p>
                                <span class="gold-text font-bold"><?php echo esc_html($price); ?></span>
                            </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <!-- Fallback static content -->
                        <div class="bg-zinc-900 border border-white/5 p-6 rounded-lg text-center">
                            <div class="h-64 bg-neutral-800 mb-4 rounded flex items-center justify-center text-zinc-500">Wine Image</div>
                            <h3 class="text-xl mb-2">Premium Red Wine</h3>
                            <p class="text-zinc-400 text-sm mb-4">Vintage 2018 - Italy</p>
                            <span class="gold-text font-bold">฿2,400</span>
                        </div>
                    <?php endif; ?>
                </div>
            </section>

            <section id="food" class="py-20 px-6 bg-zinc-950">
                <div class="text-center mb-16">
                    <h2 class="text-4xl gold-text mb-2">Signature Pizza</h2>
                    <div class="w-20 h-1 bg-gold mx-auto"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    <?php if (have_rows('pizza_list')): ?>
                        <?php while (have_rows('pizza_list')): the_row(); ?>
                            <div class="flex justify-between border-b border-white/10 pb-4">
                                <div>
                                    <h3 class="text-xl uppercase"><?php the_sub_field('name'); ?></h3>
                                    <p class="text-zinc-500 text-sm"><?php the_sub_field('description'); ?></p>
                                </div>
                                <span class="gold-text"><?php the_sub_field('price'); ?></span>
                            </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <div class="flex justify-between border-b border-white/10 pb-4">
                            <div>
                                <h3 class="text-xl uppercase">Truffle & Mushroom</h3>
                                <p class="text-zinc-500 text-sm">Mozzarella, Black Truffle Oil, Wild Mushroom</p>
                            </div>
                            <span class="gold-text">฿490</span>
                        </div>
                        <div class="flex justify-between border-b border-white/10 pb-4">
                            <div>
                                <h3 class="text-xl uppercase">Parma Ham Special</h3>
                                <p class="text-zinc-500 text-sm">24-Month Aged Parma Ham, Rocket, Parmesan</p>
                            </div>
                            <span class="gold-text">฿550</span>
                        </div>
                    <?php endif; ?>
                </div>
            </section>

            <section id="contact" class="py-20 px-6 grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-4xl gold-text mb-6">Visit Us</h2>
                    <p class="mb-4 text-zinc-400">59 Moo Mittraphap Nong Bon, Prawet, Bangkok 10250</p>
                    <p class="mb-2"><strong>Tel:</strong> 080-008-2014</p>
                    <p class="mb-6"><strong>Line:</strong> @Vinothek</p>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-white/10 p-3 rounded-full hover:bg-gold transition">FB</a>
                        <a href="#" class="bg-white/10 p-3 rounded-full hover:bg-gold transition">IG</a>
                    </div>
                </div>
                <div class="h-80 bg-neutral-800 rounded-lg overflow-hidden">
                    <div class="w-full h-full flex items-center justify-center text-zinc-500">Google Maps Interface</div>
                </div>
            </section>

            <section class="py-20 px-6 border-t border-white/5">
                <h2 class="text-3xl text-center mb-10">Activities & Moments</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <?php if (have_rows('activities_gallery')): ?>
                        <?php while (have_rows('activities_gallery')): the_row();
                            $img = get_sub_field('image'); ?>
                            <div class="aspect-square bg-zinc-800 rounded overflow-hidden">
                                <img src="<?php echo esc_url($img); ?>" class="w-full h-full object-cover">
                            </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <div class="aspect-square bg-zinc-800 rounded"></div>
                        <div class="aspect-square bg-zinc-800 rounded"></div>
                        <div class="aspect-square bg-zinc-800 rounded"></div>
                        <div class="aspect-square bg-zinc-800 rounded"></div>
                    <?php endif; ?>
                </div>
            </section>
        <?php else : ?>
            <section class="py-20 px-6">
                <div class="max-w-4xl mx-auto">
                    <h1 class="text-4xl gold-text mb-8"><?php the_title(); ?></h1>
                    <div class="prose prose-invert max-w-none">
                        <?php the_content(); ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>