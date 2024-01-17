import { produt_images } from "./export/produt_images.js";
import { electric } from "./export/elctric.js";

let recent = document.getElementById('recent_serch');



function addlist(e) {
    // e.preventDefault();
    var input = document.getElementById("input12").value;
    var heading = document.createElement("h5");
    //   heading.classList.add(recent_serch);
    heading.innerHTML = `  <div class="recent_list">
         <i class="fa-solid fa-magnifying-glass " ></i><h5>${input}</h5>
         </div>`
    recent.appendChild(heading);
}



// produtfetures
let produt = document.querySelector(".list");
let produtHtml = "";
produt_images.forEach(el => {
    produtHtml += ` <div class="listitem" >
        <a href="${el.link}">
            <img src="${el.img}" alt="" class"imges">
            <p>${el.name}</p>
        </a>
    </div>`
});
produt.innerHTML = produtHtml;



let add = document.querySelector('.items');
let addHtml = " ";
electric.forEach(el => {
    addHtml += `
    <div>
    <a href="${el.link}" class="item">  
    <div class="elec_image">
                    <img src="${el.img}"
                        alt="">
                </div>
                <div class="imgeselec">
                    <p class="pn">${el.productName}</p>
                    <p class="dis">${el.discount}</p>
                    <p class="bd">${el.brand}</p>
                </div></a>
    </div>
    `
    add.innerHTML = addHtml;
})