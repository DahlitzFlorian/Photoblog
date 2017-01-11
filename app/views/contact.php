        <section id="main">
            <h2>Kontakt</h2>
            <article>
                <?php 
                echo form_open(base_url('contact/send'));
                
                echo form_dropdown('to_email', ['Christoph Dahlitz', 'Webmaster'], 'Christoph Dahlitz');
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
