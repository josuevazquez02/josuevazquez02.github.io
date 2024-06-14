const btnCart = document.querySelector('.container-cart-icon');
const containercartproducts = document.querySelector('.container-cart-products');
const rowproduct = document.querySelector('.row-product');
const cartinfo = document.querySelector('.cart-product');
const productlist = document.querySelector('.container-item');
const valortotal = document.querySelector('.pagar');
const countproduct = document.querySelector('#contador-productos');


let allproducts = [];

btnCart.addEventListener('click', () => {
    containercartproducts.classList.toggle('hidden-cart')
})


productlist.addEventListener('click', e => {
    if (e.target.classList.contains('btn-add-cart')) {
        const product = e.target.parentElement
        const infoproduct = {
            quantity: 1,
            title: product.querySelector('h2').textContent,
            precio: product.querySelector('p').textContent
        }
        const exits = allproducts.some(
            product => product.title === infoproduct.title);

        if (exits) {
            const products = allproducts.map(product => {
                if (product.title === infoproduct.title) {
                    product.quantity++;
                    return product;
                } else {
                    return product;
                }
            });
            allproducts = [...products];
        } else {
            allproducts = [...allproducts, infoproduct]

        }

        showHTML();
    }

})

rowproduct.addEventListener('click', (e) => {
    if (e.target.classList.contains('icon-close')) {
        const product = e.target.parentElement
        const title = product.querySelector('p').textContent;

        allproducts = allproducts.filter(product =>
            product.title !== title);
        showHTML();
    } else {

    }
});
const showHTML = () => {

    /*if(!allproducts.length){
        containercartproducts.innerHTML = `
        <p class="cart-empty">El carrito está vacío</p>
        `;
    }else{
        
    }*/

    rowproduct.innerHTML = '';

    let total = 0;
    let totalofproducts = 0;

    allproducts.forEach(product => {
        const containerproduct = document.createElement('div')
        containerproduct.classList.add('cart-product')
        containerproduct.innerHTML = `
        <div class="info-cart-product">
            <span class="cantidad-producto-carrito">${product.quantity}</span>
            <p class="titulo-producto-carrito">${product.title}</p>
            <span class="precio-producto-carrito">${product.precio}</span>
            </div>
                        <img class="icon-close" src="assets/images/cancel.png" alt="">
                    </div>
            `;
        rowproduct.append(containerproduct);

        total = total + (parseInt(product.quantity) * parseInt(product.precio.slice(1)));
        totalofproducts = totalofproducts + product.quantity;
    });
    valortotal.innerText = `$${total}`
    countproduct.innerText = totalofproducts;
};

/*----------------------------------agregar productos----------------------------------*/
document.getElementById("btn-tienda").addEventListener("click", tienda);
document.getElementById("btn-agregar-productos").addEventListener("click", agregar);
document.getElementById("btn-carrito").addEventListener("click", carrito)
document.getElementById("btn-graficas").addEventListener("click", graficas);

/*Variables*/
var panel_tienda = document.querySelector(".hidden-main-content");
var panel_agregar_productos = document.querySelector(".hidden-contenedor-agregar-productos");
var panel_carrito = document.querySelector(".hidden-contenedor-carrito");
var panel_graficas = document.querySelector(".hidden-contenedor-graficas");
var PDF = document.querySelector(".generarPDF");

/*Variables*/

function tienda(){
    panel_tienda.style.display = "block";
    panel_agregar_productos.style.display = "none";
    panel_carrito.style.display = "none";
    panel_graficas.style.display = "none";
}

function agregar(){
    panel_tienda.style.display = "none";
    panel_agregar_productos.style.display = "block";
    panel_carrito.style.display = "none";
    panel_graficas.style.display = "none";
}

function carrito(){
    panel_carrito.style.display = "block";
    panel_tienda.style.display = "none";
    panel_agregar_productos.style.display = "none";
    panel_graficas.style.display = "none";
}

function graficas(){
    panel_graficas.style.display = "block";
    panel_carrito.style.display = "none";
    panel_tienda.style.display = "none";
    panel_agregar_productos.style.display = "none";
}

/*----------------------------------agregar productos----------------------------------*/


function generatePDF(){
    var pdfObject = jsPDFInvoiceTemplate.default(props); 
                    console.log("Object created:", pdfObject);  
}


var props = {
    
    invoice: {
        // Otras configuraciones de la factura...

        table: allproducts.map((product, index) => ([
            index + 1,
            product.title,
            "", // Descripción del producto (en este caso, no se proporciona)
            product.precio,
            product.quantity,
            "", // Unidad (en este caso, no se proporciona)
            parseInt(product.precio.slice(1)) * product.quantity // Total
        ])),
    },

    outputType: jsPDFInvoiceTemplate.OutputType.Save,
    returnJsPDFDocObject: true,
    fileName: "PDF",
    orientationLandscape: false,
    compress: true,
    stamp: {
        inAllPages: true, //by default = false, just in the last page
        src: "https://raw.githubusercontent.com/edisonneza/jspdf-invoice-template/demo/images/qr_code.jpg",
        type: 'JPG', //optional, when src= data:uri (nodejs case)
        width: 20, //aspect ratio = width/height
        height: 20,
        margin: {
            top: 0, //negative or positive num, from the current position
            left: 0 //negative or positive num, from the current position
        }
    },
    business: {
        name: "Venta de Electronicos",
        address: "TESOEM",
        phone: "(+52)",
        email: "email@example.com",
        email_1: "info@example.al",
        website: "www.example.al",
    },
    contact: {
        name: "Vazquez Bautista Josue",
    },
    invoice: {
       
        headerBorder: false,
        tableBodyBorder: false,
        header: [
          {
            title: "#", 
            style: { 
              width: 10 
            } 
          }, 
          { 
            title: "Producto",
            style: {
              width: 30
            } 
          }, 
          { 
            title: "Description",
            style: {
              width: 80
            } 
          }, 
          { title: "Precio"},
          { title: "Cantidad"},
          { title: "Marca"},
          { title: "Subtotal"}
        ],




        
        table: Array.from(Array(1), (item, index)=>([
            index + 1,
            "Huawei Band 8",
            "Nueva ",
            1600,
            2,
            "Huawei",
            1600
        ])),
        
        additionalRows: [{
            col1: 'product.title',
            col2: '145,250.50',
            col3: 'ALL',
            style: {
                fontSize: 14 //optional, default 12
            }
        },
        {
            col1: 'VAT:',
            col2: '20',
            col3: '%',
            style: {
                fontSize: 10 //optional, default 12
            }
        },
        {
            col1: 'SubTotal:',
            col2: '116,199.90',
            col3: 'ALL',
            style: {
                fontSize: 10 //optional, default 12
            }
        }],
        invDescLabel: "Total",
        invDesc: "1200$",
    },
    footer: {
        text: "Pagina para la venta de laptops",
    },
    pageEnable: true,
    pageLabel: "Page ",
};



