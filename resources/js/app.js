import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const deleteButtons = document.querySelectorAll('.btn-delete');
if (deleteButtons.length > 0) {
    deleteButtons.forEach((btn) => {
        btn.addEventListener("click", function (event){
            event.preventDefault();
            const comicTitle = btn.getAttribute('data-comic-title');
            const deleteModal =  new bootstrap.Modal(document.getElementById('delete-modal'))
            document.getElementById('comic-title').innerText = comicTitle;
            deleteModal.show();
            document.getElementById('action-delete').addEventListener("click", function(){
            btn.parentElement.submit();    
            })
        })
    })
}