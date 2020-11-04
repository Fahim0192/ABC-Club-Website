function changeVal(id){
  document.getElementById("ageValue"+id).innerHTML = document.getElementById("ageSliderValue"+id).value
}

//To keep track if category is changed
document.getElementById("category").addEventListener('change', ()=>{

  //Checking if category is family
  if(document.getElementById("category").selectedIndex == '2'){

    //displaying another input field for adding number of Person joining

    document.getElementById("nmem").style.display = 'block'
    document.getElementById("category").selectedIndex = "2";

  }
  else if (document.getElementById("category").selectedIndex == '1') { //if Individual package is selected
    document.getElementById("nmem").style.display = 'none';

    //adding a single age slider

    document.getElementById("ageSlider").innerHTML =
    `<h2>Age</h2>
    <label for="ageSliderValue1">Member `+1+`</label>
  <input id="ageSliderValue`+1+`" type="range" name="age" value="16" min="16" max="100" step="1" oninput="changeVal(`+1+`)">
  <p > <span style="display:inline-block"><span>Value: </span> <span id="ageValue`+1+`">16</span></span> </p>
    `;

  }
})

//to keep track of number of family member
document.getElementById("nmem").addEventListener('input',()=>{

  //adding the same number of age slider equal to no of family members
  document.getElementById("ageSlider").innerHTML ="<h2>Age</h2>"
  for(let i=1;i <= document.getElementById("nmem").value;i++){
      document.getElementById("ageSlider").innerHTML +=
      `
      <label for="ageSliderValue1">Member `+i+`</label>
    <input id="ageSliderValue`+i+`" type="range" name="age" value="16" min="16" max="100" step="1" oninput="changeVal(`+i+`)">
    <p > <span style="display:inline-block"><span>Value: </span> <span id="ageValue`+i+`">16</span></span> </p>
      `
  }
})


document.getElementById("cal").addEventListener('click', (event)=>{  //Submition of final form

  event.preventDefault(); // prevnting achor tag to relead the page
  let cost = 0;
  // let k = validation();  //form validation Function
  // if(k != 0) cost=calculate(); //Fees Calcutator Function
  
  cost = calculate();
  document.getElementById('fees').innerHTML = "$"+cost;
  console.log('working...');
   
 });

 function calculate()
 {
  console.log('working....')
 }



// function validation(){
//   let d = 1;
//   var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; //reg expressions for Email

//   //hiding all the error messages, if there was any
//   document.getElementById('fname').style.display = 'none';
//   document.getElementById('sname').style.display = 'none'
//   document.getElementById('email').style.display = 'none'
//   document.getElementById('cat').style.display = 'none';
//   document.getElementById('nummem').style.display = 'none';
//   document.getElementById('mem').style.display = 'none';

//   //Displaing error messages , according to the needs
//   if(document.getElementsByName('fname')[0].value.length == 0){
//     document.getElementById('fname').style.display = 'block';
//     d=0;
//   }
//   if(document.getElementsByName('lname')[0].value.length == 0){
//     document.getElementById('sname').style.display = 'block';
//     d=0;
//   }
//   if(!document.getElementsByName('email')[0].value.match(mailformat)){
//     document.getElementById('email').style.display = 'block';
//     d=0;
//   }
//   if(document.getElementById('category').selectedIndex == '0'){
//     document.getElementById('cat').style.display = 'block';
//     d=0;
//   }
//   if(document.getElementById('category').selectedIndex == '2')
//   if(document.getElementById('nmem').value < 2){
//     document.getElementById('nummem').style.display = 'block';
//     d=0;
//   }
//   if(document.getElementById('Membership').selectedIndex == '0'){
//     document.getElementById('mem').style.display = 'block';
//     d=0;
//   }
//   return d; //returning the flag value
// }

function calculate(){
  let cost = 0;
  //calculation for Individual person
  if(document.getElementById('category').selectedIndex == '1'){
    let monthly = 50;
    if(document.getElementsByName('chkitem')[0].checked) monthly -= (monthly*0.05);
    cost = parseInt(document.getElementById('Membership')[ document.getElementById('Membership').selectedIndex].value)*monthly;
    if(document.getElementById('ageSliderValue1').value >= 16 &&  document.getElementById('ageSliderValue1').value <=19) cost-= (cost*0.1);
  }

  //calculation for family
  else if (document.getElementById('category').selectedIndex == '2') {
    let monthly = 40;
    let extraMem = parseInt(document.getElementById('nmem').value)-2;
    if(extraMem > 3)monthly -=(monthly*0.075)
    else monthly-=(monthly*0.025*extraMem)
    if(document.getElementsByName('chkitem')[0].checked) monthly -= (monthly*0.05);
    cost = monthly*document.getElementById('nmem').value;
    for(let i=1; i<=document.getElementById('nmem').value;i++){
      if(document.getElementById('ageSliderValue'+i).value >= 16 &&  document.getElementById('ageSliderValue'+i).value <=19){
        cost-= (cost*0.1);
        break;
      }
    }

  }

  return cost;


}






