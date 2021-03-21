const getItem = document.getElementById('radio1');
const getCoord = document.getElementById('radio2');
const favoriteItem = document.getElementById('favoriteItem');
const favoriteCoord = document.getElementById('favoriteCoord');


getItem.onclick = function(){
    favoriteItem.classList.add('displayFlex')
    favoriteCoord.classList.remove('displayFlex')
    favoriteItem.classList.remove('displayNone')
}

getCoord.onclick = function(){
    favoriteItem.classList.remove('displayFlex')
    favoriteItem.classList.add('displayNone')
    favoriteCoord.classList.add('displayFlex')
}