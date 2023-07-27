<?php  
include("/path-to-library/simplehtmldom/simple_html_dom.php");
$GLOBALS["html"] = file_get_html('https://halkbank.mk/kursna-lista.nspx#');

function showEUR(){
	 		   		$cell = $GLOBALS["html"]->find('tr',3);
 		   		$sellEUR = $cell->find('td', 5);
 		   		$buyEUR = $cell->find('td',3);
 		   		if($buyEUR->plaintext =='0,0000' and $sellEUR->plaintext =='0,0000'){
 		   			echo "Не се продаваат/купуваат евра";
 		   			echo "<br>";
 		   		}	
 		   		else {
 		   		echo "Куповен за евра ";
 		   		echo $buyEUR->plaintext;
 		   		echo "...";
 		   		echo "Продажен за евра ";
 		   		echo $sellEUR->plaintext;
 		   		echo "<br>";	
 		   		}	
 		   	}
function showTRY(){
	 		   		$cell = $GLOBALS["html"]->find('tr',4);
 		   		$sellTRY = $cell->find('td', 5);
 		   		$buyTRY = $cell->find('td',3);
 		   		if($buyTRY->plaintext =='0,0000' and $sellTRY->plaintext =='0,0000'){
 		   			echo "Не се продаваат/купуваат лири";
 		   			echo "<br>";
 		   		}	
 		   		else {
 		   		echo "Куповен за лири ";
 		   		echo $buyTRY->plaintext;
 		   		echo "...";
 		   		echo "Продажен за лири ";
 		   		echo $sellTRY->plaintext;
 		   		echo "<br>";	
 		   		}	
 		   	}
function showUSD(){
	 		   		$cell = $GLOBALS["html"]->find('tr',5);
 		   		$sellUSD = $cell->find('td', 5);
 		   		$buyUSD = $cell->find('td',3);
 		   		if($buyUSD->plaintext =='0,0000' and $sellUSD->plaintext =='0,0000'){
 		   			echo "Не се продаваат/купуваат долари";
 		   			echo "<br>";
 		   		}	
 		   		else {
 		   		echo "Куповен за долари ";
 		   		echo $buyUSD->plaintext;
 		   		echo "...";
 		   		echo "Продажен за долари ";
 		   		echo $sellUSD->plaintext;
 		   		echo "<br>";	
 		   		}	
 		   	}
function showGBP(){
	 		   		$cell = $GLOBALS["html"]->find('tr',6);
 		   		$sellGBP = $cell->find('td', 5);
 		   		$buyGBP = $cell->find('td',3);
 		   		if($buyGBP->plaintext =='0,0000' and $sellGBP->plaintext =='0,0000'){
 		   			echo "Не се продаваат/купуваат фунти";
 		   			echo "<br>";
 		   		}	
 		   		else {
 		   		echo "Куповен за фунти ";
 		   		echo $buyGBP->plaintext;
 		   		echo "...";
 		   		echo "Продажен за фунти ";
 		   		echo $sellGBP->plaintext;
 		   		echo "<br>";	
 		   		}	
 		   	}
function showCHF(){
	 		   		$cell = $GLOBALS["html"]->find('tr',7);
 		   		$sellCHF = $cell->find('td', 5);
 		   		$buyCHF = $cell->find('td',3);
 		   		if($buyCHF->plaintext =='0,0000' and $sellCHF->plaintext =='0,0000'){
 		   			echo "Не се продаваат/купуваат франци";
 		   			echo "<br>";
 		   		}	
 		   		else {
 		   		echo "Куповен за франци ";
 		   		echo $buyCHF->plaintext;
 		   		echo "...";
 		   		echo "Продажен за франци ";
 		   		echo $sellCHF->plaintext;
 		   		echo "<br>";	
 		   		}	
 		   	}
function showSEK(){
	 		   		$cell = $GLOBALS["html"]->find('tr',8);
 		   		$sellSEK = $cell->find('td', 5);
 		   		$buySEK = $cell->find('td',3);
 		   		if($buySEK->plaintext =='0,0000' and $sellSEK->plaintext =='0,0000'){
 		   			echo "Не се продаваат/купуваат шведски круни";
 		   			echo "<br>";
 		   		}	
 		   		else {
 		   		echo "Куповен за шведски круни ";
 		   		echo $buySEK->plaintext;
 		   		echo "...";
 		   		echo "Продажен за шведски круни ";
 		   		echo $sellSEK->plaintext;
 		   		echo "<br>";	
 		   		}	
 		   	}
function showNOK(){
	 		   		$cell = $GLOBALS["html"]->find('tr',9);
 		   		$sellNOK = $cell->find('td', 5);
 		   		$buyNOK = $cell->find('td',3);
 		   		if($buyNOK->plaintext =='0,0000' and $sellNOK->plaintext =='0,0000'){
 		   			echo "Не се продаваат/купуваат норвешки круни";
 		   			echo "<br>";
 		   		}	
 		   		else {
 		   		echo "Куповен за норвешки круни ";
 		   		echo $buyNOK->plaintext;
 		   		echo "...";
 		   		echo "Продажен за норвешки круни ";
 		   		echo $sellNOK->plaintext;
 		   		echo "<br>";	
 		   		}	
 		   	}
function showJPY(){
	 		   		$cell = $GLOBALS["html"]->find('tr',10);
 		   		$sellJPY = $cell->find('td', 5);
 		   		$buyJPY = $cell->find('td',3);
 		   		if($buyJPY->plaintext =='0,0000' and $sellJPY->plaintext =='0,0000'){
 		   			echo "Не се продаваат/купуваат јени";
 		   			echo "<br>";
 		   		}	
 		   		else {
 		   		echo "Куповен за јени ";
 		   		echo $buyJPY->plaintext;
 		   		echo "...";
 		   		echo "Продажен за јени ";
 		   		echo $sellJPY->plaintext;
 		   		echo "<br>";	
 		   		}	
 		   	}
function showDKK(){
	 		   		$cell = $GLOBALS["html"]->find('tr',11);
 		   		$sellDKK = $cell->find('td', 5);
 		   		$buyDKK = $cell->find('td',3);
 		   		if($buyDKK->plaintext =='0,0000' and $sellDKK->plaintext =='0,0000'){
 		   			echo "Не се продаваат/купуваат дански круни";
 		   			echo "<br>";
 		   		}	
 		   		else {
 		   		echo "Куповен за дански круни ";
 		   		echo $buyDKK->plaintext;
 		   		echo "...";
 		   		echo "Продажен за дански круни ";
 		   		echo $sellDKK->plaintext;
 		   		echo "<br>";	
 		   		}	
 		   	}
function showCAD(){
	 		   		$cell = $GLOBALS["html"]->find('tr',12);
 		   		$sellCAD = $cell->find('td', 5);
 		   		$buyCAD = $cell->find('td',3);
 		   		if($buyCAD->plaintext =='0,0000' and $sellCAD->plaintext =='0,0000'){
 		   			echo "Не се продаваат/купуваат канадски долари";
 		   			echo "<br>";
 		   		}	
 		   		else {
 		   		echo "Куповен за канадски долари ";
 		   		echo $buyCAD->plaintext;
 		   		echo "...";
 		   		echo "Продажен за канадски долари ";
 		   		echo $sellCAD->plaintext;
 		   		echo "<br>";	
 		   		}	
 		   	}
function showAUD(){
	 		   		$cell = $GLOBALS["html"]->find('tr',13);
 		   		$sellAUD = $cell->find('td', 5);
 		   		$buyAUD = $cell->find('td',3);
 		   		if($buyAUD->plaintext =='0,0000' and $sellAUD->plaintext =='0,0000'){
 		   			echo "Не се продаваат/купуваат австралиски долари";
 		   			echo "<br>";
 		   		}	
 		   		else {
 		   		echo "Куповен за австралиски долари ";
 		   		echo $buyAUD->plaintext;
 		   		echo "...";
 		   		echo "Продажен за австралиски долари ";
 		   		echo $sellAUD->plaintext;
 		   		echo "<br>";	
 		   		}	
 		   	}

showEUR();
showTRY();
showUSD();
showGBP();
showCHF();
showSEK();
showNOK();
showJPY();
showDKK();
showCAD();
showAUD();
?>