var blogs =
    [
        {
            image :"./image/Recycling-amico.svg",
            title: "Paper Recycling",
            description: " Lorem ipsum dolor sit amet, consectetur adipisicing elit. In incidunt alias repellendus, similique voluptatum minima, fugiat magni " ,
            date:"6-jan-2023"

        }
        ,

        {
            image :"./image/Recycling-bro.svg",
            title: "Plastic Recycling",
            description: " Lorem ipsum dolor sit amet, consectetur adipisicing elit. In incidunt alias repellendus, similique voluptatum minima, fugiat magni " ,
            date:"6-jan-2023"

        }
        ,
        {
            image :"./image/Recycling-pana.svg",
            title: "Food Recycling",
            description: " Lorem ipsum dolor sit amet, consectetur adipisicing elit. In incidunt alias repellendus, similique voluptatum minima, fugiat magni " ,
            date:"6-jan-2023"

        }
        ,
        {
            image :"./image/Recycling-bro.svg",
            title: "Home Recycling",
            description: " Lorem ipsum dolor sit amet, consectetur adipisicing elit. In incidunt alias repellendus, similique voluptatum minima, fugiat magni " ,
            date:"6-jan-2023"

        }
        ,
        {
            image :"./image/Recycling-amico.svg",
            title: "Wood Recycling",
            description: " Lorem ipsum dolor sit amet, consectetur adipisicing elit. In incidunt alias repellendus, similique voluptatum minima, fugiat magni " ,
            date:"6-jan-2023"

        }
        ,
        {
            image :"./image/Recycling-rafiki.svg",
            title: "Electronic Recycling",
            description: " Lorem ipsum dolor sit amet, consectetur adipisicing elit. In incidunt alias repellendus, similique voluptatum minima, fugiat magni " ,
            date:"6-jan-2023"

        }
        ,
        

    ]

    //create elemnts

    function getData()
    {
        var Blog__Page=document.getElementById('Blog_Page');
        var container=document.createElement('div');
        var our_blog_title=document.createElement('div');
        var h4_Blogs=document.createElement('h4');
        var main_Blog =document.createElement('div');

    

    container.classList.add('container');
    our_blog_title.classList.add('our-blog-title');
    main_Blog.classList.add('main_blog');
    for(let i=0;i<blogs.length;i++)

    {
       // create element 

       var blog = document.createElement("div")
       var first = document.createElement("div")
       var link = document.createElement("a")
       var img=document.createElement('img')
       var content = document.createElement("div")
       var title = document.createElement("h4")
       var content_p = document.createElement("div")
       var item_p=document.createElement('p');
       var content_date = document.createElement("div")
       var item_date=document.createElement('span')


 // add appedchild 
 Blog__Page.appendChild(container)
 container.appendChild( our_blog_title)
 container.appendChild(main_Blog)
 our_blog_title.appendChild(h4_Blogs)
 main_Blog.appendChild(blog)


 // add appedchild 
 blog.appendChild(first)
 first.appendChild(link)
 link.appendChild(img)

 blog.appendChild(content)
 content.appendChild(title)
 content.appendChild(content_p)
 content.appendChild(content_date)
 content_p.appendChild(item_p)
 content_date.appendChild(item_date)

// add classlist 
 blog.classList.add("blog")
 first.classList.add("first")
 content.classList.add("content") 
 content_p.classList.add("content_p") 
 content_date.classList.add("content_date") 


//data
 h4_Blogs.innerText="Our Blogs"
 img.src=blogs[i].image
 title.innerText=blogs[i].title
 item_p.innerText=blogs[i].description
 item_date.innerText=blogs[i].date


    }


    }
