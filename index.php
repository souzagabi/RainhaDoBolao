<!DOCTYPE html>

<html lang="pt-BR">

  <head>

    <!-- Google tag (gtag.js) -->
	<?php	require_once("./php/googletag.php");	?>

    <?php require_once('partsIndex/header.html'); ?>
	<script type="text/javascript" src="./js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="./banner.js"></script>

  </head>
  
  <body>

    <!-- Google Tag Manager (noscript) -->

	<?php require_once("./js/noscriptgoogle.js");	?>
	<!-- End Google Tag Manager (noscript) -->

	<!-- Incício da sessão do banner-->
    <section class="section-top-banner">
		<div class="top-banner">
			<?php require_once('partsIndex/top.html'); ?>
			<!-- Banner Section -->
			<div class="banner">
				<section class="container"  id="banner_geral">
					<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
						<ol id="carousel-indicators" class="carousel-indicators"></ol>
						<div id="carousel-inner" class="carousel-inner"></div>
						<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
							<img src="./img/imgFixa/SETA_ESQUERDA.png" alt="Seta para mudar imagem para esquerda" srcset="">
							<span class="visually-hidden">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
							<img src="./img/imgFixa/SETA_DIREITA.png" alt="Seta para mudar imagem para direita" srcset="">
							<span class="visually-hidden">Next</span>
						</a>
						<div class="carousel-caption d-none d-md-block">
							<p>Horário de atendimento de segunda a sábado das 10:00 às 18:00.</p>
						</div>
					</div>
				</section>
			</div>
			<div class="banner-mobile">
				<section class="container"  id="banner_mobile">
					<div id="carouselExampleCaptions-mobile" class="carousel slide" data-bs-ride="carousel">
						<ol id="carousel-indicators-mobile" class="carousel-indicators"></ol>
						<div id="carousel-inner-mobile" class="carousel-inner"></div>
						<a class="carousel-control-prev" href="#carouselExampleCaptions-mobile" role="button" data-bs-slide="prev">
							<img src="./img/imgFixa/SETA_ESQUERDA.png" alt="Seta para mudar imagem para esquerda" srcset="">
							<span class="visually-hidden">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleCaptions-mobile" role="button" data-bs-slide="next">
							<img src="./img/imgFixa/SETA_DIREITA.png" alt="Seta para mudar imagem para direita" srcset="">
							<span class="visually-hidden">Next</span>
						</a>
					</div>
				</section>
			</div>
			<!-- End Banner Section -->
		</div>
    </section>
	<section id="msgHorario">
		<div class="carousel-caption d-md-block">
			<p>Horário de atendimento de segunda a sábado das 10:00 às 18:00.</p>
		</div>
	</section>
	<!-- Fim da sessão do banner-->
	<!-- Início da sessão de conteúdo-->
	<?php
		require_once('php/funcao.php');
        $url = 'https://adjsistemas.dyndns.org:2001/adj/loteria/auth/DAOConcurso?$expand=bolao/loteria&$filter=stAtivo%20eq%20true&$expand=imagem&$expand=bolao/imagem&$expand=bolao/loteria/imagem&$orderby=bolao/loteria/ordemlandingpage&$orderby=concursoEspecial%20desc';

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
							<p>Horário de atendimento de segunda a sábado das 10:00 às 18:00.</p>
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
		<div class="game">
			<div class="cards">
				<section class="container">
					<div class="row col-mb-12 text-center">
						<?php 
							/*
								Fonte Utilizada - Futura LT Bold
								#2E3078 - Milionárioa => 01046b
								#209869 - Mega Sena
								#930089 - Lotofácil
								#260085 - Quina => 4b025a
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
								//=========================== Início do bloco para excluir os arquivdo da pasta bolão ====================\\
								eliminateFiles($caminho);
								//============================= Fim do bloco para excluir os arquivdo da pasta bolão ====================\\
								for ($i=0; $i < count($ev['value']); $i++) { 

									$numeroConsurso = $ev['value'][$i]['numero'];
									$dataSorteio 	= date("d/m/Y", strtotime($ev['value'][$i]['dataSorteio']));
									$valorPrevisao 	= number_format($ev['value'][$i]['valorPrevisao'],2,",",".");
									$qtdeCotas 		= $ev['value'][$i]['qtdeCotas'];
									$nomeImagem		= $ev['value'][$i]['bolao']['bolaoId'];
									$loteria		= $ev['value'][$i]['bolao']['loteria']['nomeDescricao'];
									$nomeImgLoteria = tirarAcentos($loteria);
									$valorCota		= number_format($ev['value'][$i]['bolao']['valorCota'],2,",",".");
									$cotaDisponivel = $ev['value'][$i]['qtdeCotasLiberadas'];
									$nomeDescricao	= $ev['value'][$i]['nomeDescricao'];
									$promocao		= $ev['value'][$i]['concursoEspecial'];
									
									if ($cotaDisponivel > 0) {

										$corFundo		= '#d6d6d6';
		
										$texto			= 'Loteria: '.$loteria.'%0ABolão: '.$nomeDescricao.'%0ANº Concurso: '.$numeroConsurso.'%0AValor do Concurso: '.$valorCota.'%0ACotas Disponíveis: '.$cotaDisponivel;
										
										if ($loteria == '+MILIONÁRIA') 	{ $corFundo = '#01046b';} 
										if (($loteria == 'MEGA SENA') ||($loteria == 'MEGA-SENA') )	{ $corFundo = '#209869';} 
										if ($loteria == 'LOTOFÁCIL') 	{ $corFundo = '#930089';} 
										if ($loteria == 'QUINA') 		{ $corFundo = '#4b025a';} 
										if ($loteria == 'LOTOMANIA') 	{ $corFundo = '#f78100';} 
										if ($loteria == 'TIMEMANIA') 	{ $corFundo = '#00ff48';} 
										if (($loteria == 'DUPLA SENA') || ($loteria == 'DUPLA-SENA')) { $corFundo = '#a61324';} 
										if ($loteria == 'FEDERAL') 		{ $corFundo = '#103099';} 
										if ($loteria == 'LOTECA') 		{ $corFundo = '#fb1f00';} 
										if ($loteria == 'DIA DE SORTE') { $corFundo = '#cb852b';} 
										if (($loteria == 'SUPER SETE') || ($loteria == 'SUPER-SETE')) { $corFundo = '#a8cf45';} 
										
										$bs64_evento = 'data:image/jpg;base64,'.$ev['value'][$i]['imagem'];
										$imgLoteria  = 'data:image/jpg;base64,'.$ev['value'][$i]['bolao']['loteria']['imagem'];
		
										if(!is_dir($caminho))
											mkdir($caminho, 777);

										$img = converter_base64_para_imagem($bs64_evento, $caminho, $nomeImagem);
										$imgLot = converter_base64_para_imagem($imgLoteria, 'img/', $nomeImgLoteria);
										
										if ($i == 0) {
											echo '<div class="row loteria" style="background-color: '.$corFundo.'">';
											echo '<div class="imgLoteria"><img alt="" class="imgLot" src="./img/'.$nomeImgLoteria.'.jpg"></div>';
										} else if ($loteria != $ev['value'][$i - 1]['bolao']['loteria']['nomeDescricao'] ) {
											echo '</div>';
											echo '<div class="row loteria" style="background-color: '.$corFundo.'">';
											echo '<div class="imgLoteria"><img alt="" class="imgLot" src="./img/'.$nomeImgLoteria.'.jpg"></div>';
										}
										if ($promocao == 'TRUE'){
											$bolaoPromocao  = 'data:image/jpg;base64,'.$ev['value'][$i]['bolao']['imagem'];
											converter_base64_para_imagem($bolaoPromocao, 'img/', $nomeImagem);

											echo '<div class="col-sm-6 promocao"><img width="100%" style="margin-top: 35%;" src="./img/promocao/'.$nomeImagem.'.jpg"></div>';
										}
						?>
						
						<div class="column-geral col-sm-3" style="background-color: <?php echo $corFundo; ?>;">
							<div class="row title">
								<!-- ====================== Início do Título ====================== -->
								<div class="column">
									<h5><i class="fa fa-search-location"></i> Concurso Nº: <?php echo $numeroConsurso; ?></h5>
									<h5><i class="fa fa-calendar-check"></i> Data do sorteio: <?php echo $dataSorteio; ?></h5>
									<h5><i class="fa fa-dollar-sign"></i> Estimativa de Prêmio: <?php echo $valorPrevisao; ?></h5>
									<h5><i class="fa fa-file-lines"></i> Valor da Cota: <?php echo $valorCota; ?></h5>
									<h5><i class="fa fa-file-lines"></i> Cotas Disponíveis: <?php echo $cotaDisponivel.' - Sujeito a Disponibilidade'; ?></h5>
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
								<a class="btn" href="https://api.whatsapp.com/send?phone=<?php echo $telefoneAtendimento; ?>&amp;text=<?php echo $texto?>">
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
									} // verificação se tem cota disponível
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
							<p>Horário de atendimento de segunda a sábado das 10:00 às 18:00.</p>
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

	<?php require_once('partsIndex/footer.html'); ?>
	
  <script src="./js/funcao.js"></script>
</html>
