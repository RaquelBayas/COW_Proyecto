<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/StyleSheet.css" rel="stylesheet" type="text/css"/>

        <script src="css/jquery_3_4_0/jquery_3_4_0/jquery-3.4.0.min.js"></script>
        <script src="css/bootstrap-4.3.1_v2/bootstrap-4.3.1_v2/js/jquery.min.js"></script>
        <script src="css/bootstrap-4.3.1_v2/bootstrap-4.3.1_v2/js/popper.min.js"></script>
        <script src="css/bootstrap-4.3.1_v2/bootstrap-4.3.1_v2/js/bootstrap.min.js"></script>
        <script src="css/scriptaculus/scriptaculous-js-1.9.0/lib/prototype.js" type="text/javascript"></script>
        <script src="css/scriptaculus/scriptaculous-js-1.9.0/src/scriptaculous.js" type="text/javascript"> </script>
    
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="css/jquery-ui-1.12.1/jquery-ui-1.12.1/jquery-ui.min.js"></script>
        <script src="css/jquery-ui-1.12.1/jquery-ui-1.12.1/jquery-ui.js"></script>
        
        <script type="text/javascript" src="getHint.js"></script>
        <script type="text/javascript" src="js_cliente.js"></script>

         <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>                      
        <link href="css/bootstrap-4.3.1_v2/bootstrap-4.3.1_v2/css/bootstrap.css" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
    </head>
    <body>
        <header class="header">
            <h1>BE DREAMS</h1>
            <nav class="navbar navbar-expand-lg navbar-light" id="barra-nav">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto" id="navbar-center" >
                    <li class="nav-item active">
                      <a class="nav-link" id="link-nav" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="link-nav" href="hoteles.php">Hoteles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="link-nav" href="#">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="link-nav" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="link-nav" href="perfil.php">Perfil</a>
                    </li>
                  </ul>
                </div>
            </nav>           
        </header>
        <div class="container-fluid text-center">    
        
                <div class="container">
                    
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="css/Corea1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="css/Corea2.jpg" alt="Second slide">
                                </div> 
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="css/Corea3.jpg" alt="Second slide">
                                </div> 
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>                
            </div>
            
            <div class="row content" id="parte-central">
                <div class="col-sm-3 sidenav" id="col_names">
                    <p><a href="https://www.agoda.com/k-pop-hotel-seoul-tower/hotel/seoul-kr.html?cid=1844104">K-POP Hotel Seoul Tower</a></p>
                    <img src="resources/Hotel_Corea5.jpg" alt="Lights" style="width:100%">
                    <p><a href="http://www.mayplace.co.kr/">Mayplace Seoul Dongdaemun</a></p>
                    <img src="resources/Hotel_Corea6.jpg" alt="Lights" style="width:100%">
                    <p><a href="http://noelhotel.co.kr/">Noel Business Hotel</a></p>
                    <img src="resources/Hotel_Corea_7.jpg" alt="Lights" style="width:100%">
                </div>
                <div class="col-sm-6 text-left" id="section0"> 
                    <div id="booking" class="section">
                        <div class="container">
                            <div class="row">
                                <div class="booking-form">
                                    <div class="form-header">
                                        <h2>¿Sueñas con conocer Corea del Sur?</h2>
                                        <h2>¿Buscas un hotel?</h2>
                                    </div>
                                    <div class="row justify-content" id="boton-reserva">
                                        <div class="col-sm-12 mx-auto" id="btn_resevar">
                                            <div id="respuesta_server"></div>
                                                <form method="GET" class="formreserva" name="formreserva" id="form-reserva">
                                                    <div class="form-group">
                                                        <span class="form-label" for="nombre" >Nombre</span>
                                                        <input type="text" name="nombre" id="nombre" class="form-control">
                                                        <span class="form-label" for="apellidos">Apellidos</span>
                                                        <input type="text" name="apellidos" id="apellidos" class="form-control">
                                                        <span class="form-label" for="dni" >DNI</span>
                                                        <input type="text" name="dni" id="dni" class="form-control">
                                                        <span class="form-label" for="email" >Email</span>
                                                        <input type="text" name="email" id="email" class="form-control">
                                                                        
                                                        <span class="form-label" for="entrada">Entrada</span>
                                                        <input class="custom-select" type="date" id="entrada" name="entrada" required>
                                                        <span class="form-label" for="salida">Salida</span>
                                                        <input class="custom-select" type="date" id="salida" name="salida" required>
                                                                                        
                                                        <span class="form-label" for="hotel">Hotel</span>
                                                        <select name="hotel" id="hotel" class="custom-select">
                                                            <option selected>K-Pop Hotel Seoul Tower</option>
                                                            <option >Noel Business Hotel</option>
                                                            <option >Hotel Regent Marine The Blue</option>
                                                            <option >Mayplace Seoul Dongdaemun</option>
                                                            <option >Golden Seoul Hotel</option>
                                                            <option >Lotte Hotel Seoul</option>                                                                
                                                        </select>
                                                        <span class="form-label" for="tipo_hab">Tipo de habitación</span>
                                                        <select name="tipo_hab" id="tipo_hab" class="custom-select">
                                                            <option selected>Low</option>
                                                            <option>Medium</option>
                                                            <option>High</option>
                                                        </select>
                                                        <span class="form-label" for="habitaciones">Habitaciones</span>
                                                        <select name="habitaciones" id="habitaciones" class="custom-select">
                                                            <option value="1" selected>1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3+</option>
                                                        </select>
                                                        <span class="form-label" for="adultos">Adultos</span>
                                                        <select name="adultos" id="adultos" class="custom-select">
                                                            <option value="1" selected>1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3+</option>
                                                        </select>
                                                        <span class="form-label" for="niños">Niños</span>
                                                        <select name="niños" id="niños" class="custom-select">
                                                            <option value="0" selected>0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3+">3+</option>
                                                        </select>     
                                                    </div>
                                                    <input type="submit"  id="datos" value="Reservar">
                                                 </form>                    
                                            </div>
                                        <div id="final"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
                <div class="col-sm-3 sidenav" id="col_names">
                    <p><a href="http://hotelrmblue.com/hotel/">Hotel Regent Marine The Blue</a></p>
                    <img src="resources/Hotel_Corea8.jpg" alt="Lights" style="width: 100%">
                    <p><a href="http://www.goldenseoul.com/">Golden Seoul Hotel</a></p>
                    <img src="resources/Hotel_Seul_2.jpg" alt="Lights" style="width:100%">
                    <p><a href="https://www.lottehotel.com/seoul-hotel/en.html">Lotte Hotel Seoul</a></p>
                    <img src="resources/Hotel_Seul_3.jpg" alt="Lights" style="width:100%">
                </div>
            </div>
            
            <div class="row content" id="tabla">
                <div class="col-sm-12 " id="tabla2">
                    <table class="table table-hover table-bordered" id="tabla3"> 
                        <thead>
                            <tr> 
                                <th>Hoteles</th> 
                                <th>Localización</th> 
                                <th>Estrellas</th>
                                <th>Precio/Noche (€)</th> 
                            </tr> 
                        </thead>
                        <tbody>
                            <tr> 
                                <td>K-Pop Hotel Seoul Tower</td> 
                                <td>Seoul</td> 
                                <td>★ ★ ★</td> 
                                <td>
                                    <select name="" id="btn-1">
                                        <option selected="selected">Low -  30</option>
                                        <option>Medium - 38</option>
                                        <option>High - 45</option>
                                    </select>
                                </td>
                            </tr> 
                            <tr> 
                                <td>Noel Business Hotel</td> 
                                <td>Busan</td> 
                                <td>★ ★ ★</td> 
                                <td>
                                    <select name="" id="btn-1">
                                        <option selected="selected">Low -  35</option>
                                        <option>Medium - 42</option>
                                        <option>High - 48</option>
                                    </select>
                                </td>
                            </tr> 
                            <tr> 
                                <td>Hotel Regent Marine The Blue</td> 
                                <td>Jeju Island</td> 
                                <td>★ ★ ★ ★</td> 
                                <td>
                                    <select name="" id="btn-1">
                                        <option selected="selected">Low -  50</option>
                                        <option>Medium - 72</option>
                                        <option>High - 85</option>
                                    </select>
                                </td>
                            </tr> 
                            <tr> 
                                <td>Mayplace Seoul Dongdaemun</td> 
                                <td>Seoul</td> 
                                <td>★ ★ ★ ★</td>
                                <td>
                                    <select name="" id="btn-1">
                                        <option selected="selected">Low -  55</option>
                                        <option>Medium - 70</option>
                                        <option>High - 88</option>
                                    </select>
                                </td>
                            </tr> 
                            <tr> 
                                <td>Golden Seoul Hotel</td> 
                                <td>Seoul</td> 
                                <td>★ ★ ★ ★</td> 
                                <td>
                                    <select name="" id="btn-1">
                                        <option selected="selected">Low -  70</option>
                                        <option>Medium - 85</option>
                                        <option>High - 120</option>
                                    </select>
                                </td>
                            </tr> 
                            <tr> 
                                <td>Lotte Hotel Seoul</td> 
                                <td>Seoul</td> 
                                <td>★ ★ ★ ★ ★</td>
                                <td>
                                    <select name="" id="btn-1">
                                        <option selected="selected">Low -  140</option>
                                        <option>Medium - 180</option>
                                        <option>High - 250</option>
                                    </select>
                                </td>
                            </tr> 
                        </tbody>
                    </table>  
                </div>
                <div>  
            </div>
            <div class="row" id="historia_Corea">
                <h2>Conoce un poco más sobre Corea...</h2>
                <p class="text-justify" id="texto">
                    Corea del Sur se ha convertido en una potencia mundial en los últimos años
                    debido a los múltiples campos de interés que posee.
                    Cuenta con unos 5.000 años de cultura e historia detrás conservando 
                    aldeas antiguas como Hahoe, nombrada Patrimonio de la Humanidad en 2010,
                    que reflejan la auténtica identidad de Corea.
                    <br>
                    Tecnología, gastronomía, k-pop, k-beauty...
                    <br>
                    Si necesitas más información, no dudes en buscarla en el siguiente apartado:
                </p> 
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                            <div class="row google-form text-center">
                                <form action="http://google.com/search" method="get">
                                    <div class="form-group">
                                        <span class="form-label">  <span id="txtHint"></span></span>
                                        <input type="text" class="form-control google-search" name="q" id="tags" value="">
                                        <div class="btn-group">
                                            <button type="submit" class="submit-btn" id="btn-buscar">Buscar</button>
                                        </div>
                                    </div>
                                </form> 
                            </div>
                        </div>
                    </div>
                    <button>Hotel aleatorio</button>
                </div>                                              
            </div>
        </div>

        <div class="footer">
            <h6>&copy; All Rights Reserved.</h6>
            <a href="https://www.linkedin.com/in/raquelbayas/">Desarrollado por Raquel Bayas - COW 2020/2021</a>
        </div>
    </div>
</body>

</html>