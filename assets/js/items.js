var items =
    [
        {
            image: "image/productdetailsimg.jpg",
            description: "wood Recycleing",
            location: " Egypt",

        }
        ,
        {
            image: "image/productdetailsimg.jpg",
            description: "Paper Recycleing",
            location: " Egypt",

        }
        ,
        {
            image: "image/productdetailsimg.jpg",
            description: "Electroic Recycleing",
            location: " Egypt",

        }
        ,
        {
            image: "image/productdetailsimg.jpg",
            description: "car tire Recycleing",
            location: " Egypt",

        }
        ,
        {
            image: "image/productdetailsimg.jpg",
            description: "table",
            location: " Egypt",

        }
        ,
        {
            image: "image/productdetailsimg.jpg",
            description: "Palm trees",
            location: " Egypt",

        }
        ,
        {
            image: "image/productdetailsimg.jpg",
            description: "Palm trees",
            location: " Egypt",

        }
        ,
        {
            image: "image/productdetailsimg.jpg",
            description: "wood Recycleing",
            location: " Egypt",

        }
        ,
        {
            image: "image/productdetailsimg.jpg",
            description: "wood Recycleing",
            location: " Egypt",

        }
    ]

    //create elemnts

    function getData()
    {
        var item_page=document.getElementById('item-page');
        var container=document.createElement('div');
        var our_item_title=document.createElement('div');
        var h4_items=document.createElement('h4');
        var main_items =document.createElement('div');

        
        container.classList.add('container');
        our_item_title.classList.add('our-item-title');
        main_items.classList.add('main-items');

      

    for(let i=0;i<items.length;i++)

    {
       // create element 

        var card = document.createElement("div")
        var img=document.createElement('img');
        var product_header=document.createElement('div');
        var product_location=document.createElement('div');
        var item_a=document.createElement('a');
          
       
        // add appedchild 
        item_page.appendChild(container)
        container.appendChild( our_item_title)
        container.appendChild( main_items)
        our_item_title.appendChild( h4_items)
        main_items.appendChild(card)
        
        // add appedchild 
        card.appendChild(img)
        card.appendChild(product_header)
        card.appendChild(product_location)
        product_header.appendChild(item_a)
         
      // add class style 

        card.classList.add("card")
        product_header.classList.add("product_header")
        product_location.classList.add("product-location")
           
        // data
        h4_items.innerText="Our Items"
        img.src=items[i].image
        product_header.innerText=items[i].description
        product_location.innerText=items[i].location
    }










    }
