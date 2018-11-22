function buy(id) {
    $.ajax({
        type: "POST",
        url: "addtocart.php",
        data: {good_id: id, quantity: 1},
        dataType: 'json',
        success: function(msg){
            console.log(msg);
        }
    });
}

function deleteGood(id) {
    $.ajax({
        type: "POST",
        url: "deletefromcart.php",
        data: {good_id: id},
        dataType: 'json',
        success: function(msg){
            console.log(msg);
        }
    });
}