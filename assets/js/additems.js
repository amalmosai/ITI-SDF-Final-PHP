function saveitem(){

    var name = document.getElementById("item_name");
    var price = document.getElementById("item_price");
    var description = document.getElementById("description");
    var price = document.getElementById("item_price");
    var upload = document.getElementById("item_upload");
    localStorage.setItem("item name", name.value);
    localStorage.setItem("item price", price.value);
    localStorage.setItem("item description", description.value);
    localStorage.setItem("upload_file", upload.value);
}


