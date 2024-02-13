const modal1 = document.getElementById('modal1');
const target1 = document.getElementById('targeted_spec1');



const editButtons1 = document.querySelectorAll('.edit-btn1');


const closeModalBtn1 = document.getElementById('closeModalBtn1');



function openModal() {
    modal1.classList.remove('hidden');
    target1.value
}


function closeModal() {
    modal1.classList.add('hidden');
}


editButtons1.forEach(button => {
    button.addEventListener('click',function(){
        openModal();
        
        document.querySelector('#targeted_spec1').value = this.value

    });
});


closeModalBtn1.addEventListener('click', closeModal);
