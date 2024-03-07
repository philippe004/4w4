
    <?php  get_header(); ?>
    <div id="entete" class="global ">
        <section class="entete__hero">
            <h1>Thème philippe (h1)</h1>
            <h2>4w4-Conveption d'interface et développement web</h2>
            <h2> TIM-Collége de maisonneuve</h2>
             <button class="button">
             <a>Événement</a>
             </button>
              <div class="icone">
                <img width="120" height="120" src="https://img.icons8.com/plasticine/100/shark.png" alt="shark"/>
              </div>
        </section>
   <!-- vague -->
   <?php get_template_part('gabarits/vague'); ?>
        
    </div>
    <div id="accueil" class="global">
        <section>
            <h2>Accueil (h2)</h2>
          <div class="cours">
            <?php 
           if(have_posts()) :
            while(have_posts()) : the_post();
            $titre = get_the_title();
            $sigle = substr($titre, 0, 7);
            $duree = substr($titre, -6, 6);
            $titreFin = trim(substr($titre, 7), $duree);
                
                
                ?>

                <div class="carte">
                <p><?php echo $sigle ?></p>
                    <p><?php echo $titreFin ?></p>
                    <p><?php echo $duree ?></p>


                    <h5>Durée: <?php echo $duree; ?></h5>


                    <p><?php echo wp_trim_words(get_the_content(),20); ?></p>
                </div>
                <?php endwhile ?>
                <?php endif ?>
            
            
          </div>
        </section>
    </div>
    <div id="evenement" class="global diagonal">
        <section>
            <h2>Événement (h2)</h2>
            <h4>Lorem ab fugiat, soluta minus.</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius sit amet asperiores minus tenetur explicabo tempora hic reprehenderit reiciendis, libero nulla esse minima numquam ut, maxime ea tempore rem incidunt?</p>

        </section>
    </div>

    <div id="galerie" class="global">
        <section>
            <h2>Galerie (h2)</h2>
            <h5>Lorem ipsum dvoluptatum amet ratione necessitatibus consectetur quisquam.</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error fuga ab repellendus aliquam facere repudiandae omnis numquam illo eos ipsam. Qui provident cupiditate, animi veniam eaque voluptas reiciendis repellendus dicta!</p>
        </section>
        <?php get_template_part('gabarits/vague'); ?>
    </div>
    <div id="footer" class="global">
        <footer>
            <h2>Footer (h2)</h2>
            <h2>Liens</h2>
            <div class="lien">
                <a href="https://www.imdb.com/title/tt0424774/" class="button">Lien</a>
                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam corrupti vel nulla nisi officia eius. Doloremque voluptates similique saepe, natus dicta dolore rem eaque, harum consequuntur ratione obcaecati eius officiis?</h4>
            </div>


  
    </footer>
    </div>
</body>
</html>