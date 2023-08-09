const bigImg = document.querySelector(".product-content-left-big-img img")
const smallImg = document.querySelectorAll(".product-content-left-small-img img")

smallImg.forEach(function(imgItem, X) {
    imgItem.addEventListener("click", function() {
        bigImg.src = imgItem.src
    })
})

const baoquan = document.querySelector(".baoquan")
const chitiet = document.querySelector(".chitiet")
console.log(baoquan)

if(baoquan) {
    baoquan.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "none"
        document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "block"
    })
}

if(chitiet) {
    baoquan.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "block"
        document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "none"
    })
}

const butt = document.querySelector(".product-content-right-bottom-top")

if(butt) {
    butt.addEventListener("click", function() {
        document.querySelector(".product-content-right-bottom-content-big").classList.toggle("activeB")
    })
}