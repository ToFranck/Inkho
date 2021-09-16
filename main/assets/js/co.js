                                                        

        $(document).ready(function(){

            $(".form").css({"transform": "translateY(100px)", "opacity": 1});   //cree un css pour le premier form , le fait apparaitre sur l'axe y et change son opacite

            $("#forget").click(function(){                                      //cree une fonction click pour appl le form du mdp 
                $(".form").css("opacity", 0).on('transitionend', function(){    //le premier form passe en opacite 0 et fini sa transition et fonction
                    $(".form").css("display", "none");                          //form passe en none

                    $(".form2").css("display", "block");                        //form2 apparait ( hors de l'ecrant ) 
                    setTimeout(() => {                                          //timeur pour laisser le temps a l'annimation puis apparition du form2 dans l'ecrant 
                        $(".form2").css("transform", "translateY(200px)");
                    }, 5);
                });
                
            });
                
                
        });
  