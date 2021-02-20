function toggleMenu(){

    const burgerToggle = document.querySelector('.toggle');
    burgerToggle.classList.toggle('active');

    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('active')
}

function toggleContent(id){
            
    var popup = document.getElementById('popup' + id);
    popup.classList.add("dis-block");
    
};
function toggleReset(id) {
    var popup = document.getElementById('popup' + id);
    popup.classList.remove('dis-block')
    popup.classList.add("displayIt");
}