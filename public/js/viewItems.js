const bottomForm = document.getElementById('bottomBtnPosition');
const searchBtn = document.getElementById('searchItemsBtn');

searchBtn.onclick = function(){
    bottomForm.classList.toggle('displayBlock')
}