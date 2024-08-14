function addtocart()
{
    if(localStorage.getItem('cart')==null)
    {
        // console.log('create new local storage')
        localStorage.setItem('cart',JSON.stringify([]));

    }
    
    

        // console.log('local storage exist')
        var product_name =document.getElementById('product_name')
        var product_price =document.getElementById('product_price')
        var product_type =document.getElementById('product_type')
        var product_Color =document.getElementById('product_Color')
        var product_Material =document.getElementById('product_Material')
        var product_details_content =document.getElementById('product_details_content')
        var productdetailspage__img =document.getElementById('productdetailspage__img')
        
        
        product_name=product_name.innerText
        product_price=product_price.innerText
        product_type=product_type.innerText
        product_Color=product_Color.innerText
        product_Material=product_Material.innerText
        product_details_content=product_details_content.innerText
        productdetailspage__img=productdetailspage__img.src 
        var get= localStorage.getItem('cart')
        get= JSON.parse(get)
        
           
        get.push(
            {
            product_name:product_name ,
           product_price:product_price ,
           product_type:product_type ,
           product_Color:product_Color ,
           product_Material:product_Material ,
           product_details_content:product_details_content ,
           productdetailspage__img:productdetailspage__img
            }
            
                )
        localStorage.setItem('cart',JSON.stringify(get));
        alert('successfully added to cart')
    }




