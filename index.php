<!DOCTYPE html>

<html lang="pt-BR">

  <head>

      <!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-KGBJWHR');</script>

<!-- End Google Tag Manager -->

    <meta charset="UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Rainha do Bolão</title>

    

	<link rel="icon" href="./img/RainhaBolao44x44.png">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
	

	<link rel="stylesheet" href="./css/index.css">
	<link rel="stylesheet" href="./css/card.css">
	<link rel="stylesheet" id="jupiterx-child-css" href="./css/style.css" type="text/css" media="all" />

  </head>
  
  <body>

      <!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KGBJWHR"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->

	<!-- Incício da sessão do banner-->

    <section class="section-top-banner">

      <div class="top-banner">

		<header id="top-menu">

			<section id="top-bar" class="top-bar">
				<section id="top-bar-img" class="top-bar-img">

				<div class="row">

					<figure>

						<img src="./img/RainhaBolaoLogo.png" alt="Logotipo Rainha do Bolão"/>

					</figure>

				</div>

				</section>
			</section>

		</header>

		<div class="banner">

			<!-- Banner Section -->

			<section id="banner">

				<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

					<ol class="carousel-indicators">

						<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>

						<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>

						<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>

					</ol>

					<div class="carousel-inner">

						<div class="carousel-item active">

							<img src="./img/BannerRainhaBolao.png" alt="FIXO" class="d-block w-100" alt="..." />
							<div class="carousel-caption d-none d-md-block">
								<p>Horário de atendimento de segunda a sábado das 9:00 às 19:00.</p>
							</div>
						</div>

						<div class="carousel-item">

							<img src="https://www.markuptag.com/images/slider-img-2.jpg" class="d-block w-100" alt="..." />
							<div class="carousel-caption d-none d-md-block">
								<h3>Nesse momento  estamos dedicados somente Lotofacil Independência .</h3>
								<h3>A PARTIR DO 12/09/22 TEREMOS TODAS AS MODALIDADES DE JOGOS EM FORMATO DE BOLÕES</h3>
								<p>Horário de atendimento de segunda a sábado das 9:00 às 19:00.</p>
							</div>
						</div>

						<div class="carousel-item">

							<img src="https://www.markuptag.com/images/slider-img-3.jpg" class="d-block w-100" alt="..." />
							<div class="carousel-caption d-none d-md-block">
								<h3>Nesse momento  estamos dedicados somente Lotofacil Independência .</h3>
								<h3>A PARTIR DO 12/09/22 TEREMOS TODAS AS MODALIDADES DE JOGOS EM FORMATO DE BOLÕES</h3>
								<p>Horário de atendimento de segunda a sábado das 9:00 às 19:00.</p>
							</div>
						</div>

					</div>

					<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">

						<span class="carousel-control-prev-icon" aria-hidden="true"></span>

						<span class="visually-hidden">Previous</span>

					</a>

					<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">

						<span class="carousel-control-next-icon" aria-hidden="true"></span>

						<span class="visually-hidden">Next</span>

					</a>

				</div>

			</section>

			<!-- End Banner Section -->

			<section id="banner">

				<div class="swiper-container swiper-container-initialized swiper-container-horizontal">

					<div class="swiper-button-prev"></div>

					<div class="swiper-button-next"></div>

					<div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">

						<span class="swiper-pagination-bullet"></span><span

							class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>

					</div>

					<div class="swiper-wrapper" style="transform: translate3d(-2698px, 0px, 0px); transition-duration: 0ms;">

						<div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" style="width: 1349px">

							<figure>

								<img src="./img/BannerRainhaBolao.png" alt="FIXO" style="width: 1349px" height="200" />

							</figure>

						</div>

					</div>

				</div>

			</section>

		</div>

      </div>

    </section>

	<!-- Fim da sessão do banner-->
	<!-- Início da sessão de conteúdo-->
	<?php
		require_once('php/funcao.php');
        $url = 'https://adjsistemas.dyndns.org:2001/adj/loteria/auth/DAOConcurso?$expand=bolao/loteria&$filter=stAtivo%20eq%20true&$expand=imagem&$expand=bolao/imagem&$expand=bolao/loteria/imagem';

        $eventos = json_decode(file_get_contents($url));
        $ev = converterStrClassParaArray($eventos);
		
		
		$urlEmpresa = 'https://adjsistemas.dyndns.org:2001/adj/loteria/auth/DAOEmpresa';
		
        $empresa = json_decode(file_get_contents($urlEmpresa));
        $evEmpesa = converterStrClassParaArray($empresa);
		
		$telefoneAtendimento = $evEmpesa['value'][0]['telefoneAtendimento'];

		$caminho = 'img/bolao/' ;
    
    ?>
	<section class="container conetudo">
		<section class="historia">
			<div class="row">
				<div class="col-md-12">
					<article>
						<div>
							<div>
								<span>
									<h2>
										QUEM SOMOS
									</h2>
								</span>
							</div>
							<p>A Rainha do Bolão é um serviço disponibilizado pela Lotérica LORD LOTERICO razão social Falcao Filgueiras Ltda ME, CNPJ 64.134.331/0001-05, que possui 2 lojas em Marília – SP.</p>
							<p>Loja 1 - Rua das Roseiras 233, no interior do Supermercado Confiança Sul, localizado no bairro Fragata.</p>
							<p>Loja 2 - Rua Bandeirantes 430, no interior do Supermercado Pão de Açúcar, localizado no centro.</p>
							<p>Estamos no mercado desde junho de 1989, há 33 anos no mercado lotérico. </p>
							<p>Escolhemos estar aqui com você para trazer muita sorte e milhões em prêmios através da comodidade dos serviços pelo WhatsApp 
								Venha conosco. É fácil, prático e seriedade acima de tudo. Alie sua sorte com a nossa e venha ganhar você também.  Vemmm....</p>
							<p>Horário de atendimento de segunda a sábado das 9:00 às 19:00.</p>
						</div>
					</article>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<img src="./img/imgLoja/interno1.jpeg" alt="imagem externa da loja">
				</div>
				<div class="col-md-3">
					<img src="./img/imgLoja/interno2.jpeg" alt="imagem externa da loja">
				</div>
				<div class="col-md-3">
					<img src="./img/imgLoja/externo1.jpeg" alt="imagem externa da loja">
				</div>
				<div class="col-md-3">
					<img src="./img/imgLoja/externo2.jpeg" alt="imagem externa da loja">
				</div>
			</div>
		</section>
		<!--div class="leading-page" style="background-color: #930089;"><center><img src="./img/leadingpage.jpeg" alt="" srcset=""></center></div-->
		<div class="game">
			<div class="cards">
				<section class="container">
					<div class="row col-mb-12 text-center">
						<?php 
							/*
								Fonte Utilizada - Futura LT Bold
								#2E3078 - Milionárioa
								#209869 - Mega Sena
								#930089 - Lotofácil
								#260085 - Quina
								#f78100 - Lotomania
								#00ff48 - Timemania
								#a61324 - Dupla Sena
								#103099 - Federal
								#fb1f00 - Loteca
								#cb852b - Dia da Sorte
								#a8cf45 - Super Sete
							
							*/
							$razaoSocial	= 'Falcao Filgueiras Ltda ME';
							$chavePix		= '64134331000105';
							
							if ($ev['value'][0] <> '' || $ev['value'][0] <> null) {
								
								for ($i=0; $i < count($ev['value']); $i++) { 

									$numeroConsurso = $ev['value'][$i]['numero'];
									$dataSorteio 	= date("d/m/Y", strtotime($ev['value'][$i]['dataSorteio']));
									$valorPrevisao 	= number_format($ev['value'][$i]['valorPrevisao'],2,",",".");
									$qtdeCotas 		= $ev['value'][$i]['qtdeCotas'];
									$nomeImagem		= $ev['value'][$i]['bolao']['bolaoId'];
									$loteria		= $ev['value'][$i]['bolao']['loteria']['nomeDescricao'];
									$valorCota		= number_format($ev['value'][$i]['bolao']['valorCota'],2,",",".");
									$cotaDisponivel = $ev['value'][$i]['qtdeCotasLiberadas'];
									$nomeDescricao	= $ev['value'][$i]['nomeDescricao'];
									
									if ($cotaDisponivel > 0) {

										$corFundo		= '#d6d6d6';
		
										$texto			= 'Loteria: '.$loteria.'%0ABolão: '.$nomeDescricao.'%0ANº Concurso: '.$numeroConsurso.'%0AValor do Concurso: '.$valorCota.'%0ACotas Disponíveis: '.$cotaDisponivel;
										
										if ($loteria == '+MILIONÁRIA') 	{ $corFundo = '#2E3078';} 
										if (($loteria == 'MEGA SENA') ||($loteria == 'MEGA-SENA') )	{ $corFundo = '#209869';} 
										if ($loteria == 'LOTOFÁCIL') 	{ $corFundo = '#930089';} 
										if ($loteria == 'QUINA') 		{ $corFundo = '#260085';} 
										if ($loteria == 'LOTOMANIA') 	{ $corFundo = '#f78100';} 
										if ($loteria == 'TIMEMANIA') 	{ $corFundo = '#00ff48';} 
										if (($loteria == 'DUPLA SENA') || ($loteria == 'DUPLA-SENA')) { $corFundo = '#a61324';} 
										if ($loteria == 'FEDERAL') 		{ $corFundo = '#103099';} 
										if ($loteria == 'LOTECA') 		{ $corFundo = '#fb1f00';} 
										if ($loteria == 'DIA DE SORTE') { $corFundo = '#cb852b';} 
										if (($loteria == 'SUPER SETE') || ($loteria == 'SUPER-SETE')) { $corFundo = '#a8cf45';} 
										
										$bs64_evento = 'data:image/jpg;base64,'.$ev['value'][$i]['bolao']['imagem'];
		
										$img = converter_base64_para_imagem($bs64_evento, $caminho, $nomeImagem);
								
						?>
						<div class="column-geral col-sm-3" style="background-color: <?php echo $corFundo; ?>;">
							<div class="row title">
								<!-- ====================== Início do Título ====================== -->
								<div class="column">
									<h5><i class="fa fa-search-location"></i> Concurso Nº: <?php echo $numeroConsurso; ?></h5>
									<h5><i class="fa fa-calendar-check"></i> Data do sorteio: <?php echo $dataSorteio; ?></h5>
									<h5><i class="fa fa-dollar-sign"></i> Estimativa de Prêmio: <?php echo $valorPrevisao; ?></h5>
									<h5><i class="fa fa-file-lines"></i> Valor da Cota: <?php echo $valorCota; ?></h5>
									<h5><i class="fa fa-file-lines"></i> Cotas Disponíveis: <?php echo $cotaDisponivel; ?></h5>
								</div>
								<!-- ====================== Fim do Título ====================== -->
								
							</div>
							<!-- ===================== Início do Conteúdo ====================== -->
							<div class="card0">
								
								<div class="card text-center">
									<div class="card-body">
										<img alt="" class="card-img-top mediaCard" src="./img/bolao/<?php echo $nomeImagem.'.jpg'; ?>">
									</div>
								</div>
								
							</div>
							<!-- ===================== Fim do Conteúdo ====================== -->

							<!-- ===================== Início do Rodapé ====================== -->
							<h4><?php echo  $nomeDescricao;?></h4>
							<div class="botao">
								<!--a class="btn" data-bs-toggle="modal" onclick="carregar(id)" id="<?php //echo $texto; ?>" data-bs-target="#modalBolao"-->
								<a class="btn" href="https://api.whatsapp.com/send?phone=<?php echo $telefoneAtendimento; ?>&amp;text=<?php echo $texto?>" target="_blank">
									<span >
										<span >
											<i class="fab fa-whatsapp"></i> 
										</span>
										<span > COMPRAR </span>
									</span>
								</a>
							</div>
							<!-- ===================== Fim do Rodapé ====================== -->
						</div>
						<?php 
									$texto 			= '';
									$numeroConsurso = '';
									$dataSorteio 	= '';
									$valorPrevisao 	= '';
									$qtdeCotas 		= '';
									$nomeImagem		= '';
									$loteria		= '';
									$valorCota		= '';
									$nomeDescricao	= '';
									$corFundo		= '';
									} // verificação se tem cota disponível

								} // Fim do loop For da linha 212
							} else {// Fim da verificação se o existe dados na consulta
								?>
								<div class="botao">
									<div><strong><h3>Nossas cotas de bolões foram esgotadas, clique aqui para consultar outras opções.</strong></h3></div>
									<a class="btn" href="https://api.whatsapp.com/send?phone=<?php echo $telefoneAtendimento; ?>" target="_blank">
										<span >
											<span >
												<i class="fab fa-whatsapp"></i> 
											</span>
											<span > Entre em contato </span>
										</span>
									</a>
								</div>
						<?php
						
							}// Fim do else
						?>
					</div>
				</section>
			</div>
		</div>
		<section class="historia-footer">
			<div class="row">
				<div class="col-md-12">
					<article>
						<div>
							<div>
								<span>
									<h2>
										QUEM SOMOS
									</h2>
								</span>
							</div>
							<p>A Rainha do Bolão é um serviço disponibilizado pela Lotérica LORD LOTERICO razão social Falcao Filgueiras Ltda ME, CNPJ 64.134.331/0001-05, que possui 2 lojas em Marília – SP.</p>
							<p>Loja 1 - Rua das Roseiras 233, no interior do Supermercado Confiança Sul, localizado no bairro Fragata.</p>
							<p>Loja 2 - Rua Bandeirantes 430, no interior do Supermercado Pão de Açúcar, localizado no centro.</p>
							<p>Estamos no mercado desde junho de 1989, há 33 anos no mercado lotérico. </p>
							<p>Escolhemos estar aqui com você para trazer muita sorte e milhões em prêmios através da comodidade dos serviços pelo WhatsApp 
								Venha conosco. É fácil, prático e seriedade acima de tudo. Alie sua sorte com a nossa e venha ganhar você também.  Vemmm....</p>
							<p>Horário de atendimento de segunda a sábado das 9:00 às 19:00.</p>
						</div>
					</article>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<img src="./img/imgLoja/interno1.jpeg" alt="imagem externa da loja">
				</div>
				<div class="col-md-3">
					<img src="./img/imgLoja/interno2.jpeg" alt="imagem externa da loja">
				</div>
				<div class="col-md-3">
					<img src="./img/imgLoja/externo1.jpeg" alt="imagem externa da loja">
				</div>
				<div class="col-md-3">
					<img src="./img/imgLoja/externo2.jpeg" alt="imagem externa da loja">
				</div>
			</div>
		</section>
	</section>
	<!-- Fim da sessão de conteúdo-->

	<section class="footer">

		<!-- Footer -->

		<footer class="text-center text-lg-start bg-light text-muted">

			<!-- Section: Social media -->

			<!--section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

				<div class="me-5 d-none d-lg-block">
					<span>Entre em contato conosco em nossas redes sociais:</span>
				</div>
				<div>
					<a href="" class="me-4 text-reset">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a href="" class="me-4 text-reset">
						<i class="fab fa-twitter"></i>
					</a>
					<a href="" class="me-4 text-reset">
						<i class="fab fa-google"></i>
					</a>
					<a href="" class="me-4 text-reset">

						<i class="fab fa-instagram"></i>

					</a>

					<a href="" class="me-4 text-reset">

						<i class="fab fa-linkedin"></i>

					</a>

					<a href="" class="me-4 text-reset">

						<i class="fab fa-github"></i>

					</a>

				</div>

			</section-->

			<!-- Section: Social media -->

			<!-- Section: Links  -->
			<hr>
			<section class="links">

				<div class="container text-center text-md-start mt-5">

					<!-- Grid row -->

					<div class="row mt-3">

						<!-- Grid column -->

						<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

							<!-- Content -->
							<h6 class="text-uppercase fw-bold mb-4"><i class="fas fa-gem me-3"></i>LORD LOTÉRICO</h6>
							<!--p>Here you can use rows and columns to organize your footer content. Lorem ipsum
								dolor sit amet, consectetur adipisicing elit.</p-->
						</div>

						<!-- Grid column -->

		

						<!-- Grid column -->

						<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
							<!-- Links -->
							<h6 class="text-uppercase fw-bold mb-4">Produtos</h6>
							<!--p><a href="#!" class="form-control btn-outline-secondary" style="pointer-events: none">MEGA-SENA</a></p>
							<p><a href="#!" class="form-control btn-outline-secondary" style="pointer-events: none">QUINA</a></p>
							<p><a href="#!" class="form-control btn-outline-secondary" style="pointer-events: none">LOTOFÁCIL</a></p>
							<p><a href="#!" class="form-control btn-outline-secondary" style="pointer-events: none">LOTOMANIA</a></p-->
						</div>
						<!-- Grid column -->
						<!-- Grid column -->
						<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
							<!-- Links -->
							<h6 class="text-uppercase fw-bold mb-4">Links Úteis</h6>
							<!--p><a href="#!" class="form-control btn-outline-secondary" style="pointer-events: none">Preço</a></p>
							<p><a href="#!" class="form-control btn-outline-secondary" style="pointer-events: none">Configuração</a></p>
							<p><a href="#!" class="form-control btn-outline-secondary" style="pointer-events: none">Ordens</a></p>
							<p><a href="#!" class="form-control btn-outline-secondary" style="pointer-events: none">Ajuda</a></p-->
						</div>
						<!-- Grid column -->
						<!-- Grid column -->
						<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

							<!-- Links -->

							<h6 class="text-uppercase fw-bold mb-4">Contato</h6>

							<p><i class="fas fa-home me-3"></i> Loja 1 - Rua das Roseiras 233</p>
							<p><i class="fas fa-home me-3"></i> Loja 2 - Rua Bandeirantes 430</p>

							<!--p><i class="fas fa-envelope me-3"></i>info@example.com</p-->

							<p><i class="fas fa-phone me-3"></i> (14) 99687-0691</p>

							<!--p><i class="fas fa-print me-3"></i> (14) xxxx-xxxx</p-->

						</div>
						<!-- Grid column -->
					</div>
					<!-- Grid row -->
				</div>
			</section>
			<!-- Section: Links  -->
			<!-- Copyright -->
			<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">

				<p> &copy; 2008 - ADJ-Sistemas - (14) 3401-2243.

					<!--a class="text-reset fw-bold" href="https://adjsistemas.com.br/">adjsistemas.com.br</a-->

				</p>

			</div>

			<!-- Copyright -->

		</footer>

		<!-- Footer -->

	</section>
	<!-- Início do Modal -->
	<div class="modal fade" id="modalBolao" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h3>Iniciar Compra</h3>
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="./php/dados.php" method="POST" target="_blank">
					<div class="modal-body">
						<?php 

							echo '<div id="modal_bolao"></div>';	
							echo '<div id="modal_valorCota"></div>';	
							echo '<div id="modal_cotaDisponivel"></div><hr>';	
							
							echo 'Efetuar a transferência do valor da cota para: <br>';	
							echo 'Empresa: <strong>'.$razaoSocial.'</strong><br>'; 
							echo 'Chave PIX CNPJ: <strong>'.$chavePix.'</strong>'; 
						?>
						<input type="text" name="empresa" id="empresa" hidden value="<?php echo $razaoSocial; ?>" readonly>
						<input type="text" name="chavepix" id="chavepix" hidden value="<?php echo $chavePix; ?>" readonly>
						
						<input type="text" name="phone" id="phone" hidden value="<?php echo $telefoneAtendimento; ?>" readonly>
						<input type="text" name="modal_text" id="modal_text" hidden readonly>

						<input class="input-modal form-control" type="text"  id="nome" name="nome" placeholder="Nome completo" required>
						<input class="input-modal form-control" type="text"  id="cpf" name="cpf" placeholder="CPF" required>
						<input class="input-modal form-control" type="text"  id="telefone" name="telefone" placeholder="Telefone" required>
						<input class="input-modal form-control" type="email" id="email" name="email" placeholder="E-mail" required>
						<?php echo '<center><div class="aviso"><strong>Você será direcionado para um de nossos atendentes para finalizar a compra.</strong></div</center>'; ?>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
						<button type="submit" class="btn btn-outline-success" target="_blank">
							<span >
								<span >
									<i class="fab fa-whatsapp"></i> 
								</span>
								<span > Confirmar </span>
							</span>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Fim do Modal -->
  <script src="./js/funcao.js"></script>
</html>
