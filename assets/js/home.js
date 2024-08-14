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


//////////////////////////blogs



var blogs=[
        {image:"assets/imgs/website_imgs/Recycling-amico.svg",
        description:"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.",
        title:"Web Design",
        },
        {image:"assets/imgs/website_imgs/Recycling-pana.svg",
        description:"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.",
        title:"Web Design",
        },
        {image:"assets/imgs/website_imgs/Recycling-rafiki.svg",
        description:"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.",
        title:"Web Design", 
        },
        {image:"assets/imgs/website_imgs/Recycling-rafiki.svg",
        description:"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.",
        title:"Web Design",
        },
        {image:"assets/imgs/website_imgs/Recycling-amico.svg",
        description:"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.",
        title:"Web Design", 
        },
        {image:"assets/imgs/website_imgs/Recycling-pana.svg",
        description:"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.",
        title:"Web Design", 
        }    
    ]
     
function getData_home()
{
        var main_blog1=document.getElementById('main-blog1');
        var blog=document.createElement('div');
        var container=document.createElement('div');
        var h1_blog=document.createElement('h1');
        var blog_items =document.createElement('div');
        
        blog.classList.add('home_blog');
        container.classList.add('container');
        blog_items.classList.add('home_blog_items');

        for (let i=0;i<blogs.length;i++)
        {
            var div=document.createElement('div');
            var img=document.createElement('img');
            var desc=document.createElement('p');
            var title=document.createElement('h3');
        
            main_blog1.appendChild(blog);
            blog.appendChild(container);
            container.appendChild(h1_blog);
            container.appendChild(blog_items);
            blog_items.appendChild(div);
            

            div.appendChild(img);
            div.appendChild(title);
            div.appendChild(desc);
        
            h1_blog.innerText="BLOGS"
            img.src=blogs[i].image;
            desc.innerText=blogs[i].description;
            title.innerText=blogs[i].title;
            div.classList.add('home_blog_item');
            }
}