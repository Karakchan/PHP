// UI 

var getdots = document.getElementsByClassName('dot'); //HTML collection
var getpages = document.getElementsByClassName('page');
var getform = document.getElementById('form');
var getprevbtn = document.getElementById('prevbtn');
var getnextbtn = document.getElementById('nextbtn');
var getresultcontainer = document.getElementById('result-container');
var objkeys = ['email','password','firstname','lastname','dob','phone','address'];
var datas = [];
let curridx = 0;

showpage(curridx);

function showpage(num){
    // console.log(num);

    getpages[num].style.display = "block";

    num === 0 ? getprevbtn.style.display = "none" : getprevbtn.style.display = "inline-block";

    num === (getpages.length-1) ? getnextbtn.textContent = "Submit" : getnextbtn.textContent = "Next";

    dotindicator(num);
}

function dotindicator(num){

    for(var x = 0; x <getdots.length; x++){
        getdots[x].classList.remove('active');
    }

    getdots[num].className += " active";
}


function gonow(num){
    // console.log(num); // 1
    // console.log(curridx); //0

    // getpages[curridx].style.display = "none";

    // curridx = curridx + num;
    // console.log(curridx); // 1

    // if(curridx >= getpages.length){
    //     getform.onsubmit();
    // }

    showpage(curridx);

    formvalidation();
}

function* genfun(){
    var index = 0;

    while(index < objkeys.length){
        yield index++;
    }
}

//console.log(genfun().next().value);

let gen = genfun();
// console.log(gen.next().value); //0
// console.log(gen.next().value); //1


function formvalidation(){

    var valid = true;

    var getcurrentinput = getpages[curridx].getElementsByTagName('input');

    for(var x=0 ; x < getcurrentinput.length; x++){

            if((getcurrentinput[x].value).trim() === ''){
                getcurrentinput[x].classList.add('error');
                valid = false;
            }else{

                //console.log('x value is = ',x);
                // console.log(objkeys[x]);
                // console.log(getcurrentinput[x].value);

                // console.log("gen value is = ", gen.next().value);

                const keys = objkeys[gen.next().value];
                // console.log(keys);
                const values = getcurrentinput[x].value;
                // console.log(values);

                const obj = {
                    [keys]:values
                };

                datas.push(obj);
            }



    }

    console.log(datas);
    if(valid){
        getdots[curridx].className += " done";
    }

    console.log(valid);
    //return valid;





}