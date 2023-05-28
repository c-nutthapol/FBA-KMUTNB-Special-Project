import './bootstrap';
import { Modal } from 'flowbite';


Livewire.on('close_modal', element => {
    $(`#${element}`).find(`[data-modal-hide='${element}']`).trigger("click");
})

Livewire.on('alert', e => {
    Swal.fire({
        position: 'bottom-end',
        icon: e.status,
        title: e.title,
        text: e.text,
        showConfirmButton: false,
        timer: 3000,
        toast: true,
    })
});
Livewire.on("redirect", url => {
    setTimeout(function () {
        window.location = url;
    }, 1500);
});
