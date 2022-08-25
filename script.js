

var strony = ['https://waresiak.pl/nogi', 'https://waresiak.pl/company', 'https://waresiak.pl/port', 'https://waresiak.pl', 'https://waresiak.pl/kamil']
    var i = 0
function app(){
    if(i<strony.length){
        document.getElementById('project-app').src = strony[i];
        document.getElementById('next-page').href = strony[i];
        i++
    }
    else{
        i=0;
    }

};



window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 90 || document.documentElement.scrollTop > 486) {
      document.getElementById("skills").style.display = "block";
      document.getElementById("footer").style.display = "block";

        
    } else {
        document.getElementById("skills").style.display = "none";
        document.getElementById("skills").style.display = "none";


  
  }

  console.log(document.documentElement.scrollTop)
  }
  
  
function square(){
    var elem = document.getElementsByClassName('item-grid');

    
    for (let i = 0; i <elem.length; i++) {
        setTimeout(function() {
            console.log(i)
            elem[i].classList.add('square-animation');
            elem[i].style.display = 'flex';
        }, 200*i);
    }
}

