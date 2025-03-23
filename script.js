function sendWhatsAppOrder() {
    let clothes = document.querySelectorAll('input[name="clothes"]:checked');
    var name = document.getElementById("customerName").value;
    var phone = document.getElementById("customerPhone").value;

    if (clothes.length === 0 || name === "" || phone === "") {
        alert("Please select clothes and enter your details.");
        return;
    }

    var selectedClothes = [];
    clothes.forEach((item) => {
        selectedClothes.push(item.value);
    });

    var message = `Hello, I want to place a laundry order.\n\nName: ${name}\nPhone: ${phone}\nClothes: ${selectedClothes.join(", ")}`;

    // Updated WhatsApp URL with your default number
    let whatsappURL = `https://wa.me/+918235347836?text=${encodeURIComponent(message)}`;
    
    // Open WhatsApp with pre-filled message
    window.open(whatsappURL, "_blank");
}   
