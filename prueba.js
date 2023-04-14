function consultas(){
	formula_nom=document.f_formulas.nom_re.value;
	if (cve.length==0){
		alert("Error, se debe indicar al menos un caracter para la clave");
		document.f_inventario.cve.style.background="red";
	}
	else{
		url="http://localhost/Progra_Avanzada/inventario.php?cve="+cve+"&nom=&exi=&pre=&uni=&st_min=&st_max=&op=2";	
		location.href=url;
	}
}

cve=document.f_inventario.cve.value;
	if (cve.length==0){
		alert("Error, se debe indicar al menos un caracter para la clave");
		document.f_inventario.cve.style.background="red";
	}
	else{
		url="http://localhost/Progra_Avanzada/inventario.php?cve="+cve+"&nom=&exi=&pre=&uni=&st_min=&st_max=&op=2";	
		location.href=url;
	}
}