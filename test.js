

let searchForm = document.querySelector('#search-js');
let searchbtn = document.querySelector('#search-btn');
let btn = document.querySelector('.btn-up');
searchbtn.onclick = function () {
  
    searchForm.classList.toggle("active");
}

window.onscroll = function name(params) {
    if (scrollY <= 1300) {
        btn.classList.add('active');
    }
    else{
        btn.classList.remove('active');
    }

    btn.onclick = function name(params) {
        scroll(0,0);
    }
}

