<?php
  session_start();

  require 'db.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM usuarios WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BIENVENIDOS A ANIMEKU</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <LInk rel="stylesheet" href="estiloInicio.css">
  </head>
  <body  style="background-color: #060100;">
  <header>  
            <div class="hearder__superior">  

                <div class="logo">
                    <img src="#" alt="">
                </div>
            </div>

            <div class="container__menu">
                  <div class="menu"> 
                    <nav>
                        <ul>
                            <li><a href="#" class="borde_normal"></a></li>
                            <li><a href="#" class="borde">ANIME</a>
                                <ul>
                                    <li><a href="pagina1.html">Animes</a></li>
                                    <li><a href="#">Ovas</a></li>
                                    <li><a href="#">Peliculas</a></li>
                                </ul>
                            </li>
                            <li><a href="hentai.html" class="borde">HENTAI</a>
                                <ul>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                </ul>    
                            </li>
                            <li>
                            <a href="registrarse.php" class="borde">Registrarse</a>
                            </li>
                            <li>
                            <a href="login.php" class="borde">Iniciar Sesion</a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
    </header>  

    <div>
        <h2>BIENVENIDOS A ANIMEKU</h2>
    </div>

    <div>
        <section>
            <div>
                <h3 class="tituloInicio">ANIMES EN EMISION</h3>
                <div class="slider">
                    <div class="slide-track">
                        
                        <div class="slide">
                            <a href="https://www3.animeflv.net/anime/ao-ashi"><img src="imagenes/ao Ashi.jpg" class="imagen_tamaño" alt=""><p class="tituloAnime">Ao ashi</p></a>
                        </div>
                        <div class="slide">
                            <a href="https://www3.animeflv.net/anime/kakkou-no-iinazuke"><img src="imagenes/kakkou no linazuke.jpg" class="imagen_tamaño" alt=""><p class="tituloAnime">Kakkou no Linazuke</p class="tituloAnime"></a>
                        </div>
                        <div class="slide">
                            <a href="https://www3.animeflv.net/anime/koi-wa-sekai-seifuku-no-ato-de"><img src="imagenes/koi wa sekai.jpg" class="imagen_tamaño" alt=""><p class="tituloAnime">Koi wa Sekai Seifuku no Ato de</p></a>
                        </div>
                        <div class="slide">
                            <a href="https://www3.animeflv.net/anime/build-divide-code-white"><img src="imagenes/build Divide.jpg" class="imagen_tamaño" alt=""><p class="tituloAnime">Build Divide Code white</p></a>
                        </div>
                        <div class="slide">
                            <a href="https://www3.animeflv.net/anime/kawaii-dake-ja-nai-shikimorisan"><img src="imagenes/kunoichi.jpg" class="imagen_tamaño" alt="kunoichi"><p class="tituloAnime">Kunoichi</p></a>
                        </div>
                        <div class="slide">
                            <a href="https://www3.animeflv.net/anime/gaikotsu-kishisama-tadaima-isekai-e-odekakechuu"><img src="imagenes/gaikotsu kishi.jpg" class="imagen_tamaño" alt=""><p class="tituloAnime">Gaikotsu Kishi-sama</p></a>
                        </div>
                        <div class="slide">
                            <a href="https://www3.animeflv.net/anime/tate-no-yuusha-no-nariagari-season-2"><img src="imagenes/tate no yusha.jpg" alt="" class="imagen_tamaño"><p class="tituloAnime">Tate no Yuusha 2nd Season 2</p></a>
                        </div>
                        <div class="slide">
                            <a href="https://www3.animeflv.net/anime/date-a-live-iv"><img src="imagenes/date A live IV.jpg" alt="date A live IV" class="imagen_tamaño"><p class="tituloAnime">date A live IV</p></a>
                        </div>
                        <div class="slide">
                            <a href="https://www3.animeflv.net/anime/shadowverse-flame"><img src="imagenes/shadowverse flame.jpg" alt="shadowverse flame" class="imagen_tamaño"><p class="tituloAnime">Shadowverse Flame</p></a>
                        </div>
                        <div class="slide">
                            <a href="https://www3.animeflv.net/anime/love-live-nijigasaki-gakuen-school-idol-doukoukai-2nd-season"><img src="imagenes/love live.jpg" alt="Love Live! Nijigasaki Gakuen School Idol Doukoukai 2nd Season" class="imagen_tamaño"><p class="tituloAnime">Love Live! Nijigasaki Gakuen School Idol Doukoukai 2nd Season</p></a>
                        </div>
                        <div class="slide">
                            <a href="https://www3.animeflv.net/anime/love-all-play"><img src="imagenes/love all play.jpg" alt="Love all play" class="imagen_tamaño"><p class="tituloAnime">Love All Play</p></a>
                        </div>
                        <div class="slide">
                            <a href="https://www3.animeflv.net/anime/heroine-tarumono-kiraware-heroine-to-naisho-no-oshigoto"><img src="imagenes/heroine tarumono.jpg" alt="Heroine Tarumono! Kiraware Heroine to Naisho no Oshigoto" class="imagen_tamaño"><p class="tituloAnime">Heroine Tarumono! Kiraware Heroine </p></a>
                        </div>

                    </div>
                </div>
            </div>

    <div>
        <section>
            <div>
                <div class="slider">
                    <div class="slide-track">
                        <div class="slide">
                            <a href="https://www3.animeflv.net/anime/jantama-pong"><img src="imagenes/jantama.jpg" alt="Jantama Pong☆" class="imagen_tamaño"><p class="tituloAnimes">Jantama Pong☆</p></a>
                        </div>
                        <div class="slide">
                            <a href="https://www3.animeflv.net/anime/kaginado-season-2"><img src="imagenes/Kaginado.jpg" alt="Kaginado Season 2" class="imagen_tamaño"><p class="tituloAnimes">Kaginado Season 2</p></a>
                        </div>
                        <div class="slide1">
                            <a href="https://www3.animeflv.net/anime/spy-x-family"><img src="imagenes/spy x family.jpg" alt="Spy x Family " class="imagen_tamaño"><p class="tituloAnimes">Spy x Family </p></a>
                        </div>
                        <div class="slide1">
                            <a href="https://www3.animeflv.net/anime/baraou-no-souretsu"><img src="imagenes/baraou no souretse.jpg" class="imagen_tamaño"><p class="tituloAnimes">Baraou no Souretsu</p></a>
                        </div>
                        <div class="slide1">
                            <a href="https://www3.animeflv.net/anime/cue"><img src="imagenes/cue.jpg" alt="Cue!" class="imagen_tamaño"><p class="tituloAnimes">Cue!</p></a>
                        </div>
                        <div class="slide1">
                            <a href="https://www3.animeflv.net/anime/kyoukai-senki"><img src="imagenes/Kyoukai senki.jpg" alt="Kyoukai senkai" class="imagen_tamaño"><p class="tituloAnimes">Kyoukai Senkai</p></a>
                        </div>
                        <div class="slide1">
                            <a href="https://www3.animeflv.net/anime/dragon-quest-dai-no-daibouken-2020"><img src="imagenes/dragon quest.jpg" alt="Dragon Quest: Dai no Daibouken" class="imagen_tamaño"><p class="tituloAnimes">Dragon Quest Dai-no-Daibouken</p></a>
                        </div>
                        <div class="slide1">
                            <a href="https://www3.animeflv.net/anime/digimon-ghost-game"><img src="imagenes/digimo ghost game.jpg" alt="digimo ghost game" class="imagen_tamaño"><p class="tituloAnimes">Digimon Ghost Game</p></a>
                        </div>
                        <div class="slide1">
                            <a href="https://www3.animeflv.net/anime/pokemon-2019"><img src="imagenes/pokemon.jpg" alt="pokemon" class="imagen_tamaño"><p class="tituloAnimes">Pokemon</p></a>
                        </div>
                        <div class="slide1">
                            <a href="https://www3.animeflv.net/anime/boruto-naruto-next-generations-tv"><img src="imagenes/boruto.jpg" alt="boruto" class="imagen_tamaño"><p class="tituloAnimes">Boruto Next Generation</p></a>
                        </div>
                        <div class="slide1">
                            <a href="https://www3.animeflv.net/anime/one-piece-tv"><img src="imagenes/OnePiece2.jpg" alt="One piece" class="imagen_tamaño"><p class="tituloAnimes">One Piece</p></a>
                        </div>
                        <div class="slide1">
                            <a href="https://www3.animeflv.net/anime/detective-conan"><img src="imagenes/606.webp" alt="detective conan" class="imagen_tamaño"><p class="tituloAnimes">Detective Conan</p></a>
                        </div> 
                    </div>
                </div>
            </div>

    <div>
        <section>
            <div>
                 <h3 class="tituloInicio">ANIMES MAS POPULARES</h3>
                        <div class="slider">
                            <div class="slide-track">
                                
                                <div class="slide2">
                                    <a href="https://www3.animeflv.net/anime/black-lagoon-2"><img src="imagenes/black lagoon.webp" class="imagen_tamaño" alt="Black Lagoon: The Second Barrage"><p class="masPopulares">Black Lagoon The Second Barrage</p></a>
                                </div>
                                <div class="slide2">
                                    <a href="https://www3.animeflv.net/anime/mushoku-tensei-isekai-ittara-honki-dasu-2nd-season"><img src="imagenes/mushoku.jpg" class="imagen_tamaño" alt="Mushoku Tensei: Isekai Ittara Honki Dasu Part 2"><p class="masPopulares">Mushoku Tensei: Isekai Ittara Honki Dasu Part 2</p></a>
                                </div>
                                <div class="slide2">
                                    <a href="https://www3.animeflv.net/anime/usagi-drop"><img src="imagenes/usagi drop.webp" class="imagen_tamaño" alt="usagi drop"><p class="masPopulares">Usagi Drop</p></a>
                                </div>
                                <div class="slide2">
                                    <a href="https://www3.animeflv.net/anime/honzuki-no-gekokujou-shisho-ni-naru-tame-ni-wa-shudan-wo-erandeiraremasen-2nd-season"><img src="imagenes/honzuki.jpg" class="imagen_tamaño" alt="Honzuki no Gekokujou: Shisho ni Naru Tame ni wa Shudan wo Erandeiraremasen 2nd Season"><p class="masPopulares">Honzuki no Gekokujou: Shisho ni Naru Tame ni wa Shudan wo Erandeiraremasen 2nd Season</p></a>
                                </div>
                                <div class="slide2">
                                    <a href="https://www3.animeflv.net/anime/vivy-fluorite-eyes-song"><img src="imagenes/vivy.jpg" alt="Vivy: Fluorite Eye's Song" class="imagen_tamaño"><p class="masPopulares">Vivy: Fluorite Eye's Song</p></a>
                                </div>
                                <div class="slide2">
                                    <a href="https://www3.animeflv.net/anime/dr-stone-stone-wars"><img src="imagenes/dr stone.jpg" alt="Dr. Stone: Stone Wars" class="imagen_tamaño"><p class="masPopulares">Dr. Stone: Stone Wars</p></a>
                                </div>
                                <div class="slide2">
                                    <a href="https://www3.animeflv.net/anime/mushoku-tensei-isekai-ittara-honki-dasu"><img src="imagenes/moshoku tensei.jpg" alt="Mushoku Tensei: Isekai Ittara Honki Dasu" class="imagen_tamaño"><p class="masPopulares">Mushoku Tensei: Isekai Ittara Honki Dasu</p></a>
                                </div>
                                <div class="slide2">
                                    <a href="https://www3.animeflv.net/anime/dr-stone"><img src="imagenes/dr stone.webp" alt="Dr. Stone" class="imagen_tamaño"><p class="masPopulares">Dr. Stone</p></a>
                                </div>
                                <div class="slide2">
                                    <a href="https://www3.animeflv.net/anime/relife"><img src="imagenes/reLife.jpg" alt="reLife" class="imagen_tamaño"><p class="masPopulares">reLife</p></a>
                                </div>
                                <div class="slide2">
                                    <a href="https://www3.animeflv.net/anime/86-2nd-season"><img src="imagenes/86.jpg" alt="86 2nd season" class="imagen_tamaño"><p class="masPopulares">86 2nd Temporada</p></a>
                                </div>
                                <div class="slide2">
                                    <a href="https://www3.animeflv.net/anime/hataraku-saibou"><img src="imagenes/hataku.jpg" alt="Hataraku Saibou!!" class="imagen_tamaño"><p class="masPopulares">Hataraku Saibou!!</p></a>
                                </div>
                                <div class="slide2">
                                    <a href="https://www3.animeflv.net/anime/bungou-stray-dogs-3rd-season"><img src="imagenes/bungou.jpg" alt="Bungou Stray Dogs 3rd Season" class="imagen_tamaño"><p class="masPopulares">Bungou Stray Dogs 3rd Season</p></a>
                                </div>
                            </div>
                        </div>
            </div>    
            
</header>


  </body>
</html>
