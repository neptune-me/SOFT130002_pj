// let buttons = document.getElementsByClassName('product-row_remove-button')
// for (let button of buttons) {
//     button.onclick = function remove_and_check() {
//         let node = button;
//         while(node.className != "cart-page_product-row")
//         {
//             node = node.parentElement
//         }
//         node.remove();

//         check_no_items();
//     }
// }
function remove_and_check(button) {

    console.log("enter");
    let node = button;
    while(node.className != "cart-page_product-row")
    {
        node = node.parentElement
    }
    node.remove();

    check_no_items();
}
function check_no_items() {
    if (document.getElementsByClassName("cart-page_product-row").length == 0) {
    
        let div = document.getElementById("cart-page_product-list");
        let newdiv = document.createElement('div');
        let span = document.createElement('span');
        newdiv.classList.add("cart-page__banner");
        div.append(newdiv);
        span.classList.add("sp-subhead");
        span.innerHTML = "Your Cart is Empty!"
        newdiv.append(span)
        let pagination = document.getElementById('pagination')
        pagination.remove()
    }
}