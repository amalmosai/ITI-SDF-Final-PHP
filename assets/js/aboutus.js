/////// start slider section

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
///////////////////////////////////////about us

var about=[
   
  {description:"Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.",
  title:"OUR SERVICES", 
  },
  {description:"Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.",
  title:"OUR IMPACT",
  },
  {description:"Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.",
  title:"HOW WE WORK", 
  },
  {description:"Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.",
  title:"OUR TEAM", 
  }    
]

function getData_about_us()
{
  var aboutus=document.getElementById('aboutus');
  var container=document.createElement('div');
  var about_us=document.createElement('div');
  var aboutus_h2 =document.createElement('h2');
  var our_info=document.createElement('div');
  
  container.classList.add('container');
  about_us.classList.add('about_us');
  our_info.classList.add('about_our_info');
 
  for (let i=0;i<about.length;i++)
  {
      var about_item=document.createElement('div');
      var desc=document.createElement('p');
      var title=document.createElement('h3');
      //var btn=document.createElement('button');
  
      aboutus.appendChild(container);
      container.appendChild(about_us);
      about_us.appendChild(aboutus_h2);
      about_us.appendChild(our_info);
      our_info.appendChild(about_item);
      
      about_item.appendChild(title);
      about_item.appendChild(desc);
     // about_item.appendChild(btn);

     
      aboutus_h2.innerText="ABOUT US"
      desc.innerText=about[i].description;
      title.innerText=about[i].title;
      //btn.innerText="READ MORE"
      
      about_item .classList.add('about_item');
     // btn.classList.add('about_btn');
      
    }
    console.log(about);
}