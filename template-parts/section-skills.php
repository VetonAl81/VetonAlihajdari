<section id="skills" class="vae-section vae-section--alt">
    <div class="container">
        <div class="section-label">Expertise</div>
        <h2 class="section-title">Skills &amp; Competencies</h2>
        <div class="divider"></div>
        <p class="section-lead">Core technical and leadership competencies developed across 26+ years of professional practice.</p>

        <div class="skills-grid">
            <div class="skills-col">
                <h3 class="skills-group-title"><i class="bi bi-mortarboard-fill"></i> Education &amp; Policy</h3>
                <div class="skill-item">
                    <div class="skill-header">
                        <span>Education Policy &amp; Strategy</span><span class="skill-pct">95%</span>
                    </div>
                    <div class="skill-bar"><div class="skill-fill" data-width="95"></div></div>
                </div>
                <div class="skill-item">
                    <div class="skill-header">
                        <span>Curriculum Development</span><span class="skill-pct">90%</span>
                    </div>
                    <div class="skill-bar"><div class="skill-fill" data-width="90"></div></div>
                </div>
                <div class="skill-item">
                    <div class="skill-header">
                        <span>Institutional Reform</span><span class="skill-pct">88%</span>
                    </div>
                    <div class="skill-bar"><div class="skill-fill" data-width="88"></div></div>
                </div>
                <div class="skill-item">
                    <div class="skill-header">
                        <span>Quality Assurance &amp; Accreditation</span><span class="skill-pct">85%</span>
                    </div>
                    <div class="skill-bar"><div class="skill-fill" data-width="85"></div></div>
                </div>
            </div>

            <div class="skills-col">
                <h3 class="skills-group-title"><i class="bi bi-cpu-fill"></i> Digital &amp; ICT</h3>
                <div class="skill-item">
                    <div class="skill-header">
                        <span>Digital Transformation Leadership</span><span class="skill-pct">95%</span>
                    </div>
                    <div class="skill-bar"><div class="skill-fill" data-width="95"></div></div>
                </div>
                <div class="skill-item">
                    <div class="skill-header">
                        <span>ICT Governance &amp; Architecture</span><span class="skill-pct">90%</span>
                    </div>
                    <div class="skill-bar"><div class="skill-fill" data-width="90"></div></div>
                </div>
                <div class="skill-item">
                    <div class="skill-header">
                        <span>Data Interoperability</span><span class="skill-pct">87%</span>
                    </div>
                    <div class="skill-bar"><div class="skill-fill" data-width="87"></div></div>
                </div>
                <div class="skill-item">
                    <div class="skill-header">
                        <span>Platform Management &amp; Deployment</span><span class="skill-pct">92%</span>
                    </div>
                    <div class="skill-bar"><div class="skill-fill" data-width="92"></div></div>
                </div>
            </div>

            <div class="skills-col">
                <h3 class="skills-group-title"><i class="bi bi-building-fill-gear"></i> Leadership &amp; Management</h3>
                <div class="skill-item">
                    <div class="skill-header">
                        <span>Public Sector Management</span><span class="skill-pct">95%</span>
                    </div>
                    <div class="skill-bar"><div class="skill-fill" data-width="95"></div></div>
                </div>
                <div class="skill-item">
                    <div class="skill-header">
                        <span>Project &amp; Programme Management</span><span class="skill-pct">90%</span>
                    </div>
                    <div class="skill-bar"><div class="skill-fill" data-width="90"></div></div>
                </div>
                <div class="skill-item">
                    <div class="skill-header">
                        <span>Stakeholder Engagement</span><span class="skill-pct">93%</span>
                    </div>
                    <div class="skill-bar"><div class="skill-fill" data-width="93"></div></div>
                </div>
                <div class="skill-item">
                    <div class="skill-header">
                        <span>Capacity Building &amp; Training</span><span class="skill-pct">88%</span>
                    </div>
                    <div class="skill-bar"><div class="skill-fill" data-width="88"></div></div>
                </div>
            </div>
        </div>

        <div class="tools-row">
            <h3 class="skills-group-title" style="margin-bottom:1.25rem;">
                <i class="bi bi-tools"></i> Platforms &amp; Tools
            </h3>
            <div class="tools-grid">
                <?php
                $tools = [
                    'Microsoft 365',  'SharePoint',     'Power BI',
                    'KRIS',           'SMIA / EMIS',    'SMIAL',
                    'SELFIE',         'NARIC Digital',  'Data Warehouse',
                    'WordPress',      'GitHub',         'Zoom / Teams',
                ];
                foreach ( $tools as $tool ) : ?>
                <span class="tool-tag"><?php echo esc_html( $tool ); ?></span>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
