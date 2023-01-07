const uploadImage = (event) => {
    let file = event.target.files[0];
    console.log(file);
    console.log("Upload image");
    let reader = new FileReader();
    reader.onloadend = function () {
        console.log(reader.result);
        let imageholder = document.getElementsByClassName(
            "form-product-image-icon"
        )[0];
        // let imageInput = document.getElementById("product_image");

        // imageInput.setAttribute("value", reader.result);

        imageholder.setAttribute("src", reader.result);

        console.log(imageholder);
    };
    reader.readAsDataURL(file);
};
