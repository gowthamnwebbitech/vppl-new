<section class="vppl-testimonial-space">
    <div class="vppl-testi-container">
        
        <div class="vppl-testi-header">
            <span class="vppl-testi-badge">Client Success</span>
            <h2 class="vppl-testi-title">Voice of Excellence</h2>
            <p class="vppl-testi-subtitle">Real feedback from industries relying on our sustainable engineering systems.</p>
        </div>

        <div class="vppl-testi-grid">
            
            <div class="vppl-testi-card">
                <div class="vppl-quote-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H15.017C14.4647 8 14.017 8.44772 14.017 9V12M3.017 21L3.017 18C3.017 16.8954 3.91243 16 5.017 16H8.017C8.56928 16 9.017 15.5523 9.017 15V9C9.017 8.44772 8.56928 8 8.017 8H4.017C3.46472 8 3.017 8.44772 3.017 9V12"></path></svg>
                </div>
                <p class="vppl-testi-text">The Reverse Osmosis plant installed by Aqua Engineering has exceeded our efficiency targets. Their technical support is unmatched in the industry.</p>
                <div class="vppl-testi-footer">
                    <div class="vppl-testi-avatar">JS</div>
                    <div class="vppl-testi-info">
                        <h4 class="vppl-testi-name">John Smith</h4>
                        <p class="vppl-testi-role">Operations Manager, PharmaCorp</p>
                    </div>
                </div>
            </div>

            <div class="vppl-testi-card vppl-featured">
                <div class="vppl-quote-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H15.017C14.4647 8 14.017 8.44772 14.017 9V12M3.017 21L3.017 18C3.017 16.8954 3.91243 16 5.017 16H8.017C8.56928 16 9.017 15.5523 9.017 15V9C9.017 8.44772 8.56928 8 8.017 8H4.017C3.46472 8 3.017 8.44772 3.017 9V12"></path></svg>
                </div>
                <p class="vppl-testi-text">Their demineralization units are robust and low-maintenance. A perfect partner for large-scale water treatment projects.</p>
                <div class="vppl-testi-footer">
                    <div class="vppl-testi-avatar">RA</div>
                    <div class="vppl-testi-info">
                        <h4 class="vppl-testi-name">Robert Anderson</h4>
                        <p class="vppl-testi-role">Project Director, Industrial Hub</p>
                    </div>
                </div>
            </div>

            <div class="vppl-testi-card">
                <div class="vppl-quote-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H15.017C14.4647 8 14.017 8.44772 14.017 9V12M3.017 21L3.017 18C3.017 16.8954 3.91243 16 5.017 16H8.017C8.56928 16 9.017 15.5523 9.017 15V9C9.017 8.44772 8.56928 8 8.017 8H4.017C3.46472 8 3.017 8.44772 3.017 9V12"></path></svg>
                </div>
                <p class="vppl-testi-text">The transition to their ultra-filtration system was seamless. We reduced water waste by nearly 30% in the first quarter.</p>
                <div class="vppl-testi-footer">
                    <div class="vppl-testi-avatar">ML</div>
                    <div class="vppl-testi-info">
                        <h4 class="vppl-testi-name">Maria Lopez</h4>
                        <p class="vppl-testi-role">Sustainability Head, GreenGrid</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
/* --- VPPL Testimonial Theme --- */
:root {
    --vppl-primary: #2293c4;
    --vppl-dark: #0f172a;
    --vppl-bg-light: #f8fafc;
    --white: #ffffff;
}

.vppl-testimonial-space {
    padding: 100px 20px;
    background-color: var(--vppl-bg-light);
    font-family: 'Plus Jakarta Sans', sans-serif;
}

.vppl-testi-container {
    max-width: 1200px;
    margin: 0 auto;
}

/* --- Header --- */
.vppl-testi-header {
    text-align: center;
    margin-bottom: 60px;
}

.vppl-testi-badge {
    background: rgba(34, 147, 196, 0.1);
    color: var(--vppl-primary);
    padding: 10px 25px;
    border-radius: 100px;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.vppl-testi-title {
    font-size: clamp(2rem, 5vw, 3.5rem);
    color: var(--vppl-dark);
    font-weight: 800;
    margin: 20px 0;
}

.vppl-testi-subtitle {
    color: var(--vppl-muted);
    font-size: 1.1rem;
    max-width: 600px;
    margin: 0 auto;
}

/* --- Grid --- */
.vppl-testi-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
    align-items: start;
}

/* --- Card Design --- */
.vppl-testi-card {
    background: var(--white);
    padding: 50px 40px;
    border-radius: 40px;
    position: relative;
    box-shadow: 0 20px 40px rgba(15, 23, 42, 0.03);
    border: 1px solid rgba(34, 147, 196, 0.05);
    transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
}

.vppl-testi-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 30px 60px rgba(34, 147, 196, 0.1);
    border-color: var(--vppl-primary);
}

/* Featured Card (Middle/Accent) */
.vppl-featured {
    background: linear-gradient(135deg, #2293c4 0%, #1a749c 100%);
}

.vppl-featured .vppl-testi-text,
.vppl-featured .vppl-testi-name {
    color: var(--white);
}

.vppl-featured .vppl-testi-role {
    color: rgba(255, 255, 255, 0.7);
}

.vppl-featured .vppl-testi-avatar {
    background: rgba(255, 255, 255, 0.2);
    color: var(--white);
}

.vppl-featured .vppl-quote-icon {
    color: rgba(255, 255, 255, 0.2);
}

/* --- Quote Icon --- */
.vppl-quote-icon {
    position: absolute;
    top: 40px;
    right: 40px;
    width: 40px;
    height: 40px;
    color: rgba(34, 147, 196, 0.1);
}

.vppl-testi-text {
    font-size: 1.15rem;
    line-height: 1.7;
    color: var(--vppl-dark);
    margin-bottom: 40px;
    font-style: italic;
    position: relative;
    z-index: 2;
}

/* --- Card Footer --- */
.vppl-testi-footer {
    display: flex;
    align-items: center;
    gap: 15px;
}

.vppl-testi-avatar {
    width: 50px;
    height: 50px;
    background: var(--vppl-bg-light);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 800;
    color: var(--vppl-primary);
    font-size: 14px;
}

.vppl-testi-name {
    font-size: 1.1rem;
    color: var(--vppl-dark);
    font-weight: 800;
}

.vppl-testi-role {
    font-size: 0.85rem;
    color: var(--vppl-muted);
    font-weight: 600;
}

/* --- Responsive --- */
@media (max-width: 768px) {
    .vppl-testi-grid { grid-template-columns: 1fr; }
    .vppl-testi-card { padding: 40px 30px; }
}
</style>