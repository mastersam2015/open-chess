<?php ob_start(); ?>
<html>
<head>
<meta name="viewport" content="width=device-width">

<script type="text/javascript" src="jquery.js"></script>
<script>
var i;
var kolej=0;
var pionek = new Array();

var j;
var k;
var aktualny;
var jegox;
var jegoy;
var dor=0;
var ruchy  = new Array();
var blokx;
var bloky;
var rysx;
var rysy;
var str;
var i2;
var i3;
var pom;
var zawada=1;
var wierzax;
var wierzay;
var dop;
var dok;
var zod;
var pow;
var maxx=0;
var maxy=0;
var minx=9;
var miny=9;


var maxxt=new Array();
var maxyt=new Array();
var minxt=new Array();
var minyt=new Array();

var maxxl=0;
var maxyl=0;
var minxl=0;
var minyl=0;


var k1x;
var k1y;
var k2x;
var k2y;
var k3x;
var k3y;
var k4x;
var k4y;
var k5x;
var k5y;
var k6x;
var k6y;
var k7x;
var k7y;
var k8x;
var k8y;
var min;

var bicie = new Array();
var biciel=0;
var k;
var jeden;
var dwa;
var bl1=0;
var bl2=0;
var bl3=0;
var bl4=0;

var bl5=0;
var bl6=0;
var bl7=0;
var bl8=0;

var biciep;
//------------------
//----------start----------
//----------------
var w;
<?
$plik = fopen('pionki.txt','r');
$tekst4=fgets($plik, 10000);
fclose($plik);
$pionki=explode("z",$tekst4);
for($i=0;$i<=32;$i++){
echo "pionek[".$i."]=\"".$pionki[$i]{0}."a".$pionki[$i]{2}."\";
";
$pionki[$i]{0};
}
?>
/*
pionek[1]="2a4";
pionek[8]="5a7";

pionek[3]="1a7";
pionek[6]="3a5";
pionek[4]="5a5";

pionek[2]="1a1";
pionek[5]="1a1";

pionek[7]="1a1";
pionek[9]="1a1";
pionek[10]="1a1";
pionek[11]="1a1";
pionek[12]="1a1";
pionek[13]="1a1";
pionek[14]="1a1";
pionek[15]="1a1";
pionek[16]="1a1";
*/

//----function





//-----------------------main
function check(y,x){
kolej++;
if (kolej==1){

for (k=1;k<=32;k++){
//alert(pionek[k]+"=="+y+"a"+x);
if(pionek[k]==y+"a"+x){
aktualny=k;

kolej++;
jegoy=y;
jegox=x;

}
}

} 


if(kolej==2){
	

//--------------------------------
//--------------------------------
//---------------wierza-----------------
//--------------------------------
if((aktualny==1) || (aktualny==8) ||(aktualny == 25)||(aktualny == 26)){
//alert(aktualny);


for(i=1; i <= 32; i++){

pom=jegoy+"a"+jegox;
if(!(pom==pionek[i])){
//alert(pionek[i]+" == "+pom);
//alert("maxx"+maxx+" <="+pionek[i].charAt(2)+" && jegoy"+jegoy+" || jegox"+jegox);
if((maxx<pionek[i].charAt(2))&&((jegoy==pionek[i].charAt(0)))){
//alert("www");
maxxl=maxxl+1;
maxxt[maxxl]=parseInt(pionek[i].charAt(2));
//alert(maxxt[maxxl]);
}

//alert("minx"+minx+" <="+pionek[i].charAt(2)+" && jegoy"+jegoy+" || jegox"+jegox);
if((minx>pionek[i].charAt(2))&&((jegoy==pionek[i].charAt(0)))){
minxl=minxl+1;
minxt[minxl]=parseInt(pionek[i].charAt(2));
}

//alert("miny"+miny+" <="+pionek[i].charAt(0)+" && jegox"+jegox+" == "+pionek[i].charAt(2));
if((miny>pionek[i].charAt(0))&&((jegox==pionek[i].charAt(2)))){
minyl=minyl+1;
minyt[minyl]=parseInt(pionek[i].charAt(0));
//alert(miny+">"+pionek[i].charAt(0)+ " "+jegox+"="+pionek[i].charAt(2)+" miny"+miny+">"+jegoy+"jegoy");
//alert(parseInt(pionek[i].charAt(0)));
}
//alert("maxy"+maxy+" <="+pionek[i].charAt(0)+" && jegox"+jegox+" == "+pionek[i].charAt(2));
if((maxy<pionek[i].charAt(0))&&((jegox==pionek[i].charAt(2)))){
maxyl=maxyl+1;
maxyt[maxyl]=parseInt(pionek[i].charAt(0));
//alert(pionek[i].charAt(0)+"a"+pionek[i].charAt(2));
}

}
}

/*
for(huj=0;huj<=8;huj++){
//console.log(maxxt);
alert(" maxx- "+maxxt[huj]+" "+maxyt[huj]+" "+minxt[huj]+" "+minyt[huj]+" l: "+maxxl+" part:"+i);
}
*/

if((minx==9)||(minx>jegox)){
minx=0;
}
if((miny==9)||((miny>jegoy))){
miny=0;
//alert(miny);
}
if((maxx==0)||(maxx<jegox)){
maxx=9;
}
if((maxy==0)||(maxy<jegoy)){
maxy=9;
}


for (i = 1; i <= 8; i++) {
	if(maxxt[i]!=undefined){
if ((maxx > maxxt[i])&&(jegox<maxxt[i])) {
maxx = maxxt[i];
}
}
}


for (i = 1; i <= 8; i++) {
	if(maxyt[i]!=undefined){
if ((maxy > maxyt[i])&&(jegoy<maxyt[i])) {
maxy = maxyt[i];
}
}
}


for (i = 1; i <= 8; i++) {
	if(minxt[i]!=undefined){
if ((minx < minxt[i])&&(jegox>minxt[i])) {
minx = minxt[i];
}
}
}



for (i = 1; i <= 8; i++) {
	if(minyt[i]!=undefined){
if ((miny < minyt[i])&&(jegoy>minyt[i])) {
miny = minyt[i];
}
}
}
/*
console.log(minyt);
console.log(minxt);
console.log(maxxt);
console.log(maxyt);

*/
//maxx=min(maxxt);
//alert("maxy: "+minx);
//alert("2"+miny);
//alert("maxx"+maxx+" minx"+minx+" maxy"+maxy+" miny"+miny);
for(i=1;i<=8;i++){


for(j=1;j<=8;j++){

if(((jegox==j)||(jegoy==i))&&(!((jegox==j)&&(jegoy==i)))){
//alert(j+" j>minx "+minx+" "+j+" j<maxx "+maxx+" "+i+" i>miny "+miny+" "+i+" i<maxy "+maxy);
if(((j>minx)&&(j<maxx))&&((i>miny)&&(i<maxy))){
	
	
	

if(zawada!=2){

dop=i+"a"+j;
if(dop!=undefined){
if(dop!=ruchy[dor]){
dor++;
ruchy[dor]=i+"a"+j;
//alert(ruchy[dor]);
//alert(ruchy[dor]);

}
}
}

$("#"+i+"a"+j).html("<img src='kropka.png'>");

zawada=1;
blokx=-1;
bloky=-1;
//---------------

}
for(k=17; k <= 32; k++){
	if(bl1==0){
if((maxx==parseInt(pionek[k].charAt(2)))&&(jegoy==parseInt(pionek[k].charAt(0)))){
	biciel=biciel+1;
	bicie[biciel]=pionek[k];
	jeden=$("#"+pionek[k]).html();
	dwa="+";
	$("#"+pionek[k]).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(0))+" "+parseInt(pionek[k].charAt(2)));
	bl1=bl1+1;
	//if(pionek[31]==pionek[k]){alert('szach');}
}
}



	if(bl2==0){
if((maxy==parseInt(pionek[k].charAt(0)))&&(jegox==parseInt(pionek[k].charAt(2)))){
	biciel=biciel+1;
	bicie[biciel]=pionek[k];
	jeden=$("#"+pionek[k]).html();
	dwa="+";
	$("#"+pionek[k]).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(0))+" "+parseInt(pionek[k].charAt(2)));
	bl2=bl2+1;
	//if(pionek[31]==pionek[k]){alert('szach');}
}
}


	if(bl3==0){
if((minx==parseInt(pionek[k].charAt(2)))&&(jegoy==parseInt(pionek[k].charAt(0)))){
	biciel=biciel+1;
	bicie[biciel]=pionek[k];
	jeden=$("#"+pionek[k]).html();
	dwa="+";
	$("#"+pionek[k]).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(0))+" "+parseInt(pionek[k].charAt(2)));
	bl3=bl3+1;
	//if(pionek[31]==pionek[k]){alert('szach');}
}
}


	if(bl4==0){
if((miny==parseInt(pionek[k].charAt(0)))&&(jegox==parseInt(pionek[k].charAt(2)))){
	biciel=biciel+1;
	bicie[biciel]=pionek[k];
	jeden=$("#"+pionek[k]).html();
	dwa="+";
	$("#"+pionek[k]).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(0))+" "+parseInt(pionek[k].charAt(2)));
	bl4=bl4+1;
	//if(pionek[31]==pionek[k]){alert('szach');}
}
}

}

}

}
}
bl1=0;
bl2=0;
bl3=0;
bl4=0;
maxx=0;
maxy=0;
minx=9;
miny=9;
for(i=0;i<=8;i++){
	maxxt[i]=0;
	maxyt[i]=0;
	minxt[i]=9;
	minyt[i]=9;
	
}
maxxl=0;
maxyl=0;
minxl=0;
minyl=0;
}

//--------------------------------
//--------------------------------
//---------------laufer-----------------
//--------------------------------
if((aktualny==3) || (aktualny==6)||(aktualny==29)||(aktualny ==30)){
//alert(aktualny);


for(i=1; i <= 32; i++){

pom=jegoy+"a"+jegox;
if(!(pom==pionek[i])){
for(wu=1;wu<=8;wu++){
//alert(pionek[i]+" == "+pom);
//alert("maxx"+maxx+" <="+pionek[i].charAt(2)+" && jegoy"+jegoy+" || jegox"+jegox);

//&&((jegox-wu==j)||(jegox+wu==j))&&((jegoy-wu==i)||(jegoy+wu==i))
if((jegox<pionek[i].charAt(2))&&(jegoy<pionek[i].charAt(0))){
if((maxx<pionek[i].charAt(2))&&((jegox-wu==pionek[i].charAt(2))||(jegox+wu==pionek[i].charAt(2)))&&((jegoy-wu==pionek[i].charAt(0))||(jegoy+wu==pionek[i].charAt(0)))){
//alert("www");
maxxl=maxxl+1;
maxxt[maxxl]=parseInt(pionek[i].charAt(2));
}
}
if((jegox<pionek[i].charAt(2))&&(jegoy>pionek[i].charAt(0))){
//alert("minx"+minx+" <="+pionek[i].charAt(2)+" && jegoy"+jegoy+" || jegox"+jegox);
if((minx>pionek[i].charAt(2))&&((jegox-wu==pionek[i].charAt(2))||(jegox+wu==pionek[i].charAt(2)))&&((jegoy-wu==pionek[i].charAt(0))||(jegoy+wu==pionek[i].charAt(0)))){
minxl=minxl+1;
minxt[minxl]=parseInt(pionek[i].charAt(2));
//alert(minx);
}
}
//alert("miny"+miny+" <="+pionek[i].charAt(0)+" && jegox"+jegox+" == "+pionek[i].charAt(2));
if((jegox>pionek[i].charAt(2))&&(jegoy>pionek[i].charAt(0))){
if((miny>pionek[i].charAt(0))&&((jegox-wu==pionek[i].charAt(2))||(jegox+wu==pionek[i].charAt(2)))&&((jegoy-wu==pionek[i].charAt(0))||(jegoy+wu==pionek[i].charAt(0)))){
minyl=minyl+1;
minyt[minyl]=parseInt(pionek[i].charAt(0));
}
}
//alert("maxy"+maxy+" <="+pionek[i].charAt(0)+" && jegox"+jegox+" == "+pionek[i].charAt(2));
if((jegox>pionek[i].charAt(2))&&(jegoy<pionek[i].charAt(0))){
if((maxy<pionek[i].charAt(0))&&((jegox-wu==pionek[i].charAt(2))||(jegox+wu==pionek[i].charAt(2)))&&((jegoy-wu==pionek[i].charAt(0))||(jegoy+wu==pionek[i].charAt(0)))){
maxyl=maxyl+1;
maxyt[maxyl]=parseInt(pionek[i].charAt(0));
}
}
}
}
}
if((minx==9)){
minx=0;
}
if((miny==9)){
miny=0;
}
if((maxx==0)){
maxx=9;
}
if((maxy==0)){
maxy=9;
}




for (i = 1; i <= 8; i++) {
	if(maxxt[i]!=undefined){
if ((maxx > maxxt[i])&&(jegox<maxxt[i])) {
maxx = maxxt[i];
}
}
}


for (i = 1; i <= 8; i++) {
	if(maxyt[i]!=undefined){
if ((maxy > maxyt[i])&&(jegoy<maxyt[i])) {
maxy = maxyt[i];
}
}
}

//prawa gora
minx=9;
for (i = 1; i <= 8; i++) {
	if(minxt[i]!=undefined){
if ((minx > minxt[i])&&(jegox<minxt[i])) {
minx = minxt[i];
}
}
}



for (i = 1; i <= 8; i++) {
	if(minyt[i]!=undefined){
if ((miny < minyt[i])&&(jegoy>minyt[i])) {
miny = minyt[i];
}
}
}

//alert("maxx"+maxx+" minx"+minx+" maxy"+maxy+" miny"+miny);
for(i=1;i<=8;i++){
for(j=1;j<=8;j++){
for(wu=1;wu<=8;wu++){
if((!((jegox==j)&&(jegoy==i)))&&((jegox-wu==j)||(jegox+wu==j))&&((jegoy-wu==i)||(jegoy+wu==i))){

//prawy dol
if((jegox<j)&&(jegoy<i)){
if(maxx>j){

if(zawada!=2){
dop=i+"a"+j;
if(dop!=undefined){
if(dop!=ruchy[dor]){
dor++;
ruchy[dor]=i+"a"+j;
//alert(ruchy[dor]);
//alert(ruchy[dor]);
}
}
}
$("#"+i+"a"+j).html("<img src='kropka.png'>");
zawada=1;
blokx=-1;
bloky=-1;
}
}


//lewy dol
if((jegox>j)&&(jegoy<i)){
if(maxy>i){

if(zawada!=2){
dop=i+"a"+j;
if(dop!=undefined){
if(dop!=ruchy[dor]){
dor++;
ruchy[dor]=i+"a"+j;
//alert(ruchy[dor]);
//alert(ruchy[dor]);
}
}
}
$("#"+i+"a"+j).html("<img src='kropka.png'>");
zawada=1;
blokx=-1;
bloky=-1;
}
}




//prawa gora
if((jegox<j)&&(jegoy>i)){
if(minx>j){
//alert(j);
//alert(minx);
if(zawada!=2){
dop=i+"a"+j;
if(dop!=undefined){
if(dop!=ruchy[dor]){
dor++;
ruchy[dor]=i+"a"+j;
//alert(ruchy[dor]);
//alert(ruchy[dor]);
}
}
}
$("#"+i+"a"+j).html("<img src='kropka.png'>");
zawada=1;
blokx=-1;
bloky=-1;
}
}



//lewa gora
if((jegox>j)&&(jegoy>i)){
if(miny<i){

if(zawada!=2){
dop=i+"a"+j;
if(dop!=undefined){
if(dop!=ruchy[dor]){
dor++;
ruchy[dor]=i+"a"+j;
//alert(ruchy[dor]);
//alert(ruchy[dor]);
}
}
}
$("#"+i+"a"+j).html("<img src='kropka.png'>");
zawada=1;
blokx=-1;
bloky=-1;
}
}
//prawy dol
for(k=17; k <= 32; k++){
	if(bl1==0){

if((jegox<j)&&(jegoy<i)){
if(maxx==j && pionek[k].charAt(0)==i){
//alert(i+"a"+j);
	biciel=biciel+1;
	bicie[biciel]=i+"a"+j;
	jeden=$("#"+i+"a"+j).html();
	dwa="+";
	$("#"+i+"a"+j).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(0))+" "+parseInt(pionek[k].charAt(2)));
	//alert(bicie[biciel]);
	bl1=bl1+1;
}
}
}


//lewy dol
	if(bl2==0){
if((jegox>j)&&(jegoy<i)){
if(maxy==i && pionek[k].charAt(0)==i){
//alert(i+"a"+j);
	biciel=biciel+1;
	bicie[biciel]=i+"a"+j;
	jeden=$("#"+i+"a"+j).html();
	dwa="+";
	$("#"+i+"a"+j).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(0))+" "+parseInt(pionek[k].charAt(2)));
	//alert(pionek[k]);
	//alert(bicie[biciel]);
	bl2=bl2+1;
}
}
}
//prawa gora
/*
for (i = 1; i <= 8; i++) {
	if(minxt[i]!=undefined){
if ((minx > minxt[i])&&(jegox<minxt[i])) {
minx = minxt[i];
}
}
}
*/
if((jegox<j)&&(jegoy>i)){
if(minx==j && pionek[k].charAt(0)==i ){
	if(bl3==0){

//alert(i+"a"+j);
	biciel=biciel+1;
	bicie[biciel]=i+"a"+j;
	jeden=$("#"+i+"a"+j).html();
	dwa="+";
	$("#"+i+"a"+j).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(0))+" "+parseInt(pionek[k].charAt(2)));
	//alert(pionek[k]);
	//alert(bicie[biciel]);
	bl3=bl3+1;
}
}
}



//lewa gora
	if(bl4==0){
if((jegox>j)&&(jegoy>i)){
if(miny==i && pionek[k].charAt(0)==i){
//alert(i+"a"+j);
	biciel=biciel+1;
	bicie[biciel]=i+"a"+j;
	jeden=$("#"+i+"a"+j).html();
	dwa="+";
	$("#"+i+"a"+j).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(0))+" "+parseInt(pionek[k].charAt(2)));
	//alert(pionek[k]);
	//alert(bicie[biciel]);
	bl4=bl4+1;
}
}
}

}


}
}
}
}

maxx=0;
maxy=0;
minx=9;
miny=9;
for(i=0;i<=8;i++){
	maxxt[i]=0;
	maxyt[i]=0;
	minxt[i]=9;
	minyt[i]=9;
	
}
maxxl=0;
maxyl=0;
minxl=0;
minyl=0;


}



//--------------------------------
//--------------------------------
//---------------krolowa-----------------
//--------------------------------
if((aktualny==4)||(aktualny==32)){

//alert(aktualny);
//----------------------------------------------------------pion

for(i=1; i <= 32; i++){

pom=jegoy+"a"+jegox;
if(!(pom==pionek[i])){
//alert(pionek[i]+" == "+pom);
//alert("maxx"+maxx+" <="+pionek[i].charAt(2)+" && jegoy"+jegoy+" || jegox"+jegox);
if((maxx<pionek[i].charAt(2))&&((jegoy==pionek[i].charAt(0)))){
//alert("www");
maxxl=maxxl+1;
maxxt[maxxl]=parseInt(pionek[i].charAt(2));
//alert(maxxt[maxxl]);
}

//alert("minx"+minx+" <="+pionek[i].charAt(2)+" && jegoy"+jegoy+" || jegox"+jegox);
if((minx>pionek[i].charAt(2))&&((jegoy==pionek[i].charAt(0)))){
minxl=minxl+1;
minxt[minxl]=parseInt(pionek[i].charAt(2));
}

//alert("miny"+miny+" <="+pionek[i].charAt(0)+" && jegox"+jegox+" == "+pionek[i].charAt(2));
if((miny>pionek[i].charAt(0))&&((jegox==pionek[i].charAt(2)))){
minyl=minyl+1;
minyt[minyl]=parseInt(pionek[i].charAt(0));
//alert(miny+">"+pionek[i].charAt(0)+ " "+jegox+"="+pionek[i].charAt(2)+" miny"+miny+">"+jegoy+"jegoy");
//alert(parseInt(pionek[i].charAt(0)));
}
//alert("maxy"+maxy+" <="+pionek[i].charAt(0)+" && jegox"+jegox+" == "+pionek[i].charAt(2));
if((maxy<pionek[i].charAt(0))&&((jegox==pionek[i].charAt(2)))){
maxyl=maxyl+1;
maxyt[maxyl]=parseInt(pionek[i].charAt(0));
//alert(pionek[i].charAt(0)+"a"+pionek[i].charAt(2));
}

}
}

/*
for(huj=0;huj<=8;huj++){
//console.log(maxxt);
alert(" maxx- "+maxxt[huj]+" "+maxyt[huj]+" "+minxt[huj]+" "+minyt[huj]+" l: "+maxxl+" part:"+i);
}
*/

if((minx==9)||(minx>jegox)){
minx=0;
}
if((miny==9)||((miny>jegoy))){
miny=0;
//alert(miny);
}
if((maxx==0)||(maxx<jegox)){
maxx=9;
}
if((maxy==0)||(maxy<jegoy)){
maxy=9;
}


for (i = 1; i <= 8; i++) {
	if(maxxt[i]!=undefined){
if ((maxx > maxxt[i])&&(jegox<maxxt[i])) {
maxx = maxxt[i];
}
}
}


for (i = 1; i <= 8; i++) {
	if(maxyt[i]!=undefined){
if ((maxy > maxyt[i])&&(jegoy<maxyt[i])) {
maxy = maxyt[i];
}
}
}


for (i = 1; i <= 8; i++) {
	if(minxt[i]!=undefined){
if ((minx < minxt[i])&&(jegox>minxt[i])) {
minx = minxt[i];
}
}
}



for (i = 1; i <= 8; i++) {
	if(minyt[i]!=undefined){
if ((miny < minyt[i])&&(jegoy>minyt[i])) {
miny = minyt[i];
}
}
}
/*
console.log(minyt);
console.log(minxt);
console.log(maxxt);
console.log(maxyt);

*/
//maxx=min(maxxt);
//alert("maxy: "+minx);
//alert("2"+miny);
//alert("maxx"+maxx+" minx"+minx+" maxy"+maxy+" miny"+miny);
for(i=1;i<=8;i++){


for(j=1;j<=8;j++){

if(((jegox==j)||(jegoy==i))&&(!((jegox==j)&&(jegoy==i)))){
//alert(j+" j>minx "+minx+" "+j+" j<maxx "+maxx+" "+i+" i>miny "+miny+" "+i+" i<maxy "+maxy);
if(((j>minx)&&(j<maxx))&&((i>miny)&&(i<maxy))){
	
	
	

if(zawada!=2){

dop=i+"a"+j;
if(dop!=undefined){
if(dop!=ruchy[dor]){
dor++;
ruchy[dor]=i+"a"+j;
//alert(ruchy[dor]);
//alert(ruchy[dor]);

}
}
}

$("#"+i+"a"+j).html("<img src='kropka.png'>");

zawada=1;
blokx=-1;
bloky=-1;
//---------------

}
for(k=17; k <= 32; k++){
	if(bl1==0){
if((maxx==parseInt(pionek[k].charAt(2)))&&(jegoy==parseInt(pionek[k].charAt(0)))){
	biciel=biciel+1;
	bicie[biciel]=pionek[k];
	jeden=$("#"+pionek[k]).html();
	dwa="+";
	$("#"+pionek[k]).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(0))+" "+parseInt(pionek[k].charAt(2)));
	bl1=bl1+1;
}
}



	if(bl2==0){
if((maxy==parseInt(pionek[k].charAt(0)))&&(jegox==parseInt(pionek[k].charAt(2)))){
	biciel=biciel+1;
	bicie[biciel]=pionek[k];
	jeden=$("#"+pionek[k]).html();
	dwa="+";
	$("#"+pionek[k]).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(0))+" "+parseInt(pionek[k].charAt(2)));
	bl2=bl2+1;
}
}


	if(bl3==0){
if((minx==parseInt(pionek[k].charAt(2)))&&(jegoy==parseInt(pionek[k].charAt(0)))){
	biciel=biciel+1;
	bicie[biciel]=pionek[k];
	jeden=$("#"+pionek[k]).html();
	dwa="+";
	$("#"+pionek[k]).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(0))+" "+parseInt(pionek[k].charAt(2)));
	bl3=bl3+1;
}
}


	if(bl4==0){
if((miny==parseInt(pionek[k].charAt(0)))&&(jegox==parseInt(pionek[k].charAt(2)))){
	biciel=biciel+1;
	bicie[biciel]=pionek[k];
	jeden=$("#"+pionek[k]).html();
	dwa="+";
	$("#"+pionek[k]).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(0))+" "+parseInt(pionek[k].charAt(2)));
	bl4=bl4+1;
}
}

}

}

}
}
bl1=0;
bl2=0;
bl3=0;
bl4=0;
maxx=0;
maxy=0;
minx=9;
miny=9;
for(i=0;i<=8;i++){
	maxxt[i]=0;
	maxyt[i]=0;
	minxt[i]=9;
	minyt[i]=9;
	
}
maxxl=0;
maxyl=0;
minxl=0;
minyl=0;
//---------------------------------------skos

maxx=0;
maxy=0;
minx=9;
miny=9;
for(i=1; i <= 32; i++){

pom=jegoy+"a"+jegox;
if(!(pom==pionek[i])){
for(wu=1;wu<=8;wu++){
//alert(pionek[i]+" == "+pom);
//alert("maxx"+maxx+" <="+pionek[i].charAt(2)+" && jegoy"+jegoy+" || jegox"+jegox);

//&&((jegox-wu==j)||(jegox+wu==j))&&((jegoy-wu==i)||(jegoy+wu==i))
if((jegox<pionek[i].charAt(2))&&(jegoy<pionek[i].charAt(0))){
if((maxx<pionek[i].charAt(2))&&((jegox-wu==pionek[i].charAt(2))||(jegox+wu==pionek[i].charAt(2)))&&((jegoy-wu==pionek[i].charAt(0))||(jegoy+wu==pionek[i].charAt(0)))){
//alert("www");
maxxl=maxxl+1;
maxxt[maxxl]=parseInt(pionek[i].charAt(2));
}
}
if((jegox<pionek[i].charAt(2))&&(jegoy>pionek[i].charAt(0))){
//alert("minx"+minx+" <="+pionek[i].charAt(2)+" && jegoy"+jegoy+" || jegox"+jegox);
if((minx>pionek[i].charAt(2))&&((jegox-wu==pionek[i].charAt(2))||(jegox+wu==pionek[i].charAt(2)))&&((jegoy-wu==pionek[i].charAt(0))||(jegoy+wu==pionek[i].charAt(0)))){
minxl=minxl+1;
minxt[minxl]=parseInt(pionek[i].charAt(2));
//alert(minx);
}
}
//alert("miny"+miny+" <="+pionek[i].charAt(0)+" && jegox"+jegox+" == "+pionek[i].charAt(2));
if((jegox>pionek[i].charAt(2))&&(jegoy>pionek[i].charAt(0))){
if((miny>pionek[i].charAt(0))&&((jegox-wu==pionek[i].charAt(2))||(jegox+wu==pionek[i].charAt(2)))&&((jegoy-wu==pionek[i].charAt(0))||(jegoy+wu==pionek[i].charAt(0)))){
minyl=minyl+1;
minyt[minyl]=parseInt(pionek[i].charAt(0));
}
}
//alert("maxy"+maxy+" <="+pionek[i].charAt(0)+" && jegox"+jegox+" == "+pionek[i].charAt(2));
if((jegox>pionek[i].charAt(2))&&(jegoy<pionek[i].charAt(0))){
if((maxy<pionek[i].charAt(0))&&((jegox-wu==pionek[i].charAt(2))||(jegox+wu==pionek[i].charAt(2)))&&((jegoy-wu==pionek[i].charAt(0))||(jegoy+wu==pionek[i].charAt(0)))){
maxyl=maxyl+1;
maxyt[maxyl]=parseInt(pionek[i].charAt(0));
}
}
}
}
}
if((minx==9)){
minx=0;
}
if((miny==9)){
miny=0;
}
if((maxx==0)){
maxx=9;
}
if((maxy==0)){
maxy=9;
}





for (i = 1; i <= 8; i++) {
	if(maxxt[i]!=undefined){
if ((maxx > maxxt[i])&&(jegox<maxxt[i])) {
maxx = maxxt[i];
}
}
}


for (i = 1; i <= 8; i++) {
	if(maxyt[i]!=undefined){
if ((maxy > maxyt[i])&&(jegoy<maxyt[i])) {
maxy = maxyt[i];
}
}
}

//prawa gora
minx=9;
for (i = 1; i <= 8; i++) {
	if(minxt[i]!=undefined){
if ((minx > minxt[i])&&(jegox<minxt[i])) {
minx = minxt[i];
}
}
}



for (i = 1; i <= 8; i++) {
	if(minyt[i]!=undefined){
if ((miny < minyt[i])&&(jegoy>minyt[i])) {
miny = minyt[i];
}
}
}

//alert("maxx"+maxx+" minx"+minx+" maxy"+maxy+" miny"+miny);
for(i=1;i<=8;i++){
for(j=1;j<=8;j++){
for(wu=1;wu<=8;wu++){
if((!((jegox==j)&&(jegoy==i)))&&((jegox-wu==j)||(jegox+wu==j))&&((jegoy-wu==i)||(jegoy+wu==i))){

//prawy dol
if((jegox<j)&&(jegoy<i)){
if(maxx>j){

if(zawada!=2){
dop=i+"a"+j;
if(dop!=undefined){
if(dop!=ruchy[dor]){
dor++;
ruchy[dor]=i+"a"+j;
//alert(ruchy[dor]);
//alert(ruchy[dor]);
}
}
}
$("#"+i+"a"+j).html("<img src='kropka.png'>");
zawada=1;
blokx=-1;
bloky=-1;
}
}


//lewy dol
if((jegox>j)&&(jegoy<i)){
if(maxy>i){

if(zawada!=2){
dop=i+"a"+j;
if(dop!=undefined){
if(dop!=ruchy[dor]){
dor++;
ruchy[dor]=i+"a"+j;
//alert(ruchy[dor]);
//alert(ruchy[dor]);
}
}
}
$("#"+i+"a"+j).html("<img src='kropka.png'>");
zawada=1;
blokx=-1;
bloky=-1;
}
}




//prawa gora
if((jegox<j)&&(jegoy>i)){
if(minx>j){
//alert(j);
//alert(minx);
if(zawada!=2){
dop=i+"a"+j;
if(dop!=undefined){
if(dop!=ruchy[dor]){
dor++;
ruchy[dor]=i+"a"+j;
//alert(ruchy[dor]);
//alert(ruchy[dor]);
}
}
}
$("#"+i+"a"+j).html("<img src='kropka.png'>");
zawada=1;
blokx=-1;
bloky=-1;
}
}



//lewa gora
if((jegox>j)&&(jegoy>i)){
if(miny<i){

if(zawada!=2){
dop=i+"a"+j;
if(dop!=undefined){
if(dop!=ruchy[dor]){
dor++;
ruchy[dor]=i+"a"+j;
//alert(ruchy[dor]);
//alert(ruchy[dor]);
}
}
}
$("#"+i+"a"+j).html("<img src='kropka.png'>");
zawada=1;
blokx=-1;
bloky=-1;
}
}
//prawy dol
for(k=17; k <= 32; k++){
	if(bl1==0){

if((jegox<j)&&(jegoy<i)){
if(maxx==j && pionek[k].charAt(0)==i){
//alert(i+"a"+j);
	biciel=biciel+1;
	bicie[biciel]=i+"a"+j;
	jeden=$("#"+i+"a"+j).html();
	dwa="+";
	$("#"+i+"a"+j).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(0))+" "+parseInt(pionek[k].charAt(2)));
	//alert(bicie[biciel]);
	bl1=bl1+1;
}
}
}


//lewy dol
	if(bl2==0){
if((jegox>j)&&(jegoy<i)){
if(maxy==i && pionek[k].charAt(0)==i){
//alert(i+"a"+j);
	biciel=biciel+1;
	bicie[biciel]=i+"a"+j;
	jeden=$("#"+i+"a"+j).html();
	dwa="+";
	$("#"+i+"a"+j).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(0))+" "+parseInt(pionek[k].charAt(2)));
	//alert(pionek[k]);
	//alert(bicie[biciel]);
	bl2=bl2+1;
}
}
}
//prawa gora
/*
for (i = 1; i <= 8; i++) {
	if(minxt[i]!=undefined){
if ((minx > minxt[i])&&(jegox<minxt[i])) {
minx = minxt[i];
}
}
}
*/
if((jegox<j)&&(jegoy>i)){
if(minx==j && pionek[k].charAt(0)==i ){
	if(bl3==0){

//alert(i+"a"+j);
	biciel=biciel+1;
	bicie[biciel]=i+"a"+j;
	jeden=$("#"+i+"a"+j).html();
	dwa="+";
	$("#"+i+"a"+j).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(0))+" "+parseInt(pionek[k].charAt(2)));
	//alert(pionek[k]);
	//alert(bicie[biciel]);
	bl3=bl3+1;
}
}
}



//lewa gora
	if(bl4==0){
if((jegox>j)&&(jegoy>i)){
if(miny==i && pionek[k].charAt(0)==i){
//alert(i+"a"+j);
	biciel=biciel+1;
	bicie[biciel]=i+"a"+j;
	jeden=$("#"+i+"a"+j).html();
	dwa="+";
	$("#"+i+"a"+j).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(0))+" "+parseInt(pionek[k].charAt(2)));
	//alert(pionek[k]);
	//alert(bicie[biciel]);
	bl4=bl4+1;
}
}
}

}


}
}
}
}

maxx=0;
maxy=0;
minx=9;
miny=9;
for(i=0;i<=8;i++){
	maxxt[i]=0;
	maxyt[i]=0;
	minxt[i]=9;
	minyt[i]=9;
	
}
maxxl=0;
maxyl=0;
minxl=0;
minyl=0;
}


 //--------------------------------------------
 //-------------------------------------------
 //--------------pionki---------------------
 //-------------------------------------
 //----------------------------------------
if (aktualny==9 || aktualny==10 ||aktualny==11 ||aktualny==12 ||aktualny==13 ||aktualny==14 ||aktualny==15 ||aktualny==16)
{

for(i=1; i <= 32; i++){

pom=jegoy+"a"+jegox;
if(!(pom==pionek[i])){
//alert(pionek[i]+" == "+pom);
//alert("maxx"+maxx+" <="+pionek[i].charAt(2)+" && jegoy"+jegoy+" || jegox"+jegox);
if((maxx<pionek[i].charAt(2))&&((jegoy==pionek[i].charAt(0)))){
//alert("www");
maxxl=maxxl+1;
maxxt[maxxl]=parseInt(pionek[i].charAt(2));
//alert(maxxt[maxxl]);
}

//alert("minx"+minx+" <="+pionek[i].charAt(2)+" && jegoy"+jegoy+" || jegox"+jegox);
if((minx>pionek[i].charAt(2))&&((jegoy==pionek[i].charAt(0)))){
minxl=minxl+1;
minxt[minxl]=parseInt(pionek[i].charAt(2));
}

//alert("miny"+miny+" <="+pionek[i].charAt(0)+" && jegox"+jegox+" == "+pionek[i].charAt(2));
if((miny>pionek[i].charAt(0))&&((jegox==pionek[i].charAt(2)))){
minyl=minyl+1;
minyt[minyl]=parseInt(pionek[i].charAt(0));
//alert(miny+">"+pionek[i].charAt(0)+ " "+jegox+"="+pionek[i].charAt(2)+" miny"+miny+">"+jegoy+"jegoy");
//alert(parseInt(pionek[i].charAt(0)));
}
//alert("maxy"+maxy+" <="+pionek[i].charAt(0)+" && jegox"+jegox+" == "+pionek[i].charAt(2));
if((maxy<pionek[i].charAt(0))&&((jegox==pionek[i].charAt(2)))){
maxyl=maxyl+1;
maxyt[maxyl]=parseInt(pionek[i].charAt(0));
//alert(pionek[i].charAt(0)+"a"+pionek[i].charAt(2));
}

}
}

/*
for(huj=0;huj<=8;huj++){
//console.log(maxxt);
alert(" maxx- "+maxxt[huj]+" "+maxyt[huj]+" "+minxt[huj]+" "+minyt[huj]+" l: "+maxxl+" part:"+i);
}
*/

if((minx==9)||(minx>jegox)){
minx=0;
}
if((miny==9)||((miny>jegoy))){
miny=0;
//alert(miny);
}
if((maxx==0)||(maxx<jegox)){
maxx=9;
}
if((maxy==0)||(maxy<jegoy)){
maxy=9;
}


for (i = 1; i <= 8; i++) {
	if(maxxt[i]!=undefined){
if ((maxx > maxxt[i])&&(jegox<maxxt[i])) {
maxx = maxxt[i];
}
}
}


for (i = 1; i <= 8; i++) {
	if(maxyt[i]!=undefined){
if ((maxy > maxyt[i])&&(jegoy<maxyt[i])) {
maxy = maxyt[i];
}
}
}


for (i = 1; i <= 8; i++) {
	if(minxt[i]!=undefined){
if ((minx < minxt[i])&&(jegox>minxt[i])) {
minx = minxt[i];
}
}
}



for (i = 1; i <= 8; i++) {
	if(minyt[i]!=undefined){
if ((miny < minyt[i])&&(jegoy>minyt[i])) {
miny = minyt[i];
}
}
}

//alert("maxx"+maxx+" minx"+minx+" maxy"+maxy+" miny"+miny);
for(i=1;i<=8;i++){


for(j=1;j<=8;j++){

if(((jegox==j)&&(jegoy+1==i))||(((jegox==j)&&(jegoy+2==i))&&(y==2))){

if(((j>minx)&&(j<maxx))&&((i>miny)&&(i<maxy))){

if(zawada!=2){

dop=i+"a"+j;
if(dop!=undefined){
if(dop!=ruchy[dor]){
dor++;
ruchy[dor]=i+"a"+j;
//alert(ruchy[dor]);
//alert(ruchy[dor]);

}
}
}

$("#"+i+"a"+j).html("<img src='kropka.png'>");

zawada=1;
blokx=-1;
bloky=-1;
}

}

}
}	

for(k=17;k<=32;k++){
if(jegox+1==pionek[k].charAt(2) && jegoy+1==pionek[k].charAt(0)){
	if(bl1==0){
//alert(i+"a"+j);
	biciel=biciel+1;
	bicie[biciel]=pionek[k].charAt(0)+"a"+pionek[k].charAt(2);
	jeden=$("#"+pionek[k].charAt(0)+"a"+pionek[k].charAt(2)).html();
	dwa="+";
	$("#"+pionek[k].charAt(0)+"a"+pionek[k].charAt(2)).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(0))+" "+parseInt(pionek[k].charAt(2)));
	//alert(pionek[k]+" jegox"+jegox+" jegoy"+jegoy);
	//alert(bicie[biciel]);
	bl1=bl1+1;
	//alert(pionek[k].charAt(0)+"a"+pionek[k].charAt(2));
}
}

if(jegox-1==pionek[k].charAt(2) && jegoy+1==pionek[k].charAt(0)){
	if(bl2==0){
//alert(pionek[k].charAt(0)+"a"+pionek[k].charAt(2));
	biciel=biciel+1;
	bicie[biciel]=pionek[k].charAt(0)+"a"+pionek[k].charAt(2);
	jeden=$("#"+pionek[k].charAt(0)+"a"+pionek[k].charAt(2)).html();
	dwa="+";
	$("#"+pionek[k].charAt(0)+"a"+pionek[k].charAt(2)).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(0))+" "+parseInt(pionek[k].charAt(2)));
	//alert(pionek[k]);
	//alert(bicie[biciel]);
	bl2=bl2+1;
}
}
}

	for(i=0;i<=8;i++){
	maxxt[i]=0;
	maxyt[i]=0;
	minxt[i]=9;
	minyt[i]=9;
	
}
maxxl=0;
maxyl=0;
minxl=0;
minyl=0;
	
}


if (aktualny==17 || aktualny==18 ||aktualny==19 ||aktualny==20 ||aktualny==21 ||aktualny==22 ||aktualny==23 ||aktualny==24)
{

for(i=1; i <= 32; i++){

pom=jegoy+"a"+jegox;
if(!(pom==pionek[i])){
//alert(pionek[i]+" == "+pom);
//alert("maxx"+maxx+" <="+pionek[i].charAt(2)+" && jegoy"+jegoy+" || jegox"+jegox);
if((maxx<pionek[i].charAt(2))&&((jegoy==pionek[i].charAt(0)))){
//alert("www");
maxxl=maxxl+1;
maxxt[maxxl]=parseInt(pionek[i].charAt(2));
//alert(maxxt[maxxl]);
}

//alert("minx"+minx+" <="+pionek[i].charAt(2)+" && jegoy"+jegoy+" || jegox"+jegox);
if((minx>pionek[i].charAt(2))&&((jegoy==pionek[i].charAt(0)))){
minxl=minxl+1;
minxt[minxl]=parseInt(pionek[i].charAt(2));
}

//alert("miny"+miny+" <="+pionek[i].charAt(0)+" && jegox"+jegox+" == "+pionek[i].charAt(2));
if((miny>pionek[i].charAt(0))&&((jegox==pionek[i].charAt(2)))){
minyl=minyl+1;
minyt[minyl]=parseInt(pionek[i].charAt(0));
//alert(miny+">"+pionek[i].charAt(0)+ " "+jegox+"="+pionek[i].charAt(2)+" miny"+miny+">"+jegoy+"jegoy");
//alert(parseInt(pionek[i].charAt(0)));
}
//alert("maxy"+maxy+" <="+pionek[i].charAt(0)+" && jegox"+jegox+" == "+pionek[i].charAt(2));
if((maxy<pionek[i].charAt(0))&&((jegox==pionek[i].charAt(2)))){
maxyl=maxyl+1;
maxyt[maxyl]=parseInt(pionek[i].charAt(0));
//alert(pionek[i].charAt(0)+"a"+pionek[i].charAt(2));
}

}
}

/*
for(huj=0;huj<=8;huj++){
//console.log(maxxt);
alert(" maxx- "+maxxt[huj]+" "+maxyt[huj]+" "+minxt[huj]+" "+minyt[huj]+" l: "+maxxl+" part:"+i);
}
*/

if((minx==9)||(minx>jegox)){
minx=0;
}
if((miny==9)||((miny>jegoy))){
miny=0;
//alert(miny);
}
if((maxx==0)||(maxx<jegox)){
maxx=9;
}
if((maxy==0)||(maxy<jegoy)){
maxy=9;
}


for (i = 1; i <= 8; i++) {
	if(maxxt[i]!=undefined){
if ((maxx > maxxt[i])&&(jegox<maxxt[i])) {
maxx = maxxt[i];
}
}
}


for (i = 1; i <= 8; i++) {
	if(maxyt[i]!=undefined){
if ((maxy > maxyt[i])&&(jegoy<maxyt[i])) {
maxy = maxyt[i];
}
}
}


for (i = 1; i <= 8; i++) {
	if(minxt[i]!=undefined){
if ((minx < minxt[i])&&(jegox>minxt[i])) {
minx = minxt[i];
}
}
}



for (i = 1; i <= 8; i++) {
	if(minyt[i]!=undefined){
if ((miny < minyt[i])&&(jegoy>minyt[i])) {
miny = minyt[i];
}
}
}

//alert("maxx"+maxx+" minx"+minx+" maxy"+maxy+" miny"+miny);
for(i=1;i<=8;i++){


for(j=1;j<=8;j++){

if(((jegox==j)&&(jegoy-1==i))||(((jegox==j)&&(jegoy-2==i))&&(y==7))){

if(((j>minx)&&(j<maxx))&&((i>miny)&&(i<maxy))){

if(zawada!=2){

dop=i+"a"+j;
if(dop!=undefined){
if(dop!=ruchy[dor]){
dor++;
ruchy[dor]=i+"a"+j;
//alert(ruchy[dor]);
//alert(ruchy[dor]);

}
}
}

$("#"+i+"a"+j).html("<img src='kropka.png'>");

zawada=1;
blokx=-1;
bloky=-1;
}

}

}
}	
	for(i=0;i<=8;i++){
	maxxt[i]=0;
	maxyt[i]=0;
	minxt[i]=9;
	minyt[i]=9;
	
}
maxxl=0;
maxyl=0;
minxl=0;
minyl=0;
	
}


//-----------------------------------
//---------------------------------
//-----------------kon---------
//-------------------------------
//---------------------------

if (aktualny==2 || aktualny==7 || aktualny==27 || aktualny==28)
{

for(i=1; i <= 32; i++){

if(((jegox+1==pionek[i].charAt(2))&&(jegoy+2==pionek[i].charAt(0)))){
	
	k1x=pionek[i].charAt(0);
	k1y=pionek[i].charAt(2);
	//alert(" 1kx "+k1x+" ky "+k1y);
}	
if((jegox-1==pionek[i].charAt(2))&&(jegoy+2==pionek[i].charAt(0))){
	k2x=pionek[i].charAt(0);
	k2y=pionek[i].charAt(2);
	//alert("2 kx "+k1x+" ky "+k1y);
	
}

if((jegox+1==pionek[i].charAt(2))&&(jegoy-2==pionek[i].charAt(0))){
	k3x=parseInt(pionek[i].charAt(0));
	k3y=parseInt(pionek[i].charAt(2));
		//alert(" 3kx "+k3x+" ky "+k3y);
}

if(((jegox-1==pionek[i].charAt(2))&&(jegoy-2==pionek[i].charAt(0)))){
	k4x=pionek[i].charAt(0);
	k4y=pionek[i].charAt(2);
		//alert(" 4kx "+k1x+" ky "+k1y);
}

if(((jegox+2==pionek[i].charAt(2))&&(jegoy+1==pionek[i].charAt(0)))){
	k5x=pionek[i].charAt(0);
	k5y=pionek[i].charAt(2);
		//alert(" 4kx "+k1x+" ky "+k1y);
}



if(((jegox+2==pionek[i].charAt(2))&&(jegoy-1==pionek[i].charAt(0)))){
	k6x=pionek[i].charAt(0);
	k6y=pionek[i].charAt(2);
		//alert(" 4kx "+k1x+" ky "+k1y);
}


if(((jegox-2==pionek[i].charAt(2))&&(jegoy+1==pionek[i].charAt(0)))){
	k7x=pionek[i].charAt(0);
	k7y=pionek[i].charAt(2);
		//alert(" 4kx "+k1x+" ky "+k1y);
}


if(((jegox-2==pionek[i].charAt(2))&&(jegoy-1==pionek[i].charAt(0)))){
	k8x=pionek[i].charAt(0);
	k8y=pionek[i].charAt(2);
		//alert(" 4kx "+k1x+" ky "+k1y);
}


}

if(k1x==undefined){k1x=-1;}
if(k2x==undefined){k2x=-1;}
if(k3x==undefined){k3x=-1;}
if(k4x==undefined){k4x=-1;}

if(k1y==undefined){k1y=-1;}
if(k2y==undefined){k2y=-1;}
if(k3y==undefined){k3y=-1;}
if(k4y==undefined){k4y=-1;}


if(k5x==undefined){k5x=-1;}
if(k6x==undefined){k6x=-1;}
if(k7x==undefined){k7x=-1;}
if(k8x==undefined){k8x=-1;}

if(k5y==undefined){k5y=-1;}
if(k6y==undefined){k6y=-1;}
if(k7y==undefined){k7y=-1;}
if(k8y==undefined){k8y=-1;}

if((minx==9)||(minx>jegox)){
minx=0;
}
if((miny==9)||((miny>jegoy))){
miny=0;
}
if((maxx==0)||(maxx<jegox)){
maxx=9;
}
if((maxy==0)||(maxy<jegoy)){
maxy=9;
}

//alert("maxx"+maxx+" minx"+minx+" maxy"+maxy+" miny"+miny);
for(i=1;i<=8;i++){


for(j=1;j<=8;j++){

if(((jegox+1==j)&&(jegoy+2==i))||((jegox-1==j)&&(jegoy+2==i))||((jegox+1==j)&&(jegoy-2==i))||((jegox-1==j)&&(jegoy-2==i))||((jegox+2==j)&&(jegoy+1==i))||((jegox+2==j)&&(jegoy-1==i))||((jegox-2==j)&&(jegoy+1==i))||((jegox-2==j)&&(jegoy-1==i))){



//alert(i+"!="+k3x+" "+j+"!="+k3y+"");
//alert("1 "+i+"="+k1x+" "+j+"="+k1y);
//alert("2 "+i+"="+k2x+" "+j+"="+k2y);
//alert("3 "+i+"="+k3x+" "+j+"="+k3y);
//alert("4 "+i+"="+k4x+" "+j+"="+k4y);
if((k1x==i)&&(k1y==j)){zawada=2;}
if((k2x==i)&&(k2y==j)){zawada=2;}
if((k3x==i)&&(k3y==j)){zawada=2;}
if((k4x==i)&&(k4y==j)){zawada=2;}


if((k5x==i)&&(k5y==j)){zawada=2;}
if((k6x==i)&&(k6y==j)){zawada=2;}
if((k7x==i)&&(k7y==j)){zawada=2;}
if((k8x==i)&&(k8y==j)){zawada=2;}



if(zawada!=2){

dop=i+"a"+j;
if(dop!=undefined){
if(dop!=ruchy[dor]){
dor++;
ruchy[dor]=i+"a"+j;
//alert(ruchy[dor]);
//alert(ruchy[dor]);

}
}


$("#"+i+"a"+j).html("<img src='kropka.png'>");
//||||||||||||
for(k=17; k <= 32; k++){
	////////////////////////---------------------l1
if(((jegox+1==pionek[k].charAt(2))&&(jegoy+2==pionek[k].charAt(0)))){
{
	if(bl1==0){
	biciel=biciel+1;
	bicie[biciel]=pionek[k];
	jeden=$("#"+pionek[k]).html();
	dwa="+";
	$("#"+pionek[k]).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(2))+" "+parseInt(pionek[k].charAt(2)));
	bl1=bl1+1;
}
}
}


	if(bl2==0){
if(((jegox-1==pionek[k].charAt(2))&&(jegoy+2==pionek[k].charAt(0)))){
	biciel=biciel+1;
	bicie[biciel]=pionek[k];
	jeden=$("#"+pionek[k]).html();
	dwa="+";
	$("#"+pionek[k]).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(2))+" "+parseInt(pionek[k].charAt(2)));
	bl2=bl2+1;
}
}


	if(bl3==0){
if(((jegox+1==pionek[k].charAt(2))&&(jegoy-2==pionek[k].charAt(0)))){
	biciel=biciel+1;
	bicie[biciel]=pionek[k];
	jeden=$("#"+pionek[k]).html();
	dwa="+";
	$("#"+pionek[k]).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(2))+" "+parseInt(pionek[k].charAt(2)));
	bl3=bl3+1;
}
}


	if(bl4==0){
if(((jegox-1==pionek[k].charAt(2))&&(jegoy-2==pionek[k].charAt(0)))){
	biciel=biciel+1;
	bicie[biciel]=pionek[k];
	jeden=$("#"+pionek[k]).html();
	dwa="+";
	$("#"+pionek[k]).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(2))+" "+parseInt(pionek[k].charAt(2)));
	bl4=bl4+1;
}
}
//////////////////////---------------l2



	
if(((jegox+2==pionek[k].charAt(2))&&(jegoy+1==pionek[k].charAt(0)))){
{
	if(bl5==0){
	biciel=biciel+1;
	bicie[biciel]=pionek[k];
	jeden=$("#"+pionek[k]).html();
	dwa="+";
	$("#"+pionek[k]).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(2))+" "+parseInt(pionek[k].charAt(2)));
	bl5=bl5+1;
}
}
}


	if(bl6==0){
if(((jegox+2==pionek[k].charAt(2))&&(jegoy-1==pionek[k].charAt(0)))){
	biciel=biciel+1;
	bicie[biciel]=pionek[k];
	jeden=$("#"+pionek[k]).html();
	dwa="+";
	$("#"+pionek[k]).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(2))+" "+parseInt(pionek[k].charAt(2)));
	bl6=bl6+1;
}
}


	if(bl7==0){
if(((jegox-2==pionek[k].charAt(2))&&(jegoy+1==pionek[k].charAt(0)))){
	biciel=biciel+1;
	bicie[biciel]=pionek[k];
	jeden=$("#"+pionek[k]).html();
	dwa="+";
	$("#"+pionek[k]).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(2))+" "+parseInt(pionek[k].charAt(2)));
	bl7=bl7+1;
}
}


	if(bl8==0){
if(((jegox-2==pionek[k].charAt(2))&&(jegoy-1==pionek[k].charAt(0)))){
	biciel=biciel+1;
	bicie[biciel]=pionek[k];
	jeden=$("#"+pionek[k]).html();
	dwa="+";
	$("#"+pionek[k]).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(2))+" "+parseInt(pionek[k].charAt(2)));
	bl8=bl8+1;
}
}



}


}
zawada=1;
blokx=-1;
bloky=-1;


}

}
}	
	
	
}
//-----------------------------------
//---------------------------------
//-----------------krol---------
//-------------------------------
//---------------------------
if (aktualny==5 || aktualny==31)
{
	///-----------------------------pion
for(i=1; i <= 32; i++){

pom=jegoy+"a"+jegox;
if(!(pom==pionek[i])){
//alert(pionek[i]+" == "+pom);
//alert("maxx"+maxx+" <="+pionek[i].charAt(2)+" && jegoy"+jegoy+" || jegox"+jegox);
if((jegox+1==pionek[i].charAt(2))&&((jegoy==pionek[i].charAt(0)))){
//alert("www");
maxx=pionek[i].charAt(2);
//alert(maxx);
}

//alert("minx"+minx+" <="+pionek[i].charAt(2)+" && jegoy"+jegoy+" || jegox"+jegox);
if((jegox-1==pionek[i].charAt(2))&&((jegoy==pionek[i].charAt(0)))){
minx=pionek[i].charAt(2);
//alert(minx);
}

//alert("miny"+miny+" <="+pionek[i].charAt(0)+" && jegox"+jegox+" == "+pionek[i].charAt(2));
if((jegox==pionek[i].charAt(2))&&((jegoy-1==pionek[i].charAt(0)))){
miny=pionek[i].charAt(0);
//alert(miny);
}
//alert("maxy"+maxy+" <="+pionek[i].charAt(0)+" && jegox"+jegox+" == "+pionek[i].charAt(2));
if((jegox==pionek[i].charAt(2))&&((jegoy+1==pionek[i].charAt(0)))){
maxy=pionek[i].charAt(0);
//alert(maxy);
}

}
}
//alert(maxy+" > "+jegoy );
if((minx>jegox)){
minx=0;
}
if(((miny>jegoy))){
miny=0;
}
if((maxx<jegox)){
maxx=9;
}
if((maxy<jegoy)){
maxy=9;
}
/*
alert(minx);
alert(maxx);

alert(maxy);
*/

//alert("maxx"+maxx+" minx"+minx+" maxy"+maxy+" miny"+miny);
for(i=1;i<=8;i++){


for(j=1;j<=8;j++){

if((jegox+1==j)&&(jegoy==i)||(jegox-1==j)&&(jegoy==i)||(jegox==j)&&(jegoy+1==i)||(jegox==j)&&(jegoy-1==i)){

if(((j>minx)&&(j<maxx))&&((i>miny)&&(i<maxy))){

if(zawada!=2){

dop=i+"a"+j;
if(dop!=undefined){
if(dop!=ruchy[dor]){
dor++;
ruchy[dor]=i+"a"+j;
//alert(ruchy[dor]);
//alert(ruchy[dor]);

}
}
}

$("#"+i+"a"+j).html("<img src='kropka.png'>");
for(k=17; k <= 32; k++){
	////////////////////////---------------------l1
if((jegox+1==pionek[k].charAt(2))&&((jegoy==pionek[k].charAt(0)))){
{
	if(bl1==0){
	biciel=biciel+1;
	bicie[biciel]=pionek[k];
	jeden=$("#"+pionek[k]).html();
	dwa="+";
	$("#"+pionek[k]).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(2))+" "+parseInt(pionek[k].charAt(2)));
	bl1=bl1+1;
	//alert(pionek[k]);
}
}
}


	if(bl2==0){
if((jegox-1==pionek[k].charAt(2))&&((jegoy==pionek[k].charAt(0)))){
	biciel=biciel+1;
	bicie[biciel]=pionek[k];
	jeden=$("#"+pionek[k]).html();
	dwa="+";
	$("#"+pionek[k]).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(2))+" "+parseInt(pionek[k].charAt(2)));
	bl2=bl2+1;
}
}


	if(bl3==0){
if((jegox==pionek[k].charAt(2))&&((jegoy-1==pionek[k].charAt(0)))){
	biciel=biciel+1;
	bicie[biciel]=pionek[k];
	jeden=$("#"+pionek[k]).html();
	dwa="+";
	$("#"+pionek[k]).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(2))+" "+parseInt(pionek[k].charAt(2)));
	bl3=bl3+1;
}
}


	if(bl4==0){
if((jegox==pionek[k].charAt(2))&&((jegoy+1==pionek[k].charAt(0)))){
	biciel=biciel+1;
	bicie[biciel]=pionek[k];
	jeden=$("#"+pionek[k]).html();
	dwa="+";
	$("#"+pionek[k]).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(2))+" "+parseInt(pionek[k].charAt(2)));
	bl4=bl4+1;
}
}
//////////////////////---------------l2






}
zawada=1;
blokx=-1;
bloky=-1;
}

}

}
}	
	
	

//----------------------------------skos



maxx=0;
maxy=0;
minx=9;
miny=9;
for(i=1; i <= 32; i++){

pom=jegoy+"a"+jegox;
if(!(pom==pionek[i])){
for(wu=1;wu<=1;wu++){
//alert(pionek[i]+" == "+pom);
//alert("maxx"+maxx+" <="+pionek[i].charAt(2)+" && jegoy"+jegoy+" || jegox"+jegox);

//&&((jegox-wu==j)||(jegox+wu==j))&&((jegoy-wu==i)||(jegoy+wu==i))
if((jegox<pionek[i].charAt(2))&&(jegoy<pionek[i].charAt(0))){
if((maxx<pionek[i].charAt(2))&&((jegox-wu==pionek[i].charAt(2))||(jegox+wu==pionek[i].charAt(2)))&&((jegoy-wu==pionek[i].charAt(0))||(jegoy+wu==pionek[i].charAt(0)))){
//alert("www");
maxx=pionek[i].charAt(2);
}
}
if((jegox<pionek[i].charAt(2))&&(jegoy>pionek[i].charAt(0))){
//alert("minx"+minx+" <="+pionek[i].charAt(2)+" && jegoy"+jegoy+" || jegox"+jegox);
if((minx>pionek[i].charAt(2))&&((jegox-wu==pionek[i].charAt(2))||(jegox+wu==pionek[i].charAt(2)))&&((jegoy-wu==pionek[i].charAt(0))||(jegoy+wu==pionek[i].charAt(0)))){
minx=pionek[i].charAt(2);
//alert(minx);
}
}
//alert("miny"+miny+" <="+pionek[i].charAt(0)+" && jegox"+jegox+" == "+pionek[i].charAt(2));
if((jegox>pionek[i].charAt(2))&&(jegoy>pionek[i].charAt(0))){
if((miny>pionek[i].charAt(0))&&((jegox-wu==pionek[i].charAt(2))||(jegox+wu==pionek[i].charAt(2)))&&((jegoy-wu==pionek[i].charAt(0))||(jegoy+wu==pionek[i].charAt(0)))){
miny=pionek[i].charAt(0);
}
}
//alert("maxy"+maxy+" <="+pionek[i].charAt(0)+" && jegox"+jegox+" == "+pionek[i].charAt(2));
if((jegox>pionek[i].charAt(2))&&(jegoy<pionek[i].charAt(0))){
if((maxy<pionek[i].charAt(0))&&((jegox-wu==pionek[i].charAt(2))||(jegox+wu==pionek[i].charAt(2)))&&((jegoy-wu==pionek[i].charAt(0))||(jegoy+wu==pionek[i].charAt(0)))){
maxy=pionek[i].charAt(0);
}
}
}
}
}
if((minx==9)){
minx=0;
}
if((miny==9)){
miny=0;
}
if((maxx==0)){
maxx=9;
}
if((maxy==0)){
maxy=9;
}
//alert("maxx"+maxx+" minx"+minx+" maxy"+maxy+" miny"+miny);
for(i=1;i<=8;i++){
for(j=1;j<=8;j++){
for(wu=1;wu<=1;wu++){
if((!((jegox==j)&&(jegoy==i)))&&((jegox-wu==j)||(jegox+wu==j))&&((jegoy-wu==i)||(jegoy+wu==i))){

//prawy dol
if((jegox<j)&&(jegoy<i)){
if(maxx>j){

if(zawada!=2){
dop=i+"a"+j;
if(dop!=undefined){
if(dop!=ruchy[dor]){
dor++;
ruchy[dor]=i+"a"+j;
//alert(ruchy[dor]);
//alert(ruchy[dor]);
}
}
}
$("#"+i+"a"+j).html("<img src='kropka.png'>");




zawada=1;
blokx=-1;
bloky=-1;
}
}


//lewy dol
if((jegox>j)&&(jegoy<i)){
if(maxy>i){

if(zawada!=2){
dop=i+"a"+j;
if(dop!=undefined){
if(dop!=ruchy[dor]){
dor++;
ruchy[dor]=i+"a"+j;
//alert(ruchy[dor]);
//alert(ruchy[dor]);
}
}
}
$("#"+i+"a"+j).html("<img src='kropka.png'>");




zawada=1;
blokx=-1;
bloky=-1;
}
}




//prawa gora
if((jegox<j)&&(jegoy>i)){
if(minx<j){
//alert(j);
//alert(minx);
if(zawada!=2){
dop=i+"a"+j;
if(dop!=undefined){
if(dop!=ruchy[dor]){
dor++;
ruchy[dor]=i+"a"+j;
//alert(ruchy[dor]);
//alert(ruchy[dor]);
}
}
}
$("#"+i+"a"+j).html("<img src='kropka.png'>");
zawada=1;
blokx=-1;
bloky=-1;
}
}



//lewa gora
if((jegox>j)&&(jegoy>i)){
if(miny<i){

if(zawada!=2){
dop=i+"a"+j;
if(dop!=undefined){
if(dop!=ruchy[dor]){
dor++;
ruchy[dor]=i+"a"+j;
//alert(ruchy[dor]);
//alert(ruchy[dor]);
}
}
}
$("#"+i+"a"+j).html("<img src='kropka.png'>");
zawada=1;
blokx=-1;
bloky=-1;
}
}


for(k=17; k <= 32; k++){
	

if(jegox+wu==pionek[k].charAt(2) && jegoy+wu==pionek[k].charAt(0)){


	if(bl5==0){
	biciel=biciel+1;
	bicie[biciel]=pionek[k];
	jeden=$("#"+pionek[k]).html();
	dwa="+";
	$("#"+pionek[k]).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(2))+" "+parseInt(pionek[k].charAt(2)));
	bl5=bl5+1;
}

}


	if(bl6==0){

//alert("minx"+minx+" <="+pionek[i].charAt(2)+" && jegoy"+jegoy+" || jegox"+jegox);

if(jegox+wu==pionek[k].charAt(2) && jegoy-wu==pionek[k].charAt(0)){
	biciel=biciel+1;
	bicie[biciel]=pionek[k];
	jeden=$("#"+pionek[k]).html();
	dwa="+";
	$("#"+pionek[k]).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(2))+" "+parseInt(pionek[k].charAt(2)));
	bl6=bl6+1;
}

	}

	if(bl7==0){

if(jegox-wu==pionek[k].charAt(2) && jegoy+wu==pionek[k].charAt(0)){
	biciel=biciel+1;
	bicie[biciel]=pionek[k];
	jeden=$("#"+pionek[k]).html();
	dwa="+";
	$("#"+pionek[k]).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(2))+" "+parseInt(pionek[k].charAt(2)));
	bl7=bl7+1;
}
}
	


	if(bl8==0){

if(jegox-wu==pionek[k].charAt(2) && jegoy-wu==pionek[k].charAt(0)){
	biciel=biciel+1;
	bicie[biciel]=pionek[k];
	jeden=$("#"+pionek[k]).html();
	dwa="+";
	$("#"+pionek[k]).html(jeden+dwa);
	//alert(parseInt(pionek[k].charAt(2))+" "+parseInt(pionek[k].charAt(2)));
	bl8=bl8+1;
}

	}
}



}
}
}
}


}
}
kolej++;


//alert(kolej);
if(kolej>=4){
//alert(ruchy[1])
//alert(aktualny);


for(i2=1;i2<=50;i2++){
	//alert(bicie[i2]);
//alert(ruchy[i2].charAt(0)+" 0");
//alert(ruchy[i2].charAt(1)+" 1");
//alert(ruchy[i2].charAt(2)+" 2");
// alert(ruchy[i2].charAt(3)+" 3");
//alert(ruchy[1]);
if(ruchy[i2] != undefined){
if((x==ruchy[i2].charAt(2))&&(y==ruchy[i2].charAt(0))){

//if((jegox!=ruchy[i2].charAt(2))&&(jegoy!=ruchy[i2].charAt(0))){
//alert(jegox);
//alert(bicie[i2]);alert(bicie[i2]);
location.href = "index.php?change="+y+"a"+x+"&pion="+aktualny;

}else{
	
	if(bicie[i2] != undefined){
	if((x==bicie[i2].charAt(2))&&(y==bicie[i2].charAt(0))){
biciep=y+"a"+x;

location.href = "index.php?change="+y+"a"+x+"&pion="+aktualny+"&bicie="+biciep;
	}
}
	
}
}else{
	
		if(bicie[i2] != undefined){
	if((x==bicie[i2].charAt(2))&&(y==bicie[i2].charAt(0))){
biciep=y+"a"+x;

location.href = "index.php?change="+y+"a"+x+"&pion="+aktualny+"&bicie="+biciep;
	}
}
	
	
}
}
}
}

</script>

<style>
img {padding-top:10px;padding-left:10px;}

</style>


</head>
<body >

<?
if(!empty($_GET["bicie"])){
$pupu=$_GET["bicie"];
//echo "<script>alert('".$_GET["bicie"]."');</script>";

$plik = fopen('pionki.txt','r');
$tekst5=fgets($plik, 10000);
fclose($plik);
$lulu=$tekst5;
$huhu=str_replace($pupu,"999a999", $lulu);
//echo"<script>alert('".$_GET["bicie"]."');</script>";
//echo"<script>alert('".$huhu."');</script>";
$plik2 = fopen('pionki.txt','w');
fputs($plik2, $huhu);
fclose($plik2);
//echo("<script>location.href='index.php?change=".$_GET["change"]."&pion=".$_GET["pion"]."';</script>");
header("Location: index.php?change=".$_GET["change"]."&pion=".$_GET["pion"]);
}
?>


<center>

<table border="0" ><tr>
<td>
<div onclick="check(1,1);" id="1a1"  style="background-color:A77E5C;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(1,2);" id="1a2"  style="background-color:E7D0A7;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(1,3);" id="1a3"  style="background-color:A77E5C;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(1,4);" id="1a4"  style="background-color:E7D0A7;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(1,5);" id="1a5" style="background-color:A77E5C;width:50px;height:50px;" ></div>
</td>
<td>
<div onclick="check(1,6);" id="1a6"  style="background-color:E7D0A7;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(1,7);" id="1a7" style="background-color:A77E5C;width:50px;height:50px;" ></div>
</td>
<td>
<div onclick="check(1,8);" id="1a8"  style="background-color:E7D0A7;width:50px;height:50px;"></div>
</td>
</tr>


<tr>
<td>
<div onclick="check(2,1);" id="2a1"  style="background-color:E7D0A7;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(2,2);" id="2a2"  style="background-color:A77E5C;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(2,3);" id="2a3"   style="background-color:E7D0A7;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(2,4);" id="2a4"   style="background-color:A77E5C;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(2,5);" id="2a5"  style="background-color:E7D0A7;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(2,6);" id="2a6"   style="background-color:A77E5C;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(2,7);" id="2a7"  style="background-color:E7D0A7;width:50px;height:50px;" ></div>
</td>
<td>
<div onclick="check(2,8);" id="2a8"   style="background-color:A77E5C;width:50px;height:50px;"></div>
</td>
</tr>


<tr>
<td>
<div onclick="check(3,1);" id="3a1"  style="background-color:A77E5C;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(3,2);" id="3a2"  style="background-color:E7D0A7;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(3,3);" id="3a3"  style="background-color:A77E5C;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(3,4);" id="3a4"  style="background-color:E7D0A7;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(3,5);" id="3a5" style="background-color:A77E5C;width:50px;height:50px;" ></div>
</td>
<td>
<div onclick="check(3,6);" id="3a6"  style="background-color:E7D0A7;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(3,7);" id="3a7" style="background-color:A77E5C;width:50px;height:50px;" ></div>
</td>
<td>
<div onclick="check(3,8);" id="3a8"  style="background-color:E7D0A7;width:50px;height:50px;"></div>
</td>
</tr>


<tr>
<td>
<div onclick="check(4,1);" id="4a1"  style="background-color:E7D0A7;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(4,2);" id="4a2"  style="background-color:A77E5C;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(4,3);" id="4a3"   style="background-color:E7D0A7;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(4,4);" id="4a4"   style="background-color:A77E5C;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(4,5);" id="4a5"  style="background-color:E7D0A7;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(4,6);" id="4a6"   style="background-color:A77E5C;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(4,7);" id="4a7"  style="background-color:E7D0A7;width:50px;height:50px;" ></div>
</td>
<td>
<div onclick="check(4,8);" id="4a8"   style="background-color:A77E5C;width:50px;height:50px;"></div>
</td>
</tr>

<tr>
<td>
<div onclick="check(5,1);" id="5a1"  style="background-color:A77E5C;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(5,2);" id="5a2"  style="background-color:E7D0A7;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(5,3);" id="5a3"  style="background-color:A77E5C;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(5,4);" id="5a4"  style="background-color:E7D0A7;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(5,5);" id="5a5" style="background-color:A77E5C;width:50px;height:50px;" ></div>
</td>
<td>
<div onclick="check(5,6);" id="5a6"  style="background-color:E7D0A7;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(5,7);" id="5a7" style="background-color:A77E5C;width:50px;height:50px;" ></div>
</td>
<td>
<div onclick="check(5,8);" id="5a8"  style="background-color:E7D0A7;width:50px;height:50px;"></div>
</td>
</tr>


<tr>
<td>
<div onclick="check(6,1);" id="6a1"  style="background-color:E7D0A7;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(6,2);" id="6a2"  style="background-color:A77E5C;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(6,3);" id="6a3"   style="background-color:E7D0A7;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(6,4);" id="6a4"   style="background-color:A77E5C;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(6,5);" id="6a5"  style="background-color:E7D0A7;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(6,6);" id="6a6"   style="background-color:A77E5C;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(6,7);" id="6a7"  style="background-color:E7D0A7;width:50px;height:50px;" ></div>
</td>
<td>
<div onclick="check(6,8);" id="6a8"   style="background-color:A77E5C;width:50px;height:50px;"></div>
</td>
</tr>

<tr>
<td>
<div onclick="check(7,1);" id="7a1"  style="background-color:A77E5C;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(7,2);" id="7a2"  style="background-color:E7D0A7;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(7,3);" id="7a3"  style="background-color:A77E5C;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(7,4);" id="7a4"  style="background-color:E7D0A7;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(7,5);" id="7a5" style="background-color:A77E5C;width:50px;height:50px;" ></div>
</td>
<td>
<div onclick="check(7,6);" id="7a6"  style="background-color:E7D0A7;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(7,7);" id="7a7" style="background-color:A77E5C;width:50px;height:50px;" ></div>
</td>
<td>
<div onclick="check(7,8);" id="7a8"  style="background-color:E7D0A7;width:50px;height:50px;"></div>
</td>
</tr>


<tr>
<td>
<div onclick="check(8,1);" id="8a1"  style="background-color:E7D0A7;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(8,2);" id="8a2"  style="background-color:A77E5C;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(8,3);" id="8a3"   style="background-color:E7D0A7;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(8,4);" id="8a4"   style="background-color:A77E5C;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(8,5);" id="8a5"  style="background-color:E7D0A7;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(8,6);" id="8a6"   style="background-color:A77E5C;width:50px;height:50px;"></div>
</td>
<td>
<div onclick="check(8,7);" id="8a7"  style="background-color:E7D0A7;width:50px;height:50px;" ></div>
</td>
<td>
<div onclick="check(8,8);" id="8a8"   style="background-color:A77E5C;width:50px;height:50px;"></div>
</td>
</tr>
</table>
<script>

for(w=1;w<=32;w++){
//alert(pionek[w].charAt(2)+" | "+pionek[w].charAt(0));
if(w==1){
$("#"+pionek[w].charAt(0)+"a"+pionek[w].charAt(2)).html("<img src='wierzac.png'>");  ;
}


if(w==8){
$("#"+pionek[w].charAt(0)+"a"+pionek[w].charAt(2)).html("<img src='wierzac.png'>");  ;
}

if(w==3){
$("#"+pionek[w].charAt(0)+"a"+pionek[w].charAt(2)).html("<img src='lauferc.png'>");  ;
}
if(w==6){
$("#"+pionek[w].charAt(0)+"a"+pionek[w].charAt(2)).html("<img src='lauferc.png'>");  ;
}
if(w==4){
$("#"+pionek[w].charAt(0)+"a"+pionek[w].charAt(2)).html("<img src='krolowac.png'>");  ;
}

if(w==9){
$("#"+pionek[w].charAt(0)+"a"+pionek[w].charAt(2)).html("<img src='pionekc.png'>");  ;
}


if(w==2){
$("#"+pionek[w].charAt(0)+"a"+pionek[w].charAt(2)).html("<img src='konc.png'>");  ;
}

if(w==7){
$("#"+pionek[w].charAt(0)+"a"+pionek[w].charAt(2)).html("<img src='konc.png'>");  ;
}


if(w==10){
$("#"+pionek[w].charAt(0)+"a"+pionek[w].charAt(2)).html("<img src='pionekc.png'>");  ;
}



if(w==11){
$("#"+pionek[w].charAt(0)+"a"+pionek[w].charAt(2)).html("<img src='pionekc.png'>");  ;
}



if(w==12){
$("#"+pionek[w].charAt(0)+"a"+pionek[w].charAt(2)).html("<img src='pionekc.png'>");  ;
}



if(w==13){
$("#"+pionek[w].charAt(0)+"a"+pionek[w].charAt(2)).html("<img src='pionekc.png'>");  ;
}



if(w==14){
$("#"+pionek[w].charAt(0)+"a"+pionek[w].charAt(2)).html("<img src='pionekc.png'>");  ;
}



if(w==15){
$("#"+pionek[w].charAt(0)+"a"+pionek[w].charAt(2)).html("<img src='pionekc.png'>");  ;
}


if(w==16){
$("#"+pionek[w].charAt(0)+"a"+pionek[w].charAt(2)).html("<img src='pionekc.png'>");  ;
}

if(w==5){
$("#"+pionek[w].charAt(0)+"a"+pionek[w].charAt(2)).html("<img src='krolc.png'>");  ;
}

if(w==17 || w==18 || w==19 || w==20 || w==21 || w==22 || w==23 || w==24 ){
	
	$("#"+pionek[w].charAt(0)+"a"+pionek[w].charAt(2)).html("<img src='pionekb.png'>");  ;
}

if(w==25 || w==26){
$("#"+pionek[w].charAt(0)+"a"+pionek[w].charAt(2)).html("<img src='wierzab.png'>");  ;
}

if(w==27 || w==28){
$("#"+pionek[w].charAt(0)+"a"+pionek[w].charAt(2)).html("<img src='konb.png'>");  ;
}

if(w==29 || w==30){
$("#"+pionek[w].charAt(0)+"a"+pionek[w].charAt(2)).html("<img src='lauferb.png'>");  ;
}


if(w==31){
$("#"+pionek[w].charAt(0)+"a"+pionek[w].charAt(2)).html("<img src='krolb.png'>");  ;
}

if(w==32){
$("#"+pionek[w].charAt(0)+"a"+pionek[w].charAt(2)).html("<img src='krolowab.png'>");  ;
}
/*
alert(w);
if(w==8){
$("#"+rysy+"a"+rysx).html("<img src='wierzac.png'>");  ;
}
*/
//alert(w);
}
</script>

<?


$pion=$_GET["pion"];
$change=$_GET["change"];
if(!empty($pion) and empty($_GET["bicie"])){

$plik = fopen('pionki.txt','r');
$tekst4=fgets($plik, 10000);
fclose($plik);
$pionki=explode("z",$tekst4);
//var_dump($tekst4);
//echo "<script>alert('".$pionki[$pion]." | ".$pion."');</script>";
$pionki[$pion]{0}=$change{0};
$pionki[$pion]{1}=$change{1};
$pionki[$pion]{2}=$change{2};

$text5=implode("z",$pionki);
//var_dump($pionki);
$plik2 = fopen('pionki.txt','w');
fputs($plik2, $text5);
fclose($plik2);

header('Location: index.php');
}




?><br><br><br>
<input type="button" value="reset" onclick="location.href='index.php'"> 
</body></html>