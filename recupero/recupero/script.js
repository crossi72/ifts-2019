//aggancio le funzioni ai pulsanti della pagina
document.getElementById("centra-immagini").addEventListener("click", imageCenter);
document.getElementById("sinistra-immagini").addEventListener("click", imageLeft);
document.getElementById("nascondi-1").addEventListener("click", nascondi1);
document.getElementById("mostra-1").addEventListener("click", mostra1);
document.getElementById("titolo-grande").addEventListener("click", titoloGrande);
document.getElementById("titolo-piccolo").addEventListener("click", titoloPiccolo);
document.getElementById("titolo-normale").addEventListener("click", titoloNormale);

function imageCenter() {
	//cerco le immagini presenti nella pagina
	var immagini = document.getElementsByTagName("img");

	//ad ogni immagine aggiungo la classe opportuna
	for (i = 0; i < immagini.length; i++){
		immagini[i].classList.add("centro");
	}
}

function imageLeft() {
	//cerco le immagini presenti nella pagina
	var immagini = document.getElementsByTagName("img");

	//ad ogni immagine aggiungo la classe opportuna
	for (i = 0; i < immagini.length; i++){
		immagini[i].classList.remove("centro");
	}
}

function nascondi1() {
	//cerco le immagini presenti nella pagina
	var immagine = document.getElementById("img1");

	//ad ogni immagine aggiungo la classe opportuna
	immagine.classList.add("nascosto");
}

function mostra1() {
	//cerco le immagini presenti nella pagina
	var immagine = document.getElementById("img1");

	//ad ogni immagine aggiungo la classe opportuna
	immagine.classList.remove("nascosto");
}

function titoloGrande() {
	//cerco le immagini presenti nella pagina
	var titoli = document.getElementsByClassName("titolo-importante");

	//ad ogni immagine aggiungo la classe opportuna
	for (i = 0; i < titoli.length; i++){
		titoli[i].classList.remove("h1-piccolo");
		titoli[i].classList.add("h1-grande");
	}
}

function titoloPiccolo() {
	//cerco le immagini presenti nella pagina
	var titoli = document.getElementsByClassName("titolo-importante");

	//ad ogni immagine aggiungo la classe opportuna
	for (i = 0; i < titoli.length; i++){
		titoli[i].classList.remove("h1-grande");
		titoli[i].classList.add("h1-piccolo");
	}
}

function titoloNormale() {
	//cerco le immagini presenti nella pagina
	var titoli = document.getElementsByClassName("titolo-importante");

	//ad ogni immagine aggiungo la classe opportuna
	for (i = 0; i < titoli.length; i++){
		titoli[i].classList.remove("h1-grande");
		titoli[i].classList.remove("h1-piccolo");
	}
}