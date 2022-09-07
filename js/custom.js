
// Variable 
let allContainerCart = document.querySelector(".allContainerCart");
let dettalle_producto = document.querySelector('.dettalle_producto');

//functions

console.log(dettalle_producto);

loadEventListenrs();

function loadEventListenrs(){
    allContainerCart.addEventListener('click', addProduct);
}

function addProduct(e){
    console.log(e.target);
}
