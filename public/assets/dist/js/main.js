let starsELment2=document.querySelectorAll("#box-2 .fa-star");
let emojiElemt2=document.querySelectorAll("#box-2 .fa-regular")
let colorsArray=["red","orange","darkblue","lightgreen","green"]
let starsELment3=document.querySelectorAll("#box-3 .fa-star");
let emojiElemt3=document.querySelectorAll("#box-3 .fa-regular");
let starsELment4=document.querySelectorAll("#box-4 .fa-star");
let emojiElemt4=document.querySelectorAll("#box-4 .fa-regular");
let starsELment5=document.querySelectorAll("#box-5 .fa-star");
let emojiElemt5=document.querySelectorAll("#box-5 .fa-regular");

//loop to star element and add event listener to each one 
starsELment2.forEach(
    (ele,index)=>{
       ele.addEventListener(
            "click",()=>{
                upDateRating2(index)
            }
        )
    }
);

//function 

function upDateRating2(index){
    starsELment2.forEach(
         (ele,idx)=>{
             if(idx<index+1){
      ele.classList.add("active");
             }else{ele.classList.remove("active")}
     
         }
      );
      emojiElemt2.forEach(
         (emoj)=>{
             emoj.style.transform=`translateY(-${index*35}px)`
             emoj.style.color=colorsArray[index];
         }
     );
     };

     //function for box3

     starsELment3.forEach(
        (ele,index)=>{
           ele.addEventListener(
                "click",()=>{
                    upDateRating3(index)
                }
            )
        }
    );
    
    
    function upDateRating3(index){
        starsELment3.forEach(
             (ele,idx)=>{
                 if(idx<index+1){
          ele.classList.add("active");
                 }else{ele.classList.remove("active")}
         
             }
          );
          emojiElemt3.forEach(
             (emoj)=>{
                 emoj.style.transform=`translateY(-${index*35}px)`
                 emoj.style.color=colorsArray[index];
             }
         );
         };
     
 //function box4

 starsELment4.forEach(
    (ele,index)=>{
       ele.addEventListener(
            "click",()=>{
                upDateRating4(index)
            }
        )
    }
);


function upDateRating4(index){
    starsELment4.forEach(
         (ele,idx)=>{
             if(idx<index+1){
      ele.classList.add("active");
             }else{ele.classList.remove("active")}
     
         }
      );
      emojiElemt4.forEach(
         (emoj)=>{
             emoj.style.transform=`translateY(-${index*35}px)`
             emoj.style.color=colorsArray[index];
         }
     );
     };
 //function for box5

 starsELment5.forEach(
    (ele,index)=>{
       ele.addEventListener(
            "click",()=>{
                upDateRating5(index)
            }
        )
    }
);


function upDateRating5(index){
    starsELment5.forEach(
         (ele,idx)=>{
             if(idx<index+1){
      ele.classList.add("active");
             }else{ele.classList.remove("active")}
     
         }
      );
      emojiElemt5.forEach(
         (emoj)=>{
             emoj.style.transform=`translateY(-${index*35}px)`
             emoj.style.color=colorsArray[index];
         }
     );
     };

     //style nav bar 
let Menu=document.querySelector(".mobile-menu");
function dropDown(){
 Menu.classList.toggle("active")
};



 