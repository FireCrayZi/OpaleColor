<footer>
        <div class="footer">
                <div class="contact">
                        <h3>Contact</h3><br>
                       
                        <p>P.A. La Judocienne</p>
                        <p>62170 Saint-Josse</p>
                        <p>Tél: 03 21 84 01 39</p>
                        <p>opale-color@wanadoo.fr</p><br>

                        <p>Lun-Ven: 9h-12h30, 14h-18h</p>
                        <a href="contact.php"><button class="btn_infoscon">PLUS D'INFOS</button></a>
                </div>

                <div class="link">
                        <h3>Liens utiles</h3><br>
                        <a href="produits.php" class="catalogue">Retrouvez une partie de notre catalogue en cliquant ici</a><br>
                        <a href="mentionsLegales.php" class="catalogue">Mentions Légales</a>

                </div>
                <a href="accueil.php" class="logofooter"><img src="img/logo.jpg" alt=""></a>
        </div>

</footer>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
$(function() {
                function monParallax()
                {
                        
                        var positionScroll = $(window).scrollTop();
                        //console.log(positionScroll);
        
        
                        $('#btn_contact').css('top' , (100 + (positionScroll * 1.2)) + 'px' );
                }
                
                $(window).on('scroll', function(){
                        monParallax();
                });
                
        
        });</script>
        <script>
                $(document).ready(function(){
                $(window).on('scroll', function(){
            posTop = $('.history').offset().top - $(window).scrollTop()
            if(posTop < 1400) {
                $('.fade').css({
                        transform: 'translateX('+0+'px)',
                        opacity:1,
                        'font-size': '1em'
                        });
                
            }
                        });
                });
                
        </script>
        <script>
        
            $(document).ready(function(){
                $(window).on('scroll', function(){
                posTopright = $('.impr').offset().top - $(window).scrollTop()
                console.log(posTopright)
                if(posTopright < 400) {
                $('.right').css({
                        transform: 'translateX('+0+'px)',
                        opacity:1,
                        'font-size': '1em'
                        });
                        }
                        })
                })
        </script>  
               
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    $('.ajax-links').on('click', function(){
        const target = $(this).attr('ajax-target')
    $('.ajax-links').attr('focus', 'false')
    $(this).attr('focus', 'true')
        $('.ajax-container').load('./products.php .' + target)
    })
    
</script>
</body>
</html>
