        <section id="main">
            <h2>Kontakt</h2>
            <!-- include Google reCAPTCHA -->
            <script src='https://www.google.com/recaptcha/api.js'></script>
            <article>
                <?php 
                echo form_open(base_url('contact'));
                
                echo form_dropdown('to_email', ['Christoph Dahlitz' => 'Christoph Dahlitz', 'Webmaster' => 'Webmaster'], 'Christoph Dahlitz');
                echo form_input([
                    'name' => 'name',
                    'placeholder' => 'Vor- und Nachname *'
                ]);
                echo form_input([
                    'name' => 'subject',
                    'placeholder' => 'Betreff'
                ]);
                echo form_input([
                    'name' => 'customer_email',
                    'type' => 'email',
                    'placeholder' => 'Email *'
                ]);
                echo form_textarea([
                    'name' => 'text',
                    'placeholder' => 'Hier bitte Text eingeben ... *'
                ]);
                echo '<div class="g-recaptcha" data-sitekey="6LeZwBEUAAAAABUYwQK8T_jkN6s5M-c8Cp6ovdN_"></div>';
                echo form_submit([
                    'name' => 'contact_submit',
                    'value' => 'Senden'
                ]);
                echo form_reset([
                    'name' => 'contact_reset',
                    'value' => 'Zurücksetzen'
                ]);
                
                echo form_close(); 
                ?>
            </article>
        </section>
