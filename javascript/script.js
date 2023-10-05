function show(){
    var getpa = document.getElementById("mypass");

    if(getpa.type === "password"){
       getpa.type = "text";
    }else{
        getpa.type = "password";
    }
}
function show1(){
    var getpa = document.getElementById("mypwd");

    if(getpa.type === "password"){
       getpa.type = "text";
    }else{
        getpa.type = "password";
    }
}

function city(){
    "use strict";
    var abia = document.getElementById("abia");
    var adamawa = document.getElementById("adamawa");
    var ibom = document.getElementById("ibom");
    var awka = document.getElementById("awka");
    var bauchi = document.getElementById("bauchi");
    var bayelsa = document.getElementById("bayelsa");
    var benue = document.getElementById("benue");
    var borno = document.getElementById("borno");
    var cross = document.getElementById("cross");
    var delta = document.getElementById("delta");
    var ebonyi = document.getElementById("ebonyi");
    var edo = document.getElementById("edo");
    var ekiti = document.getElementById("ekiti");    
    var enugu = document.getElementById("enugu");
    var gombe = document.getElementById("gombe");
    var imo = document.getElementById("imo");
    var jigawa = document.getElementById("jigawa");
    var kaduna = document.getElementById("kaduna");
    var kano = document.getElementById("kano");
    var katsina = document.getElementById("katsina");
    var kebbi = document.getElementById("kebbi");
    var kogi = document.getElementById("kogi");
    var kwara = document.getElementById("kwara");
    var lagos = document.getElementById("lagos");
    var lafia = document.getElementById("lafia");
    var niger = document.getElementById("niger");
    var ogun = document.getElementById("ogun");
    var ondo = document.getElementById("ondo");
    var osun = document.getElementById("osun");
    var oyo = document.getElementById("oyo");
    var jos = document.getElementById("jos");
    var rivers = document.getElementById("rivers");
    var sokoto = document.getElementById("sokoto");    
    var yobe = document.getElementById("yobe");    
    var abuja = document.getElementById("abuja");    
    var mycity = document.getElementById("mycity");
    var region = document.getElementById("regions");

    if(region.value === "Abia"){
        abia.type = "text";
        abia.disabled = false;
    }else{
        abia.type = "hidden";
        abia.disabled = true;
    }

    if(region.value === "Adamawa"){
        adamawa.type = "text";
        adamawa.disabled = false;
    }else{
        adamawa.type = "hidden";
        adamawa.disabled = true;
    }

    if(region.value === "Akwa Ibom"){
        ibom.type = "text";
        ibom.disabled = false;
    }else{
        ibom.type = "hidden";
        ibom.disabled = true;
    }

    if(region.value === "Anambra"){
        awka.type = "text";
        awka.disabled = false;
    }else{
        awka.type = "hidden";
        awka.disabled = true;
    }

    if(region.value === "Bauchi"){
        bauchi.type = "text";
        bauchi.disabled = false;
    }else{
        bauchi.type = "hidden";
        bauchi.disabled = true;
    }

    if(region.value === "Bayelsa"){
        bayelsa.type = "text";
        bayelsa.disabled = false;
    }else{
        bayelsa.type = "hidden";
        bayelsa.disabled = true;
    }

    if(region.value === "Benue"){
        benue.type = "text";
        benue.disabled = false;
    }else{
        benue.type = "hidden";
        benue.disabled = true;
    }

    if(region.value === "Borno"){
        borno.type = "text";
        borno.disabled = false;
    }else{
        borno.type = "hidden";
        borno.disabled = true;
    }

    if(region.value === "Cross-River"){
        cross.type = "text";
        cross.disabled = false;
    }else{
        cross.type = "hidden";
        cross.disabled = true;
    }

    if(region.value === "Delta"){
        delta.type = "text";
        delta.disabled = false;
    }else{
        delta.type = "hidden";
        delta.disabled = true;
    }

    if(region.value === "Ebonyi"){
        ebonyi.type = "text";
        ebonyi.disabled = false;
    }else{
        ebonyi.type = "hidden";
        ebonyi.disabled = true;
    }

    if(region.value === "Edo"){
        edo.type = "text";
        edo.disabled = false;
    }else{
        edo.type = "hidden";
        edo.disabled = true;
    }

    if(region.value === "Ekiti"){
        ekiti.type = "text";
        ekiti.disabled = false;
    }else{
        ekiti.type = "hidden";
        ekiti.disabled = true;
    }

    if(region.value === "Enugu"){
        enugu.type = "text";
        enugu.disabled = false;
    }else{
        enugu.type = "hidden";
        enugu.disabled = true;
    }

    if(region.value === "Gombe"){
        gombe.type = "text";
        gombe.disabled = false;
    }else{
        gombe.type = "hidden";
        gombe.disabled = true;
    }

    if(region.value === "Imo"){
        imo.type = "text";
        imo.disabled = false;
    }else{
        imo.type = "hidden";
        imo.disabled = true;
    }

    if(region.value === "Jigawa"){
        jigawa.type = "text";
        jigawa.disabled = false;
    }else{
        jigawa.type = "hidden";
        jigawa.disabled = true;
    }

    if(region.value === "Kaduna"){
        kaduna.type = "text";
        kaduna.disabled = false;
    }else{
        kaduna.type = "hidden";
        kaduna.disabled = true;
    }

    if(region.value === "Kano"){
        kano.type = "text";
        kano.disabled = false;
    }else{
        kano.type = "hidden";
        kano.disabled = true;
    }

    if(region.value === "Katsina"){
        katsina.type = "text";
        katsina.disabled = false;
    }else{
        katsina.type = "hidden";
        katsina.disabled = true;
    }

    if(region.value === "Kebbi"){
        kebbi.type = "text";
        kebbi.disabled = false;
    }else{
        kebbi.type = "hidden";
        kebbi.disabled = true;
    }

    if(region.value === "Kogi"){
        kogi.type = "text";
        kogi.disabled = false;
    }else{
        kogi.type = "hidden";
        kogi.disabled = true;
    }

    if(region.value === "Kwara"){
        kwara.type = "text";
        kwara.disabled = false;
    }else{
        kwara.type = "hidden";
        kwara.disabled = true;
    }

    if(region.value === "Lagos"){
        lagos.type = "text";
        lagos.disabled = false;
    }else{
        lagos.type = "hidden";
        lagos.disabled = true;
    }

    if(region.value === "Nasarawa"){
        lafia.type = "text";
        lafia.disabled = false;
    }else{
        lafia.type = "hidden";
        lafia.disabled = true;
    }

    if(region.value === "Niger"){
        niger.type = "text";
        niger.disabled = false;
    }else{
        niger.type = "hidden";
        niger.disabled = true;
    }

    if(region.value === "Ogun"){
        ogun.type = "text";
        ogun.disabled = false;
    }else{
        ogun.type = "hidden";
        ogun.disabled = true;
    }

    if(region.value === "Ondo"){
        ondo.type = "text";
        ondo.disabled = false;
    }else{
        ondo.type = "hidden";
        ondo.disabled = true;
    }

    if(region.value === "Osun"){
        osun.type = "text";
        osun.disabled = false;
    }else{
        osun.type = "hidden";
        osun.disabled = true;
    }

    if(region.value === "Oyo"){
        oyo.type = "text";
        oyo.disabled = false;
    }else{
        oyo.type = "hidden";
        oyo.disabled = true;
    }

    if(region.value === "Plateau"){
        jos.type = "text";
        jos.disabled = false;
    }else{
        jos.type = "hidden";
        jos.disabled = true;
    }

    if(region.value === "Rivers"){
        rivers.type = "text";
        rivers.disabled = false;
    }else{
        rivers.type = "hidden";
        rivers.disabled = true;
    }

    if(region.value === "Sokoto"){
        sokoto.type = "text";
        sokoto.disabled = false;
    }else{
        sokoto.type = "hidden";
        sokoto.disabled = true;
    }

    if(region.value === "Yobe"){
        yobe.type = "text";
        yobe.disabled = false;
    }else{
        yobe.type = "hidden";
        yobe.disabled = true;
    }

    if(region.value === "Abuja"){
        abuja.type = "text";
        abuja.disabled = false;
    }else{
        abuja.type = "hidden";
        abuja.disabled = true;
    }
    
    if(region.value === "Select"){
        mycity.type = "text";
    }else{
        mycity.type = "hidden";
    }
}



// declaring an api fetch
// function handleApi() {
//     fetch('nigeria-states-and-lga.p.rapidapi.com/lgalists', {
//         headers: {
//             'Authorization': 'c0b930ad00msh58e4dc1df312286p1c9a5cjsncdc2563488b4'
//         }
//     })
// }

const url = 'https://nigeria-states-and-lga.p.rapidapi.com/lgalists';
const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': 'c0b930ad00msh58e4dc1df312286p1c9a5cjsncdc2563488b4',
		'X-RapidAPI-Host': 'nigeria-states-and-lga.p.rapidapi.com'
	}
};

try {
	const response = await fetch(url, options);
	const result = await response.text();
	console.log(result);
} catch (error) {
	console.error(error);
}