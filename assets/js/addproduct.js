function saveproduct(){

    var name = document.getElementById("product_name");
    var price = document.getElementById("product_price");
    var description = document.getElementById("description");
    var upload = document.getElementById("product_upload");
    var type = document.getElementById("product_type");
    var material = document.getElementById("product_material");
    var colour = document.getElementById("product_colour");
    localStorage.setItem("product name", name.value);
    localStorage.setItem("product price", price.value);
    localStorage.setItem("product description", description.value);
    localStorage.setItem("upload_file", upload.value);
    localStorage.setItem("product type", type.value);
    localStorage.setItem("product", material.value);
    localStorage.setItem("colour", colour.value);
}


