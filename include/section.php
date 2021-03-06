<?php

$subHome = '';
$activeSec = '';
$imgAniSec  = '../imagem/animacao/animacaoHome1.webp';
$imgDeseSec  = '../imagem/vetoriais.webp';   
$imgIlusSec  = '../imagem/animacao/ilustracao.webp';
$imgModeSec  = '../imagem/animacao/modelagem.webp';
$imgPixeSec  = '../imagem/pixel/galeria/galeria-09.webp';  
$imgSabQSec = '../imagem/animacao/fatec1.webp'; 
$imgSabCSec = '../imagem/animacao/carreira.webp';
$imgSabNSec = '../imagem/norma200.webp';


if($page == 'home')
{
    $subHome = '';
    $activeSec = 'homeSec';
    $imgAniSec  = 'imagem/animacao/animacaoHome1.webp';
    $imgDeseSec  = 'imagem/vetoriais.webp';   
    $imgIlusSec  = 'imagem/animacao/ilustracao.webp';
    $imgModeSec  = 'imagem/animacao/modelagem.webp';
    $imgPixeSec  = 'imagem/pixel/galeria/galeria-09.webp';  
    $imgSabQSec = 'imagem/animacao/fatec1.webp'; 
    $imgSabCSec = 'imagem/animacao/carreira.webp';
    $imgSabNSec = 'imagem/norma200.webp';
    $subAnimacao = 'animacao/animacao.php';
    $subDesenho = 'desenho/desenho.php';
    $subIlustracao = 'ilustracao/ilustracao.php';
    $subModelagem = 'modelagem/modelagem.php';
    $subPixel = 'pixel/pixel.php';
    $subSaibaQ = 'servicos/quemSomos.php';
    $subSaibaC = 'servicos/carreira.php' ;
    $subSaibaN = 'servicos/normas.php' ;

}
else{
    if($page == 'animacao')
    {
        $subAnimacao = 'animacao.php';
        $activeSec = 'animacaoSec';

    }
    else
    {
        $subAnimacao = '../animacao/animacao.php';

    }
    if($page == 'desenho')
    {
        $subDesenho = 'desenho.php';
        $activeSec = 'desenhoSec';  
    }
    else
    {
        $subDesenho = '../desenho/desenho.php';
    }

    if($page == 'ilustracao')
    {
        $subIlustracao = 'ilustracao.php';
        $activeSec = 'ilustracaoSec'; 

    }else
    {
        $subIlustracao = '../ilustracao/ilustracao.php';
    }

    if($page == 'modelagem')
    {
        $subModelagem = 'modelagem.php';
        $activeSec = 'modelagemSec'; 
    }else
    {
        $subModelagem = '../modelagem/modelagem.php';
    }
    if($page == 'pixel')
    {
        $subPixel = 'pixel.php';
        $activeSec = 'pixelSec'; 

    }else
    {
        $subPixel = '../pixel/pixel.php';

    }

    if($page == 'saiba')
    {
        $subSaibaQ = 'quemSomos.php';
        $subSaibaC = 'carreira.php' ;
        $subSaibaN = 'normas.php' ;
        $activeSec  = 'saibaSec'; 
        
    }else
    {
        $subSaibaQ = '../servicos/quemSomos.php';
        $subSaibaC = '../servicos/carreira.php' ;
        $subSaibaN = '../servicos/normas.php' ;
    }
}
?>
<div class=" px-md-0 px-sm-3 px-lg-0">
    <h3 class=" text-center <?php
     echo $activeSec ; ?> ">Veja também</h3>
    <div class=" row imagensGaleria no-margin">
        <div class=" col-lg-3 galeria ">
            <div class="card-body sectionFooter">
                <a class=" linksAnimacao1 "  href=" <?php echo $subDesenho ; ?> " target="blank"><img
                        src=" <?php echo $imgDeseSec  ; ?> " alt="Logo da Pagina Desenho Vetorial" >
                    <h5 class="card-title <?php echo $activeSec ;?> ">Desenho Vetorial</h5>
                    <p class="text-left">Coloque Seu Texto e Anexe <b>Saiba Mais...</b>
                    </p>
                </a>
            </div>
            <div class="card-body sectionFooter ">
                <a class=" linksAnimacao1" href=" <?php echo $subSaibaQ ; ?> " target="blank"><img
                        src=" <?php echo $imgSabQSec  ; ?> " alt="Pintura da fachada da fatec São Roque ">
                    <h5 class="card-title <?php echo $activeSec ;?> ">PORTAL PIXELS</h5>
                    <p class="text-left">Estudantes da fatec São Roque criam o PORTAL PIXELS <b>Saiba Mais...</b>
                </p>
                </a>
            </div>
        </div>
        <div class=" col-lg-3 galeria ">
            <div class="card-body sectionFooter">
                <a  class=" linksAnimacao1" href=" <?php echo $subSaibaN ; ?> " target="blank"><img
                        src=" <?php echo $imgSabNSec  ; ?> " alt="Foto da pagina de normas ">
                    <h5 class="card-title  <?php echo $activeSec ;?> ">Normas</h5>
                    <p class="text-left">Conheça as normas de utilização <b>Saiba Mais...</b>
                    </p>
                </a>
            </div>
            <div class="card-body sectionFooter">
                <a class=" linksAnimacao1" href=" <?php echo $subAnimacao ; ?> " target="blank" ><img
                        src=" <?php echo $imgAniSec  ; ?>  " alt="Logo do Portal Animação Digital" >
                    <h5 class="card-title  <?php echo $activeSec ;?> ">Por trás da Animação digital</h5>
                    <p class="card-text">A historia da Animação suas Tecnicas e profissionais <b>Saiba Mais...</b>
                    </p>
                </a>
            </div>
        </div>
        <div class=" col-lg-3 galeria ">
            <!--Quem somos-->
            <div class="card-body sectionFooter ">
                <a class=" linksAnimacao1" href=" <?php echo $subSaibaC ; ?> " target="blank"><img
                        src=" <?php echo $imgSabCSec  ; ?>" alt="Imagem peguntando o que você que faze, sobre profissão" class="sectionBottom">
                        
                    <h5 class="card-title <?php echo $activeSec ;?> ">Junte-se a nós</h5>
                    <p class="text-left">Venha fazer parte dessa equipe de sucesso
                        <b>Cadastre - se</b></p>
                </a>
            </div>
            <div class="card-body sectionFooter">
                <a class=" linksAnimacao1" href=" <?php echo $subPixel ; ?> " target="blank"><img
                        src=" <?php echo $imgPixeSec  ; ?>" alt="Logo tipo doa pagina pixel art" class="sectionBottom   max-445px img-fluid">
                    <h5 class="card-title  <?php echo $activeSec ;?> ">Pixel Art</h5>
                    <p class="text-left">A arte do ponto a ponto
                        <b>Saiba Mais...</b></p>
                </a>
            </div>
        </div>
        <div class=" col-lg-3 galeria ">
            <div class="card-body sectionFooter">
                <a class=" linksAnimacao1" href=" <?php echo $subIlustracao ; ?>" target="blank"><img
                        src=" <?php echo $imgIlusSec ; ?> " alt="Logo do portal ilustraçao digital" class="sectionBottom">
                    <h5 class="card-title <?php echo $activeSec ;?> ">Ilustração Digital</h5>
                    <p class=" text-left">Um mundo de vantagens para vocẽ
                        <b>Saiba
                            mais...</b></p>
                </a>
            </div>
            <div class="card-body sectionFooter">
                <a class=" linksAnimacao1" href=" <?php echo $subModelagem ; ?>" target="blank" ><img
                        src=" <?php echo $imgModeSec ; ?> " alt="Logo da pagina modelagme 3d" class=" sectionBottom ">
                    <h5 class="card-title  <?php echo $activeSec ;?> ">Modelagem 3D</h5>
                    <p class=" text-left">Aproximando você da realidade <b>Saiba Mais...</b></p>
                </a>
            </div>  
        </div>
    </div>
</div>