var cneed;
var fneed;
var crneed;
var pneed;
var aneed;
var fd;
var protein=0;
var fat=0;
var carbo=0;
var alcohol=0;
function cc()
{
  var age=parseInt(document.getElementById("age").value);
  var wtype=document.getElementById("wtype").value;
  var foot=parseInt(document.getElementById("foot").value);
  var inch=parseInt(document.getElementById("inch").value);
  var cm =document.getElementById("cen").value;
  var weight=document.getElementById("weight").value;
  var loa=document.getElementById("loa").value;

  var result = weight / (cm/100*cm/100);
  document.getElementById("bmi").innerHTML =  result;
  if(result < 18.5){
    document.getElementById("meaning").innerHTML = "That you are too thin.";

    document.getElementById("demoHeading").innerHTML = "Exercise Required: ";
    document.getElementById("demoExercise").innerHTML = "Your body will be naturally gifted at cardio and light weights, which means these modes of exercise won’t get you quick results. Instead, perform a full body, heavy weight training routine 3-5 days per week. If you don’t have access to weights, improvise with sandbags, buckets or thick elastic bands. Also, check out the space-saving “Selectorized Dumbbells”. Subscribe to our At-Home Workout Plan.";
  }
  if(result > 18.5 && result < 25){

    document.getElementById("demoHeading").innerHTML = "Exercise Required: ";
    document.getElementById("demoExercise").innerHTML = "Our experts recommend you 150 minutes of moderate aerobic exercise per week (for example, 30 minutes on each of five days) or 75 minutes of vigorous aerobic activity (or an equiva- lent mix of the two), two or more strength training sessions per week, with at least 48 hours in between to allow muscles to recover. Subscribe to our At-Home Workout Plan.";
    document.getElementById("meaning").innerHTML = "That you are healthy.";
  }
  if(result > 25){
    document.getElementById("demoHeading").innerHTML = "Exercise Required: ";
    document.getElementById("demoExercise").innerHTML = "We recommend at least 150 minutes every week of moderate exercise, or 75 minutes every week of vigorous exercise. That can be broken down into 30 minutes of exercise, five days a week. Subscribe to our At-Home Workout Plan.";
    document.getElementById("meaning").innerHTML = "That you have overweight.";
  }
if (age!='' && cm!='' && weight!='') {
    if (wtype=="pounds"){
      weight=parseInt(weight);
      weight=Math.round(weight/2.2046);
    }
    if(document.getElementById("gen").checked)
    {
      fd=(10*weight)+(6.25*cm)-(5*age)+5;
    } else{
      fd=(10*weight)+(6.25*cm)-(5*age)-161;
    }
    switch(loa)
    {
      case "1":
      cneed=fd*1.2;
      break;
      case "2":
      cneed=fd*1.375
      break;
      case "3":
      cneed=fd*1.53;
      break;
      case "4":
      cneed=fd*1.725;
      break;
      case "5":
      cneed=fd*1.9;
      break;
    }
    cneed=Math.floor(cneed);
    //cneed1=Math.floor(cneed*0.0353);
    fneed=Math.floor((cneed*0.25)/9);
    if (wtype=="pounds")
    {
      fneed=Math.floor(fneed*0.0353);
      //fneed=fneed*0.0022 ;
    }
    pneed=Math.floor((cneed*0.25)/4);
    if (wtype=="pounds"){
      pneed=Math.floor(pneed*0.0353);
    }
    crneed=Math.floor((cneed*0.25)/4);
    if (wtype=="pounds")
    {
      crneed=Math.floor(crneed*0.0353);
    }
    aneed=Math.floor((cneed*0.25)/7);
    if (wtype=="pounds"){
      aneed=Math.floor(aneed*0.0353);
    }

    localStorage.setItem("fat", fneed);
    localStorage.setItem("protein", pneed);
    localStorage.setItem("carbo", crneed);
    localStorage.setItem("alcohol", aneed);
    document.getElementById("rc").value=" "+cneed;
    document.getElementById("rf").value=" "+localStorage.getItem("fat");
    document.getElementById("rp").value=" "+localStorage.getItem("protein");
    document.getElementById("rh").value=" "+localStorage.getItem("carbo");
    document.getElementById("ra").value=" "+localStorage.getItem("alcohol");
    document.getElementById("l1").innerHTML="grams";
    document.getElementById("l2").innerHTML="grams";
    document.getElementById("l3").innerHTML="grams";
    document.getElementById("l4").innerHTML="grams";

    var caltype=document.getElementById("caltype").value;
    if (caltype=='g') {
      document.getElementById("l1").innerHTML="grams";
      document.getElementById("l2").innerHTML="grams";
      document.getElementById("l3").innerHTML="grams";
      document.getElementById("l4").innerHTML="grams";

    }
    if (wtype=="pounds"){
      fat = fneed * 0.0022 ;
      protein = pneed * 0.0022 ;
      carbo = crneed * 0.0022 ;
      alcohol = aneed * 0.0022 ;
      fat=fat.toFixed(3);
      protein = protein.toFixed(3);
      carbo = carbo.toFixed(3);
      alcohol = alcohol.toFixed(3);

      localStorage.setItem("fat", fat);
      localStorage.setItem("protein", protein);
      localStorage.setItem("carbo", carbo);
      localStorage.setItem("alcohol", alcohol);
      document.getElementById("rf").value=" "+localStorage.getItem("fat");
      document.getElementById("rp").value=" "+localStorage.getItem("protein");
      document.getElementById("rh").value=" "+localStorage.getItem("carbo");
      document.getElementById("ra").value=" "+localStorage.getItem("alcohol");
      document.getElementById("l1").innerHTML="lbs";
      document.getElementById("l2").innerHTML="lbs";
      document.getElementById("l3").innerHTML="lbs";
      document.getElementById("l4").innerHTML="lbs";

    }
if (caltype=='pounds') {
fat = fneed * 0.0022 ;
protein = pneed * 0.0022 ;
carbo = crneed * 0.0022 ;
alcohol = aneed * 0.0022 ;
fat=fat.toFixed(3);
protein = protein.toFixed(3);
carbo = carbo.toFixed(3);
alcohol = alcohol.toFixed(3);

localStorage.setItem("fat", fat);
localStorage.setItem("protein", protein);
localStorage.setItem("carbo", carbo);
localStorage.setItem("alcohol", alcohol);
document.getElementById("rf").value=" "+localStorage.getItem("fat");
document.getElementById("rp").value=" "+localStorage.getItem("protein");
document.getElementById("rh").value=" "+localStorage.getItem("carbo");
document.getElementById("ra").value=" "+localStorage.getItem("alcohol");
document.getElementById("l1").innerHTML="lbs";
document.getElementById("l2").innerHTML="lbs";
document.getElementById("l3").innerHTML="lbs";
document.getElementById("l4").innerHTML="lbs";

}
if (caltype=='kg') {
fat = fneed / 1000;
protein = pneed / 1000;
carbo = crneed / 1000;
alcohol = aneed / 1000;
fat=fat.toFixed(3);
protein = protein.toFixed(3);
carbo = carbo.toFixed(3);
alcohol = alcohol.toFixed(3);
localStorage.setItem("fat", fat);
localStorage.setItem("protein", protein);
localStorage.setItem("carbo", carbo);
localStorage.setItem("alcohol", alcohol);
document.getElementById("rf").value=" "+localStorage.getItem("fat");
document.getElementById("rp").value=" "+localStorage.getItem("protein");
document.getElementById("rh").value=" "+localStorage.getItem("carbo");
document.getElementById("ra").value=" "+localStorage.getItem("alcohol");
document.getElementById("l1").innerHTML="kilogram";
document.getElementById("l2").innerHTML="kilogram";
document.getElementById("l3").innerHTML="kilogram";
document.getElementById("l4").innerHTML="kilogram";
}
}
else{
alert("Please fill your details properly!");
}
getGraph();
}

function con(num)
{
var hc=parseInt(num.value);
var hi=hc/2.54;
var hf=Math.floor(hi/12);
var ri=Math.round(hi%12);
if(hc>40 && hc<=210)
{
document.getElementById("foot").value=hf;
}
document.getElementById("inch").value=ri;
}
function hcon()
{
var hf=parseInt(document.getElementById("foot").value);
var hi=parseInt(document.getElementById("inch").value);
var hc;
hc=Math.round((hf*30.48)+(hi*2.54));
document.getElementById("cen").value=hc;
}
function cknum(event,num)
{var kc;
if(window.event)
{
kc=event.keyCode;
}
else
{
kc=event.which;
}
var a=num.value;
if(kc==48)
{
if(a=="")
{
return false;
}
else
{
return true;
}
}if (kc!=8 && kc!=0)
{
if (kc<49||kc>57)
{
return false;
}
}
}
function isNumberKey(id)
{var no=eval('"'+id+'"');var number= document.getElementById(no).value; if(!number.match(/^[0-9\.]+$/) && number !=""){number = number.substring(0,number.length-1);document.getElementById(id).value = number;}
}
function convert() {
var age=parseInt(document.getElementById("age").value);
var cm =document.getElementById("cen").value;
var weight=document.getElementById("weight").value;
if (age!='' && cm!='' && weight!='') {
var caltype=document.getElementById("caltype").value;
var fat = document.getElementById("rf").value;
var protein = document.getElementById("rp").value;
var carbo = document.getElementById("rh").value;
var alcohol = document.getElementById("ra").value;
if (caltype=='g') {
localStorage.setItem("fat", fneed);
localStorage.setItem("protein", pneed);
localStorage.setItem("carbo", crneed);
localStorage.setItem("alcohol", aneed);
document.getElementById("rc").value=" "+cneed;
document.getElementById("rf").value=" "+localStorage.getItem("fat");
document.getElementById("rp").value=" "+localStorage.getItem("protein");
document.getElementById("rh").value=" "+localStorage.getItem("carbo");
document.getElementById("ra").value=" "+localStorage.getItem("alcohol");
document.getElementById("l1").innerHTML="grams";
document.getElementById("l2").innerHTML="grams";
document.getElementById("l3").innerHTML="grams";
document.getElementById("l4").innerHTML="grams";

getGraph();
}
if (caltype=='pounds') {
fat = fneed * 0.0022 ;
protein = pneed * 0.0022 ;
carbo = crneed * 0.0022 ;
alcohol = aneed * 0.0022 ;
fat=fat.toFixed(3);
protein = protein.toFixed(3);
carbo = carbo.toFixed(3);
alcohol = alcohol.toFixed(3);
localStorage.setItem("fat", fat);
localStorage.setItem("protein", protein);
localStorage.setItem("carbo", carbo);
localStorage.setItem("alcohol", alcohol);
document.getElementById("rf").value=" "+localStorage.getItem("fat");
document.getElementById("rp").value=" "+localStorage.getItem("protein");
document.getElementById("rh").value=" "+localStorage.getItem("carbo");
document.getElementById("ra").value=" "+localStorage.getItem("alcohol");
document.getElementById("l1").innerHTML="lbs";
document.getElementById("l2").innerHTML="lbs";
document.getElementById("l3").innerHTML="lbs";
document.getElementById("l4").innerHTML="lbs";

getGraph();
}
if (caltype=='kg') {
fat = fneed / 1000;
protein = pneed / 1000;
carbo = crneed / 1000;
alcohol = aneed / 1000;
fat=fat.toFixed(3);
protein = protein.toFixed(3);
carbo = carbo.toFixed(3);
alcohol = alcohol.toFixed(3);

localStorage.setItem("fat", fat);
localStorage.setItem("protein", protein);
localStorage.setItem("carbo", carbo);
localStorage.setItem("alcohol", alcohol);
document.getElementById("rf").value=" "+localStorage.getItem("fat");
document.getElementById("rp").value=" "+localStorage.getItem("protein");
document.getElementById("rh").value=" "+localStorage.getItem("carbo");
document.getElementById("ra").value=" "+localStorage.getItem("alcohol");
document.getElementById("l1").innerHTML="kilogram";
document.getElementById("l2").innerHTML="kilogram";
document.getElementById("l3").innerHTML="kilogram";
document.getElementById("l4").innerHTML="kilogram";

getGraph();
}
}
else{
alert("Please fill your details properly!");
}
}
function getGraph() {
  var c = parseInt(localStorage.getItem("carbo"));
  var p = parseInt(localStorage.getItem("protein"));

  var f = parseInt(localStorage.getItem("fat"));

  var a = parseInt(localStorage.getItem("alcohol"));


  var chart = new CanvasJS.Chart("chartContainer", {
    theme: "light1", // "light2", "dark1", "dark2"
    animationEnabled: true, // change to true
    title:{
      text: "You Can Intake The Following Calories Daily"
    },
    data: [
    {
      // Change type to "bar", "area", "spline", "pie",etc.
      type: "column",
      dataPoints: [
        { label: "Fat",  y: f },
        { label: "Protein", y: p },
        { label: "Carbohydrate", y: c },
        { label: "Alcohol",  y: a }
      ]
    }
    ]
  });
  chart.render();
}
