<?php
/**
 * Main template file for the Déluxara theme.
 *
 * @package Deluxara
 */
get_header();
?>
    <section id="home" class="hero">
        <div class="hero-content">
            <div class="hero-subtitle"><?php esc_html_e( 'Digital Luxury Atelier', 'deluxara' ); ?></div>
            <h1 class="hero-title"><?php esc_html_e( 'DÉLUXARA', 'deluxara' ); ?></h1>
            <p class="hero-tagline" data-text="<?php esc_attr_e( 'Elegance, Intelligently Designed', 'deluxara' ); ?>"><?php esc_html_e( 'Elegance, Intelligently Designed', 'deluxara' ); ?></p>
            <a href="#contact" class="cta-button"><?php esc_html_e( 'Enter The Experience', 'deluxara' ); ?></a>
        </div>
        <?php for ( $i = 1; $i <= 9; $i++ ) : ?>
            <div class="particle" style="left: <?php echo esc_attr( $i * 10 ); ?>%; animation-delay: <?php echo esc_attr( ( $i - 1 ) * 2 ); ?>s;"></div>
        <?php endfor; ?>
    </section>

    <section id="services" class="services">
        <div class="container">
            <h2 class="section-title fade-in"><?php esc_html_e( 'The Atelier', 'deluxara' ); ?></h2>
            <div class="services-grid">
                <div class="service-card fade-in">
                    <div class="service-icon">💎</div>
                    <h3 class="service-title"><?php esc_html_e( 'Digital Branding Atelier', 'deluxara' ); ?></h3>
                    <p class="service-description"><?php esc_html_e( 'We design brands that are remembered like art. Each identity crafted with the precision of haute couture and the intelligence of modern strategy.', 'deluxara' ); ?></p>
                </div>
                <div class="service-card fade-in">
                    <div class="service-icon">🎭</div>
                    <h3 class="service-title"><?php esc_html_e( 'Strategic Marketing for Luxury', 'deluxara' ); ?></h3>
                    <p class="service-description"><?php esc_html_e( 'We turn visibility into desire. Sophisticated campaigns that speak to discerning audiences with the subtlety and power of true luxury.', 'deluxara' ); ?></p>
                </div>
                <div class="service-card fade-in">
                    <div class="service-icon">✨</div>
                    <h3 class="service-title"><?php esc_html_e( '3D Website Creation', 'deluxara' ); ?></h3>
                    <p class="service-description"><?php esc_html_e( 'We make elegance move. Immersive digital experiences that blur the line between technology and artistry, designed for the future of luxury.', 'deluxara' ); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio">
        <div class="container">
            <h2 class="section-title fade-in"><?php esc_html_e( 'Curated Excellence', 'deluxara' ); ?></h2>
            <p class="section-subtitle fade-in"><?php esc_html_e( 'A selection of our most distinguished digital creations', 'deluxara' ); ?></p>

            <div class="portfolio-grid">
                <div class="portfolio-item fade-in">
                    <div class="portfolio-image">
                        <div class="portfolio-placeholder">
                            <div class="luxury-icon">👑</div>
                            <div class="portfolio-overlay">
                                <h4><?php esc_html_e( 'Maison Éclat', 'deluxara' ); ?></h4>
                                <p><?php esc_html_e( 'Haute Couture Digital Identity', 'deluxara' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-details">
                        <h3><?php esc_html_e( 'Maison Éclat', 'deluxara' ); ?></h3>
                        <p><?php esc_html_e( 'A complete digital transformation for a Parisian fashion house, featuring immersive 3D experiences and AI-powered personalization.', 'deluxara' ); ?></p>
                        <div class="portfolio-tags">
                            <span><?php esc_html_e( 'Branding', 'deluxara' ); ?></span>
                            <span><?php esc_html_e( '3D Design', 'deluxara' ); ?></span>
                            <span><?php esc_html_e( 'E-commerce', 'deluxara' ); ?></span>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item fade-in">
                    <div class="portfolio-image">
                        <div class="portfolio-placeholder">
                            <div class="luxury-icon">💍</div>
                            <div class="portfolio-overlay">
                                <h4><?php esc_html_e( 'Lumière Jewels', 'deluxara' ); ?></h4>
                                <p><?php esc_html_e( 'Interactive Diamond Showcase', 'deluxara' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-details">
                        <h3><?php esc_html_e( 'Lumière Jewels', 'deluxara' ); ?></h3>
                        <p><?php esc_html_e( 'Revolutionary jewelry visualization platform with real-time ray tracing and virtual try-on capabilities.', 'deluxara' ); ?></p>
                        <div class="portfolio-tags">
                            <span><?php esc_html_e( 'WebGL', 'deluxara' ); ?></span>
                            <span><?php esc_html_e( 'AR/VR', 'deluxara' ); ?></span>
                            <span><?php esc_html_e( 'Luxury Tech', 'deluxara' ); ?></span>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item fade-in">
                    <div class="portfolio-image">
                        <div class="portfolio-placeholder">
                            <div class="luxury-icon">🏛️</div>
                            <div class="portfolio-overlay">
                                <h4><?php esc_html_e( 'Château Noir', 'deluxara' ); ?></h4>
                                <p><?php esc_html_e( 'Premium Wine Experience', 'deluxara' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-details">
                        <h3><?php esc_html_e( 'Château Noir', 'deluxara' ); ?></h3>
                        <p><?php esc_html_e( 'Immersive vineyard storytelling through cinematic web experiences and sommelier-guided virtual tastings.', 'deluxara' ); ?></p>
                        <div class="portfolio-tags">
                            <span><?php esc_html_e( 'Storytelling', 'deluxara' ); ?></span>
                            <span><?php esc_html_e( 'Video', 'deluxara' ); ?></span>
                            <span><?php esc_html_e( 'Interactive', 'deluxara' ); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="process">
        <div class="container">
            <h2 class="section-title fade-in"><?php esc_html_e( 'The Déluxara Method', 'deluxara' ); ?></h2>
            <p class="section-subtitle fade-in"><?php esc_html_e( 'Our signature approach to digital luxury', 'deluxara' ); ?></p>

            <div class="process-timeline">
                <?php
                $process_steps = array(
                    array(
                        'number'  => '01',
                        'title'   => __( 'Discovery & Vision', 'deluxara' ),
                        'content' => __( 'We begin with intimate conversations to understand your brand\'s soul. Through strategic workshops and cultural immersion, we uncover the essence that will define your digital presence.', 'deluxara' ),
                        'details' => array( __( 'Brand Archaeology', 'deluxara' ), __( 'Market Intelligence', 'deluxara' ), __( 'Vision Crafting', 'deluxara' ) ),
                    ),
                    array(
                        'number'  => '02',
                        'title'   => __( 'Conceptual Architecture', 'deluxara' ),
                        'content' => __( 'Like master architects, we design the invisible structure that will support your brand\'s digital mansion. Every interaction, every transition is meticulously planned.', 'deluxara' ),
                        'details' => array( __( 'Experience Mapping', 'deluxara' ), __( 'Technical Strategy', 'deluxara' ), __( 'Aesthetic Framework', 'deluxara' ) ),
                    ),
                    array(
                        'number'  => '03',
                        'title'   => __( 'Artisanal Creation', 'deluxara' ),
                        'content' => __( 'Our atelier comes alive as designers, developers, and strategists collaborate to bring your vision to life with the precision of Swiss watchmaking.', 'deluxara' ),
                        'details' => array( __( 'Luxury Design', 'deluxara' ), __( 'Advanced Development', 'deluxara' ), __( 'Quality Assurance', 'deluxara' ) ),
                    ),
                    array(
                        'number'  => '04',
                        'title'   => __( 'Orchestrated Launch', 'deluxara' ),
                        'content' => __( 'Your digital debut is choreographed like a premiere at the Opera House. Every detail is perfected, every moment optimized for maximum impact.', 'deluxara' ),
                        'details' => array( __( 'Performance Optimization', 'deluxara' ), __( 'Strategic Deployment', 'deluxara' ), __( 'Ongoing Excellence', 'deluxara' ) ),
                    ),
                );

                foreach ( $process_steps as $step ) :
                    ?>
                    <div class="process-step fade-in">
                        <div class="step-number"><?php echo esc_html( $step['number'] ); ?></div>
                        <div class="step-content">
                            <h3><?php echo esc_html( $step['title'] ); ?></h3>
                            <p><?php echo esc_html( $step['content'] ); ?></p>
                            <div class="step-details">
                                <?php foreach ( $step['details'] as $detail ) : ?>
                                    <span><?php echo esc_html( $detail ); ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="testimonials" class="testimonials">
        <div class="container">
            <h2 class="section-title fade-in"><?php esc_html_e( 'Voices of Excellence', 'deluxara' ); ?></h2>

            <div class="testimonials-carousel">
                <?php
                $testimonials = array(
                    array(
                        'quote'  => __( '“Déluxara didn\'t just redesign our website—they reimagined our entire digital presence. The result is nothing short of poetry in motion.”', 'deluxara' ),
                        'name'   => __( 'Isabella Marchetti', 'deluxara' ),
                        'title'  => __( 'Creative Director, Maison Éclat', 'deluxara' ),
                        'avatar' => 'IM',
                        'active' => true,
                    ),
                    array(
                        'quote'  => __( '“Working with Déluxara was like collaborating with digital couturiers. They understand that luxury is in the details that others overlook.”', 'deluxara' ),
                        'name'   => __( 'Alexandre Dubois', 'deluxara' ),
                        'title'  => __( 'Founder, Lumière Jewels', 'deluxara' ),
                        'avatar' => 'AD',
                        'active' => false,
                    ),
                    array(
                        'quote'  => __( '“The sophistication and intelligence behind every interaction on our new platform has elevated our brand to heights we never imagined possible.”', 'deluxara' ),
                        'name'   => __( 'Victoria Sterling', 'deluxara' ),
                        'title'  => __( 'CEO, Sterling & Associates', 'deluxara' ),
                        'avatar' => 'VS',
                        'active' => false,
                    ),
                );

                foreach ( $testimonials as $index => $testimonial ) :
                    $active_class = $testimonial['active'] ? ' active' : '';
                    ?>
                    <div class="testimonial-card fade-in<?php echo esc_attr( $active_class ); ?>">
                        <div class="testimonial-content">
                            <p><?php echo esc_html( $testimonial['quote'] ); ?></p>
                            <div class="testimonial-author">
                                <div class="author-info">
                                    <h4><?php echo esc_html( $testimonial['name'] ); ?></h4>
                                    <span><?php echo esc_html( $testimonial['title'] ); ?></span>
                                </div>
                                <div class="author-avatar"><?php echo esc_html( $testimonial['avatar'] ); ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="testimonial-navigation">
                <?php foreach ( $testimonials as $index => $testimonial ) : ?>
                    <button class="nav-dot<?php echo $testimonial['active'] ? ' active' : ''; ?>" data-testimonial-index="<?php echo esc_attr( $index ); ?>"></button>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text fade-in">
                    <h2><?php esc_html_e( 'The Philosophy', 'deluxara' ); ?></h2>
                    <p><em><?php esc_html_e( '“True luxury isn’t decoration — it’s intention.”', 'deluxara' ); ?></em></p>
                    <p><?php esc_html_e( 'At Déluxara, we believe that intelligence and beauty are not opposites—they are partners in creating something extraordinary. Our digital atelier combines the precision of Swiss craftsmanship with the vision of contemporary art.', 'deluxara' ); ?></p>
                    <p><?php esc_html_e( 'We don’t create brands that shout. We create brands that whisper with such elegance that the world stops to listen. Every curve, every transition, every moment of interaction is designed with the understanding that luxury begins where logic meets beauty.', 'deluxara' ); ?></p>
                    <p><em><?php esc_html_e( '“Design is intelligence made visible.”', 'deluxara' ); ?></em></p>

                    <div class="philosophy-stats">
                        <div class="stat-item">
                            <div class="stat-number">50+</div>
                            <div class="stat-label"><?php esc_html_e( 'Luxury Brands Elevated', 'deluxara' ); ?></div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">98%</div>
                            <div class="stat-label"><?php esc_html_e( 'Client Satisfaction', 'deluxara' ); ?></div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">15</div>
                            <div class="stat-label"><?php esc_html_e( 'Design Awards', 'deluxara' ); ?></div>
                        </div>
                    </div>
                </div>
                <div class="about-visual fade-in">
                    <div class="luxury-pattern"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="insights" class="insights">
        <div class="container">
            <h2 class="section-title fade-in"><?php esc_html_e( 'Digital Luxury Insights', 'deluxara' ); ?></h2>
            <p class="section-subtitle fade-in"><?php esc_html_e( 'Thoughts on the intersection of technology and elegance', 'deluxara' ); ?></p>

            <div class="insights-grid">
                <?php
                $insights_query = new WP_Query(
                    array(
                        'posts_per_page'       => 3,
                        'ignore_sticky_posts' => true,
                    )
                );

                if ( $insights_query->have_posts() ) :
                    while ( $insights_query->have_posts() ) :
                        $insights_query->the_post();
                        $categories = get_the_category();
                        ?>
                        <article <?php post_class( 'insight-card fade-in' ); ?>>
                            <div class="insight-meta">
                                <span class="insight-date"><?php echo esc_html( get_the_date( 'F Y' ) ); ?></span>
                                <?php if ( ! empty( $categories ) ) : ?>
                                    <span class="insight-category"><?php echo esc_html( $categories[0]->name ); ?></span>
                                <?php endif; ?>
                            </div>
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 30, '…' ) ); ?></p>
                            <a class="insight-link" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More →', 'deluxara' ); ?></a>
                        </article>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <article class="insight-card fade-in">
                        <h3><?php esc_html_e( 'Insights are in the works', 'deluxara' ); ?></h3>
                        <p><?php esc_html_e( 'Once you publish your first posts, they will appear here as thought leadership pieces for your clients.', 'deluxara' ); ?></p>
                    </article>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <div class="contact-content fade-in">
                <h2><?php esc_html_e( 'Private Consultation', 'deluxara' ); ?></h2>
                <p><?php esc_html_e( 'Ready to experience the intersection of intelligence and elegance? Let’s craft your digital presence with the precision it deserves.', 'deluxara' ); ?></p>

                <form class="contact-form" action="#" method="post">
                    <div class="form-group">
                        <input type="text" name="deluxara-name" placeholder="<?php esc_attr_e( 'Your Name', 'deluxara' ); ?>" required>
                        <input type="email" name="deluxara-email" placeholder="<?php esc_attr_e( 'Email Address', 'deluxara' ); ?>" required>
                    </div>
                    <input type="text" name="deluxara-company" placeholder="<?php esc_attr_e( 'Company Name', 'deluxara' ); ?>" required>
                    <textarea name="deluxara-message" placeholder="<?php esc_attr_e( 'Tell us about your vision and goals…', 'deluxara' ); ?>" required></textarea>
                    <button type="submit" class="submit-btn"><?php esc_html_e( 'Request Consultation', 'deluxara' ); ?></button>
                </form>
            </div>
        </div>
    </section>
<?php
get_footer();
