<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css" type="text/css" media="all">
</head>
<body>
	<div class="pulsanti">
		<input type="button" value="titolo grande" id="titolo-grande">
		<input type="button" value="titolo piccolo" id="titolo-piccolo">
		<input type="button" value="titolo normale" id="titolo-normale">
	</div>
	<div>
		<?php
			stampa('primo titolo', 'titolo-importante', 'H');
			stampa('testo di prova', 'blu grande', 'P');
			stampa_titolo('secondo titolo', 'titolo-grande');
			stampa_testo('testo di prova', array('citazione','grande'), 2);
		?>
	</div>
	<div>
		<?php
			stampa_titolo('lezione', 'titolo-importante');
			stampa_testo('testo di prova', array('blu', 'grande'), 1);
			stampa_titolo('lezione', 'titolo-grande');
			stampa_testo('testo di prova', array('blu'), 5);
		?>
	</div>
	<div>
		<img src="immagine.jpg" class="piccola" id="img1">
	</div>
	<div>
		<img src="immagine.jpg" class="piccola" id="img2">
	</div>
	<div>
		<img src="immagine.jpg" class="piccola" id="img3">
	</div>
	<div>
		<img src="immagine.jpg" class="piccola" id="img4">
	</div>
	<div>
		<input type="button" value="immagini al centro" id="centra-immagini">
		<input type="button" value="immagini a sinistra" id="sinistra-immagini">
		<?php 
			for ($i=1; $i <= 4; $i++){
				echo '<input type="button" value="nascondi immagine '. $i .'" id="nascondi-'. $i .'">';
				echo '<input type="button" value="mostra immagine '. $i .'" id="mostra-'. $i .'">';
			}
		?>
	</div>
</body>
<script src="script.js"></script>
</html>

<?php

	/**
	 * Stampa un titolo HTML
	 *
	 * @param [type] $testo: testo da inserire nel titolo
	 * @param [type] $classe: classe css da assegnare al tag H1
	 * @return void
	 */
	function stampa_titolo($testo, $classe){
		echo '<h1 class="' . $classe . '">';
		echo $testo;
		echo '</h1>';
	}

	/**
	 * Stampa un testo generico
	 *
	 * @param [type] $testo: contenuto del tag da stampare
	 * @param [type] $classe: classe css da applicare al tag contenitore
	 * @param [type] $tipo: accetta H o P
	 * @return void
	 */
	function stampa($testo, $classe, $tipo){
		if ($tipo == 'P'){
			//stampo un paragrafo
			echo '<p class="' . $classe . '">';
			echo $testo;
			echo '</p>';
		} else {
			//stampo un titolo
			echo '<h1 class="' . $classe . '">';
			echo $testo;
			echo '</h1>';
		}
	}

	/**
	 * Stampa un paragrafo HTML
	 *
	 * @param [type] $testo: testo da inserire nel paragrafo
	 * @param [type] $classe: classe css da assegnare al tag <p>
	 * @param [type] $ripetizioni: quante volte deve essere stampato il testo
	 * @return void
	 */
	function stampa_testo($testo, $classe, $ripetizioni){
		for ($i = 0; $i < $ripetizioni; $i++){
			echo '<p class="' . estrai_classi($classe) . '">';
			echo $testo;
			echo '</p>';
		}
	}

	/**
	 * Trasforma un array di stringhe in una stringa separata con ' ' (spazio)
	 *
	 * @param [type] $classi: array contenente le classi
	 * @return stringa contenente le classi separate da uno spazio
	 */
	function estrai_classi($classi){
		$risultato = '';

		for ($i = 0; $i < count($classi); $i++){
			$risultato = $risultato . $classi[$i] . ' ';
		}

		return $risultato;
	}

?>
