function Nombreproveedorv(){
	var nom=document.getElementById("nombre_empresa").value.trim();
	if(nom==''){
		alert('El nombre proveedor es necesario');
		document.getElementById("nombre_empresa").focus();
	}
}
function Tipoempresa(){
	var tip=document.getElementById("tipo_empresa")
}