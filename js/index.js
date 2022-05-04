//Para el slider de empresas colaboradoras

var imgArray=[
    'auspiciadorAccenture.png',
    'auspiciadorBancochile.png',
    'auspiciadorBci.png',
    'auspiciadorBimbo.jpg',
    'auspiciadorBolsa.png',
    'auspiciadorEbco.jpg',
    'auspiciadorEngine.png',
    'auspiciadorVerisure.png',
    'auspiciadorWaltmart.png'
]


var img1=document.getElementById('img1');
var img2=document.getElementById('img2');
var img3=document.getElementById('img3');


 function slideShow(){
     console.log(imgArray[7]);
 let i=0;
    img1.src='img\\'+ imgArray[i];
    img2.src='img\\'+imgArray[i+1];
    img3.src='img\\'+imgArray[i+2];
    if(i+2<8){
        img3.src='img\\'+imgArray[0];
    }
    if(i<imgArray.length-1){
        i++;
    }else{
        i=0;
    }
    
      
 }

function interval(){
 setInterval(slideShow(),2000);
}
