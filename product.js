function sellProduct() {
	var sellform = document.forms[0];
	var name = sellform.name.value;
	var product = sellform.product.value;
	var message = name + ", благодарим за поръчката на "+ product +"!";
	alert(message);
	return false;
}

function commentProduct() {
	var commentform = document.forms[1];
	var comment = commentform.comment.value;
	var productId = commentform.productId.value;
	var commentPane  = document.getElementById("comments");
	commentPane.innerHTML = "<p>" + comment + "</p>" + commentPane.innerHTML;
	commentform.comment.value="";
	return false;
}


